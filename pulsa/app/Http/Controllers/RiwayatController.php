<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;

use PDF;

class RiwayatController extends Controller
{
    public function cari(Request $request){

        // $cari = "";
        $cari = $request->input('nomor');
        // var_dump($cari); die;
        $hasil = DB::table('transactions')
        // ->join('users','users.id','=', 'transactions.id_user')
        ->join('price_lists','price_lists.pulsa_code','=', 'transactions.pulsa_code')
        // ->join('banks','banks.id','=', 'transactions.id_bank')
        ->where('transactions.no_telpon',$cari)
        ->get();

        return view('forms/cek_transaksi',['data' => $hasil]);
    }

    public function no_rahasia(Request $request){

        $cari = $request->input('nomor');
        // var_dump($cari); die;
        $hasil = Crypt::encrypt($cari);

        $sekarang = Carbon::now()->toDateTimeString();

        $noTelp_cek = DB::table('transactions')
        ->where('no_telpon',$cari)
        ->where('status_pembayaran',0)
        ->where('status_pengisian',0)
        ->where('status_transaksi',0)
        ->orderBy('id','DESC')
        ->get();

        if($noTelp_cek->count() > 0 ){

            if($noTelp_cek[0]->status_pembayaran == 0 AND $sekarang >= $noTelp_cek[0]->expired){

                DB::table('transactions')
                ->where('no_telpon',$cari)
                ->where('status_pembayaran',0)
                ->where('status_pengisian',0)
                ->where('status_transaksi',0)
                ->update([
                    'status_pembayaran' => 2,
                    'status_pengisian' => 2,
                    'status_transaksi' => 2,
                ]);

                return redirect('/cek_transaksi/nomor-telp/'.$hasil);
            }else{
                return redirect('/cek_transaksi/nomor-telp/'.$hasil);
            }
        }else{

            return redirect('/cek_transaksi/nomor-telp/'.$hasil);
        }

    }

    public function hasilRiwayatLuar($enkripsi){

        $decrypt = Crypt::decrypt($enkripsi);
        // var_dump($decrypt);die;
        $hasil = DB::table('transactions')
        // ->join('users','users.id','=', 'transactions.id_user')
        ->join('price_lists','price_lists.pulsa_code','=', 'transactions.pulsa_code')
        ->join('banks','banks.id_bank','=', 'transactions.id_bank')
        ->where('transactions.no_telpon',$decrypt)
        ->orderBy('id','DESC')
        ->get();

        // var_dump($hasil); die;
        // $id = DB::table('transactions')
        // // ->join('users','users.id','=', 'transactions.id_user')
        // ->join('price_lists','price_lists.pulsa_code','=', 'transactions.pulsa_code')
        // // ->join('banks','banks.id','=', 'transactions.id_bank')
        // ->where('transactions.no_telpon',$decrypt)
        // ->get();

        // var_dump($hasil);die;

        if($hasil->count()>0){
            // $hasilid = Crypt::encrypt($id[0]->id);
            // var_dump($id[0]->id); die;
            return view('/forms/cek_transaksi',['data' => $hasil]);
        }else{
            return view('/forms/cek_transaksi',['data' => $hasil]);
        }

        // var_dump($hasilid); die;

    }

    public function hasilRiwayat($id){

        $var = base64_decode($id);
        // var_dump($var); die;

        $data = Crypt::encrypt($var);

        // $sekarang = Carbon::now()->toDateTimeString();
        // // var_dump($sekarang); die;

        // $cek = DB::table('transactions')
        // ->select('transactions.expired')
        // ->join('banks','banks.id_bank','=', 'transactions.id_bank')
        // ->join('price_lists','price_lists.pulsa_code','=', 'transactions.pulsa_code')
        // ->where('transactions.id',$var)
        // ->first();

        // // var_dump($cek->expired); die;

        // if($sekarang >= $cek->expired){

        //     DB::table('transactions')
        //     ->where('transactions.id',$var)
        //     // var_dump($anjay); die;
        //     ->update([
        //         'status_pembayaran' => 2
        //     ]);

        //     return redirect('/rincian-luar/'.$data);

        // }else{

        //     return redirect('/rincian-luar/'.$data);

        // }

        return redirect('/rincian-luar/'.$data);
        // // var_dump($hasil); die;
        // // var_dump($hasil); die;

    }

    public function rahasia($data){
        $encrip = Crypt::decrypt($data);

        $hasil = DB::table('transactions')
        ->join('banks','banks.id_bank','=', 'transactions.id_bank')
        ->join('price_lists','price_lists.pulsa_code','=', 'transactions.pulsa_code')
        ->where('transactions.id',$encrip)
        ->first();

        return view('/pages/detail_transaction',['hasil' => $hasil, 'data' => $data]);


    }



    public function tampilRiwayat(){

        $ambilId = Auth()->user()->id;

        $sekarang = Carbon::now()->toDateTimeString();

        $hasilsemua = DB::table('transactions')
        ->where('id_user',$ambilId)
        ->orderBy('id','DESC')
        ->get();

        $hasil = DB::table('transactions')
        ->where('id_user',$ambilId)
        ->where('status_pembayaran',0)
        ->where('status_pengisian',0)
        ->where('status_transaksi',0)
        ->orderBy('id','DESC')
        ->get();

        // var_dump($hasil[0]->expired); die;
        if($hasil->count() > 0){

            if($hasil[0]->status_pembayaran == 0 AND $sekarang >= $hasil[0]->expired){

                DB::table('transactions')
                ->where('id_user',$ambilId)
                ->where('status_pembayaran',0)
                ->where('status_pengisian',0)
                ->where('status_transaksi',0)
                ->update([
                    'status_pembayaran' => 2,
                    'status_pengisian' => 2,
                    'status_transaksi' => 2,
                ]);

                // return view('/pages/history_transaction_customer',['data' => $hasilsemua]);
                return redirect('/riwayat-transaksi-user/'.$ambilId);
            }else{
                return redirect('/riwayat-transaksi-user/'.$ambilId);
            }
        }else{
            return redirect('/riwayat-transaksi-user/'.$ambilId);
        }

    }

    public function tampilRiwayatUser(){

        $ambilId = Auth()->user()->id;

        $hasilsemua = DB::table('transactions')
        ->where('id_user',$ambilId)
        ->orderBy('id','DESC')
        ->get();

        return view('/pages/history_transaction_customer',['data' => $hasilsemua]);
    }

    public function tampilRincian_Customer($id){

        $var = base64_decode($id);
        $data = Crypt::encrypt($var);

        return redirect('/rincian-customer/'.$data);

    }

    public function rincian_customerDalam($data){

        // $ambilId1 = Crypt::encrypt(Auth()->user()->id);

        $decrypt = Crypt::decrypt($data);

        $hasil = DB::table('transactions')
        ->join('banks','banks.id_bank','=', 'transactions.id_bank')
        ->join('price_lists','price_lists.pulsa_code','=', 'transactions.pulsa_code')
        ->where('transactions.id',$decrypt)
        ->first();

        // var_dump($hasil); die;

        // $ambilId = DB::table('transactions')
        // ->select('transactions.id')
        // ->where('transactions.id',$decrypt)
        // ->join('banks','transactions.id_bank','=','banks.id_bank')
        // ->join('price_lists','transactions.pulsa_code','=','price_lists.pulsa_code')
        // ->first();
        // $hasilId = Crypt::encrypt($ambilId);

        return view('/pages/detail_transaction_customer',['hasil' => $hasil, 'data' => $data ]);
    }

    public function cetak_pdf($ambilId){

        $id = Crypt::decrypt($ambilId);
        // var_dump($id->id); die;
        $hasil = DB::table('transactions')->where('transactions.id',$id)
        ->join('banks','transactions.id_bank','=','banks.id_bank')
        ->join('price_lists','transactions.pulsa_code','=','price_lists.pulsa_code')
        ->first();
        // var_dump($hasil); die;

        $pdf = PDF::loadview('cetak_pdf',['hasil'=>$hasil]);
    	return $pdf->download('laporan-transaksi.pdf');
    }

}
