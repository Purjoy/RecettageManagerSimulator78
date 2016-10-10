@extends('layouts.app')

@section('content')

   <div class="container">
    <h1> FORMULAIRE </h1>

       {!! Form::open(['url' => route('articles.store'), 'method' => 'POST']) !!}
       {{ csrf_field() }}

       <br>
       <b>Titre de l'article :</b><br>{!! Form::text('title', null,array('class' => 'form-control', 'style' => 'width:50%') ) !!}
       <br>
       <b>Écrivez votre article :</b><br>{{ Form::textarea('description', null,array('class' => 'form-control', 'style' => 'width:50%') ) }}
       <br>
       {!! Form::submit('Envoyer', array('class' => 'btn btn-lg btn-success', 'style' => 'width:50%') ) !!}
       {!! Form::close() !!}
       @if($errors)
           <ul>
               @foreach($errors->all() as $error)
                   <li>{{$error}}</li>
               @endforeach
           </ul>
       @endif

   </div>

    @endsection