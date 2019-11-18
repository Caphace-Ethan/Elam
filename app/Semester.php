<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    //

    protected $table = "semester";
    protected $primaryKey = 'semester_id';

    protected $fillable = [

    	'semester_id', 'semester_name', 'semester_start','semester_end'
    ];
}
