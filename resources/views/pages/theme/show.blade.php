@extends('layouts.master')

@section('content')
    <div class="themes_second_nav">
        <div class="container py-1">
            <div class="row">
                <div class="col-md-12">
                    @include('partials.sub-header')
                </div>
            </div>
        </div>
    </div>

    <div class="container ">
        <div class="row mt-5 preview-section-bg-clr">
            <div class="col-md-7  ">
                <h3 class="my-5">{{$theme->name}}</h3>
                <p>{{$theme->summary}}</p>
                <a href="Photography_template_1/unika/unika-html/index.html" class="btn btn-danger btn-lg my-3"> Preview </a>
                <a href="" class="btn btn-danger btn-lg"> Create Portfolio </a>
            </div>
            <div class="col-md-5 m-auto pl-1 ">
                <img src="{{ asset('assets/website') }}/images/Photography_theme_1.PNG" alt="" class="d-block w-100">
            </div>
        </div>
    </div>
@endsection
