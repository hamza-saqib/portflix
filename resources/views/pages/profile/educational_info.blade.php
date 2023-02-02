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
                    <h4 class="text-center">Education</h4>
                    <form class="row g-3 needs-validation" method="POST" action="{{ route('profile.educational.update') }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="col-md-6 pt-4">
                            <label for="validationCustom01" class="form-label">Degree</label>
                            <input type="text" class="form-control" id="validationCustom01" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6 pt-4 ">
                            <label for="validationCustom02" class="form-label">University/College/School</label>
                            <select class="form-select  w-100 h-50" id="validationCustom02" required>
                                <option selected>university of management and technology</option>
                                <option value="1">university2 of management and technology</option>
                                <option value="2">university3 of management and technology</option>
                                <option value="3">university4 of management and technology</option>

                            </select>
                            <!-- <label for="validationCustom02" class="form-label">University/College/School</label>
        <input type="text" class="form-control" id="validationCustom02"  required>
        <div class="valid-feedback">
          Looks good!
        </div> -->
                        </div>

                        <div class="col-md-6 pt-4">
                            <label for="validationCustom03" class="form-label">Start Date</label>
                            <input type="date" class="form-control" id="validationCustom03" required>
                            <div class="invalid-feedback">
                                Please provide a valid no.
                            </div>
                        </div>
                        <div class="col-md-6 pt-4">
                            <label for="validationCustom04" class="form-label">End Date</label>
                            <input type="date" class="form-control" id="validationCustom04" required>
                            <div class="invalid-feedback">
                                Please provide a valid no.
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
