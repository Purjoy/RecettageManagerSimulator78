<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Http\Requests;



class ProjectController extends Controller
{
    public function __construct()
    {


        /**
         * On impose à l'utilisateur d'etre connecté en tant qu'admin pour accéder au create
         */

    }


    public function index()
    {
        $project = Project::all();

        return view('project.index')->with(compact('project'));

        /**
         * On retourne une vue avec tout les post affichés dessus
         */

    }


    public function create()
    {

        /*  $post = new Post;
         $post->title = 'un autre article';
         $post->description = 'une autre description';
         $post->save(); */

        $users = User::all()->lists('name', 'id');
        return view('project.create')->with(compact('users'));

        /**
         * On retourne une vue avec un formulaire pour créer un nouvel article
         * On annonce qu'on va utiliser le modèle users (pour lier l'article et
         * l'utilisateur plus tard)
         */


    }


    public function store(Requests\ValidateProjectRequest $request)
    {





        $data = $request->except('_token');

        $project = Project::create($data, $request->except('_token'));


        return redirect()->route('project.show', $project->id);


        /**
         * On enregistre l'article dans la database
         */


    }


    public function show($id)
    {
        $project = Project::where('id', $id)->first();

        return view('project.show')->with(compact('project'));

        /**
         * On affiche une vue avec l'article correspondant à l'url
         */

    }

    public function edit($id)
    {
        $project = Project::where('id', $id)->first();

        return view('project.editBriefPitch')->with(compact('project'));

        /**
         * On affiche une vue avec l'article correspondant à l'url
         */

    }

    public function update(Requests\ValidateProjectRequest $request, $id)
    {
        $project =Project::find($id);

        $project->brief = $request->brief;
        $project->pitch = $request->pitch;
        $project->organisation = $request->organisation;
        $project->process = $request->process;
        $project->presentationClient = $request->presentationClient;
        $project->information = $request->information;
        $project->organisation= $request->organisation;
        $project->save();

        return redirect()->route('project.show', $id);

        /**
         * On update la database avec les valeurs du form de l'edit
         */

    }

    public function destroy($id)
    {



        $post = Post::find($id);

        if(!$post) {

            return redirect()->route('articles.index');


        }


        $post->delete();

        return redirect()->route('articles.index');

        /**
         * On supprime l'article par rapport à son id
         */

    }
}
