<?php

namespace App\Http\Controllers;


use App\Transaction;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use PDF;

class BeliController extends Controller
{
    //
    function beli(Request $request){

        $this->validate($request,[
            'pulsa_op' => 'required',
            'pulsa_nominal' => 'required',
            'nomor' => 'required|min:11|max:13',
            'bank' => 'required'
        ]);

        // $nama_produk  =    $request->  input('pulsa_type');
        // $nama_provider  =    $request->  input('pulsa_op');
        // $voucher  =    $request->  input('pulsa_nominal');
        $kode  =    $request->  input('kode');
        $bank  =    $request->  input('bank');
        $telp  =    $request->  input('nomor');
        $harga =    $request->  input('harga');
        $kode_unik = rand(100,500);
        // $dekripsi = base64_decode($kode_unik);
        $harga_total = $harga + $kode_unik;
        $tanggal_beli = Carbon::now();
        $expired = date('Y-m-d H:i:s',strtotime('+3 hour',strtotime($tanggal_beli)));
        // var_dump($sisiruit);
        // die;
        // ddd($kode);
        $kirim = Transaction::create([
                        // 'nama_produk' => $nama_produk,
                    //    'nama_provider' => $nama_provider,
                    //    'voucher' => $voucher,
                    'pulsa_code' => $kode,
                    'id_bank' => $bank,
                    'no_telpon' => $telp,
                    //    'harga' => $harga,
                    'kode_unik' => $kode_unik,
                    'harga_total' => $harga_total,
                    'status_pembayaran' => 0,
                    'status_pengisian' => 0,
                    'status_transaksi' => 0,
                    'tanggal_beli' => $tanggal_beli,
                    'expired' => $expired
        ])->id;

        return redirect('/rincian-transaksi/'.$kirim);
        // $db
        // $tujuan_beli = DB::table('banks')->where('id',$bank)->first();
        // dd($request,$tanggal_beli,$tujuan_beli,$dekripsi,$harga_total);

    //     $hasil = array('nama_produk' => $nama_produk,
    //                    'nama_provider' => $nama_provider,
    //                    'voucher' => $voucher,
    //                    'telpon' => $telp,
    //                    'harga' => $harga,
    //                    'bank' => $bank,
    //                    'tanggal_beli' => $tanggal_beli,
    //                    'kode_unik' => $dekripsi,
    //                    'harga_total' => $harga_total,
    //                    'tujuan_beli' => $tujuan_beli
    // );
    // return view('/pelanggan/pages/rincian',['hasil' => $hasil]);

        // var_dump($nama_produk,$nama_provider,$voucher,$telp,$harga,$bank,$tanggal_beli,$kode);
        // die;
    }

    public function rincian(Request $request){
        $hasil = DB::table('transactions')->where('transactions.id',$request->id)
        ->join('banks','transactions.id_bank','=','banks.id')
        ->join('price_lists','transactions.pulsa_code','=','price_lists.pulsa_code')
        ->first();

        // var_dump($hasil);
        // die;
        // return view('/pelanggan/pages/a',['hasil' => $hasil]);
        return view('/pelanggan/pages/rincian',['hasil' => $hasil]);
    }

    // function beliPaket(Request $request){

    //     $this->validate($request,[
    //         'nama_provider' => 'required',
    //         'voucher' => 'required',
    //         'nomor' => 'required|min:11|max:13',
    //         'bank' => 'required'
    //         ]);

    //         $nama_produk  =    $request->  input('nama_produk');
    //         $nama_provider  =    $request->  input('nama_provider');
    //         $voucher  =    $request->  input('keterangan');
    //         $telp  =    $request->  input('nomor');
    //         $harga =    $request->  input('harga');
    //         $kode  =    $request->  input('kode');
    //         $bank  =    $request->  input('bank');
    //         $tanggal_beli = Carbon::now();
    //         $kode_unik = $request-> input('aku');
    //         $dekripsi = base64_decode($kode_unik);

    //         $harga_total = $harga + $dekripsi;

    //         $tujuan_beli = DB::table('banks')->where('id',$bank)->first();

    //         $hasil = array('nama_produk' => $nama_produk,
    //                    'nama_provider' => $nama_provider,
    //                    'voucher' => $voucher,
    //                    'telpon' => $telp,
    //                    'harga' => $harga,
    //                    'bank' => $bank,
    //                    'tanggal_beli' => $tanggal_beli,
    //                    'kode_unik' => $dekripsi,
    //                    'harga_total' => $harga_total,
    //                    'tujuan_beli' => $tujuan_beli);
    //             return view('/pelanggan/pages/rincian',['hasil' => $hasil]);
    //     }

    function cetak_pdf(Request $request){

        $hasil = DB::table('transactions')->where('transactions.id',$request->id)
        ->join('banks','transactions.id_bank','=','banks.id')
        ->join('price_lists','transactions.pulsa_code','=','price_lists.pulsa_code')
        ->first();


        $pdf = PDF::loadview('rincian_pdff',['hasil' => $hasil]);
        // return $pdf->download('laporan-rincian-pdf');
        return $pdf->stream();
    }

    function komplain(Request $request){
        // $pesan = Request::get('pesan');
        // $kode = Request::get('kode');
        // var_dump($pesan);
        $id_transaksi = $request -> input('id_transaksi');
        $nama = $request -> input('nama');
        $telp = $request -> input('telp');
        $pesan = $request -> input('pesan');
        $waktu = Carbon::now();


        DB::table('complaints')->insert([
            'id_transaksi' => $id_transaksi,
            'nama' => $nama,
            'no_telpon' => $telp,
            'pesan' => $pesan,
            'created_at' => $waktu,

        ]);

        return Redirect('/');
        //var_dump($id_transaksi,$nama,$telp,$pesan);
    }

    function cek_transaksi(){
        // echo ('sisiruit');
        $data = "belum_diisi";
        return view('/pelanggan/forms/cek_transaksi',['data' => $data]);
    }

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
                        $ambil = DB::table('transactions')->where('harga_total',$nominal)->where('status',0)->first();
                        if($ambil){
                            $username   = "085706579632";
                            $apiKey   = "6135e4a3701bdd7b";
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
                        }
                    }
                }
            } 
        }
    
    }


    }
