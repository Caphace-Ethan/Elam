<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $table = "courses";

    protected $fillable = [
        'course_name', 'course_number','educationlevel_id'
    ];

}
