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
                    <form class="row g-3 needs-validation" method="POST" action="{{ route('profile.testimonials.update') }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        @forelse ($user->testimonials as $testimonial)
                        <div class="col-md-6 pt-4">
                            <label for="validationCustom01" class="form-label">Customer Name</label>
                            <input type="text" class="form-control" name="customer_names[]" value="{{$testimonial->customer_name}}" id="validationCustom01" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-12 pt-4">
                            <div class="mb-3">
                                <label for="Textarea" class="form-label">Message</label>
                                <textarea class="form-control " name="messages[]"  id="Textarea" required>{{$testimonial->message}}</textarea>
                            </div>
                        </div>
                        @empty
                        <div class="col-md-6 pt-4">
                            <label for="validationCustom01" class="form-label">Customer Name</label>
                            <input type="text" class="form-control" name="customer_names[]" id="validationCustom01" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-12 pt-4">
                            <div class="mb-3">
                                <label for="Textarea" class="form-label">Message</label>
                                <textarea class="form-control " name="messages[]" id="Textarea" required></textarea>
                            </div>
                        </div>

                        @endforelse




                        <div class="col-12 text-center pt-4">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
