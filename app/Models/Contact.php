<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['mail', 'content', 'user_id'];


    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}