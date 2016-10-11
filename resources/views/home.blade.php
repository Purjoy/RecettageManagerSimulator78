@extends('layouts.app')

@section('content')

    <div class="panel-heading">Dashboard</div>

    <div class="panel-body">
        You are logged in!
    </div>



    <a href="{{route('project.create')}}">Créer un projet</a><br>
    <a href="{{route('project.index')}}">Liste des projets</a><br>
    <a href="{{route('admin.index')}}">Page admin (seulement accessible à l'admin)</a><br>
    <h2>Comptes de test en seeder :</h2>
    <p>Pour se connecter à un compte non-admin : <label>Email : </label> "random@random.fr"  | <label>Password : </label>  "random"</p>
    <p>Pour se connecter au compte admin :  <label>Email:</label> "admin@admin.fr" | <label>Password:</label> "admin"</p>
@endsection