@extends('layouts.app')

@section('content')

<ul>
    @foreach ($projects as $project)
    <a class="btn btn-danger text-white btn-sm" href="{{route('admin.projects.show', $project->slug)}}" title="View Post"><li>{{$project->title}}</li></a>
    @endforeach


</ul>

@endsection