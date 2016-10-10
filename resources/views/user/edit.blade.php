@extends('layouts.app')

@section('content')

    <div class="container">
        <h1> Edit de profil </h1>

        <img src="../../../public/images/{{$user->id}}.jpg" style="height: 200px; width: auto;" onerror="this.src='../../../public/images/default.png'">
{!! Form::open(['route' => ['user.update', $user->id], 'method'=> 'PUT','files' => true]) !!}
        {{ csrf_field() }}
        {!! Form::text('name', $user->name, ['class' => 'form-control']) !!}
        {!! Form::text('email', $user->email, ['class' => 'form-control']) !!}
        {!! Form::label('Profile Picture') !!}
        {!! Form::file('image', null) !!}
        {!! Form::submit('Envoyer') !!}
        {!! Form::close() !!}



    </div>

@endsection