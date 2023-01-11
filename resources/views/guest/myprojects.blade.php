@extends('layouts.app')

@section('content')

<div class="container">

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
            </tr>
            </thead>
            <tbody>
            @foreach($projects as  $project)
                    <tr>
                        <th scope="row">{{ $project->id}}</th>
                        <td><a href="{{route('admin.projects.show', $project->slug)}}" title="View Post">{{ $project->title}}</a></td>
                        <td>{{Str::limit( $project->content,100)}}</td>
                    </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection