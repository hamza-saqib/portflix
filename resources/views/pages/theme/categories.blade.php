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

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-5 mt-2">
                <img src="{{ asset('assets/website') }}/images/photography_main_category.jfif" class="img-fluid"
                    alt="...">
                <div class="card-body lead text-center ">
                    <a href="{{ route('themes.index', 'photography') }}"
                        class="text-dark text-decoration-none"><b>Photography</b></a>
                </div>
            </div>
            <div class="col-md-5 mt-2">
                <img src="{{ asset('assets/website') }}/images/business_main_category.jfif" class="img-fluid"
                    alt="...">
                <div class="card-body lead text-center ">
                    <a href="{{ route('themes.index', 'business') }}"
                        class="text-dark text-decoration-none"><b>Business</b></a>
                </div>
            </div>
            <div class="col-md-5 mt-4">
                <img src="{{ asset('assets/website') }}/images/fashion_main_category.jfif" class="img-fluid"
                    alt="...">
                <div class="card-body lead text-center ">
                    <a href="{{ route('themes.index', 'fasion_design') }}"
                        class="text-dark text-decoration-none"><b>Fashion Designing</b></a>
                </div>
            </div>
            <div class="col-md-5 mt-4">
                <img src="{{ asset('assets/website') }}/images/IT_main_category.jfif" class="img-fluid" alt="...">
                <div class="card-body lead text-center ">
                    <a href="{{ route('themes.index', 'it') }}" class="text-dark text-decoration-none"><b>Information
                            technology</b></a>
                </div>
            </div>
        </div>
    </div>
@endsection
