<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use PDF;

class AdminController extends Controller
{
    public function index(){
        $bank = DB::table('banks')->count();
        $customer = DB::table('users')->where('role','customer')->count();
        $harga = DB::table('price_lists')->count();

        $rating5 = DB::table('testimonials')->where('rating',5)->count();
        $rating4 = DB::table('testimonials')->where('rating',4)->count();
        $rating3 = DB::table('testimonials')->where('rating',3)->count();
        $rating2 = DB::table('testimonials')->where('rating',2)->count();
        $rating1 = DB::table('testimonials')->where('rating',1)->count();

        $pendapatan = DB::table('transactions')->where('status_pembayaran',1)->where('status_pengisian',1)->where('status_transaksi',1)->sum('harga_total');

        $pembeli = DB::table('transactions')->where('status_pembayaran',1)->where('status_pengisian',1)->where('status_transaksi',1)->count();

        // $r5 = $rating5 * 5;
        // $r4 = $rating4 * 4;
        // $r3 = $rating3 * 3;
        // $r2 = $rating2 * 2;
        // $r1 = $rating1 * 1;

        // $ditambah = $r1 + $r2 + $r3 + $r4 + $r5;

        // $banyaktestimoni = DB::table('testimonials')->count();

        // (float)$rata2rating = null;

        // if((float)$ditambah + (float)$banyaktestimoni == 0 ){
        //     (float)$rata2rating = 0.0;
        // }else{
        //     (float)$rata2rating = (float)$ditambah / (float)$banyaktestimoni;
        // }

        $rata2 = DB::table('testimonials')->avg('rating');
        $rata2rating = number_format($rata2,1);



        // var_dump($rata2rating);die;




        return view('pages/index',['bank'=>$bank,'customer'=>$customer,'harga'=>$harga,'rating5' => $rating5,'rating4'=>$rating4,'rating3'=>$rating3,'rating2'=>$rating2,'rating1'=>$rating1,'pendapatan'=>$pendapatan,'pembeli'=>$pembeli,'rataratarating'=>$rata2rating]);
    }

    public function transaksiPembelian(){
        $hasil = DB::table('transactions')
        // ->join('users','users.id','=', 'transactions.id_user')
        ->join('price_lists','price_lists.pulsa_code','=', 'transactions.pulsa_code')
        ->join('banks','banks.id_bank','=', 'transactions.id_bank')
        ->orderBy('transactions.id','DESC')
        ->get();

        return view('/pages/purchase',['data' => $hasil]);
    }

    public function daftarPelanggan(){
        $customer = DB::table('customers')
        ->join('users','users.id', '=', 'customers.id_user')
        ->where('users.role','customer')
        ->get();
        return view('/pages/list_customer',['customer'=>$customer]);
    }

    public function komplain(){
        // $komplain = DB::table('complaints')
        // ->join('transactions','transactions.id', '=', 'complaints.id_transaksi')
        // ->get();
        $komplain = DB::table('complaints')
        ->where('status',0)
        ->get();
        return view('/pages/complain',['komplain' => $komplain]);
    }

    public function updateharga(){
        DB::table('price_lists')->delete();

        $username   = "085706579632";
        // $apiKey   = "7475e4a3d01dcc59747"; //ori
        $apiKey   = "6135e4a3701bdd7b"; //dev
        $signature  = md5($username.$apiKey.'pl');

        $json = '{
                    "commands" : "pricelist",
                    "username" : "085706579632",
                    "sign"     : "' . $signature . '",
                    "status"   : "all"
                }';

        // $url = "https://api.mobilepulsa.net/v1/legacy/index"; //ori
        $url = "https://testprepaid.mobilepulsa.net/v1/legacy/index"; //dev

        $ch  = curl_init();
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $data = curl_exec($ch);
        curl_close($ch);

        // var_dump($data);
        $x = json_decode($data);
        // die;
        // var_dump($data); die;

        foreach($x->data as $mydata){

            // echo $mydata->pulsa_price."\n";

            DB::table('price_lists')->insert([
                'pulsa_code' => $mydata->pulsa_code,
                'pulsa_op' => $mydata->pulsa_op,
                'pulsa_nominal' => $mydata->pulsa_nominal,
                'pulsa_price' => $mydata->pulsa_price +100,
                'pulsa_type' => $mydata->pulsa_type,
                'masaaktif' => $mydata->masaaktif,
                'status' => $mydata->status
            ]);

        }
        Session::flash('alert', "Berhasil Mengupdate !");
        return redirect('/dashboard');
    }

    public function updatebank(){
        DB::table('banks')->delete();

        $base_url	= "https://flopipay.com/api.php"; // Server API
        $url_server = $base_url . "/rekening"; // URL API
        $data = array(
            "key"	=> "5b916684d9bb389a03a331db262cc31d", // Key API
        );

        $ch = curl_init();
        $param_curl = array(
            CURLOPT_URL             => $url_server,
            CURLOPT_POST            => true,
            CURLOPT_POSTFIELDS      => http_build_query($data),
            CURLOPT_SSL_VERIFYHOST  => 0,
            CURLOPT_SSL_VERIFYPEER  => 0,
            CURLOPT_RETURNTRANSFER  => true,
            CURLOPT_HEADER          => false
        );
        curl_setopt_array($ch, $param_curl);
        $result = curl_exec($ch);
        curl_close($ch);

        // var_dump($result);
        // die;

        if(!empty($result))
        {
            $respon = json_decode($result);
            // var_dump($respon);
            if($respon->status == '200') // Jika Sukses, Kode 200 untuk sukses, 201 untuk gagal.
            {
                foreach($respon->data as $key => $c)
                {
                    $nama 		 = $c->nama;
                    $no_rekening = $c->no_rekening;
                    $atas_nama   = $c->atas_nama;
                    $bank 		 = $c->bank;

                    DB::table('banks')->insert([
                        'nama' => $nama,
                        'no_rekening' => $no_rekening,
                        'atas_nama' => $atas_nama,
                        'bank' => $bank
                    ]);

                }
                Session::flash('alert', "Berhasil Mengupdate !");
                return redirect('/dashboard');
            }
        }
    }

    public function tampilLaporan(){
        $cari = DB::table('transactions')
        ->join('price_lists','transactions.pulsa_code','=','price_lists.pulsa_code')
        ->where('status_pembayaran',1)
        ->where('status_pengisian',1)
        ->where('status_transaksi',1)->get();

        $total = DB::table('transactions')
        ->where('status_pembayaran',1)
        ->where('status_pengisian',1)
        ->where('status_transaksi',1)->sum('harga_total');

        $bulan = "00";
        $tahun = "0000";

        $tampil = "Keseluruhan";
        return view('/pages/report',['cari' => $cari,'total' => $total,'tampil' => $tampil,'bln'=>$bulan,'thn'=>$tahun]);
    }

    public function getLaporan(Request $request){
        $bulan = $request->input('bulan');
        $tahun = $request->input('tahun');

        $cari = DB::table('transactions')
        ->join('price_lists','transactions.pulsa_code','=','price_lists.pulsa_code')
        ->whereMonth('tanggal_beli',$bulan)
        ->whereYear('tanggal_beli',$tahun)
        ->where('status_pembayaran',1)
        ->where('status_pengisian',1)
        ->where('status_transaksi',1)
        ->get();

        $total = DB::table('transactions')
        ->whereMonth('tanggal_beli',$bulan)
        ->whereYear('tanggal_beli',$tahun)
        ->where('status_pembayaran',1)
        ->where('status_pengisian',1)
        ->where('status_transaksi',1)->sum('harga_total');

        $tampil = "Bulan ".$bulan. " Tahun ".$tahun;
        return view('/pages/report',['cari' => $cari,'total' => $total,'tampil' => $tampil,'bln'=>$bulan,'thn'=>$tahun]);
    }

    public function daftarHarga(){
        $semua = DB::table('price_lists')
        ->where('pulsa_type', 'data')
        ->orWhere('pulsa_type', 'pulsa')
        ->get();
        $data = DB::table('price_lists')->where('pulsa_type', 'data')->get();
        $pulsa = DB::table('price_lists')->where('pulsa_type', 'pulsa')->get();

        return view('/pages/price_list',['semua'=>$semua,'data'=>$data,'pulsa'=>$pulsa]);
    }
    public function daftarBank(){
        $bank = DB::table('banks')->get();

        return view('/pages/bank',compact('bank'));
    }

    public function cetakPdf($tampil,$bln,$thn,$total){

        // $car = array($cari);

        if($bln == "00" OR $thn == "0000"){
            $cari = DB::table('transactions')
            ->join('price_lists','transactions.pulsa_code','=','price_lists.pulsa_code')
            ->where('status_pembayaran',1)
            ->where('status_pengisian',1)
            ->where('status_transaksi',1)->get();
        }else{
            $cari = DB::table('transactions')
            ->join('price_lists','transactions.pulsa_code','=','price_lists.pulsa_code')
            ->whereMonth('tanggal_beli',$bln)
            ->whereYear('tanggal_beli',$thn)
            ->where('status_pembayaran',1)
            ->where('status_pengisian',1)
            ->where('status_transaksi',1)
            ->get();
        }

        $pdf = PDF::loadview('cetak_pdf',['tampil'=>$tampil,'cari'=>$cari,'total'=>$total]);
    	return $pdf->download('laporan-bulanan.pdf');

    }

}
