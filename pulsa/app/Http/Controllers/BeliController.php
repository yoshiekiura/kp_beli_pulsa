<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Transaction;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Crypt;

class BeliController extends Controller
{
    //
    public function beli(Request $request){
        $this->validate($request,[
            'pulsa_op' => 'required',
            'pulsa_nominal' => 'required',
            'nomor' => 'required|numeric|min:0',
            'bank' => 'required'
        ]);

        $kode  =    $request->  input('kode');
        $bank  =    $request->  input('bank');
        $telp  =    $request->  input('nomor');
        $harga =    $request->  input('harga');

        $sekarang = Carbon::now()->toDateTimeString();

        $noTelp_cek = DB::table('transactions')
        ->where('no_telpon',$telp)
        ->where('status_pembayaran',0)
        ->where('status_pengisian',0)
        ->where('status_transaksi',0)
        ->get();

        // var_dump($noTelp_cek[0]->expired);
        // var_dump($sekarang);
        // die;

        if($noTelp_cek->count() > 0 ){
            if($noTelp_cek[0]->status_pembayaran == 0 AND $sekarang <= $noTelp_cek[0]->expired ){
                return redirect('/#beli');
            }elseif($noTelp_cek[0]->status_pembayaran == 0 AND $sekarang >= $noTelp_cek[0]->expired){
                DB::table('transactions')
                ->where('no_telpon',$telp)
                ->where('status_pembayaran',0)
                ->where('status_pengisian',0)
                ->where('status_transaksi',0)
                ->update([
                    'status_pembayaran' => 2,
                    'status_pengisian' => 2,
                    'status_transaksi' => 2,
                ]);
                do{
                    $kode_unik = rand(100,250);
                    $cek = DB::table('transactions')
                    ->where('kode_unik',$kode_unik)
                    ->where('status_pembayaran', 0)
                    ->where('status_pengisian', 0)->count();
                    // var_dump($cek);die;
                }while($cek != 0);

                // $dekripsi = base64_decode($kode_unik);
                $harga_total = $harga + $kode_unik;
                $tanggal_beli = Carbon::now();
                $expired = date('Y-m-d H:i:s',strtotime('+3 hour',strtotime($tanggal_beli)));

                // var_dump($kode,$bank,$telp,$harga,$kode_unik,$harga_total,$tanggal_beli,$expired);
                $kirim = Transaction::create([
                'pulsa_code' => $kode,
                'id_bank' => $bank,
                'no_telpon' => $telp,
                'kode_unik' => $kode_unik,
                'harga_total' => $harga_total,
                'status_pembayaran' => 0,
                'status_pengisian' => 0,
                'status_transaksi' => 0,
                'tanggal_beli' => $tanggal_beli,
                'expired' => $expired
                ])->id;

                $enkripsi = Crypt::encrypt($kirim);

                return redirect('/rincian-transaksi/'.$enkripsi);
            }

        }else{

                do{
                    $kode_unik = rand(100,250);
                    $cek = DB::table('transactions')
                    ->where('kode_unik',$kode_unik)
                    ->where('status_pembayaran', 0)
                    ->where('status_pengisian', 0)->count();
                    // var_dump($cek);die;
                }while($cek != 0);

                // $dekripsi = base64_decode($kode_unik);
                $harga_total = $harga + $kode_unik;
                $tanggal_beli = Carbon::now();
                $expired = date('Y-m-d H:i:s',strtotime('+3 hour',strtotime($tanggal_beli)));

                // var_dump($kode,$bank,$telp,$harga,$kode_unik,$harga_total,$tanggal_beli,$expired);
                $kirim = Transaction::create([
                'pulsa_code' => $kode,
                'id_bank' => $bank,
                'no_telpon' => $telp,
                'kode_unik' => $kode_unik,
                'harga_total' => $harga_total,
                'status_pembayaran' => 0,
                'status_pengisian' => 0,
                'status_transaksi' => 0,
                'tanggal_beli' => $tanggal_beli,
                'expired' => $expired
                ])->id;

                $enkripsi = Crypt::encrypt($kirim);

                return redirect('/rincian-transaksi/'.$enkripsi);
            }
    }

    public function tampilBeli($enkripsi){
        $decrypt = Crypt::decrypt($enkripsi);
        // var_dump($decrypt);die;
        $hasil = DB::table('transactions')->where('transactions.id',$decrypt)
        ->join('banks','transactions.id_bank','=','banks.id_bank')
        ->join('price_lists','transactions.pulsa_code','=','price_lists.pulsa_code')
        ->first();

        // var_dump($hasil);die;

        // $ambilId = DB::table('transactions')
        // ->select('transactions.id')
        // ->where('transactions.id',$decrypt)
        // ->join('banks','transactions.id_bank','=','banks.id_bank')
        // ->join('price_lists','transactions.pulsa_code','=','price_lists.pulsa_code')
        // ->first();
        // $hasilId = Crypt::encrypt($ambilId);

        // var_dump($ambilId); die;

        return view('/pages/detail_transaction',['hasil' => $hasil,'data' => $enkripsi]);
    }

    public function beliCustomer(Request $request){

        $this->validate($request,[
            'pulsa_op' => 'required',
            'pulsa_nominal' => 'required',
            'nomor' => 'required|numeric|min:0',
            'bank' => 'required'
        ]);

        $kode  =    $request->  input('kode');
        $bank  =    $request->  input('bank');
        $telp  =    $request->  input('nomor');
        $harga =    $request->  input('harga');

        $sekarang = Carbon::now()->toDateTimeString();

        $noTelp_cek = DB::table('transactions')
        ->where('no_telpon',$telp)
        ->where('status_pembayaran',0)
        ->where('status_pengisian',0)
        ->where('status_transaksi',0)
        ->get();

        // var_dump($noTelp_cek[0]->expired);
        // var_dump($sekarang);
        // die;

        if($noTelp_cek->count() > 0 ){
            if($noTelp_cek[0]->status_pembayaran == 0 AND $sekarang <= $noTelp_cek[0]->expired ){
                return redirect('/beli');
            }elseif($noTelp_cek[0]->status_pembayaran == 0 AND $sekarang >= $noTelp_cek[0]->expired){
                DB::table('transactions')
                ->where('no_telpon',$telp)
                ->where('status_pembayaran',0)
                ->where('status_pengisian',0)
                ->where('status_transaksi',0)
                ->update([
                    'status_pembayaran' => 2,
                    'status_pengisian' => 2,
                    'status_transaksi' => 2,
                ]);
                do{
                    $kode_unik = rand(100,250);
                    $cek = DB::table('transactions')
                    ->where('kode_unik',$kode_unik)
                    ->where('status_pembayaran', 0)
                    ->where('status_pengisian', 0)->count();
                    // var_dump($cek);die;
                }while($cek != 0);

                // $dekripsi = base64_decode($kode_unik);
                $harga_total = $harga + $kode_unik;
                $tanggal_beli = Carbon::now();
                $expired = date('Y-m-d H:i:s',strtotime('+3 hour',strtotime($tanggal_beli)));
                $id_user = Auth()->user()->id;
                // var_dump($kode,$bank,$telp,$harga,$kode_unik,$harga_total,$tanggal_beli,$expired);
                $kirim = Transaction::create([
                'id_user' => $id_user,
                'pulsa_code' => $kode,
                'id_bank' => $bank,
                'no_telpon' => $telp,
                'kode_unik' => $kode_unik,
                'harga_total' => $harga_total,
                'status_pembayaran' => 0,
                'status_pengisian' => 0,
                'status_transaksi' => 0,
                'tanggal_beli' => $tanggal_beli,
                'expired' => $expired
                ])->id;

                $enkripsi = Crypt::encrypt($kirim);

                return redirect('/rincian-transaksi-customer/'.$enkripsi);
            }

        }else{

                do{
                    $kode_unik = rand(100,250);
                    $cek = DB::table('transactions')
                    ->where('kode_unik',$kode_unik)
                    ->where('status_pembayaran', 0)
                    ->where('status_pengisian', 0)->count();
                    // var_dump($cek);die;
                }while($cek != 0);

                // $dekripsi = base64_decode($kode_unik);
                $harga_total = $harga + $kode_unik;
                $tanggal_beli = Carbon::now();
                $expired = date('Y-m-d H:i:s',strtotime('+3 hour',strtotime($tanggal_beli)));
                $id_user = Auth()->user()->id;
                // var_dump($kode,$bank,$telp,$harga,$kode_unik,$harga_total,$tanggal_beli,$expired);
                $kirim = Transaction::create([
                'id_user' => $id_user,
                'pulsa_code' => $kode,
                'id_bank' => $bank,
                'no_telpon' => $telp,
                'kode_unik' => $kode_unik,
                'harga_total' => $harga_total,
                'status_pembayaran' => 0,
                'status_pengisian' => 0,
                'status_transaksi' => 0,
                'tanggal_beli' => $tanggal_beli,
                'expired' => $expired
                ])->id;

                $enkripsi = Crypt::encrypt($kirim);

                return redirect('/rincian-transaksi-customer/'.$enkripsi);
            }
    }

    public function tampilBeliCustomer($enkripsi){
        $ambilId1 = Crypt::encrypt(Auth()->user()->id);
        $decrypt = Crypt::decrypt($enkripsi);
        $hasil = DB::table('transactions')->where('transactions.id',$decrypt)
        ->join('banks','transactions.id_bank','=','banks.id_bank')
        ->join('price_lists','transactions.pulsa_code','=','price_lists.pulsa_code')
        ->first();

        // $ambilId = DB::table('transactions')
        // ->select('transactions.id')
        // ->where('transactions.id',$decrypt)
        // ->join('banks','transactions.id_bank','=','banks.id')
        // ->join('price_lists','transactions.pulsa_code','=','price_lists.pulsa_code')
        // ->first();
        // $hasilId = Crypt::encrypt($ambilId);
        // var_dump($hasil);
        // die;
        // return view('/pelanggan/pages/a',['hasil' => $hasil]);
        return view('/pages/detail_transaction_customer',['hasil' => $hasil,'data' => $enkripsi, 'id' => $ambilId1]);
    }

    public function komplain(Request $request){
        $this->validate($request,[
            'nama' => 'required|min:5',
            'no_telpon' => 'required|numeric|min:0',
            'id' => 'required',
            'pesan' => 'required'
        ]);

        $kode = $request->input('id');
        $id = Crypt::decrypt($kode);
        // var_dump($id);die;

        $nama = $request -> input('nama');
        $telp = $request -> input('no_telpon');
        $pesan = $request -> input('pesan');
        $waktu = Carbon::now();


        DB::table('complaints')->insert([
            'id_transaksi' => $id,
            'nama' => $nama,
            'no_telpon' => $telp,
            'pesan' => $pesan,
            'status' => 0,
            'waktu_komplain' => $waktu,

        ]);
        Session::flash('sukses','Komplain anda telah dikirim. silahkan menunggu perbaikan dari admin');
        return Redirect('/cek_transaksi');
    }
    public function komplainCustomer(Request $request){
        $this->validate($request,[
            'nama' => 'required|min:5',
            'no_telpon' => 'required|numeric|min:0',
            'id' => 'required',
            'pesan' => 'required'
        ]);

        $kode = $request->input('id');
        $id = Crypt::decrypt($kode);
        // var_dump($id);die;

        $nama = $request -> input('nama');
        $telp = $request -> input('no_telpon');
        $pesan = $request -> input('pesan');
        $waktu = Carbon::now();


        DB::table('complaints')->insert([
            'id_transaksi' => $id,
            'nama' => $nama,
            'no_telpon' => $telp,
            'pesan' => $pesan,
            'status' => 0,
            'waktu_komplain' => $waktu,

        ]);
        Session::flash('login','Komplain anda telah dikirim. silahkan menunggu perbaikan dari admin');
        return Redirect('/beli');
    }
}
