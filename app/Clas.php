<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clas extends Model
{
    //
     protected $primaryKey = 'class_id';
    protected $table = "class";

     protected $fillable = [

    	'class_id', 'class_name', 'class_code','educationlevel_id','start_date','end_date'
    ];
}
