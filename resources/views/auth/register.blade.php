@extends('layouts.master')

@section('content')
    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
    <div class="container my-4">
        @foreach ($errors->all() as $error)
                    <p style="color: red;">{{ $error }}</p>
                @endforeach
        <div class="row justify-content-center">
            <div class="col-md-5 profile_bg_clr p-5">
                <h4 class="text-center">Create Account</h4>
                <p class="text-center">Please Register using account detail bellow.</p>
                <form class="row g-3 needs-validation" action="{{route('register')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12 pt-4">
                        <label for="validationCustom01" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="validationCustom01" name="name" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-12 pt-4">
                        <label for="validationCustom03" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" id="validationCustom03" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-12 pt-4">
                        <label for="validationCustom04" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="validationCustom04" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-12 pt-4">
                        <label for="validationCustom04" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation" id="validationCustom04" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                    <div class="col-12 pt-4">
                        <button class="btn btn-primary" type="submit">Create Account</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
