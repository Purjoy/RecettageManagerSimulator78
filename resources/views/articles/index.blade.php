@extends('layouts.app')

@section('content')


                    <div class="panel-body">
                        <h1>LISTE DES ARTICLES</h1>
                        @if( Auth::user()->admin == 1)
                        <a href="{{route('articles.create')}}"><button class="btn btn-default"> Créer un article</button></a><br>
                        <hr>
                        @endif
                    @foreach($posts as $post)
                        <h2> {{$post->title}} </h2>
                        <h3>Auteur: {{ $post->user->name }}</h3>
                        <p> {{$post->description}} </p>

                            <a href="{{route('articles.show', $post->id)}}">
                                <button class="btn btn-default">
                                    Afficher l'article
                                </button>
                            </a>
                            @if( Auth::user()->admin == 1)
                            <a href="{{route('articles.edit', $post->id)}}">
                                <button class="btn btn-primary">
                                    Editer l'article
                                </button>
                            </a>
                            @endif

                            @if( Auth::user()->admin == 1)
                        <form action="{{route('articles.destroy', $post->id)}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger">SUPPRIMER</button>
                        </form>

                            @endif
                        @endforeach
                    </div>

@endsection
