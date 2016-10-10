<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bap extends Model
{
    protected $fillable = [

        'title', 'client','phone','adress','email','presentation','type','demande','contexte','objectif','contraintes', 'valid'


    ];



    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function posts() {
        return $this->hasMany('App\Models\Post');
    }
}