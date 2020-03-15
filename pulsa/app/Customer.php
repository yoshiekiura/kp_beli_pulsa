<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $fillable = ['id_user','nama','jenis_kelamin','alamat','tanggal_mendaftar'];
}
