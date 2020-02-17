<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    protected $fillable = ['nama_produk','nama_provider','voucher','no_telpon','harga','kode','kode_unik','bank','tanggal_beli','harga_total','expired'];
}
