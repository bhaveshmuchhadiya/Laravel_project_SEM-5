<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class manage_employee extends Model
{
    //
    protected $table='manage_emplolyees';
    protected $fallable = ['id','first_name','second_name','last_name','department','birthdate','address','city','email','mobile','username','password'];
}
