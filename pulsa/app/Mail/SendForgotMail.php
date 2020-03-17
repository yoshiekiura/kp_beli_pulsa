<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class SendForgotMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = $this->data['email'];

        $cek = DB::table('users')
        ->join('customers','customers.id_user','=', 'users.id')
        ->where('email', $email)->first();

        return $this->from('tukupulsauntag@gmail.com')
                    ->subject('Lupa Kata Sandi')
                    ->view('isi_email_lupa_kata_sandi')
                    ->with(
                    [
                        'nama' => $cek->nama,
                        'email' => $cek->email,
                        'kode' => $cek->remember_token
                    ]);
    }
}

