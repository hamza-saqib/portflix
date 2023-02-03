@extends('layouts.master')
@section('content')

<div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-md-5">
          <img src="{{ asset('assets/website') }}/images/photography_theme_1.PNG" class="img-fluid" alt="...">
          <div class="card-body lead text-center ">
            <a href="photography_temp_1.html" class="text-dark text-decoration-none"><b>Photography Template 1</b></a>
          </div>
      </div>
      <div class="col-md-5">
          <img src="{{ asset('assets/website') }}/images/photography_theme_2.PNG" class="img-fluid" alt="...">
          <div class="card-body lead text-center ">
            <a href="photography_temp_2.html" class="text-dark text-decoration-none"><b>Photography Template 2</b></a>
          </div>
      </div>
    </div>
  </div>
@endsection
