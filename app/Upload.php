<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Upload extends Model
{
    //

    protected $table = "uploads";

    protected $fillable = [
        'filename', 'extension', 'filesize', 'location', 'course', 'education_level'
    ];

}
