<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        if(!$user) {

            return redirect()->to('/');
        }

        return view('user.show')->with(['user' => $user]);

        /**
         * On retourne une vue où on affiche seulement la bap avec l'id dans l'URL
         */

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $users = User::all()->lists('name', 'id');
        $user = User::find($id);
        if(!$user) {

            return redirect()->to('/');
        }

        return view('user.edit')->with(compact('user', 'post'));

        /**
         * On affiche un formulaire pour edit un article
         */

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\ValidateUserRequest $request, $id)
    {
        $user =User::find($id);

        if(!$user) {

            return redirect()->to('/articles');


        }

        $user->email = $request->email;
        $user->name = $request->name;
        $user->save();
        $imageName = $user->id . '.' .
            $request->file('image')->getClientOriginalExtension();

        $request->file('image')->move(
            base_path() . '/public/images/', $imageName
        );

        return redirect()->route('user.show', $user->$id);

        /**
         * On update la database avec les valeurs du form de l'edit
         */

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}