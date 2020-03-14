<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    protected $fillable = ['id_user','pulsa_code','id_bank','no_telpon','kode_unik','harga_total','tanggal_beli','expired','status_pembayaran','status_pengisian','status_transaksi'];
}
