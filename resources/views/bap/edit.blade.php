@extends('layouts.app')

@section('content')

    <div class="container">
        <h1> FORMULAIRE </h1>


{!! Form::open(['route' => ['bap.update', $bap->id], 'method'=> 'PUT']) !!}

            {{ csrf_field() }}

        {!! Form::text('title', $bap->title, ['class' => 'form-control']) !!}
        {!! Form::text('client', $bap->client, ['class' => 'form-control']) !!}
        {!! Form::text('adress', $bap->adress, ['class' => 'form-control']) !!}
        {!! Form::text('email', $bap->email, ['class' => 'form-control']) !!}
        {!! Form::text('phone', $bap->phone, ['class' => 'form-control']) !!}
        {!! Form::textarea('presentation', $bap->presentation, ['class' => 'form-control']) !!}
        {{ Form::select('type', [
           '1' => 'Site Internet',
           '2' => 'Installation Multimédia',
           '3' => 'Jeu Video',
           '4' => '3D',
           '5' => 'DVD',
           '6' => 'Print',
           '7' => 'CD-ROM',
           '8' => 'Autre',
           '9' => 'Evenement',
           '10' => 'Animation 2d'], $bap->type,array('class' => 'form-control', 'style' => 'width:50%')
        ) }}
        {!! Form::textarea('contexte', $bap->contexte, ['class' => 'form-control']) !!}
        {!! Form::textarea('demande', $bap->demande, ['class' => 'form-control']) !!}
        {!! Form::textarea('objectif', $bap->objectif, ['class' => 'form-control']) !!}
        {!! Form::textarea('contraintes', $bap->contraintes, ['class' => 'form-control']) !!}
            <br>
        {!! Form::submit('Envoyer' ,array('class' => 'btn btn-lg btn-info')  ) !!}


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