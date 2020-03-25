<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index(){
        $bank = DB::table('banks')->count();
        $customer = DB::table('users')->where('role','customer')->count();
        $harga = DB::table('price_lists')->count();
        return view('pages/index',['bank'=>$bank,'customer'=>$customer,'harga'=>$harga]);
    }

    public function transaksiPembelian(){
        $hasil = DB::table('transactions')
        ->join('users','users.id','=', 'transactions.id_user')
        ->join('price_lists','price_lists.pulsa_code','=', 'transactions.pulsa_code')
        ->join('banks','banks.id_bank','=', 'transactions.id_bank')
        ->orderBy('transactions.id','ASC')
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

}
