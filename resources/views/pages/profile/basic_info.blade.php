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
                    <h4 class="text-center">Basic Information</h4>
                    <form class="row g-3 needs-validation" method="POST" action="{{ route('profile.basic.update') }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="col-md-4 pt-4">
                            <label for="validationCustom01" class="form-label">First name</label>
                            <input type="text" name="first_name" class="form-control" id="validationCustom01"
                                value="{{ $user->first_name }}" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4 pt-4">
                            <label for="validationCustom02" class="form-label">Last name</label>
                            <input type="text" class="form-control" id="validationCustom02" name="last_name"
                                value="{{ $user->last_name }}" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4 pt-4">
                            <label for="validationCustomUsername" class="form-label">Username</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                <input type="text" class="form-control" id="validationCustomUsername" name="username"
                                    aria-describedby="inputGroupPrepend" required value="{{ $user->username }}">
                                <div class="invalid-feedback">
                                    Please choose a username.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pt-4">
                            <label for="validationCustom03" class="form-label">City</label>
                            <input type="text" class="form-control" id="validationCustom03" name="city"
                                value="{{ $user->city }}">
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>
                        <div class="col-md-4 pt-4">
                            <label for="validationCustom04" class="form-label">Country</label>
                            <input type="text" class="form-control" id="validationCustom04" name="country"
                                value="{{ $user->country }}">
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>

                        <div class="col-md-4 pt-4">
                            <label for="validationCustom05" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="validationCustom05" name="phone"
                                value="{{ $user->phone }}">
                            <div class="invalid-feedback">
                                Please provide a valid no.
                            </div>
                        </div>
                        <div class="col-md-5 pt-4">
                            <label for="validationCustom06" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" id="validationCustom06" name="date_of_birth"
                                value="{{ $user->date_of_birth }}">
                            <div class="invalid-feedback">
                                Please provide a valid no.
                            </div>
                        </div>
                        <div class="col-md-7 pt-4">
                            <label for="validationCustom07" class="form-label">Your website url</label>
                            <input type="text" class="form-control" id="validationCustom07" name="web_url"
                                value="{{ $user->web_url }}">
                            <div class="invalid-feedback">
                                Please provide a valid no.
                            </div>
                        </div>
                        <div class="col-md-8 pt-4">
                            <label for="validationCustom07" class="form-label">Address</label>
                            <input type="text" class="form-control" id="validationCustom07" name="address"
                                value="{{ $user->address }}">
                            <div class="invalid-feedback">
                                Please provide a valid no.
                            </div>
                        </div>


                        <div class="col-4 pt-4">
                            <label for="validationCustom08" class="form-label">Gender</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio1"
                                    value="Male" @if ($user->gender == 'Male') checked @endif>
                                <label class="form-check-label" for="inlineRadio1">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio2"
                                    value="Female" @if ($user->gender == 'Female') checked @endif>
                                <label class="form-check-label" for="inlineRadio2">Femal</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio3"
                                    value="Other" @if ($user->gender == 'Other') checked @endif>
                                <label class="form-check-label" for="inlineRadio3">Other</label>
                            </div>
                        </div>

                        <div class="col-12 pt-4">
                            <div class="mb-3">
                                <label for="Textarea" class="form-label">Bio</label>
                                <textarea class="form-control " id="Textarea" placeholder="Required example textarea" name="bio" required> {{ $user->bio }} </textarea>
                            </div>
                        </div>

                        <div class="col-12 pt-4">
                            <div class="mb-3">
                                <label for="profileimage" class="form-label">Image  </label>
                                <input class="form-check-input" type="file" name="profile_image" id="profileimage">
                            </div>
                        </div>


                        {{-- <div class="col-12 pt-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck"
                                    required>
                                <label class="form-check-label" for="invalidCheck">
                                    Agree to terms and conditions
                                </label>
                                <div class="invalid-feedback">
                                    You must agree before submitting.
                                </div>
                            </div>
                        </div> --}}
                        <div class="col-12 pt-4">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
