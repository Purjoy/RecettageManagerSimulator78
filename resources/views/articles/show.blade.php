@extends('layouts.app')

@section('content')

    <h1>  Articles n° {{$post->id}} <a href="{{route('articles.edit', $post->id)}}">Edit</a> </h1>

    <div class="panel-body">
        <h3>Auteur : {{$post->user->name}}</h3>
        <p>{{$post->description}}</p>
        <a href="{{route('articles.edit', $post->id)}}">
            <button class="btn btn-primary">
                Modifier l'article
            </button></a>
        <br>

        <br>
        <b>Écrivez votre commentaire :</b><br>

            {!! Form::open(['url' => action('CommentsController@store')])  !!}

            {{ csrf_field() }}


            {!! Form::text('commentaire') !!}

        <input type="hidden" name="post_id" value="{{$post->id}}">

        {!! Form::submit('Envoyer', array('class' => 'btn btn-lg btn-success', 'style' => 'width:50%') ) !!}
        {!! Form::close() !!}

        @foreach($comments as $comment)

                    <p>{{$comment->user->name}} : {{$comment->commentaire}}</p>
            @if( Auth::user()->admin == 1)
                    <form action="{{route('comments.destroy', $comment->id)}}" method="POST">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE">

                        <input value="supprimer" type="submit" class="btn btn-danger">

                    </form>
            @endif

        @endforeach
        @if($errors)
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
    @endif

@endsection