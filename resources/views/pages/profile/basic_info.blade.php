@extends('layouts.master')

@section('content')
    <div class="profile_bg_clr py-5">
        <div class="container border ">
            <div class="row  ">
                <div class="col-md-2 border pl-4 py-3">
                    <h4>Profile</h4>
                    <ul class="profile_details pl-0 ">
                        <li class="pt-3"> <a href="basic_info.html" class="text-decoration-none"> Basic Info</a></li>
                        <li class="pt-2"> <a href="education_details.html" class="text-decoration-none"> Education</a></li>
                        <li class="pt-2"> <a href="industry_skill_language.html" class="text-decoration-none">
                                Industry/Skills<br>/Language </a></li>
                        <li class="pt-2"> <a href="experience_details.html" class="text-decoration-none">Experience </a>
                        </li>
                        <li class="pt-2"><a href="" class="text-decoration-none"> Projects</a></li>
                        <li class="pt-2"> <a href="services_details.html" class="text-decoration-none"> Services</a></li>
                    </ul>
                </div>
                <div class="col-md-10 py-3">
                    <h4 class="text-center"> @foreach ($errors->all() as $error)
                        <p style="color: red;">{{ $error }}</p>
                    @endforeach Basic Information</h4>
                    <form method="POST" action="{{ route('profiles.update', $user->id) }}" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>
                        <div class="col-md-4 pt-4">
                            <label for="validationCustom01" class="form-label">First name</label>
                            <input type="text" name="first_name"class="form-control" id="validationCustom01" value="Mark" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4 pt-4">
                            <label for="validationCustom02" class="form-label">Last name</label>
                            <input type="text" name="last_name" class="form-control" id="validationCustom02" value="Otto" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4 pt-4">
                            <label for="validationCustomUsername" class="form-label">Username</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                <input type="text" name="username" class="form-control" id="validationCustomUsername"
                                    aria-describedby="inputGroupPrepend" required>
                                <div class="invalid-feedback">
                                    Please choose a username.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pt-4">
                            <label for="validationCustom03" class="form-label">City</label>
                            <input type="text" name="city" class="form-control" id="validationCustom03" required>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>
                        <div class="col-md-4 pt-4">
                            <label for="validationCustom04" class="form-label">Country</label>
                            <input type="text" name="country" class="form-control" id="validationCustom04" required>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>

                        <div class="col-md-4 pt-4">
                            <label for="validationCustom05" class="form-label">Phone Number</label>
                            <input type="number" name="phone_number" class="form-control" id="validationCustom05" required>
                            <div class="invalid-feedback">
                                Please provide a valid no.
                            </div>
                        </div>
                        <div class="col-md-5 pt-4">
                            <label for="validationCustom06" class="form-label">Date of Birth</label>
                            <input type="date" name="date_of_birth"class="form-control" id="validationCustom06" required>
                            <div class="invalid-feedback">
                                Please provide a valid no.
                            </div>
                        </div>
                        <div class="col-md-7 pt-4">
                            <label for="validationCustom07" class="form-label">Your website url</label>
                            <input type="text" name="website_url" class="form-control" id="validationCustom07" required>
                            <div class="invalid-feedback">
                                Please provide a valid no.
                            </div>
                        </div>
                        <div class="col-md-8 pt-4">
                            <label for="validationCustom07" class="form-label">Address</label>
                            <input type="text" name="address" class="form-control" id="validationCustom07" required>
                            <div class="invalid-feedback">
                                Please provide a valid no.
                            </div>
                        </div>


                        <div class="col-4 pt-4">
                            <label for="validationCustom08" class="form-label">Gender</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                    id="inlineRadio1" name="gender"value="option1">
                                <label class="form-check-label" for="inlineRadio1">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                    id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">Femal</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                    id="inlineRadio3" value="option3">
                                <label class="form-check-label" for="inlineRadio3">Other</label>
                            </div>
                        </div>

                        <div class="col-12 pt-4">
                            <div class="mb-3">
                                <label for="Textarea" class="form-label">Bio</label>
                                <textarea class="form-control " id="Textarea" name="bio" placeholder="Required example textarea" required></textarea>
                            </div>
                        </div>

                        <div class="col-12 pt-4">
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
                        </div>
                        <div class="col-12 pt-4">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
