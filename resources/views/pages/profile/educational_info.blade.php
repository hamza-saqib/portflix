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

                                @forelse ($user->educations as $education)

                                <div class="col-md-6 pt-4 ">
                                    <label for="validationCustomsfd" class="form-label">Degree</label>
                                    <select class="form-select  w-100 h-50" id="validationCustomsfd" required
                                        name="degrees[]">
                                        @foreach ($degrees as $degree)
                                            @if ($education->degree == $degree)
                                            <option value="{{ $degree }}" selected>{{ $degree }}</option>
                                            @else
                                            <option value="{{ $degree }}">{{ $degree }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 pt-4 ">
                                    <label for="validationCustom02" class="form-label">Major/Feild</label>
                                    <select class="form-select  w-100 h-50" id="validationCustom02" required
                                        name="major_subjects[]">
                                        @foreach ($major_subjects as $major)
                                            @if ($education->major_subject == $major)
                                            <option value="{{ $major }}" selected>{{ $major }}</option>
                                            @else
                                            <option value="{{ $major }}">{{ $major }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 pt-4 ">
                                    <label for="validationCustom02" class="form-label">University/College/School</label>
                                    <select class="form-select  w-100 h-50" id="validationCustom02" required
                                        name="universities[]">
                                        @foreach ($universities as $university)
                                            @if ($education->institute_name == $university)
                                            <option value="{{ $university }}" selected>{{ $university }}</option>
                                            @else
                                            <option value="{{ $university }}">{{ $university }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6 pt-4">
                                    <label for="validationCustom03" class="form-label">Start Date</label>
                                    <input type="date" class="form-control" id="validationCustom03" required
                                        name="start_date[]" value="{{$education->start_date}}">
                                    <div class="invalid-feedback">
                                        Please provide a valid no.
                                    </div>
                                </div>
                                <div class="col-md-6 pt-4">
                                    <label for="validationCustom04" class="form-label">End Date</label>
                                    <input type="date" class="form-control" id="validationCustom04"
                                        name="end_date[]" value="{{$education->end_date}}">
                                    <div class="invalid-feedback">
                                        Please provide a valid no.
                                    </div>
                                </div>

                                <div class="col-md-6 pt-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="invalidCheck"
                                            name="is_currently_studying[]"
                                            @if ($education->is_currently_studying == true)
                                                checked
                                            @endif
                                            >
                                        <label class="form-check-label" for="invalidCheck">
                                            is Currenty Studying
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12 pt-4">
                                    <div class="mb-3">
                                        <label for="Textarea" class="form-label">Description</label>
                                        <textarea class="form-control " id="Textarea" name="descriptions[]">{{$education->description}}</textarea>
                                    </div>
                                </div>
                                @empty
                                <div class="col-md-6 pt-4 ">
                                    <label for="validationCustomsfd" class="form-label">Degree</label>
                                    <select class="form-select  w-100 h-50" id="validationCustomsfd" required
                                        name="degrees[]">
                                        @foreach ($degrees as $degree)
                                        <option value="{{ $degree }}">{{ $degree }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 pt-4 ">
                                    <label for="validationCustom02" class="form-label">Major/Feild</label>
                                    <select class="form-select  w-100 h-50" id="validationCustom02" required
                                        name="major_subjects[]">
                                        @foreach ($major_subjects as $major)
                                        <option value="{{ $major }}">{{ $major }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 pt-4 ">
                                    <label for="validationCustom02" class="form-label">University/College/School</label>
                                    <select class="form-select  w-100 h-50" id="validationCustom02" required
                                        name="universities[]">
                                        @foreach ($universities as $university)
                                        <option value="{{ $university }}">{{ $university }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6 pt-4">
                                    <label for="validationCustom03" class="form-label">Start Date</label>
                                    <input type="date" class="form-control" id="validationCustom03" required
                                        name="start_date[]" value="">
                                    <div class="invalid-feedback">
                                        Please provide a valid no.
                                    </div>
                                </div>
                                <div class="col-md-6 pt-4">
                                    <label for="validationCustom04" class="form-label">End Date</label>
                                    <input type="date" class="form-control" id="validationCustom04"
                                        name="end_date[]" value="">
                                    <div class="invalid-feedback">
                                        Please provide a valid no.
                                    </div>
                                </div>

                                <div class="col-md-6 pt-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="invalidCheck"
                                            name="is_currently_studying[]"

                                            >
                                        <label class="form-check-label" for="invalidCheck">
                                            is Currenty Studying
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12 pt-4">
                                    <div class="mb-3">
                                        <label for="Textarea" class="form-label">Description</label>
                                        <textarea class="form-control " id="Textarea" name="descriptions[]"></textarea>
                                    </div>
                                </div>
                                @endforelse

                        {{-- <button class="btn btn-primary" onclick="addNewEducation()" type="button">+Add</button> --}}

                        <div class="col-12 text-center pt-4">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-script')
    <script type="text/javascript">
        var newEducation = `<div class="row pt-4" style="border-block-end: solid" id="education-2">
                                <div class="col-md-6 pt-4 ">
                                    <label for="validationCustomsfd" class="form-label">Degree</label>
                                    <select class="form-select  w-100 h-50" id="validationCustomsfd" required
                                        name="degrees[]">
                                        @foreach ($degrees as $degree)
                                            <option value="{{ $degree }}">{{ $degree }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 pt-4 ">
                                    <label for="validationCustom02" class="form-label">Major/Feild</label>
                                    <select class="form-select  w-100 h-50" id="validationCustom02" required
                                        name="major_subjects[]">
                                        @foreach ($major_subjects as $major)
                                            <option value="{{ $major }}">{{ $major }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 pt-4 ">
                                    <label for="validationCustom02" class="form-label">University/College/School</label>
                                    <select class="form-select  w-100 h-50" id="validationCustom02" required
                                        name="universities[]">
                                        @foreach ($universities as $university)
                                            <option value="{{ $university }}">{{ $university }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6 pt-4">
                                    <label for="validationCustom03" class="form-label">Start Date</label>
                                    <input type="date" class="form-control" id="validationCustom03" required
                                        name="start_date[]">
                                    <div class="invalid-feedback">
                                        Please provide a valid no.
                                    </div>
                                </div>
                                <div class="col-md-6 pt-4">
                                    <label for="validationCustom04" class="form-label">End Date</label>
                                    <input type="date" class="form-control" id="validationCustom04" required
                                        name="end_date[]">
                                    <div class="invalid-feedback">
                                        Please provide a valid no.
                                    </div>
                                </div>

                                <div class="col-md-6 pt-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="invalidCheck" required
                                            name="is_currently_studying[]">
                                        <label class="form-check-label" for="invalidCheck">
                                            is Currenty Studying
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12 pt-4">
                                    <div class="mb-3">
                                        <label for="Textarea" class="form-label">Description</label>
                                        <textarea class="form-control " id="Textarea" name="descriptions[]"></textarea>
                                    </div>
                                </div>
                            </div>`;
        var educations = document.getElementById('educations');
        // function insertAfter(newNode, existingNode) {
        //     existingNode.parentNode.insertBefore(newNode, existingNode.nextSibling);
        // }
        function addNewEducation() {
            // insertAfter(newEducation,  educations.lastElementChild);
            educations.append(newEducation);
        }
    </script>
@endsection
