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
            @forelse ($themes as $theme)
            <div class="col-md-5">
                <img src="{{ asset('assets/website') }}/images/photography_theme_1.PNG" class="img-fluid" alt="...">
                <div class="card-body lead text-center ">
                    <a href="{{route('themes.show', $theme->slug)}}" class="text-dark text-decoration-none"><b>{{$theme->name}}</b></a>
                    <a href="{{route('themes.activate', $theme->id)}}" class="btn btn-primary">Activate</a>
                </div>
            </div>
            @empty
            <p>No themes found.</p>
            @endforelse

        </div>
        <div class="row justify-content-center">
            {{$themes->links('vendor.pagination.bootstrap-4')}}
        </div>
    </div>
@endsection
