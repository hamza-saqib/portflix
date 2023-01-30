@extends('layouts.master')

@section('content')
    <div class="container-fluid ">
        <div class="row mt-4 ">
            <div class="col">
                <img src="{{ asset('assets/website') }}/images/app_banner.png" class="d-block w-100">
            </div>
        </div>
    </div>


    <div class="container my-5 ">
        <div class="row">
            <div class="col-md-12 text-center section">
                <h3>About Us</h3>
            </div>
        </div>
    </div>


    <div class="container  about_bg_clr">
        <div class="row py-4 ">
            <div class="col-6">
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit.</p>
            </div>
            <div class="col-6">
                <img src="{{ asset('assets/website') }}/images/about-img.jpg" alt="" class="d-block w-100">
            </div>
        </div>
    </div>

    <div class="container my-5 ">
        <div class="row">
            <div class="col-md-12 text-center section">
                <h3>Team</h3>
            </div>
        </div>
    </div>

    <div class="container my-5 ">
        <div class="row">
            <div class="col-4">
                <div class="card ">
                    <img src="{{ asset('assets/website') }}/images/team-member-2.jpg" class="img-fluid" alt="...">
                    <div class="card-body about_card_bg_clr">
                        <h5 class="text-center">Arwa Abdullah</h5>
                        <ul class="nav ml-4">
                            <li class="nav-item  ">
                                <a class="nav-link active text-dark" aria-current="page" href="#"><i
                                        class="fa-brands fa-facebook-f fa-lg"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="#"><i class="fa-brands fa-instagram"></i></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-dark" href="#"><i class="fa-brands fa-twitter"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="#"><i class="fa-regular fa-envelope"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card ">
                    <img src="{{ asset('assets/website') }}/images/hanan f.png" class="img-fluid" alt="...">
                    <div class="card-body about_card_bg_clr">
                        <h5 class="text-center">Abdul Hanan</h5>
                        <ul class="nav ml-4">
                            <li class="nav-item  ">
                                <a class="nav-link active text-dark" aria-current="page" href="#"><i
                                        class="fa-brands fa-facebook-f fa-lg"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="#"><i class="fa-brands fa-instagram"></i></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-dark" href="#"><i class="fa-brands fa-twitter"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="#"><i class="fa-regular fa-envelope"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card ">
                    <img src="{{ asset('assets/website') }}/images/team-member-2.jpg" class="img-fluid" alt="...">
                    <div class="card-body about_card_bg_clr">
                        <h5 class="text-center">Maria Anwar</h5>
                        <ul class="nav ml-4">
                            <li class="nav-item  ">
                                <a class="nav-link active text-dark" aria-current="page" href="#"><i
                                        class="fa-brands fa-facebook-f fa-lg"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="#"><i class="fa-brands fa-instagram"></i></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-dark" href="#"><i class="fa-brands fa-twitter"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="#"><i class="fa-regular fa-envelope"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
