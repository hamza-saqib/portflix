<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Login | {{env('APP_NAME')}}</title>

    <link href="{{ asset('assets/adminpanel') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets/adminpanel') }}/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="{{ asset('assets/adminpanel') }}/css/animate.css" rel="stylesheet">
    <link href="{{ asset('assets/adminpanel') }}/css/style.css" rel="stylesheet">


</head>

<body class="gray-bg">
    <div style="text-align: center">
        <h1 class="logo-name" >{{config('app.name')}}</h1>
    </div>
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>

            <h3>Welcome to {{config('app.name')}}</h3>
            {{-- <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views. --}}
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <p>Login in. To see it in action.</p>
            <form class="m-t" method="POST" role="form" action="{{route('admin.login')}}">
                @csrf
                <div class="form-group @error('email') has-error @enderror">
                    <input id="email" name="email" type="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                </div>
                <div class="form-group @error('email') has-error @enderror @error('password') has-error @enderror @error('is_active') has-error @enderror">
                    <input id="password" name="password" type="password" class="form-control" placeholder="Password" required autocomplete="current-password">
                    @error('email')
                        <span class="help-block m-b-none" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                    @error('password')
                        <span class="help-block m-b-none" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                    @error('is_active')
                        <span class="help-block m-b-none" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">{{ __('Login') }}</button>
            </form>
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="{{ asset('assets') }}/js/jquery-2.1.1.js"></script>
    <script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>

</body>

</html>
