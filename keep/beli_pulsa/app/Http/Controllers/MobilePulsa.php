<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MobilePulsa extends Controller
{
    public function pulsa(Request $request){

        $pulsa_code = $request-> input('pulsa_code');
        $no_telpon = $request-> input('no_telpon');

        $username   = "085706579632";
        $apiKey   = "6135e4a3701bdd7b";
        $ref_id  = uniqid('');
        // $code = 'xld25000';
        $signature  = md5($username.$apiKey.$ref_id);

        $json = '{
                "commands"    : "topup",
                "username"    : "'.$username.'",
                "ref_id"      : "'.$ref_id.'",
                "hp"          : "'.$no_telpon.'",
                "pulsa_code"  : "'.$pulsa_code.'",
                "sign"        : "'.$signature.'"
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
        $hasil = json_decode($data);
        if(!empty($hasil)){
            DB::table('transactions')->where('pulsa_code',$pulsa_code)
            ->where('no_telpon',$no_telpon)
            ->update([  'status_pembayaran' => 1,
                        'status_pengisian' => 1,
                        'status_transaksi' =>1 ]);
            return redirect('Admin/TransaksiPembelian');
        }
        
    }

    public function terima_respon(){

        $data = file_get_contents('php://input');
        $hasil = json_decode($data);
        $pulsa_code       = $hasil->data->code;
        $no_telpon        = $hasil->data->hp;
        if($hasil->data->message != 'SUCCESS'){

            DB::table('transactions')->where('pulsa_code',$pulsa_code)
            ->where('no_telpon',$no_telpon)
            ->update([  'status_pembayaran' => 3,
                        'status_pengisian' => 3,
                        'status_transaksi' => 3 ]); 
        }else{

            DB::table('transactions')->where('pulsa_code',$pulsa_code)
            ->where('no_telpon',$no_telpon)
            ->update([  'status_pembayaran' => 2,
                        'status_pengisian' => 2,
                        'status_transaksi' => 2 ]);
        } 
        
        }

        public function belipulsacoba(){
            $username   = "085706579632";
            $apiKey   = "6135e4a3701bdd7b";
            $ref_id  = uniqid('');
            // $code = 'xld25000';
            $signature  = md5($username.$apiKey.$ref_id);

            $json = '{
                    "commands"    : "topup",
                    "username"    : "'.$username.'",
                    "ref_id"      : "'.$ref_id.'",
                    "hp"          : "081245367367",
                    "pulsa_code"  : "hsmart10000",
                    "sign"        : "'.$signature.'"
                    }';


            $url = "https://testprepaid.mobilepulsa.net/v1/legacy/index";

            $ch  = curl_init();
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $oke = curl_exec($ch);
            curl_close($ch);
        }

        public function tambahharga(){
            $username   = "085706579632";
            $apiKey   = "6135e4a3701bdd7b";
            $signature  = md5($username.$apiKey.'pl');

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

            print_r($data);
            // print_r($data);
            // $x = json_decode($data);
            // die;
            
            // foreach($x->data as $mydata){

            //     // echo $mydata->pulsa_price."\n";

            //     DB::table('price_lists')->insert([
            //         'pulsa_code' => $mydata->pulsa_code,
            //         'pulsa_op' => $mydata->pulsa_op,
            //         'pulsa_nominal' => $mydata->pulsa_nominal,
            //         'pulsa_price' => $mydata->pulsa_price +100,
            //         'pulsa_type' => $mydata->pulsa_type,
            //         'masaaktif' => $mydata->masaaktif,
            //         'status' => $mydata->status
            //     ]);  
                
            // }
        }

        public function tambahbank(){
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
                }
            }
        }
    
    }

