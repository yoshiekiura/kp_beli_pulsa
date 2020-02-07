<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $cek = DB::table('users')->where('username',Session::get('nama'))->first();

        return $this->from('Anjay@gabut.com')
                    ->subject('Verifikasi Akun')
                    ->view('isiemail')
                    ->with(
                    [
                        'nama' => $cek->nama,
                        'email' => $cek->email,
                        'kode' => $cek->kode
                    ]);
    }
}
