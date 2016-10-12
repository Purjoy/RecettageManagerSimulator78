@extends('layouts.app')

@section('content')
<a href="{{route('project.edit', $project->id)}}">EDIT</a>
   <h1>{{$project->title}}</h1>
<p>{{$project->brief}}</p>
<div class="card card-block">
   <h4 class="card-title">Card title</h4>
   <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
   <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
</div>
@endsection