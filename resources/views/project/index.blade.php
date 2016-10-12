@extends('layouts.app')

@section('content')


                    <div class="panel-body">
                        <h1>LISTE DES projets</h1>

                    @foreach($project as $project)
                        <h2><a href="{{route('project.show', $project->id)}}"> {{$project->title}} </a></h2>

@endforeach
</div>

@endsection
