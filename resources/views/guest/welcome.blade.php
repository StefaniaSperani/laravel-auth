@extends('layouts.app')
@section('content')

<div class="jumbotron p-5 mb-4 rounded-3">
    <div class="container py-5 text-center">
        <h1 class="display-5 fw-bold">
            Stefania Sperani: My Portfolio!
        </h1>
        <button class="btn btn-danger btn-lg" type="button"><a class="nav-link mylink" href="{{url('/projects') }}">{{ __('Discover') }}</a></button>
    </div>
</div>

<div class="content">
    <div class="container">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora temporibus, dicta nemo aliquam totam nisi deserunt soluta quas voluptatum ab beatae praesentium necessitatibus minus, facilis illum rerum officiis accusamus dolores!</p>
    </div>
</div>
@endsection
