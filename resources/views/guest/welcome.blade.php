@extends('layouts.app')
@section('content')

    <div class="container text-center">
        <h1 class="display-5 fw-bold">
            Stefania Sperani: My Portfolio!
        </h1>
        <button class="btn btn-danger btn-lg mylink m-5" type="button"><a class="nav-link" href="{{url('/myprojects') }}">{{ __('Discover') }}</a></button>
        <div class="row">
            <div class="col-6">
                <div class="left">
                    <img src="https://avatars.githubusercontent.com/u/111997578?v=4" alt="Me" class="img-fluid" width="300">
                </div>
            </div>
            <div class="col-6">
                <div class="right">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora temporibus, dicta nemo aliquam totam nisi deserunt soluta quas voluptatum ab beatae praesentium necessitatibus minus, facilis illum rerum officiis accusamus dolores!</p>
                </div>
                <i class="fa-brands fa-github"></i>
            </div>

        </div>

    </div>


@endsection
