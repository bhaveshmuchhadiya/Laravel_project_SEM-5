<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class login extends Model
{
    //
    protected $table = "manage_employees";
    protected $fillable = ['email','password'];
}
