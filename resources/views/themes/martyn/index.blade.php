<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="Anil z" name="author">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Creating a professional, modern and sophisticated online resume website is easy with Martyn CV / Resume">
    <meta name="keywords"
        content="CV, resume, card, vcard, online cv, online resume, professional resume, portfolio, one page, bootstrap responsive, creative html template, creative design, parallax, personal">

    <!-- SITE TITLE -->
    <title>Martyn CV - Resume / CV / Portfolio & vCard HTML5 Template</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon"
        href="{{ asset('assets/website/themes/' . $theme->files_path) }}/images/favicon.png">
    <!-- Animation CSS -->
    <link rel="stylesheet" href="{{ asset('assets/website/themes/' . $theme->files_path) }}/css/animate.css">
    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet"
        href="{{ asset('assets/website/themes/' . $theme->files_path) }}/bootstrap/css/bootstrap.min.css">
    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('assets/website/themes/' . $theme->files_path) }}/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('assets/website/themes/' . $theme->files_path) }}/css/themify-icons.css">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/website/themes/' . $theme->files_path) }}/css/all.min.css">
    <!-- Flaticon Font CSS -->
    <link rel="stylesheet" href="{{ asset('assets/website/themes/' . $theme->files_path) }}/css/flaticon.css">
    <!--- owl carousel CSS-->
    <link rel="stylesheet"
        href="{{ asset('assets/website/themes/' . $theme->files_path) }}/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet"
        href="{{ asset('assets/website/themes/' . $theme->files_path) }}/owlcarousel/css/owl.theme.css">
    <link rel="stylesheet"
        href="{{ asset('assets/website/themes/' . $theme->files_path) }}/owlcarousel/css/owl.theme.default.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('assets/website/themes/' . $theme->files_path) }}/css/magnific-popup.css">
    <!-- Scrollbar Css -->
    <link rel="stylesheet"
        href="{{ asset('assets/website/themes/' . $theme->files_path) }}/css/jquery.mCustomScrollbar.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/website/themes/' . $theme->files_path) }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('assets/website/themes/' . $theme->files_path) }}/css/responsive.css">

</head>

<body data-spy="scroll" data-target=".navbar-nav" data-offset="110">

    <!-- LOADER -->
    <div class="preloader">
        <div class="loader">
            <div class="loader-inner ball-scale">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- END LOADER -->

    <!-- START HEADER -->
    <header class="header_wrap fixed-top dark_skin hover_menu_style3 transparent-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand page-scroll" href="#home_section">
                    <img class="logo_light"
                        src="{{ asset('assets/website/themes/' . $theme->files_path) }}/images/logo_white.png"
                        alt="logo" />
                    <img class="logo_dark"
                        src="{{ asset('assets/website/themes/' . $theme->files_path) }}/images/logo_dark.png"
                        alt="logo" />
                    <img class="logo_default"
                        src="{{ asset('assets/website/themes/' . $theme->files_path) }}/images/logo_dark.png"
                        alt="logo" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation"> <span class="ion-android-menu"></span> </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <a class="navbar-brand page-scroll" href="#home_section">
                        <img class="logo_light"
                            src="{{ asset('assets/website/themes/' . $theme->files_path) }}/images/logo_white.png"
                            alt="logo" />
                        <img class="logo_dark"
                            src="{{ asset('assets/website/themes/' . $theme->files_path) }}/images/logo_dark.png"
                            alt="logo" />
                        <img class="logo_default"
                            src="{{ asset('assets/website/themes/' . $theme->files_path) }}/images/logo_dark.png"
                            alt="logo" />
                    </a>
                    <ul class="navbar-nav">
                        <li>
                            <a class="nav-link active page-scroll" href="#home_section">Home</a>
                        </li>
                        <li>
                            <a class="nav-link page-scroll" href="#about">About</a>
                        </li>
                        <li>
                            <a class="nav-link page-scroll" href="#services">Services</a>
                        </li>
                        <li>
                            <a class="nav-link page-scroll" href="#portfolio">Portfolio</a>
                        </li>
                        <li>
                            <a class="nav-link page-scroll" href="#experience">Experience</a>
                        </li>
                        <li>
                            <a class="nav-link page-scroll" href="#blog">blog</a>
                        </li>
                        <li>
                            <a class="nav-link page-scroll" href="#contact">contact</a>
                        </li>
                        {{-- <li class="dropdown">
                            <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu dropdown-reverse">
                                <ul>
                                    <li><a class="dropdown-item nav-link nav_item"
                                            href="portfolio-detail-dark.html">portfolio detail dark</a></li>
                                    <li><a class="dropdown-item nav-link nav_item"
                                            href="portfolio-detail-sidemenu-dark.html">portfolio detail sidemenu
                                            dark</a></li>
                                    <li><a class="dropdown-item nav-link nav_item"
                                            href="portfolio-detail-sidemenu-white.html">portfolio detail sidemenu
                                            white</a></li>
                                    <li><a class="dropdown-item nav-link nav_item"
                                            href="portfolio-detail-white.html">portfolio detail white</a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="blog-detail-dark.html">blog
                                            detail dark</a></li>
                                    <li><a class="dropdown-item nav-link nav_item"
                                            href="blog-detail-sidemenu-dark.html">blog detail sidemenu dark</a></li>
                                    <li><a class="dropdown-item nav-link nav_item"
                                            href="blog-detail-sidemenu-white.html">blog detail sidemenu white</a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="blog-detail-white.html">blog
                                            detail white</a></li>
                                </ul>
                            </div>
                        </li> --}}
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- START HEADER -->

    <!-- START SECTION BANNER -->
    <section id="home_section" class="banner_section banner_shape">
        <div class="banner_slide_content pb-0">
            <div class="container">
                <!-- STRART CONTAINER -->
                <div class="row justify-content-between align-items-center">
                    <div class="col-xl-6 col-md-7">
                        <div class="banner_content banner_center_content">
                            <h2 class="animation" data-animation="fadeInUp" data-animation-delay="0.02s">Hello, I'm
                                {{ $user->name }}</h2>
                            <div id="typed-strings" class="d-none">
                                <b>UI/UX Designer</b> <b>Web Developer</b>
                            </div>
                            <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.03s">I'm a
                                Freelance <span id="typed-text" class="text_default"></span></h4>
                            <p class="animation" data-animation="fadeInUp" data-animation-delay="0.04s">
                                {{ $user->bio }}</p>
                            <a href="#" class="btn btn-default rounded-0 btn-aylen animation"
                                data-animation="fadeInUp" data-animation-delay="0.05s">Download CV</a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-5">
                        <div class="banner_img animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                            <img src="{{ asset('assets/website/themes/' . $theme->files_path) }}/images/my_image.png"
                                alt="my_image" />
                        </div>
                    </div>
                </div>
            </div><!-- END CONTAINER-->
        </div>
        <div class="social_banner social_vertical">
            <ul class="list_none social_icons text-center">
                <li><a href="{{ $user->facebook }}" target="_blank" class="sc_facebook"><i
                            class="ion-social-facebook"></i></a></li>
                <li><a href="{{ $user->twiter }}" target="_blank" class="sc_twitter"><i
                            class="ion-social-twitter"></i></a></li>
                <li><a href="{{ $user->twiter }}" target="_blank" class="sc_google"><i
                            class="ion-social-googleplus"></i></a></li>
                <li><a href="{{ $user->twiter }}" target="_blank" class="sc_youtube"><i
                            class="ion-social-youtube-outline"></i></a></li>
                <li><a href="{{ $user->instagram }}" target="_blank" class="sc_instagram"><i
                            class="ion-social-instagram-outline"></i></a></li>
            </ul>
        </div>
    </section>
    <!-- END SECTION BANNER -->

    <!-- START SECTION ABOUT US -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="about_img animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                        <img src="{{ asset('assets/website/themes/' . $theme->files_path) }}/images/about_img.png"
                            alt="about_img" />
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="about_info animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                        <div class="heading_s1 mb-3">
                            <h2>About Me</h2>
                        </div>
                        <p>{{ $user->bio }}</p>
                        <hr>
                        <div class="heading_s1 mb-4">
                            <h5>Basic Info</h5>
                        </div>
                        <ul class="profile_info list_none">
                            <li>
                                <span class="title">Date of birth:</span>
                                <p>{{ $user->date_of_birth }}</p>
                            </li>
                            <li>
                                <span class="title">Phone No:</span>
                                <p>{{ $user->phone }}</p>
                            </li>
                            <li>
                                <span class="title">Email:</span>
                                <a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                            </li>
                            <li>
                                <span class="title">Address:</span>
                                <p> {{ $user->address }}</p>
                            </li>
                            <li>
                                <span class="title">Website:</span>
                                <p> {{ $user->web_url }} </p>
                            </li>
                            <li>
                                <span class="title">Freelance:</span>
                                <p>Available</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION ABOUT US -->

    <!-- START SECTION SERVICES -->
    <section id="services" class="bg_gray">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-9 text-center">
                    <div class="heading_s1 animation text-center" data-animation="fadeInUp"
                        data-animation-delay="0.02s">
                        <h2>Awesome Services</h2>
                    </div>
                    <p class="animation" data-animation="fadeInUp" data-animation-delay="0.03s">Lorem ipsum dolor sit
                        amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius
                        nunc.</p>
                </div>
            </div>
            <div class="row animation" data-animation="fadeInUp" data-animation-delay="0.04s">
                @foreach ($user->services as $service)
                    <div class="col-lg-4 col-sm-6 text-center">
                        <div class="icon_box icon_box_style_1">
                            <div class="box_icon mb-3">
                                <i class="ti-image"></i>
                            </div>
                            <div class="icon_box_content">
                                <h5>{{ $service->name }}</h5>
                                <p>{{ $service->summary }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="col-lg-4 col-sm-6 text-center">
            	<div class="icon_box icon_box_style_1">
                    <div class="box_icon mb-3">
                        <i class="ti-video-camera"></i>
                    </div>
                    <div class="icon_box_content">
                        <h5>Digital Marketing</h5>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
            	<div class="icon_box icon_box_style_1">
                    <div class="box_icon mb-3">
                        <i class="ti-crown"></i>
                    </div>
                    <div class="icon_box_content">
                        <h5>Branding</h5>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
                    </div>
                 </div>
            </div>
        	<div class="col-lg-4 col-sm-6 text-center">
            	<div class="icon_box icon_box_style_1">
                    <div class="box_icon mb-3">
                        <i class="ti-light-bulb"></i>
                    </div>
                    <div class="icon_box_content">
                        <h5>Development</h5>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
            	<div class="icon_box icon_box_style_1">
                    <div class="box_icon mb-3">
                        <i class="ti-mobile"></i>
                    </div>
                    <div class="icon_box_content">
                        <h5>Mobile Application</h5>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
            	<div class="icon_box icon_box_style_1">
                    <div class="box_icon mb-3">
						<i class="ti-camera"></i>
                    </div>
                    <div class="icon_box_content">
                        <h5>Photography</h5>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
                    </div>
                </div>
            </div> --}}
            </div>
        </div>
    </section>
    <!-- END SECTION SERVICES -->

    <!-- START SECTION PORTFOLIO -->
    <section id="portfolio" class="pb_70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-9 text-center">
                    <div class="heading_s1 animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                        <h2>My Portfolio</h2>
                    </div>
                    <p class="animation" data-animation="fadeInUp" data-animation-delay="0.03s">Lorem ipsum dolor sit
                        amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius
                        nunc.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="cleafix small_divider"></div>
                </div>
            </div>
            <div class="row mb-4 mb-md-5">
                <div class="col-md-12 text-center">
                    <ul class="list_none grid_filter filter_tab2 animation" data-animation="fadeInUp"
                        data-animation-delay="0.04s">
                        <li><a href="#" class="current" data-filter="*">all</a></li>
                        <li><a href="#" data-filter=".brands">Branding</a></li>
                        <li><a href="#" data-filter=".web-design">Web Design</a></li>
                        <li><a href="#" data-filter=".development">Development</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul class="grid_container gutter_medium work_col3 portfolio_gallery portfolio_style2 animation"
                        data-animation="fadeInUp" data-animation-delay="0.04s">
                        <li class="grid-sizer"></li>
                        <!-- START PORTFOLIO ITEM -->
                        <li class="grid_item web-design">
                            <div class="portfolio_item" data-tilt>
                                <a href="#" class="image_link">
                                    <img src="{{ asset('assets/website/themes/' . $theme->files_path) }}/images/portfolio_item_small1.jpg"
                                        alt="image">
                                </a>
                                <div class="portfolio_content">
                                    <div class="link_container">
                                        <a href="{{ asset('assets/website/themes/' . $theme->files_path) }}/images/portfolio_item1.jpg"
                                            class="image_popup"><i class="ion-image"></i></a>
                                        <a href="portfolio-detail-white.html"><i class="ion-plus"></i></a>
                                    </div>
                                    <h5><a href="portfolio-detail-white.html">Branded Products</a></h5>
                                    <p>Web Design</p>
                                </div>
                            </div>
                        </li>
                        <!-- END PORTFOLIO ITEM -->
                        <!-- START PORTFOLIO ITEM -->
                        <li class="grid_item brands web-design development">
                            <div class="portfolio_item" data-tilt>
                                <a href="#" class="image_link">
                                    <img src="{{ asset('assets/website/themes/' . $theme->files_path) }}/images/portfolio_item_small2.jpg"
                                        alt="image">
                                </a>
                                <div class="portfolio_content">
                                    <div class="link_container">
                                        <a href="{{ asset('assets/website/themes/' . $theme->files_path) }}/images/portfolio_item2.jpg"
                                            class="image_popup"><i class="ion-image"></i></a>
                                        <a href="portfolio-detail-white.html"><i class="ion-plus"></i></a>
                                    </div>
                                    <h5><a href="portfolio-detail-white.html">Visiting Card</a></h5>
                                    <p>Branding, Web Design, Development</p>
                                </div>
                            </div>
                        </li>
                        <!-- END PORTFOLIO ITEM -->
                        <!-- START PORTFOLIO ITEM -->
                        <li class="grid_item brands web-design">
                            <div class="portfolio_item" data-tilt>
                                <div class="carousel_slider owl-carousel owl-theme dots_white" data-autoplay="true"
                                    data-loop="false" data-animate-in="fadeIn" data-animate-out="fadeOut"
                                    data-autoplay-timeout="3000" data-items="1">
                                    <a href="#" class="image_link">
                                        <img src="{{ asset('assets/website/themes/' . $theme->files_path) }}/images/portfolio_item_small3.jpg"
                                            alt="image">
                                    </a>
                                    <a href="#" class="image_link">
                                        <img src="{{ asset('assets/website/themes/' . $theme->files_path) }}/images/portfolio_item_small4.jpg"
                                            alt="image">
                                    </a>
                                </div>
                                <div class="portfolio_content">
                                    <div class="link_container">
                                        <a href="{{ asset('assets/website/themes/' . $theme->files_path) }}/images/portfolio_item3.jpg"
                                            class="image_popup"><i class="ion-images"></i></a>
                                        <a href="{{ asset('assets/website/themes/' . $theme->files_path) }}/images/portfolio_item4.jpg"
                                            class="image_popup d-none"></a>
                                        <a href="portfolio-detail-white.html"><i class="ion-plus"></i></a>
                                    </div>
                                    <h5><a href="portfolio-detail-white.html">Coffee Cup Mockup</a></h5>
                                    <p>Branding, Web Design</p>
                                </div>
                            </div>
                        </li>
                        <!-- END PORTFOLIO ITEM -->
                        <!-- START PORTFOLIO ITEM -->
                        <li class="grid_item brands development">
                            <div class="portfolio_item" data-tilt>
                                <a href="#" class="image_link">
                                    <img src="{{ asset('assets/website/themes/' . $theme->files_path) }}/images/portfolio_item_small5.jpg"
                                        alt="image">
                                </a>
                                <div class="portfolio_content">
                                    <div class="link_container">
                                        <a href="{{ asset('assets/website/themes/' . $theme->files_path) }}/images/portfolio_item5.jpg"
                                            class="image_popup"><i class="ion-image"></i></a>
                                        <a href="portfolio-detail-white.html"><i class="ion-plus"></i></a>
                                    </div>
                                    <h5><a href="portfolio-detail-white.html">Letter Design</a></h5>
                                    <p>Branding, Development</p>
                                </div>
                            </div>
                        </li>
                        <!-- END PORTFOLIO ITEM -->
                        <!-- START PORTFOLIO ITEM -->
                        <li class="grid_item brands web-design development">
                            <div class="portfolio_item" data-tilt>
                                <a href="#" class="image_link">
                                    <img src="{{ asset('assets/website/themes/' . $theme->files_path) }}/images/portfolio_item_small6.jpg"
                                        alt="image">
                                </a>
                                <div class="portfolio_content">
                                    <div class="link_container">
                                        <a href="{{ asset('assets/website/themes/' . $theme->files_path) }}/images/portfolio_item6.jpg"
                                            class="image_popup"><i class="ion-image"></i></a>
                                        <a href="portfolio-detail-white.html"><i class="ion-plus"></i></a>
                                    </div>
                                    <h5><a href="portfolio-detail-white.html">Branding Cap</a></h5>
                                    <p>Branding, Web Design, Development</p>
                                </div>
                            </div>
                        </li>
                        <!-- END PORTFOLIO ITEM -->
                        <!-- START PORTFOLIO ITEM -->
                        <li class="grid_item brands web-design development">
                            <div class="portfolio_item" data-tilt>
                                <a href="#" class="image_link">
                                    <img src="{{ asset('assets/website/themes/' . $theme->files_path) }}/images/portfolio_item_small7.jpg"
                                        alt="image">
                                </a>
                                <div class="portfolio_content">
                                    <div class="link_container">
                                        <a href="{{ asset('assets/website/themes/' . $theme->files_path) }}/images/portfolio_item7.jpg"
                                            class="image_popup"><i class="ion-image"></i></a>
                                        <a href="portfolio-detail-white.html"><i class="ion-plus"></i></a>
                                    </div>
                                    <h5><a href="portfolio-detail-white.html">Branding Cream</a></h5>
                                    <p>Branding, Web Design, Development</p>
                                </div>
                            </div>
                        </li>
                        <!-- END PORTFOLIO ITEM -->
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION PORTFOLIO -->

    <!-- START SECTION COUNTER -->
    <section class="counter_wrap bg_gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-6">
                    <div class="box_counter counter_dark text-center animation" data-animation="fadeInUp"
                        data-animation-delay="0.02s">
                        <i class="flaticon-briefing"></i>
                        <h3 class="counter_text"><span class="counter">800</span>+</h3>
                        <p>Projects Completed</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6">
                    <div class="box_counter counter_dark text-center animation" data-animation="fadeInUp"
                        data-animation-delay="0.03s">
                        <i class="flaticon-laugh"></i>
                        <h3 class="counter_text"><span class="counter">524</span></h3>
                        <p>Happy Clients</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6">
                    <div class="box_counter counter_dark text-center animation" data-animation="fadeInUp"
                        data-animation-delay="0.04s">
                        <i class="flaticon-coffee-cup"></i>
                        <h3 class="counter_text"><span class="counter">654</span></h3>
                        <p>Cup Of Tea</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6">
                    <div class="box_counter counter_dark text-center animation" data-animation="fadeInUp"
                        data-animation-delay="0.05s">
                        <i class="flaticon-trophy"></i>
                        <h3 class="counter_text"><span class="counter">225</span></h3>
                        <p>Awards Won</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION COUNTER -->

    <!-- START WORK EXPERIENCES -->
    <section id="experience">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-9 text-center">
                    <div class="heading_s1 animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                        <h2>Work Experiences</h2>
                    </div>
                    <p class="animation" data-animation="fadeInUp" data-animation-delay="0.03s">Lorem ipsum dolor sit
                        amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius
                        nunc.</p>
                </div>
            </div>
            <div class="row animation" data-animation="fadeInUp" data-animation-delay="0.04s">
                <div class="col-lg-4 col-sm-6">
                    <div class="icon_box icon_box_style_2">
                        <div class="icon_box_content">
                            <h4>UI/UX Designer</h4>
                            <p><span class="text_default">2002-2006</span> Adobe Inc.</p>
                            <hr>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="icon_box icon_box_style_2">
                        <div class="icon_box_content">
                            <h4>Web Design</h4>
                            <p><span class="text_default">2007-2010</span> Google Inc.</p>
                            <hr>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="icon_box icon_box_style_2">
                        <div class="icon_box_content">
                            <h4>Web Development</h4>
                            <p><span class="text_default">2010-2013</span> Adobe Inc.</p>
                            <hr>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- END WORK EXPERIENCES -->

    <!-- START SECTION TESTIMONIAL -->
    <section class="bg_gray">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-9 text-center">
                    <div class="heading_s1 animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                        <h2>Clients Testimonials</h2>
                    </div>
                    <p class="animation" data-animation="fadeInUp" data-animation-delay="0.03s">Lorem ipsum dolor sit
                        amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius
                        nunc.</p>
                    <div class="cleafix small_divider"></div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.04s">
                    <div class="carousel_slider testimonial_style1 owl-carousel owl-theme" data-margin="20"
                        data-dots="false" data-loop="true" data-autoplay="true"
                        data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "1199":{"items": "3"}}'>
                        @foreach ($user->testimonials as $testimonial)
                            <div class="item">
                                <div class="testimonial_box">
                                    <div class="testimonial_user">
                                        <div class="testimonial_img">
                                            <img src="{{ asset('assets/website/themes/' . $theme->files_path) }}/images/client_img1.jpg"
                                                alt="client" />
                                        </div>
                                        <div class="client_info">
                                            <h6>{{ $testimonial->customer_name }}</h6>
                                            <span>Developer</span>
                                        </div>
                                    </div>
                                    <div class="testi_meta">
                                        <p>{{ $testimonial->message }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{-- <div class="item">
                            <div class="testimonial_box">
                                <div class="testimonial_user">
                                    <div class="testimonial_img">
                                        <img src="{{ asset('assets/website/themes/' . $theme->files_path) }}/images/client_img2.jpg"
                                            alt="client" />
                                    </div>
                                    <div class="client_info">
                                        <h6>Alden Smith</h6>
                                        <span>Creative Designer</span>
                                    </div>
                                </div>
                                <div class="testi_meta">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, quaeillo inventore veritatis et quasi architecto
                                        explicabo.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial_box">
                                <div class="testimonial_user">
                                    <div class="testimonial_img">
                                        <img src="{{ asset('assets/website/themes/' . $theme->files_path) }}/images/client_img3.jpg"
                                            alt="client" />
                                    </div>
                                    <div class="client_info">
                                        <h6>Daisy Lana</h6>
                                        <span>Creative Director</span>
                                    </div>
                                </div>
                                <div class="testi_meta">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, quaeillo inventore veritatis et quasi architecto
                                        explicabo.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial_box">
                                <div class="testimonial_user">
                                    <div class="testimonial_img">
                                        <img src="{{ asset('assets/website/themes/' . $theme->files_path) }}/images/client_img4.jpg"
                                            alt="client" />
                                    </div>
                                    <div class="client_info">
                                        <h6>Helena Amos</h6>
                                        <span>Creative Designer</span>
                                    </div>
                                </div>
                                <div class="testi_meta">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, quaeillo inventore veritatis et quasi architecto
                                        explicabo.</p>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION TESTIMONIAL -->

    <!-- START SECTION BLOG -->
    <section id="blog" class="pb_20">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-9 text-center">
                    <div class="heading_s1 animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                        <h2>My Letest Blog</h2>
                    </div>
                    <p class="animation" data-animation="fadeInUp" data-animation-delay="0.03s">Lorem ipsum dolor sit
                        amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius
                        nunc.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="clearfix small_divider"></div>
                </div>
            </div>
            <div class="row justify-content-center animation" data-animation="fadeInUp" data-animation-delay="0.04s">
                @foreach ($user->blogs as $blog)
                    <div class="col-lg-4 col-md-6">
                        <div class="blog_post">
                            <div class="blog_img">
                                <a href="blog-detail-white.html">
                                    <img src="{{ asset('assets/website/themes/' . $theme->files_path) }}/images/blog_small_img1.jpg"
                                        alt="blog_small_img1">
                                </a>
                            </div>
                            <div class="blog_content">
                                <div class="blog_text">
                                    <div class="post_category"><a href="#">UI/UX Design</a></div>
                                    <h5 class="blog_title"><a href="blog-detail-white.html">{{ $blog->title }} </a>
                                    </h5>
                                    <ul class="list_none blog_meta">
                                        <li><a href="#"><i class="ion-calendar"></i>{{ $blog->created_at }}</a>
                                        </li>
                                        <li><a href="#"><i class="ion-chatboxes"></i>2 Comment</a></li>
                                    </ul>
                                    <p>{{ $blog->summary }}</p>
                                    <a href="blog-detail-white.html" class="read_more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- END SECTION BLOG -->

    <!-- START SECTION CONTACT -->
    <section id="contact" class="small_pt">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading_s1 animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                        <h2>Contact Me</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="field_form form_style3 animation" data-animation="fadeInUp"
                        data-animation-delay="0.02s">
                        <form method="post" name="enq">
                            <div class="row">
                                <div class="form-group col-12">
                                    <input required="required" placeholder="Enter Name *" id="first-name"
                                        class="form-control" name="name" type="text">
                                </div>
                                <div class="form-group col-12">
                                    <input required="required" placeholder="Enter Email *" id="email"
                                        class="form-control" name="email" type="email">
                                </div>
                                <div class="form-group col-12">
                                    <input placeholder="Enter Subject" id="subject" class="form-control"
                                        name="subject" type="text">
                                </div>
                                <div class="form-group col-lg-12">
                                    <textarea required="required" placeholder="Message *" id="description" class="form-control" name="message"
                                        rows="5"></textarea>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" title="Submit Your Message!"
                                        class="btn btn-default rounded-0 btn-aylen" id="submitButton" name="submit"
                                        value="Submit">Submit</button>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <div id="alert-msg" class="alert-msg text-center"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact_map mt-4 mt-md-0 animation" data-animation="fadeInUp"
                        data-animation-delay="0.03s">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193229.77301255226!2d-74.05531241936525!3d40.823236500441624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2f613438663b5%3A0xce20073c8862af08!2sW+123rd+St%2C+New+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1533565007513"
                            allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- START SECTION CONTACT -->

    <!-- START FOOTER SECTION -->
    <footer class="bg_gray">
        <div class="top_footer">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="footer_logo">
                            <a href="index.html"><img alt="logo"
                                    src="{{ asset('assets/website/themes/' . $theme->files_path) }}/images/logo_dark.png"></a>
                        </div>
                        <h6 class="widget_title pt-3">Subscribe Our Newsletter</h6>
                        <div class="newsletter_form newslattter_small">
                            <form>
                                <div class="outline_input-black">
                                    <input type="text" required="" placeholder="Enter Email Address">
                                </div>
                                <button type="submit" title="Subscribe" class="btn btn-default rounded-0 btn-aylen"
                                    name="submit" value="Submit">
                                    subscribe
                                </button>
                            </form>
                        </div>
                        <ul class="list_none social_icons pt-4">
                            <li><a href="{{ $user->facebook }}" target="_blank" class="sc_facebook"><i
                                        class="ion-social-facebook"></i></a></li>
                            <li><a href="{{ $user->twiter }}" target="_blank" class="sc_twitter"><i
                                        class="ion-social-twitter"></i></a></li>
                            <li><a href="{{ $user->twiter }}" target="_blank" class="sc_google"><i
                                        class="ion-social-googleplus"></i></a></li>
                            <li><a href="{{ $user->twiter }}" target="_blank" class="sc_youtube"><i
                                        class="ion-social-youtube-outline"></i></a>
                            </li>
                            <li><a href="{{ $user->instagram }}}}" target="_blank" class="sc_instagram"><i
                                        class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bottom_footer border-top">
                        <div class="row">
                            <div class="col-12">
                                <p class="copyright m-0 text-center">© 2019 All Rights Reserved By <a href="#"
                                        class="text_default">Bestwebcreator</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER SECTION -->

    <a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>

    <!-- Latest jQuery -->
    <script src="{{ asset('assets/website/themes/' . $theme->files_path) }}/js/jquery-1.12.4.min.js"></script>
    <!-- jquery-ui -->
    <script src="{{ asset('assets/website/themes/' . $theme->files_path) }}/js/jquery-ui.js"></script>
    <!-- popper min js -->
    <script src="{{ asset('assets/website/themes/' . $theme->files_path) }}/js/popper.min.js"></script>
    <!-- Latest compiled and minified Bootstrap -->
    <script src="{{ asset('assets/website/themes/' . $theme->files_path) }}/bootstrap/js/bootstrap.min.js"></script>
    <!-- owl-carousel min js  -->
    <script src="{{ asset('assets/website/themes/' . $theme->files_path) }}/owlcarousel/js/owl.carousel.min.js"></script>
    <!-- magnific-popup min js  -->
    <script src="{{ asset('assets/website/themes/' . $theme->files_path) }}/js/magnific-popup.min.js"></script>
    <!-- waypoints min js  -->
    <script src="{{ asset('assets/website/themes/' . $theme->files_path) }}/js/waypoints.min.js"></script>
    <!-- parallax js  -->
    <script src="{{ asset('assets/website/themes/' . $theme->files_path) }}/js/parallax.js"></script>
    <!-- countdown js  -->
    <script src="{{ asset('assets/website/themes/' . $theme->files_path) }}/js/jquery.countdown.min.js"></script>
    <!-- jquery.counterup.min js -->
    <script src="{{ asset('assets/website/themes/' . $theme->files_path) }}/js/jquery.counterup.min.js"></script>
    <!-- imagesloaded js -->
    <script src="{{ asset('assets/website/themes/' . $theme->files_path) }}/js/imagesloaded.pkgd.min.js"></script>
    <!-- isotope min js -->
    <script src="{{ asset('assets/website/themes/' . $theme->files_path) }}/js/isotope.min.js"></script>
    <!-- vanilla-tilt.babel.min js -->
    <script src='{{ asset('assets/website/themes/' . $theme->files_path) }}/js/vanilla-tilt.babel.min.js'></script>
    <!-- typed.min js -->
    <script src="{{ asset('assets/website/themes/' . $theme->files_path) }}/js/typed.min.js"></script>
    <!-- typed text js -->
    <script src="{{ asset('assets/website/themes/' . $theme->files_path) }}/js/typed-text.js"></script>
    <!-- mCustomScrollbar.concat.min js -->
    <script src="{{ asset('assets/website/themes/' . $theme->files_path) }}/js/jquery.mCustomScrollbar.concat.min.js">
    </script>
    <!-- scripts js -->
    <script src="{{ asset('assets/website/themes/' . $theme->files_path) }}/js/scripts.js"></script>

</body>

</html>
