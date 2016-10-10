<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bap;
use App\Http\Requests;


class AdminController extends Controller
{

    /**
     * AdminController constructor.
     */

    public function __construct()
    {
        $this->middleware('Admin');

        /**
         * Impose à l'utilisateur d'etre connecté sur un compte admin pour
         * acceder à la page
         */
    }



    public function index()
    {
        $baps = Bap::all();

        return view('admin.bap')->with(compact('baps'));

        /**
         *  si on va sur l'url public/admin on retourne la vue admin.bap et on y
         * affiche toutes les BAP
         */
    }


    public function update(Requests\ValidateValidationBap $request, $id)
    {
        $bap =Bap::find($id);

        if(!$bap) {

            return redirect()->to('/bap');


        }

        $bap->valid = $request->valid;



        $bap->save();

        return redirect()->route('admin.index');


        /**
         *On update la valeur de valid(qui détermine si une bap est validée)
         */


    }

}
