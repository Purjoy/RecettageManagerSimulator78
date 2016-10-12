
@extends('layouts.app')

@section('content')
<h1>Cahier de recettage de {{$project->title}}</h1>


{!! Form::open(['route' => ['project.update', $project->id], 'method'=> 'PUT','files' => true]) !!}
{{ csrf_field() }}

{!! Form::label('Pitch') !!}
{!! Form::text('pitch', $project->pitch, ['class' => 'form-control']) !!}
{!! Form::label('Brief') !!}
{!! Form::textarea('brief', $project->brief, ['class' => 'form-control']) !!}
{!! Form::label('Présentation Client') !!}
{!! Form::textarea('presentatioClient', $project->presentationClient, ['class' => 'form-control']) !!}
{!! Form::label('Process') !!}
{!! Form::textarea('process', $project->process, ['class' => 'form-control']) !!}
{!! Form::label('Organisation du Projet') !!}
{!! Form::textarea('organisation', $project->organisation, ['class' => 'form-control']) !!}
{!! Form::label('Information') !!}
{!! Form::textarea('information', $project->information, ['class' => 'form-control']) !!}
{!! Form::submit('Envoyer',array('class' => 'btn btn-lg btn-danger')) !!}
{!! Form::close() !!}


@endsection