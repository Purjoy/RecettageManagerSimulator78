<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bap extends Model
{
    protected $fillable = [

        'title' , 'client' , 'adress' , 'email' , 'phone' , 'presentation' , 'type' , 'contexte' , 'demande' , 'objectif' , 'contraintes' ,


    ];



    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function posts() {
        return $this->hasMany('App\Models\Bap');
    }
}
