@extends('layouts.app')

@section('content')


    <div class="panel-body">
        <h1>LISTE DES PROFILS</h1>
        <hr>

        @foreach($users as $user)
            {{$user->name}}<br>
            {{$user->email}}<br>
        @endforeach
    </div>

@endsection
