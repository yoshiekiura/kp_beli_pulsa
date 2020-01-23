<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserEditProfil extends Model
{
    //
    protected $table = 'users';
    protected $fillable = ['nama','username','email','jenis_kelamin','alamat','no_telpon','password'];
}