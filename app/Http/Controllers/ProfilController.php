<?php

namespace App\Http\Controllers;




use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProfilController extends Controller
{




    public function index()
    {
        $users = User::all();


        return view('profil.index') -> with(compact('users'));
    }



}