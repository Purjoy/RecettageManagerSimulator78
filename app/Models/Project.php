<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $fillable = [

         'title', 'cdcf', 'pitch', 'brief', 'presentationClient', 'process', 'organisation',
        'information'


    ];
}
