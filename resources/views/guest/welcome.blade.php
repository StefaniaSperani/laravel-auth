@extends('layouts.app')
@section('content')

    <div class="container text-center">
        <h1 class="display-5 fw-bold">
            Stefania Sperani: My Portfolio!
        </h1>
        <button class="btn btn-danger btn-lg mylink m-5" type="button"><a class="nav-link" href="{{url('/myprojects') }}">{{ __('Discover') }}</a></button>
    </div>


{{-- <div class="content">
    <div class="container">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora temporibus, dicta nemo aliquam totam nisi deserunt soluta quas voluptatum ab beatae praesentium necessitatibus minus, facilis illum rerum officiis accusamus dolores!</p>
    </div>
</div> --}}
@endsection
