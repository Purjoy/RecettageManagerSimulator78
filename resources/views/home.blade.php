@extends('layouts.app')

@section('content')

    <div class="panel-heading">Dashboard</div>

    <div class="panel-body">
        You are logged in!
    </div>

    <a href="{{route('bap.index')}}">Voir les projets BAP validés</a><br>
    <a href="{{route('articles.index')}}">Voir les articles</a><br>
    <a href="{{route('articles.create')}}">Créer un article</a><br>
    <a href="{{route('bap.create')}}">Proposer son projet BAP</a><br>
    <a href="{{route('admin.index')}}">Page admin (seulement accessible à l'admin)</a><br>
    <a href="{{route('contacts.index')}}">Page contact</a><br>
    <h2>Comptes de test en seeder :</h2>
    <p>Pour se connecter à un compte non-admin : <label>Email : </label> "random@random.fr"  | <label>Password : </label>  "random"</p>
    <p>Pour se connecter au compte admin :  <label>Email:</label> "admin@admin.fr" | <label>Password:</label> "admin"</p>
@endsection