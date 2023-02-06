@extends('layouts.master')

@section('content')
    <div class="container-fluid ">
        <div class="row mt-4 ">
            <div class="col">
                <img src="{{ asset('assets/website') }}/images/app_banner.png" class="d-block w-100">
            </div>
        </div>
    </div>


    <div class="container my-3">
        <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-md-6 mt-4">
                <div class="row">
                    <div class="col-5 pr-0 ">
                        <img src="{{ asset('storage') }}/images/blogs/{{$blog->thumbnail}}" alt="2k" class="img-fluid">
                    </div>
                    <div class="col-7 blog_card_bg_clr  ">
                        <p class="card-text"><small class="text-muted">Last updated {{$blog->updated_at}}</small></p>
                        <h5 class="card-title">{{$blog->title}}</h5>
                        <p class="card-text">{{$blog->summary}}</p>
                        <a href="{{route('blogs.show', $blog)}}" class="text-decoration-none">Continue --></a>

                    </div>
                </div>
            </div>

            @endforeach
        </div>
        <br>
        <div class="row justify-content-center">
            {{$blogs->links('vendor.pagination.bootstrap-4')}}
        </div>
    </div>


@endsection
