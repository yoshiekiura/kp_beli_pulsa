<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class MobilePulsaController extends Controller
{
    public function payment(){

        $post = $_POST;
    
        if(!empty($post)) {
            $method = @$post['method'];
            $data 	= @$post['data'];
            if($method=='update_laporan_mutasi') {
                foreach($data as $key => $c) {
                    $jenis_mutasi     = $c['jenis_mutasi'];
                    $nominal          = $c['nominal'];
                    $bank             = $c['bank'];
                    $no_rekening      = $c['no_rekening'];
                    $atas_nama        = $c['atas_nama'];
                    $keterangan       = $c['keterangan'];
                    $waktu_cek_mutasi = $c['waktu_cek_mutasi'];
                    $waktu_mutasi     = $c['waktu_mutasi'];
                    $saldo            = $c['saldo'];
                    $nama_bank        = 'BCA';
                     
                    
                    if ($jenis_mutasi=='CR') {
                        DB::table('balances')->insert([
                            'bank' => $bank,
                            'date' => $waktu_cek_mutasi,
                            'type' => $jenis_mutasi,
                            'note' => $keterangan,
                            'amount' => $nominal,
                            'balance' => $saldo
                        ]);

                        DB::table('transactions')->where('harga_total',$nominal)
                        ->where('status_pembayaran',0)
                        ->update(['status_pembayaran' => 1]); 

                        $ambil = DB::table('transactions')->where('harga_total',$nominal)->where('status_pembayaran',1)->first();
                        if($ambil){
                            $username   = "085706579632";
                            // $apiKey   = "7475e4a3d01dcc59747"; //ori
                            $apiKey   = "6135e4a3701bdd7b"; //dev
                            $ref_id  = uniqid('');
                            // $code = 'xld25000';
                            $signature  = md5($username.$apiKey.$ref_id);

                            $json = '{
                                    "commands"    : "topup",
                                    "username"    : "'.$username.'",
                                    "ref_id"      : "'.$ref_id.'",
                                    "hp"          : "'.$ambil->no_telpon.'",
                                    "pulsa_code"  : "'.$ambil->pulsa_code.'",
                                    "sign"        : "'.$signature.'"
                                    }';


                            // $url = "https://api.mobilepulsa.net/v1/legacy/index"; //ori
                            $url = "https://testprepaid.mobilepulsa.net/v1/legacy/index"; //dev
                            

                            $ch  = curl_init();
                            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
                            curl_setopt($ch, CURLOPT_URL, $url);
                            curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
                            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                            $oke = curl_exec($ch);
                            curl_close($ch);
                            // $hasil = json_decode($data);
                        }
                    }
                }
            } 
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
            ->update([  'status_pengisian' => 2]); 
        }else{

            DB::table('transactions')->where('pulsa_code',$pulsa_code)
            ->where('no_telpon',$no_telpon)
            ->where('status_pembayaran',1)
            ->where('status_transaksi',0)
            ->update([  'status_pengisian' => 1,
                        'status_transaksi' => 1 ]);
        } 
        
    }
}
