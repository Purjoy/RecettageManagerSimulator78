@extends('layouts.app')

@section('content')

    <div class="container">


        <div class="bap col-md-offset-1 col-md-10" style="background-color:#e6e6fa;margin-bottom:30px">

            <h2><label>Nom de l'utilisateur :</label> {{$user->name}} </h2>
            <h2><label>Mail :</label> {{$user->email}} </h2><br>
            <p>{{$user->description}}</p>
            <img src="../../public/images/{{$user->id}}.jpg" style="height: 200px; width: auto;" onerror="this.src='../../public/images/default.png'">

        </div>

@endsection