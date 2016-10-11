@extends('layouts.app')

@section('content')


        <h1> FORMULAIRE </h1>

        {!! Form::open(['route' => ['articles.update', $post->id], 'method'=> 'PUT']) !!}

            {{ csrf_field() }}

        {!! Form::select('user_id', $users, $post->user_id) !!}

        {!! Form::text('title', $post->title, ['class' => 'form-control']) !!}


        {!! Form::textarea('description', $post->description, ['class' => 'form-control']) !!}


        {!! Form::submit('Envoyer') !!}


        {!! Form::close() !!}

        @if($errors)
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif


@endsection