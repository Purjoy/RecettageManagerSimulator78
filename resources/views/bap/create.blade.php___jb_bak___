@extends('layouts.app')

@section('content')

   <div class="container">
    <h1> FORMULAIRE DE PROPOSITION DE PROJET</h1>

       {!! Form::open(['url' => route('bap.store'), 'method' => 'POST']) !!}
       {{ csrf_field() }}



       <label>Titre de la bap</label><br>{!! Form::text('title', null,array('class' => 'form-control', 'style' => 'width:50%') ) !!}<br>
       <label>Nom du client</label><br>{!! Form::text('client', null,array('class' => 'form-control', 'style' => 'width:50%') ) !!}<br>
       <label>Adresse du client</label><br>{!! Form::text('adress', null,array('class' => 'form-control', 'style' => 'width:50%') ) !!}<br>
       <label>Email du client</label><br>{!! Form::text('email', null,array('class' => 'form-control', 'style' => 'width:50%') ) !!}<br>
       <label>Telephone du client</label><br>{!! Form::text('phone', null,array('class' => 'form-control', 'style' => 'width:50%') ) !!}<br>
       <label>Presentation de la Bap</label><br>{!! Form::textarea('presentation', null,array('class' => 'form-control', 'style' => 'width:50%') ) !!}<br>
       <label>Type de projet</label><br>{{ Form::select('type', [
   '1' => 'Site Internet',
   '2' => 'Installation Multimédia',
   '3' => 'Jeu Video',
   '4' => '3D',
   '5' => 'DVD',
   '6' => 'Print',
   '7' => 'CD-ROM',
   '8' => 'Autre',
   '9' => 'Evenement',
   '10' => 'Animation 2d'], null,array('class' => 'form-control', 'style' => 'width:50%')
) }}
       <br>
       <label>Contexte de la BAP</label><br>{!! Form::textarea('contexte', null,array('class' => 'form-control', 'style' => 'width:50%') ) !!}<br>
       <label>Demande du client</label><br>{!! Form::textarea('demande', null,array('class' => 'form-control', 'style' => 'width:50%') ) !!}<br>
       <label>Objectifs de la BAP</label><br> {!! Form::textarea('objectif', null,array('class' => 'form-control', 'style' => 'width:50%') ) !!}<br>
       <label>Contraintes du projet</label><br>{!! Form::textarea('contraintes', null,array('class' => 'form-control', 'style' => 'width:50%') ) !!}<br>



       {{ Form::hidden('valid', 0) }}
       {!! Form::submit('Envoyer' ,array('class' => 'btn btn-lg btn-success')  ) !!}
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