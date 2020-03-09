<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class MobilePulsaController extends Controller
{
    public function tambahharga(){
            $username   = "085706579632";
            $apiKey   = "6135e4a3701bdd7b";
            

            $json = '{
                        "commands" : "pricelist",
                        "username" : "085706579632",
                        "sign"     : "ef00f513848103219022e8d19decfca1",
                        "status"   : "all"
                    }';

            $url = "https://testprepaid.mobilepulsa.net/v1/legacy/index";

            $ch  = curl_init();
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $data = curl_exec($ch);
            curl_close($ch);

            // print_r($data);

            $x = json_decode($data);
            
            foreach($x->data as $mydata){

                // echo $mydata->pulsa_price;

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
    }

    public function tambahBank(){

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
                    Session::flash('alert', "Berhasil Menambahkan !");
                    return redirect('/admin-dashboard');
                }
            }
        }
    }

}
