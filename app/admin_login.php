<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin_login extends Model
{
    //
    protected $table = "admin";
    protected $fillable = ['email','password'];
}
