
@extends('layouts.app')

@section('content')
<h1>YOOOOOOOOOOO</h1>


{!! Form::open(['route' => ['project.update', $project->id], 'method'=> 'PUT','files' => true]) !!}
{{ csrf_field() }}
{!! Form::text('brief', $project->brief, ['class' => 'form-control']) !!}

{!! Form::submit('Envoyer') !!}
{!! Form::close() !!}


@endsection