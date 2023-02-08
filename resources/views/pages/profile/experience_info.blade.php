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
                    <h4 class="text-center">Experience</h4>
                    <form class="row g-3 needs-validation" method="POST" action="{{ route('profile.experience.update') }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        @forelse ($user->experiences as $experience)

                            <div class="col-md-6 pt-4 ">
                                <label for="validationCustomsfd" class="form-label">Company</label>
                                <select class="form-select  w-100 h-50" id="validationCustomsfd" required
                                    name="companies[]">
                                    @foreach ($companies as $company)
                                        @if ($experience->company_name == $company)
                                            <option value="{{ $company }}" selected>{{ $company }}</option>
                                        @else
                                            <option value="{{ $company }}">{{ $company }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 pt-4 ">
                                <label for="validationCustomsfd" class="form-label">Position</label>
                                <select class="form-select  w-100 h-50" id="validationCustomsfd" required
                                    name="positions[]">
                                    @foreach ($positions as $position)
                                        @if ($experience->position == $position)
                                            <option value="{{ $position }}" selected>{{ $position }}</option>
                                        @else
                                            <option value="{{ $position }}">{{ $position }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 pt-4 ">
                                <label for="validationCustomsfd" class="form-label">Job Title</label>
                                <select class="form-select  w-100 h-50" id="validationCustomsfd" required
                                    name="job_titles[]">
                                    @foreach ($jobTitles as $jobTitle)
                                        @if ($experience->job_title == $jobTitle)
                                            <option value="{{ $jobTitle }}" selected>{{ $jobTitle }}</option>
                                        @else
                                            <option value="{{ $jobTitle }}">{{ $jobTitle }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6 pt-4">
                                <label for="validationCustom03" class="form-label">Start Date</label>
                                <input type="date" name="start_date[]" value="{{ $experience->start_date }}"
                                    class="form-control" id="validationCustom03" required>
                                <div class="invalid-feedback">
                                    Please provide a valid no.
                                </div>
                            </div>
                            <div class="col-md-6 pt-4">
                                <label for="validationCustom04" class="form-label">End Date</label>
                                <input type="date" name="end_date[]" value="{{ $experience->end_date }}"
                                    class="form-control" id="validationCustom04">
                                <div class="invalid-feedback">
                                    Please provide a valid no.
                                </div>
                            </div>
                            <div class="col-md-6 pt-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="invalidCheck"
                                        name="is_currently_working[]" @if ($experience->is_currently_working == true) checked @endif>
                                    <label class="form-check-label" for="invalidCheck">
                                        is Currenty working
                                    </label>
                                </div>
                            </div>

                            <div class="col-12 pt-4">
                                <div class="mb-3">
                                    <label for="Textarea" class="form-label">Description</label>
                                    <textarea class="form-control " name="descriptions[]" id="Textarea" required>{{ $experience->description }}</textarea>
                                </div>
                            </div>
                        @empty
                        <div class="col-md-6 pt-4 ">
                            <label for="validationCustomsfd" class="form-label">Company</label>
                            <select class="form-select  w-100 h-50" id="validationCustomsfd" required
                                name="companies[]">
                                @foreach ($companies as $company)
                                <option value="{{ $company }}">{{ $company }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 pt-4 ">
                            <label for="validationCustomsfd" class="form-label">Position</label>
                            <select class="form-select  w-100 h-50" id="validationCustomsfd" required
                                name="positions[]">
                                @foreach ($positions as $position)
                                <option value="{{ $position }}">{{ $position }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 pt-4 ">
                            <label for="validationCustomsfd" class="form-label">Job Title</label>
                            <select class="form-select  w-100 h-50" id="validationCustomsfd" required
                                name="job_titles[]">
                                @foreach ($jobTitles as $jobTitle)
                                <option value="{{ $jobTitle }}">{{ $jobTitle }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6 pt-4">
                            <label for="validationCustom03" class="form-label">Start Date</label>
                            <input type="date" name="start_date[]" value=""
                                class="form-control" id="validationCustom03" required>
                            <div class="invalid-feedback">
                                Please provide a valid no.
                            </div>
                        </div>
                        <div class="col-md-6 pt-4">
                            <label for="validationCustom04" class="form-label">End Date</label>
                            <input type="date" name="end_date[]" value=""
                                class="form-control" id="validationCustom04">
                            <div class="invalid-feedback">
                                Please provide a valid no.
                            </div>
                        </div>
                        <div class="col-md-6 pt-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="invalidCheck"
                                    name="is_currently_working[]" >
                                <label class="form-check-label" for="invalidCheck">
                                    is Currenty working
                                </label>
                            </div>
                        </div>

                        <div class="col-12 pt-4">
                            <div class="mb-3">
                                <label for="Textarea" class="form-label">Description</label>
                                <textarea class="form-control " name="descriptions[]" id="Textarea" required></textarea>
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
