<div class="header_start">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 m-auto">
                <a href="mailto:hananrasheed2327@gmail.com" class="text-white m-auto">hananrasheed2327@gmail.com</a>
            </div>
            <div class="col-lg-3 ">
                <ul class="nav ">
                    <li class="nav-item ">
                        <a class="nav-link active text-white" aria-current="page" href="#"><i
                                class="fa-brands fa-facebook-f fa-lg"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#"><i class="fa-brands fa-instagram"></i></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-white" href="#"><i class="fa-brands fa-twitter"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#"><i class="fa-regular fa-envelope"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    </li>

                </ul>


            </div>
            <div class="col-lg-2">
                <ul class="nav bg-white my_account ">
                    <li class="nav-item  m-auto dropdown">
                        <a class="nav-link dropdown-toggle mr-0 " href="#" id="navbarDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            My Account
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            @guest
                            <li><a class="dropdown-item" href="{{route('login')}}">Sign In</a></li>
                            <li><a class="dropdown-item" href="{{route('register')}}">Create Account</a></li>
                            @else
                            <li><a class="dropdown-item" href="{{route('home')}}">Dashboard</a></li>
                            <li><a class="dropdown-item" href="{{route('profile.basic')}}">Profile Setting</a></li>
                            <li><a class="dropdown-item" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" href="{{route('logout')}}">Logout</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                            @endguest
                        </ul>
                    </li>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-white ">
    <div class="container my-3">
        <a class="navbar-brand ml-md-3" href="{{route('index')}}">
            <h4>Portflix</h4>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto header_font ">
                <li class="nav-item  pl-3 ">
                    <a class="nav-link " aria-current="page" href="{{route('index')}}">Home</a>
                </li>
                <li class="nav-item pl-3">
                    <a class="nav-link" href="{{route('blogs.index')}}">Blogs</a>
                </li>
                <li class="nav-item pl-3">
                    <a class="nav-link" href="{{route('about-us')}}">About US</a>
                </li>
                <li class="nav-item pl-3 dropdown">
                    <a class="nav-link dropdown-toggle" href="{route('themes.index', 'all')}}" id="navbarDropdownMenuLink"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Themes
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{route('themes.index', 'all')}}">All Themes</a></li>
                        <li><a class="dropdown-item" href="{{route('themes.categories')}}">Themes by Category</a></li>
                        <li><a class="dropdown-item" href="{{route('themes.index', 'photography')}}">Photography</a></li>
                        <li><a class="dropdown-item" href="{{route('themes.index', 'business')}}">Business</a></li>
                        <li><a class="dropdown-item" href="{{route('themes.index', 'fashion_design')}}">Fashion Designing</a></li>
                        <li><a class="dropdown-item" href="{{route('themes.index', 'it')}}">Information Technology</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown pl-3">
                    <a class="nav-link dropdown-toggle" href="{{route('services.index')}}" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">SEO</a></li>
                        <li><a class="dropdown-item" href="#">APIs</a></li>
                    </ul>
                </li>
                <li class="nav-item pl-3">
                    <a class="nav-link" href="#">Contact US</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
