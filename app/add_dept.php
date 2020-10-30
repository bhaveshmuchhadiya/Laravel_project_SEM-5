<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class add_dept extends Model
{
    //
    protected $table = 'departments';
    protected $fallable= ['department_name','department_code'];
}
