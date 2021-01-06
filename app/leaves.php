<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class leaves extends Model
{
    //
    protected $table='leaves';
    protected $fallable = ['l_id','e_id','leave_type','from_date','to_date','description','status'];
}
