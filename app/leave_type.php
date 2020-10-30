<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class leave_type extends Model
{
    //table name and description
    protected $table='leave_types';
    protected $fallable = ['id','leave_type','description'];
}
