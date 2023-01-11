@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Show Project</h1>

    <h2>{{$project->title}}</h2>
        <p>{{$project->content}}</p>
    
        <img src="{{ asset('storage/' . $project->cover_image) }}" class="img-fluid">
    
    
</div>

@endsection