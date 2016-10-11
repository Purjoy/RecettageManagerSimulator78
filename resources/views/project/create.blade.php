@extends('layouts.app')

@section('content')

   <div class="container">
    <h1> FORMULAIRE DE CREATION DE PROJET </h1>

       {!! Form::open(['url' => route('project.store'), 'method' => 'POST']) !!}
       {{ csrf_field() }}

       <br>
       <b>Titre du projet :</b><br>{!! Form::text('title', null,array('class' => 'form-control', 'style' => 'width:50%') ) !!}
       <br>
       {!! Form::submit('Envoyer', array('class' => 'btn btn-lg btn-success', 'style' => 'width:50%') ) !!}
       {!! Form::close() !!}


   </div>

    @endsection