@extends('layouts.master')

@section('content')
    <div class="profile_bg_clr py-5">
        <div class="container border ">
            <div class="row  ">
                <div class="col-md-2 border pl-4 py-3">
                    <h4>Profile</h4>
                    @include('partials.sidebar')
                </div>
                <div class="col-md-10 py-3">
                    <h4 class="text-center">Services</h4>
                    <form class="row g-3 needs-validation" method="POST" action="{{ route('profile.educational.update') }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="col-md-6 pt-4">
                            <label for="validationCustom01" class="form-label">Services</label>
                            <input type="text" class="form-control" id="validationCustom01" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6 pt-4">
                            <label for="validationCustom02" class="form-label">Price</label>
                            <input type="text" class="form-control" id="validationCustom02" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>




                        <div class="col-12 pt-4">
                            <div class="mb-3">
                                <label for="Textarea" class="form-label">Description</label>
                                <textarea class="form-control " id="Textarea" required></textarea>
                            </div>
                        </div>



                        <div class="col-12 text-center pt-4">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
