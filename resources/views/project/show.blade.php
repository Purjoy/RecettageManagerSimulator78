@extends('layouts.app')

@section('content')
<a href="{{route('project.edit', $project->id)}}">EDIT</a>
   <h1>{{$project->title}}</h1>
<p>{{$project->brief}}</p>
<div class="card">
   <ul class="list-group list-group-flush">
      <li class="list-group-item">Cras justo odio</li>
      <li class="list-group-item">Dapibus ac facilisis in</li>
      <li class="list-group-item">Vestibulum at eros</li>
   </ul>
</div>
@endsection