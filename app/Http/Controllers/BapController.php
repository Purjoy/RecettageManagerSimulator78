<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Bap;
use Illuminate\Http\Request;

use App\Http\Requests;


class BapController extends Controller
{
    public function __construct(){

        $this->middleware('auth', ['except' => ['index', 'show']]);
        $this->middleware('Admin', ['except'=> ['index', 'show' , 'create']]);

        /**
         * On empeche à l'utilisateur qui n'est pas connecté et admin d'accéder à la
         * page update
         */

    }

    public function index()
    {
        $baps = Bap::all();

        return view('bap.index')->with(compact('baps'));

        /**
         *On retourne une vue et on y affiche toutes les BAP
         */

    }


    public function create()
    {


        return view('bap.create');
        /**
         * On retourne la vue de creation
         */

    }


    public function store(Requests\ValidateBapRequest $request)
    {


        $data = $request->except('_token');

        $bap = Bap::create($data, $request->except('_token'));


        return redirect()->route('bap.show', $bap->id);


        /**
         *On enregistre les valeurs du formulaire dans la database
         */


    }


    public function show($id)
    {
        $bap = Bap::find($id);

        if(!$bap) {

            return redirect()->to('/bap');
        }

        return view('bap.show')->with(['bap' => $bap]);

        /**
         * On retourne une vue où on affiche seulement la bap avec l'id dans l'URL
         */

    }







    public function edit($id)
    {


        $bap = Bap::find($id);
        if(!$bap) {

            return redirect()->to('/bap');
        }

        return view('bap.edit')->with(compact('bap'));


        /**
         * On retourne une vue avec un formulaire pour editer la bap avec l'id de l'url
         * on met en placeholder les valeurs actuelles
         */
    }


    public function update(Requests\ValidateBapRequest $request, $id)
    {
        $bap =Bap::find($id);

        if(!$bap) {

            return redirect()->to('/bap');


        }

        $bap->title = $request->title;
        $bap->email = $request->email;
        $bap->client = $request->client;
        $bap->adress = $request->adress;
        $bap->phone = $request->phone;
        $bap->presentation = $request->presentation;
        $bap->type = $request->type;
        $bap->contexte = $request->contexte;
        $bap->objectif = $request->objectif;
        $bap->contraintes = $request->contraintes;
         $bap->demande = $request->demande;


        $bap->save();

        return redirect()->route('bap.show', $bap->$id);

        /**
         * On prend les valeurs du formulaire de la page édit et on les mets dans la database
         */

    }


    public function destroy($id)
    {

        $bap = Bap::find($id);

        if(!$bap) {

            return redirect()->route('bap.index');


        }


        $bap->delete();

        return redirect()->route('bap.index');

        /**
         * On supprime la bap avec l'id correspondant
         */


    }
}
