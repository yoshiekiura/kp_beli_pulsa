<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
    
        $post = $_POST;
        
        if(!empty($post)) {
            $data 	= @$post['data'];
                foreach($data->data as $c) {
                    $pulsa_code       = $c->code;
                    $no_telpon        = $c->hp;
                    
                    DB::table('transactions')->where('pulsa_code',$pulsa_code)
                    ->where('no_telpon',$no_telpon)
                    ->update([  'status_pembayaran' => 5,
                        'status_pengisian' => 5,
                        'status_transaksi' =>5 ]);
                }
            } 
        }
    
    }

