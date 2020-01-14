<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    //
    protected $table = "users";
    protected $fillable = ['nama','username','password','email','no_telpon','tanggal_mendaftar'];

}
