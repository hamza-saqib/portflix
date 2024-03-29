<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META INFO -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- PAGE TITLE -->
    <title>CKav | Blon - Personal Portfolio Template</title>

    <!-- META KEYWORDS AND DESCRIPTION -->
    <meta name="keywords"
        content="HTML5 Template, one page template, leanding page, themeforest template, ckavart, ckav, template, multipurpose template" />
    <meta name="description" content="Blon - Personal Portfolio Template">
    <meta name="author" content="CKav">

    <!-- META VIEW PORT -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- FAVICONS -->
    <link rel="icon" href="{{ asset('assets/website/themes/' . $theme->files_path) }}/images/favicons/favicon.ico">
    <link rel="apple-touch-icon"
        href="{{ asset('assets/website/themes/' . $theme->files_path) }}/images/favicons/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72"
        href="{{ asset('assets/website/themes/' . $theme->files_path) }}/images/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114"
        href="{{ asset('assets/website/themes/' . $theme->files_path) }}/images/favicons/apple-touch-icon-114x114.png">

    <!-- WEB FONT-FAMILY -->
    <link
        href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&display=swap"
        rel="stylesheet">

    <!-- VENDOR FONT ICONS CSS -->
    <link rel="stylesheet"
        href="{{ asset('assets/website/themes/' . $theme->files_path) }}/fonticons/fontawesome/css/all.min.css">
    <link rel="stylesheet"
        href="{{ asset('assets/website/themes/' . $theme->files_path) }}/fonticons/et-line/et-line-font.css">
    <link rel="stylesheet"
        href="{{ asset('assets/website/themes/' . $theme->files_path) }}/fonticons/material-webfont/css/materialdesignicons.min.css">
    <link rel="stylesheet"
        href="{{ asset('assets/website/themes/' . $theme->files_path) }}/fonticons/pixeden/pe-icon-7-stroke.css">
    <link rel="stylesheet"
        href="{{ asset('assets/website/themes/' . $theme->files_path) }}/fonticons/simplelineicons/css/simple-line-icons.css">

    <!-- COMMON VENDOR CSS -->
    <link rel="stylesheet"
        href="{{ asset('assets/website/themes/' . $theme->files_path) }}/vendor/animate-css/animate.min.css">
    <link rel="stylesheet"
        href="{{ asset('assets/website/themes/' . $theme->files_path) }}/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="{{ asset('assets/website/themes/' . $theme->files_path) }}/vendor/sweetalert/sweetalert2.min.css">
    <link rel="stylesheet"
        href="{{ asset('assets/website/themes/' . $theme->files_path) }}/vendor/jarallax/jarallax.css">
    <link rel="stylesheet"
        href="{{ asset('assets/website/themes/' . $theme->files_path) }}/vendor/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet"
        href="{{ asset('assets/website/themes/' . $theme->files_path) }}/vendor/magnific-popup/magnific-popup.css">

    <!-- PAGE SPECIFIC VENDOR CSS -->

    <!-- TEMPLATE COMMON CSS -->
    <link rel="stylesheet" href="{{ asset('assets/website/themes/' . $theme->files_path) }}/css/ckav-main.css">
    <link rel="stylesheet" href="{{ asset('assets/website/themes/' . $theme->files_path) }}/css/ckav-elements.css">
    <link rel="stylesheet" href="{{ asset('assets/website/themes/' . $theme->files_path) }}/css/ckav-helper.css">
    <link rel="stylesheet" href="{{ asset('assets/website/themes/' . $theme->files_path) }}/css/ckav-responsive.css">

    <!-- DEMO SPECIFIC TEMPLATE CSS -->

    <!-- TEMPLATE THEME CSS -->

    <!-- TEMPLATE USER CUSTOM CSS -->
    <link rel="stylesheet" href="{{ asset('assets/website/themes/' . $theme->files_path) }}/css/template-custom.css">
</head>

<body class="ckav-body tooltip-light">

    <!--
    ************************************************************
    * PAGE LOADER
    *************************************************************
    -->
    <div id="loader">
        <div class="load-three-bounce">
            <div class="load-child bounce1"></div>
            <div class="load-child bounce2"></div>
            <div class="load-child bounce3"></div>
        </div>
    </div>
    <!-- ************** END : PAGE LOADER **************  -->


    <div class="ckav-body">

        <!--
        ************************************************************
        * HEADER
        *************************************************************
        -->
        <header class="header-area intro-element" data-ckav-smd="padding-l-0 padding-r-0 width-100">
            <div class="container-fluid">

                <div class="row align-items-center">
                    <div class="col-md-3">

                        <!-- LOGO -->
                        <div class="logo-wrp align-left flex-cl typo-light">
                            <a href="#" class="logo-link display-iflex width-px-60 margin-r-10"
                                data-ckav-smd="width-px-60">
                                <img src="{{ asset('assets/website/themes/' . $theme->files_path) }}/images/logo-img-01.jpg"
                                    alt="logo" class="radius-full border-3 color-border-white">
                            </a>
                            <h1 class="heading small display-iflex margin-b-0">Alex Poula</h1>
                        </div>

                    </div>
                    <div class="col-md-9">

                        <!-- MENU ICON -->
                        <div class="menu-icon-wrp style-1 radius-full dark mobile-only display-none square-40 flex-cc zindex-9 bgcolor-white"
                            data-ckav-smd="display-flex">
                            <div class="menu-icon">
                                <div class="bar"></div>
                            </div>
                        </div>

                        <div class="navigation-area intro-element flex-cr" data-ckav-smd="flex-cc margin-t-20">

                            <!-- NAVIGATION LIST -->
                            <ul class="navigation-ul display-iflex" data-ckav-smd="display-block">
                                <li class="navigation-li">
                                    <a href="#about" class="navigation-a section-post">
                                        <span class="icon"><i class="icon-book-open"></i></span>
                                        <span class="text">About <i class="fas fa-sort-up"></i></span>
                                    </a>
                                </li>
                                <li class="navigation-li">
                                    <a href="#services" class="navigation-a section-post">
                                        <span class="icon"><i class="icon-settings"></i></span>
                                        <span class="text">Services <i class="fas fa-sort-up"></i></span>
                                    </a>
                                </li>
                                <li class="navigation-li">
                                    <a href="#portfolio" class="navigation-a section-post">
                                        <span class="icon"><i class="icon-camera"></i></span>
                                        <span class="text">Portfolio <i class="fas fa-sort-up"></i></span>
                                    </a>
                                </li>
                                <li class="navigation-li">
                                    <a href="#blog" class="navigation-a section-post">
                                        <span class="icon"><i class="icon-note"></i></span>
                                        <span class="text">Blog <i class="fas fa-sort-up"></i></span>
                                    </a>
                                </li>
                                <li class="navigation-li">
                                    <a href="#contact" class="navigation-a section-post">
                                        <span class="icon"><i class="icon-envelope"></i></span>
                                        <span class="text">Contact <i class="fas fa-sort-up"></i></span>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>

            </div>
        </header>
        <!-- ************** END : HEADER **************  -->

        <!--
        ************************************************************
        * HOME AREA
        *************************************************************
        -->
        <div class="home-area intro-section flex-cc" data-ckav-smd="flex-cc">
            <div class="container-fluid zindex-1 intro-element">

                <div class="row">
                    <div class="col-md-5 offset-md-7">

                        <!-- INTRO TEXT -->
                        <div class="intro-text typo-light" data-ckav-smd="align-center">
                            <h2 class="heading small bold-900 text-upper" data-ckav-smd="small">Alex Poula</h2>

                            <div class="carousel-widget carouselnav-1 light large" data-nc-smd="align-center"
                                data-carousel-items="1" data-carousel-itemrange="false" data-carousel-autoplay="true"
                                data-carousel-margin="30" data-carousel-loop="false" data-carousel-nav="false"
                                data-carousel-dots="false" data-carousel-center="false"
                                data-carousel-heightauto="true" data-carousel-mousedrag="false"
                                data-carousel-touchdrag="false">
                                <div class="owl-carousel">

                                    <!-- ITEM -->
                                    <div class="item">
                                        <div class="inneritem">
                                            <h2 class="heading xlarge bold-900 text-upper" data-ckav-smd="large">I'm
                                                Designer</h2>
                                        </div>
                                    </div>
                                    <!-- ITEM -->
                                    <div class="item">
                                        <div class="inneritem">
                                            <h2 class="heading xlarge bold-900 text-upper" data-ckav-smd="large">I'm
                                                Developer</h2>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <p class="heading-sub width-70" data-ckav-smd="width-100 mini">
                                Lorem ipsum dolor, sit amet consectetur adipi sicing elit. Molestiae alias minus eos
                                nihil est.
                            </p>
                            <a href="#popup-content"
                                class="set-popup button button-xlarge color-button-default color-hov-button-white solid radius-10"
                                data-ckav-smd="button-medium">Lear More</a>
                        </div>

                    </div>
                </div>


            </div>

            <!--=================================
            = BACKGROUND HOLDER
            ==================================-->
            <div class="bg-holder zindex-0">

                <!-- OVERLAY -->
                <b data-bgholder="overlay" class="full-wh zindex-2"
                    data-linear-gradient="rgba(0,0,0, 0)|rgba(0,0,0, 0.5)"></b>

                <!-- BACKGROUND IMAGE -->
                <b data-bgholder="background-image" class="full-wh bg-cover bg-cc zindex-1"
                    data-bg-image="{{ asset('assets/website/themes/' . $theme->files_path) }}/images/bg-01.jpg"></b>

            </div>
            <!-- ======= END : BACKGROUND HOLDER =======  -->

        </div>
        <!-- ************** END : HOME AREA **************  -->

        <!--
        ************************************************************
        * SOCIAL AREA
        *************************************************************
        -->
        <div class="social-area intro-element">
            <a href="#social"
                class="section-post button button-icon color-button-white border-op-light-2 radius-full"><i
                    class="icon-share"></i></a>
        </div>
        <!-- ************** END : SOCIAL AREA **************  -->

        <!--
        ************************************************************
        * POP UP WRAPPER
        *************************************************************
        -->
        <div class="popup-area">

            <!--=================================
            = POPUP OVERLAY
            ==================================-->
            <div class="popup-overlay" data-bg-color="rgba(0,0,0,0.8)">

            </div>
            <!-- ======= END : POPUP OVERLAY =======  -->

            <!--=================================
            = ABOUT SECTION
            ==================================-->
            <div id="about" class="popup-section about-section typo-light">

                <!-- CLOSE BUTTON -->
                <div class="close-section">
                    <a href="#"
                        class="button button-icon color-button-white fs-30 border-op-light-2 radius-full"><i
                            class="pe-7s-close"></i></a>
                </div>

                <div class="inner-section animated" data-anim-in="fadeIn" data-anim-out="fadeOut">
                    <div class="container">

                        <div class="row align-items-center gt60">
                            <div class="col-lg-6">
                                <div class="image-wrapper animated" data-anim-in="fadeInRight"
                                    data-ckav-smd="margin-b-30">
                                    <img class="radius-10"
                                        src="{{ asset('assets/website/themes/' . $theme->files_path) }}/images/half-bg-01.jpg"
                                        alt="about image">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="section-heading-wrapper" data-ckav-smd="align-center">
                                    <h2 class="heading-section text-upper default bold-900 animated"
                                        data-anim-in="fadeInUp" data-ckav-smd="medium">About us</h2>
                                    <p class="heading-section-sub small margin-b-0 animated"
                                        data-anim-in="fadeInUp|0.1" data-ckav-smd="mini">
                                        I am <strong class="color-text-default">Alex Poula</strong> amet consectetur
                                        adipisicing elit. Et, quaerat architecto iusto nostrum dignissimos consectetur
                                        sit corrupti quos sed.
                                    </p>
                                </div>
                                <hr class="color-border-default margin-tb-30 width-px-50 margin-l-0 border-t-2 animated"
                                    data-anim-in="fadeInUp|0.2" data-ckav-smd="margin-auto">
                                <p class="margin-b-20 animated" data-anim-in="fadeInUp|0.2">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque, non? Minima, nobis
                                    velit officia est autem veniam. Quidem, omnis asperiores? Temporibus repudiandae
                                    blanditiis sit dolore tempore. Illo voluptatem sunt maxime. Lorem ipsum dolor sit
                                    amet consectetur adipisicing elit.
                                </p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="list-1 color-text-white font-02"
                                            data-ckav-smd="align-left margin-b-30">
                                            <li class="margin-b-5 animated" data-anim-in="fadeInUp|0.3"><i
                                                    class="list-bullet margin-r-10 color-text-default fas fa-angle-right"></i>
                                                <strong>Birthday :</strong> 22nd March 1990
                                            </li>

                                            <li class="margin-b-5 animated" data-anim-in="fadeInUp|0.3"><i
                                                    class="list-bullet margin-r-10 color-text-default fas fa-angle-right"></i>
                                                <strong>City :</strong> 22nd March 1990
                                            </li>

                                            <li class="margin-b-5 animated" data-anim-in="fadeInUp|0.3"><i
                                                    class="list-bullet margin-r-10 color-text-default fas fa-angle-right"></i>
                                                <strong>Study :</strong> 22nd March 1990
                                            </li>

                                            <li class="margin-b-5 animated" data-anim-in="fadeInUp|0.3"><i
                                                    class="list-bullet margin-r-10 color-text-default fas fa-angle-right"></i>
                                                <strong>Website :</strong> 22nd March 1990
                                            </li>

                                            <li class="margin-b-5 animated" data-anim-in="fadeInUp|0.3"><i
                                                    class="list-bullet margin-r-10 color-text-default fas fa-angle-right"></i>
                                                <strong>Phone :</strong> 22nd March 1990
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-md-6">
                                        <ul class="list-1 color-text-white font-02"
                                            data-ckav-smd="align-left margin-b-30">
                                            <li class="margin-b-5 animated" data-anim-in="fadeInUp|0.3"><i
                                                    class="list-bullet margin-r-10 color-text-default fas fa-angle-right"></i>
                                                <strong>Age :</strong> 22nd March 1990
                                            </li>

                                            <li class="margin-b-5 animated" data-anim-in="fadeInUp|0.3"><i
                                                    class="list-bullet margin-r-10 color-text-default fas fa-angle-right"></i>
                                                <strong>Interests :</strong> 22nd March 1990
                                            </li>

                                            <li class="margin-b-5 animated" data-anim-in="fadeInUp|0.3"><i
                                                    class="list-bullet margin-r-10 color-text-default fas fa-angle-right"></i>
                                                <strong>Degree :</strong> 22nd March 1990
                                            </li>

                                            <li class="margin-b-5 animated" data-anim-in="fadeInUp|0.3"><i
                                                    class="list-bullet margin-r-10 color-text-default fas fa-angle-right"></i>
                                                <strong>Email :</strong> 22nd March 1990
                                            </li>

                                            <li class="margin-b-5 animated" data-anim-in="fadeInUp|0.3"><i
                                                    class="list-bullet margin-r-10 color-text-default fas fa-angle-right"></i>
                                                <strong>Language :</strong> 22nd March 1990
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row padding-t-100">
                            <div class="col-md-12">
                                <div class="section-heading-wrapper align-center width-70 margin-auto"
                                    data-ckav-smd="align-center width-100">
                                    <h2 class="heading-section text-upper default bold-900 animated"
                                        data-anim-in="fadeInUp" data-ckav-smd="medium">Skill Area</h2>
                                    <p class="heading-section-sub small margin-b-0 animated"
                                        data-anim-in="fadeInUp|0.1" data-ckav-smd="mini">
                                        Lorem amet consectetur adipisicing elit. Et, quaerat architecto iusto uaerat
                                        architecto iusto nostrum dignissimos consectetur sit corrupti quos sed.
                                    </p>
                                </div>

                                <hr class="color-border-default margin-tb-30 width-px-50 margin-auto margin-l-0 border-t-2 animated"
                                    data-anim-in="fadeInUp|0.2" data-ckav-smd="margin-auto">
                            </div>
                        </div>

                        <div class="row gt60 align-items-center">
                            <div class="col-lg-5 align-right" data-ckav-smd="align-left margin-b-40">
                                <a href="#"
                                    class="button color-button-default solid radius-10 small margin-lr-5 margin-tb-5">HTML</a>
                                <a href="#"
                                    class="button color-button-default solid radius-10 small margin-lr-5 margin-tb-5">CSS</a>
                                <a href="#"
                                    class="button color-button-default solid radius-10 small margin-lr-5 margin-tb-5">Adobe
                                    Photoshop</a>
                                <a href="#"
                                    class="button color-button-default solid radius-10 small margin-lr-5 margin-tb-5">OpenCart</a>
                                <a href="#"
                                    class="button color-button-default solid radius-10 small margin-lr-5 margin-tb-5">WordPress</a>
                                <a href="#"
                                    class="button color-button-default solid radius-10 small margin-lr-5 margin-tb-5">DreamViewer</a>
                                <a href="#"
                                    class="button color-button-default solid radius-10 small margin-lr-5 margin-tb-5">Jquery</a>
                                <a href="#"
                                    class="button color-button-default solid radius-10 small margin-lr-5 margin-tb-5">Java</a>
                                <a href="#"
                                    class="button color-button-default solid radius-10 small margin-lr-5 margin-tb-5">JavaScript</a>
                                <a href="#"
                                    class="button color-button-default solid radius-10 small margin-lr-5 margin-tb-5">Management</a>
                                <a href="#"
                                    class="button color-button-default solid radius-10 small margin-lr-5 margin-tb-5">LeaderShip</a>
                            </div>

                            <div class="col-lg-7">
                                <div class="skills-info skills-info-01 margin-b-40 animated fadeInUp"
                                    data-animate="fadeInUp|0.1">
                                    <h3 class="skills-name heading-content mini margin-b-10">WordPress</h3>
                                    <div class="skills-bar glass-light-02">
                                        <div class="skills-progress width-80">
                                            <div class="skills-per bgcolor-default flex-cc">
                                                <span class="numbers">80%</span>
                                                <span class="icon color-text-default"><i
                                                        class="fas fa-sort-down"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="skills-info skills-info-01 margin-b-40 animated fadeInUp"
                                    data-animate="fadeInUp|0.1">
                                    <h3 class="skills-name heading-content mini margin-b-10">OpenCart</h3>
                                    <div class="skills-bar glass-light-02">
                                        <div class="skills-progress width-70">
                                            <div class="skills-per bgcolor-default flex-cc">
                                                <span class="numbers">70%</span>
                                                <span class="icon color-text-default"><i
                                                        class="fas fa-sort-down"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="skills-info skills-info-01 margin-b-40 animated fadeInUp"
                                    data-animate="fadeInUp|0.1">
                                    <h3 class="skills-name heading-content mini margin-b-10">HTML</h3>
                                    <div class="skills-bar glass-light-02">
                                        <div class="skills-progress width-90">
                                            <div class="skills-per bgcolor-default flex-cc">
                                                <span class="numbers">90%</span>
                                                <span class="icon color-text-default"><i
                                                        class="fas fa-sort-down"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="skills-info skills-info-01 margin-b-40 animated fadeInUp"
                                    data-animate="fadeInUp|0.1">
                                    <h3 class="skills-name heading-content mini margin-b-10">CSS</h3>
                                    <div class="skills-bar glass-light-02">
                                        <div class="skills-progress width-90">
                                            <div class="skills-per bgcolor-default flex-cc">
                                                <span class="numbers">90%</span>
                                                <span class="icon color-text-default"><i
                                                        class="fas fa-sort-down"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row padding-t-80" data-ckav-smd="align-left">
                            <div class="col-lg-3 col-md-6">
                                <div class="counter-box info-obj center img-t align-center gap-30 small padding-30 glass-light-01 radius-4"
                                    data-ckav-sm="mini width-80 margin-auto">
                                    <div class="img"><span class="iconwrp text-default"><i
                                                class="icon-profile-male"></i></span></div>
                                    <div class="info">
                                        <h2 class="heading-content margin-0" data-ckav-smd="default"><span
                                                class="count">2140</span></h2>
                                        <p class="margin-0">Happy Clients</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="counter-box info-obj center img-t align-center gap-30 small padding-30 glass-light-01 radius-4"
                                    data-ckav-sm="mini width-80 margin-auto">
                                    <div class="img"><span class="iconwrp text-default"><i
                                                class="icon-layers"></i></span></div>
                                    <div class="info">
                                        <h2 class="heading-content margin-0"><span class="count">2140</span></h2>
                                        <p class="margin-0">Project Completed</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="counter-box info-obj center img-t align-center gap-30 small padding-30 glass-light-01 radius-4"
                                    data-ckav-sm="mini width-80 margin-auto">
                                    <div class="img"><span class="iconwrp text-default"><i
                                                class="icon-alarmclock"></i></span></div>
                                    <div class="info">
                                        <h2 class="heading-content margin-0"><span class="count">2140</span></h2>
                                        <p class="margin-0">Hour Worked</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="counter-box info-obj center img-t align-center gap-30 small padding-30 glass-light-01 radius-4"
                                    data-ckav-sm="mini width-80 margin-auto">
                                    <div class="img"><span class="iconwrp text-default"><i
                                                class="icon-pencil"></i></span></div>
                                    <div class="info">
                                        <h2 class="heading-content margin-0"><span class="count">2140</span></h2>
                                        <p class="margin-0">Articles Published</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!-- ======= END : ABOUT SECTION =======  -->

            <!--=================================
            = BLOG SECTION
            ==================================-->
            <div id="blog" class="popup-section blog-section">

                <!-- CLOSE BUTTON -->
                <div class="close-section">
                    <a href="#"
                        class="button button-icon color-button-white fs-30 border-op-light-2 radius-full"><i
                            class="pe-7s-close"></i></a>
                </div>

                <div class="inner-section animated" data-anim-in="fadeIn" data-anim-out="fadeOut">
                    <div class="container">

                        <div class="section-heading-wrapper align-center margin-b-60 width-px-700 margin-auto typo-light"
                            data-ckav-smd="width-100">
                            <h2 class="heading-section text-upper default bold-900 animated" data-anim-in="fadeInUp"
                                data-ckav-smd="medium">Recent News</h2>
                            <p class="heading-section-sub small margin-b-0 animated" data-anim-in="fadeInUp|0.1"
                                data-ckav-smd="mini">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, quaerat architecto iusto
                                nostrum dignissimos consectetur sit corrupti quos sed.
                            </p>
                        </div>

                        <div class="carousel-widget carouselnav-1 large width-90 margin-auto animated"
                            data-anim-in="fadeIn|0.1" data-ckav-smd="width-100 align-center" data-carousel-items="1"
                            data-carousel-itemrange="0,1|420,1|600,2|768,3|992,3|1200,3" data-carousel-autoplay="true"
                            data-carousel-margin="30" data-carousel-loop="false" data-carousel-nav="true"
                            data-carousel-dots="true" data-carousel-center="false">
                            <div class="owl-carousel">

                                <!-- ITEM -->
                                <div class="item">
                                    <div class="inneritem">

                                        <div class="image-infobox image-infobox-01 space-default medium align-left color-border-default radius-4 animated fadeInUp"
                                            data-animate="fadeInUp|0.2">
                                            <div class="image flex-bc typo-light align-center"
                                                data-bg-image="{{ asset('assets/website/themes/' . $theme->files_path) }}/images/700x500-01.jpg">
                                                <div class="image-content">
                                                    <h3 class="imgbox-title heading-content mini bold-700 text-upper">
                                                        Speed Developement</h3>
                                                </div>
                                                <div class="image-overlay" data-bg-color="rgba(0,0,0,0.5)"
                                                    style="background-color: rgba(0, 0, 0, 0.5);"></div>
                                            </div>
                                            <div class="text bgcolor-white shadow-01 align-center">
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis in
                                                    expedita deleniti non illum ad necessitatibus minima voluptatibus
                                                    repellendus corporis, velit tempore blanditiis similique, sit?
                                                </p>
                                                <a href="#blog-01"
                                                    class="set-popup button color-button-default button-mini solid radius-10">Read
                                                    More</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <!-- ITEM -->
                                <div class="item">
                                    <div class="inneritem">

                                        <div class="image-infobox image-infobox-01 space-default medium align-left color-border-default radius-4 animated fadeInUp"
                                            data-animate="fadeInUp|0.2">
                                            <div class="image flex-bc typo-light align-center"
                                                data-bg-image="{{ asset('assets/website/themes/' . $theme->files_path) }}/images/700x500-02.jpg">
                                                <div class="image-content">
                                                    <h3 class="imgbox-title heading-content mini bold-700 text-upper">
                                                        Sharp Design</h3>
                                                </div>
                                                <div class="image-overlay" data-bg-color="rgba(0,0,0,0.5)"
                                                    style="background-color: rgba(0, 0, 0, 0.5);"></div>
                                            </div>
                                            <div class="text bgcolor-white shadow-01 align-center">
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis in
                                                    expedita deleniti non illum ad necessitatibus minima voluptatibus
                                                    repellendus corporis, velit tempore blanditiis similique, sit?
                                                </p>
                                                <a href="#blog-02"
                                                    class="set-popup button color-button-default button-mini solid radius-10">Read
                                                    More</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <!-- ITEM -->
                                <div class="item">
                                    <div class="inneritem">

                                        <div class="image-infobox image-infobox-01 space-default medium align-left color-border-default radius-4 animated fadeInUp"
                                            data-animate="fadeInUp|0.2">
                                            <div class="image flex-bc typo-light align-center"
                                                data-bg-image="{{ asset('assets/website/themes/' . $theme->files_path) }}/images/700x500-03.jpg">
                                                <div class="image-content">
                                                    <h3 class="imgbox-title heading-content mini bold-700 text-upper">
                                                        Quick Support</h3>
                                                </div>
                                                <div class="image-overlay" data-bg-color="rgba(0,0,0,0.5)"
                                                    style="background-color: rgba(0, 0, 0, 0.5);"></div>
                                            </div>
                                            <div class="text bgcolor-white shadow-01 align-center">
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis in
                                                    expedita deleniti non illum ad necessitatibus minima voluptatibus
                                                    repellendus corporis, velit tempore blanditiis similique, sit?
                                                </p>
                                                <a href="#blog-03"
                                                    class="set-popup button color-button-default button-mini solid radius-10">Read
                                                    More</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <!-- ITEM -->
                                <div class="item">
                                    <div class="inneritem">

                                        <div class="image-infobox image-infobox-01 space-default medium align-left color-border-default radius-4 animated fadeInUp"
                                            data-animate="fadeInUp|0.2">
                                            <div class="image flex-bc typo-light align-center"
                                                data-bg-image="{{ asset('assets/website/themes/' . $theme->files_path) }}/images/700x500-04.jpg">
                                                <div class="image-content">
                                                    <h3 class="imgbox-title heading-content mini bold-700 text-upper">
                                                        Regular Update</h3>
                                                </div>
                                                <div class="image-overlay" data-bg-color="rgba(0,0,0,0.5)"
                                                    style="background-color: rgba(0, 0, 0, 0.5);"></div>
                                            </div>
                                            <div class="text bgcolor-white shadow-01 align-center">
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis in
                                                    expedita deleniti non illum ad necessitatibus minima voluptatibus
                                                    repellendus corporis, velit tempore blanditiis similique, sit?
                                                </p>
                                                <a href="#blog-04"
                                                    class="set-popup button color-button-default button-mini solid radius-10">Read
                                                    More</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- ======= END : BLOG SECTION =======  -->

            <!--=================================
            = SERVICES SECTION
            ==================================-->
            <div id="services" class="popup-section services-section typo-light">

                <!-- CLOSE BUTTON -->
                <div class="close-section">
                    <a href="#"
                        class="button button-icon color-button-white fs-30 border-op-light-2 radius-full"><i
                            class="pe-7s-close"></i></a>
                </div>

                <div class="inner-section animated" data-anim-in="fadeIn" data-anim-out="fadeOut">
                    <div class="container">

                        <div class="row align-items-center gt60">
                            <div class="col-lg-8">
                                <div class="row gt10 margin-b-10" data-ckav-smd="margin-b-0">
                                    <div class="col-lg-6 animated" data-anim-in="fadeInUp|0.1"
                                        data-ckav-smd="margin-b-30">
                                        <div
                                            class="info-obj radius-10 margin-b-0 center info-box-01 img-t padding-40 gap-20 mini bgcolor-default">
                                            <div class="img"><span class="iconwrp color-text-white"><i
                                                        class="pe-7s-rocket"></i></span></div>
                                            <div class="info">
                                                <h3 class="heading-content bold-700 text-upper margin-b-10 tiny">
                                                    Marketing</h3>
                                                <p class="margin-b-0">1orem ipsum eirmod dolor sit ametconsetetur
                                                    sadipscing nonumy ipsum eirmod</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 animated" data-anim-in="fadeInUp|0.2"
                                        data-ckav-smd="margin-b-30">
                                        <div
                                            class="info-obj radius-10 margin-b-0 center info-box-01 img-t padding-40 gap-20 mini bgcolor-default">
                                            <div class="img"><span class="iconwrp color-text-white"><i
                                                        class="pe-7s-display2"></i></span></div>
                                            <div class="info">
                                                <h3 class="heading-content bold-700 text-upper margin-b-10 tiny">Coding
                                                </h3>
                                                <p class="margin-b-0">1orem ipsum eirmod dolor sit ametconsetetur
                                                    sadipscing nonumy ipsum eirmod</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row gt10">
                                    <div class="col-lg-6 animated" data-anim-in="fadeInUp|0.3"
                                        data-ckav-smd="margin-b-30">
                                        <div
                                            class="info-obj radius-10 margin-b-0 center info-box-01 img-t padding-40 gap-20 mini bgcolor-default">
                                            <div class="img"><span class="iconwrp color-text-white"><i
                                                        class="pe-7s-rocket"></i></span></div>
                                            <div class="info">
                                                <h3 class="heading-content bold-700 text-upper margin-b-10 tiny">
                                                    Marketing</h3>
                                                <p class="margin-b-0">1orem ipsum eirmod dolor sit ametconsetetur
                                                    sadipscing nonumy ipsum eirmod</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 animated" data-anim-in="fadeInUp|0.4"
                                        data-ckav-smd="margin-b-30">
                                        <div
                                            class="info-obj radius-10 margin-b-0 center info-box-01 img-t padding-40 gap-20 mini bgcolor-default">
                                            <div class="img"><span class="iconwrp color-text-white"><i
                                                        class="pe-7s-display2"></i></span></div>
                                            <div class="info">
                                                <h3 class="heading-content bold-700 text-upper margin-b-10 tiny">Coding
                                                </h3>
                                                <p class="margin-b-0">1orem ipsum eirmod dolor sit ametconsetetur
                                                    sadipscing nonumy ipsum eirmod</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4" data-ckav-smd="margin-t-30">
                                <div class="section-heading-wrapper" data-ckav-smd="align-center">
                                    <h2 class="heading-section text-upper default bold-900 animated"
                                        data-anim-in="fadeInRight|0.1" data-ckav-smd="medium">Services</h2>
                                    <p class="heading-section-sub small margin-b-0 animated"
                                        data-anim-in="fadeInRight|0.1" data-ckav-smd="mini">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, quaerat architecto
                                        iusto nostrum dignissimos consectetur sit corrupti quos sed.
                                    </p>
                                </div>
                                <hr class="color-border-default margin-tb-30 width-px-50 margin-l-0 border-t-2 animated"
                                    data-anim-in="fadeInRight|0.2" data-ckav-smd="margin-auto margin-tb-20">
                                <p class="margin-b-20 animated" data-anim-in="fadeInRight|0.2"
                                    data-ckav-smd="align-center">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque, non? Minima, nobis
                                    velit officia est autem veniam. Quidem, omnis asperiores? Temporibus repudiandae
                                    blanditiis sit dolore tempore. Illo voluptatem sunt maxime.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- ======= END : SERVICES SECTION =======  -->

            <!--=================================
            = PORTFOLIO SECTION
            ==================================-->
            <div id="portfolio" class="popup-section portfolio-section typo-light">

                <!-- CLOSE BUTTON -->
                <div class="close-section">
                    <a href="#"
                        class="button button-icon color-button-white fs-30 border-op-light-2 radius-full"><i
                            class="pe-7s-close"></i></a>
                </div>

                <div class="inner-section animated" data-anim-in="fadeIn" data-anim-out="fadeOut">
                    <div class="container">

                        <div class="portfolio-widget grid-portfolio portfolio-row grid-03" data-zoom-gallery="yes"
                            data-ckav-md="grid-02" data-ckav-sm="grid-01">
                            <div class="portfolio-col animated" data-anim-in="fadeInUp|0.1">
                                <figure class="hover-box hover-box-01">

                                    <!-- OVERLAY -->
                                    <div class="overlay flex-bl typo-light"
                                        data-linear-gradient="rgba(31,34,41,0.5)|rgba(31,34,41,1)">
                                        <div class="info-text text-center">
                                            <a href="images/grid-portfolio-01.jpg"
                                                class="zoom-img button button-icon radius-full margin-lr-5 color-button-default solid"><i
                                                    class="icon-size-fullscreen"></i></a>
                                            <a href="#" target="_blank"
                                                class="button button-icon radius-full margin-lr-5 color-button-default solid"><i
                                                    class="icon-link"></i></a>
                                            <h3 class="heading-content tiny bold-600 margin-b-5 margin-t-30">PSD Mockup
                                            </h3>
                                            <p class="mr-0 fs12 op-08">Lorem ipsum dolor sit amet consectetur</p>
                                        </div>
                                    </div>

                                    <!-- IMAGE -->
                                    <img src="{{ asset('assets/website/themes/' . $theme->files_path) }}/images/grid-portfolio-01.jpg"
                                        alt="portfolio image">

                                </figure>
                            </div>

                            <div class="portfolio-col animated" data-anim-in="fadeInUp|0.1">
                                <figure class="hover-box hover-box-01">

                                    <!-- OVERLAY -->
                                    <div class="overlay flex-bl typo-light"
                                        data-linear-gradient="rgba(31,34,41,0.5)|rgba(31,34,41,1)">
                                        <div class="info-text text-center">
                                            <a href="images/grid-portfolio-02.jpg"
                                                class="zoom-img button button-icon radius-full margin-lr-5 color-button-default solid"><i
                                                    class="icon-size-fullscreen"></i></a>
                                            <a href="#" target="_blank"
                                                class="button button-icon radius-full margin-lr-5 color-button-default solid"><i
                                                    class="icon-link"></i></a>
                                            <h3 class="heading-content tiny bold-600 margin-b-5 margin-t-30">PSD Mockup
                                            </h3>
                                            <p class="mr-0 fs12 op-08">Lorem ipsum dolor sit amet consectetur</p>
                                        </div>
                                    </div>

                                    <!-- IMAGE -->
                                    <img src="{{ asset('assets/website/themes/' . $theme->files_path) }}/images/grid-portfolio-02.jpg"
                                        alt="portfolio image">

                                </figure>
                            </div>

                            <div class="portfolio-col animated" data-anim-in="fadeInUp|0.2">
                                <figure class="hover-box hover-box-01">

                                    <!-- OVERLAY -->
                                    <div class="overlay flex-bl typo-light"
                                        data-linear-gradient="rgba(31,34,41,0.5)|rgba(31,34,41,1)">
                                        <div class="info-text text-center">
                                            <a href="images/grid-portfolio-03.jpg"
                                                class="zoom-img button button-icon radius-full margin-lr-5 color-button-default solid"><i
                                                    class="icon-size-fullscreen"></i></a>
                                            <a href="#" target="_blank"
                                                class="button button-icon radius-full margin-lr-5 color-button-default solid"><i
                                                    class="icon-link"></i></a>
                                            <h3 class="heading-content tiny bold-600 margin-b-5 margin-t-30">PSD Mockup
                                            </h3>
                                            <p class="mr-0 fs12 op-08">Lorem ipsum dolor sit amet consectetur</p>
                                        </div>
                                    </div>

                                    <!-- IMAGE -->
                                    <img src="{{ asset('assets/website/themes/' . $theme->files_path) }}/images/grid-portfolio-03.jpg"
                                        alt="portfolio image">

                                </figure>
                            </div>

                            <div class="portfolio-col animated" data-anim-in="fadeInUp|0.3">
                                <figure class="hover-box hover-box-01">

                                    <!-- OVERLAY -->
                                    <div class="overlay flex-bl typo-light"
                                        data-linear-gradient="rgba(31,34,41,0.5)|rgba(31,34,41,1)">
                                        <div class="info-text text-center">
                                            <a href="images/grid-portfolio-04.jpg"
                                                class="zoom-img button button-icon radius-full margin-lr-5 color-button-default solid"><i
                                                    class="icon-size-fullscreen"></i></a>
                                            <a href="#" target="_blank"
                                                class="button button-icon radius-full margin-lr-5 color-button-default solid"><i
                                                    class="icon-link"></i></a>
                                            <h3 class="heading-content tiny bold-600 margin-b-5 margin-t-30">PSD Mockup
                                            </h3>
                                            <p class="mr-0 fs12 op-08">Lorem ipsum dolor sit amet consectetur</p>
                                        </div>
                                    </div>

                                    <!-- IMAGE -->
                                    <img src="{{ asset('assets/website/themes/' . $theme->files_path) }}/images/grid-portfolio-04.jpg"
                                        alt="portfolio image">

                                </figure>
                            </div>

                            <div class="portfolio-col animated" data-anim-in="fadeInUp|0.4">
                                <figure class="hover-box hover-box-01">

                                    <!-- OVERLAY -->
                                    <div class="overlay flex-bl typo-light"
                                        data-linear-gradient="rgba(31,34,41,0.5)|rgba(31,34,41,1)">
                                        <div class="info-text text-center">
                                            <a href="images/grid-portfolio-05.jpg"
                                                class="zoom-img button button-icon radius-full margin-lr-5 color-button-default solid"><i
                                                    class="icon-size-fullscreen"></i></a>
                                            <a href="#" target="_blank"
                                                class="button button-icon radius-full margin-lr-5 color-button-default solid"><i
                                                    class="icon-link"></i></a>
                                            <h3 class="heading-content tiny bold-600 margin-b-5 margin-t-30">PSD Mockup
                                            </h3>
                                            <p class="mr-0 fs12 op-08">Lorem ipsum dolor sit amet consectetur</p>
                                        </div>
                                    </div>

                                    <!-- IMAGE -->
                                    <img src="{{ asset('assets/website/themes/' . $theme->files_path) }}/images/grid-portfolio-05.jpg"
                                        alt="portfolio image">

                                </figure>
                            </div>

                            <div class="portfolio-col animated" data-anim-in="fadeInUp|0.5">
                                <figure class="hover-box hover-box-01">

                                    <!-- OVERLAY -->
                                    <div class="overlay flex-bl typo-light"
                                        data-linear-gradient="rgba(31,34,41,0.5)|rgba(31,34,41,1)">
                                        <div class="info-text text-center">
                                            <a href="images/grid-portfolio-06.jpg"
                                                class="zoom-img button button-icon radius-full margin-lr-5 color-button-default solid"><i
                                                    class="icon-size-fullscreen"></i></a>
                                            <a href="#" target="_blank"
                                                class="button button-icon radius-full margin-lr-5 color-button-default solid"><i
                                                    class="pe-7s-link"></i></a>
                                            <h3 class="heading-content tiny bold-600 margin-b-5 margin-t-30">PSD Mockup
                                            </h3>
                                            <p class="mr-0 fs12 op-08">Lorem ipsum dolor sit amet consectetur</p>
                                        </div>
                                    </div>

                                    <!-- IMAGE -->
                                    <img src="{{ asset('assets/website/themes/' . $theme->files_path) }}/images/grid-portfolio-06.jpg"
                                        alt="portfolio image">

                                </figure>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!-- ======= END : PORTFOLIO SECTION =======  -->

            <!--=================================
            = CONTACT SECTION
            ==================================-->
            <div id="contact" class="popup-section contact-section typo-light">

                <!-- CLOSE BUTTON -->
                <div class="close-section">
                    <a href="#"
                        class="button button-icon color-button-white fs-30 border-op-light-2 radius-full"><i
                            class="pe-7s-close"></i></a>
                </div>

                <div class="inner-section animated" data-anim-in="fadeIn" data-anim-out="fadeOut">
                    <div class="container">

                        <div class="row gt60 align-items-center">
                            <div class="col-lg-6">
                                <div class="map-wrapper height-px-300 margin-b-40 animated" data-anim-in="fadeInUp">
                                    <iframe class="width-100 height-100 border-none radius-10"
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25173.549759506815!2d144.97705325499777!3d-37.79137058602538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642cb954b1ce9%3A0xf187674ba9830e78!2sState+Library+Victoria!5e0!3m2!1sen!2sin!4v1560509152021!5m2!1sen!2sin"
                                        allowfullscreen></iframe>
                                </div>

                                <div class="info-obj margin-b-0 info-box-01 img-l gap-20 mini animated"
                                    data-anim-in="fadeInUp|0.1" data-ckav-smd="margin-b-30 align-left">
                                    <div class="img"><span class="iconwrp"><i class="pe-7s-mail"></i></span></div>
                                    <div class="info">
                                        <h3 class="heading-content tiny bold-600 margin-b-5">Email</h3>
                                        <p class="margin-b-0">c.kav.art@gmail.com</p>
                                    </div>
                                </div>

                                <hr class="border-op-light-2 margin-tb-20">

                                <div class="info-obj margin-b-0 info-box-01 img-l gap-20 mini animated"
                                    data-anim-in="fadeInUp|0.2" data-ckav-smd="margin-b-30 align-left">
                                    <div class="img"><span class="iconwrp"><i class="pe-7s-headphones"></i></span>
                                    </div>
                                    <div class="info">
                                        <h3 class="heading-content tiny bold-600 margin-b-5">Phone</h3>
                                        <p class="margin-b-0">+1234-567-890</p>
                                    </div>
                                </div>

                                <hr class="border-op-light-2 margin-tb-20">

                                <div class="info-obj margin-b-0 info-box-01 img-l gap-20 mini animated"
                                    data-anim-in="fadeInUp|0.3" data-ckav-smd="margin-b-30 align-left">
                                    <div class="img"><span class="iconwrp"><i class="pe-7s-map-2"></i></span>
                                    </div>
                                    <div class="info">
                                        <h3 class="heading-content tiny bold-600 margin-b-5">Address</h3>
                                        <p class="margin-b-0">1orem ipsum eirmod dolor sit ametconsetetur sadipscing
                                            nonumy ipsum eirmod</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">

                                <div class="section-heading-wrapper" data-ckav-smd="align-center margin-t-30">
                                    <h2 class="heading-section text-upper default bold-900 animated"
                                        data-anim-in="fadeInRight|0.1" data-ckav-smd="medium margin-b-0">Drop us line
                                    </h2>
                                </div>
                                <hr class="color-border-default margin-tb-30 width-px-50 margin-l-0 border-t-2 animated"
                                    data-anim-in="fadeInRight|0.2" data-ckav-smd="margin-auto">
                                <form action="form-data/formdata.php"
                                    class="form-widget form-control-op-light-02 animated"
                                    data-anim-in="fadeInRight|0.2" data-ckav-smd="align-center">
                                    <div class="field-wrp">
                                        <input type="hidden" name="to" value="c.kav.art@gmail.com">

                                        <div class="row gt10">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input class="form-control radius-10" data-label="Name"
                                                        required="" data-msg="Please enter name." type="text"
                                                        name="name" placeholder="Enter your name">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input class="form-control radius-10" data-label="Email"
                                                        required="" data-msg="Please enter email." type="email"
                                                        name="email" placeholder="Enter your email">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <input class="form-control radius-10" required="" data-label="Phone"
                                                data-msg="Please phone number." type="text" name="phone"
                                                placeholder="Enter your phone number">
                                        </div>

                                        <div class="form-group">
                                            <input class="form-control radius-10" data-label="Subject" type="text"
                                                name="subject" placeholder="Enter subject">
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control radius-10" data-label="Message" required="" data-msg="Please enter your message."
                                                name="message" placeholder="Add your message" cols="30" rows="6"></textarea>
                                        </div>
                                    </div>
                                    <button type="submit"
                                        class="button radius-10 solid color-button-default margin-0"><i
                                            class="fa fa-envelope-o"></i> SUBMIT</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- ======= END : CONTACT SECTION =======  -->

            <!--=================================
            = SOCIAL SECTION
            ==================================-->
            <div id="social" class="popup-section social-section typo-light">

                <!-- CLOSE BUTTON -->
                <div class="close-section">
                    <a href="#"
                        class="button button-icon color-button-white fs-30 border-op-light-2 radius-full"><i
                            class="pe-7s-close"></i></a>
                </div>

                <div class="inner-section animated" data-anim-in="fadeIn" data-anim-out="fadeOut">
                    <div class="container">

                        <div class="row">
                            <div class="col align-center animated" data-anim-in="fadeInUp|0.1"
                                data-ckav-smd="margin-b-30">
                                <a href="#"
                                    class="button button-icon-xlarge color-button-white border-op-light-2 radius-10"><i
                                        class="fab fa-facebook-f"></i></a>
                            </div>

                            <div class="col align-center animated" data-anim-in="fadeInUp|0.2"
                                data-ckav-smd="margin-b-30">
                                <a href="#"
                                    class="button button-icon-xlarge color-button-white border-op-light-2 radius-10"><i
                                        class="fab fa-twitter"></i></a>
                            </div>

                            <div class="col align-center animated" data-anim-in="fadeInUp|0.3"
                                data-ckav-smd="margin-b-30">
                                <a href="#"
                                    class="button button-icon-xlarge color-button-white border-op-light-2 radius-10"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>

                            <div class="col align-center animated" data-anim-in="fadeInUp|0.4"
                                data-ckav-smd="margin-b-30">
                                <a href="#"
                                    class="button button-icon-xlarge color-button-white border-op-light-2 radius-10"><i
                                        class="fab fa-instagram"></i></a>
                            </div>

                            <div class="col align-center animated" data-anim-in="fadeInUp|0.5"
                                data-ckav-smd="margin-b-30">
                                <a href="#"
                                    class="button button-icon-xlarge color-button-white border-op-light-2 radius-10"><i
                                        class="fab fa-dribbble"></i></a>
                            </div>

                            <div class="col align-center animated" data-anim-in="fadeInUp|0.6"
                                data-ckav-smd="margin-b-30">
                                <a href="#"
                                    class="button button-icon-xlarge color-button-white border-op-light-2 radius-10"><i
                                        class="fab fa-pinterest"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- ======= END : SOCIAL SECTION =======  -->

        </div>
        <!-- ************** END : POP UP WRAPPER **************  -->

        <!--
        ************************************************************
        * FOOTER
        *************************************************************
        -->
        <div class="footer-area intro-element">
            <div class="container">
                <p class="c-text">
                    <a class="c-text" href="#" target="_blank">Blon - Personal Portfolio Template</a> ©
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                </p>
            </div>
        </div>
        <!-- ************** END : FOOTER **************  -->

        <!--
        ************************************************************
        * SUBSCRIBE POPUP
        *************************************************************
        -->
        <div id="popup-content" class="white-popup-block popup-content animate fadeInDown mfp-hide radius-6">
            <div class="pop-header padding-b-0" data-ckav-sm="padding-30 padding-b-0">
                <div class="square-90 iconwrp fs-80 margin-0 color-text-default"><i class="pe-7s-bell"></i></div>
                <h2 class="heading-section default bold-900 text-upper mr-0" data-ckav-sm="small">Newsletter</h2>
            </div>
            <div class="pop-body padding-t-20" data-ckav-sm="padding-30 padding-t-30">

                <div class="form-block">

                    <form action="form-data/notify-me.php" class="form-widget form-control-op-02"
                        novalidate="novalidate">
                        <div class="field-wrp">
                            <input type="hidden" name="to" value="c.kav.art@gmail.com">

                            <div class="row gt10">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control radius-6" data-label="Name" required=""
                                            data-msg="Please enter name." type="text" name="name"
                                            placeholder="Enter your name">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control radius-6" data-label="Email" required=""
                                            data-msg="Please enter email." type="email" name="email"
                                            placeholder="Enter your email">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit"
                            class="button radius-6 solid color-button-default width-100 margin-0"><i
                                class="fa fa-envelope-o"></i> SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- ************** END : SUBSCRIBE POPUP **************  -->

        <!--
        ************************************************************
        * BLOG SINGLE
        *************************************************************
        -->
        <div id="blog-01" class="white-popup-block single-blog popup-content animate fadeInDown mfp-hide radius-6">
            <div class="pop-header padding-b-0 position-rel height-px-500" data-ckav-sm="padding-30 padding-b-0">
                <div class="bg-holder zindex-0">

                    <!-- OVERLAY -->
                    <b data-bgholder="overlay" class="full-wh zindex-2"
                        data-linear-gradient="rgba(0,0,0, 0)|rgba(0,0,0, 0.5)"></b>

                    <!-- BACKGROUND IMAGE -->
                    <b data-bgholder="background-image" class="full-wh bg-cover bg-tc zindex-1"
                        data-bg-image="{{ asset('assets/website/themes/' . $theme->files_path) }}/images/blog-bg-01.jpg"></b>

                </div>
            </div>
            <div class="pop-body padding-tb-60" data-ckav-sm="padding-30 padding-t-30">

                <div class="container align-left">
                    <div class="section-heading-wrapper margin-auto" data-ckav-smd="width-100">
                        <p class="color-text-default bold-600">January 22, 2018 -- <span>LOGOS</span></p>
                        <h2 class="heading-section text-upper small bold-600" data-ckav-smd="small">Speed Developement
                            is key</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto ab ipsum consequatur,
                            reiciendis id ad nisi, voluptates aliquid, ex tenetur deleniti! Asperiores, assumenda.
                            Suscipit magnam laboriosam pariatur quo facilis voluptatem. Lorem ipsum, dolor sit amet
                            consectetur adipisicing elit. Numquam quisquam magni architecto sint, a quia dolor eaque ex
                            quasi asperiores officiis quae facilis ipsa aperiam necessitatibus corporis, repellendus est
                            sequi. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit, necessitatibus non
                            officia amet, atque deserunt voluptatibus tempora laboriosam doloribus sequi totam dicta
                            veniam excepturi quo libero laudantium itaque tempore magni. Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Quae facilis ipsum reprehenderit perferendis dicta aut sint,
                            consectetur reiciendis corporis modi illo eaque officia provident doloribus. Quod quisquam
                            distinctio totam repellat? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores
                            tempora adipisci, quisquam sunt saepe dignissimos dolorum velit officia ipsa error
                            doloremque dicta fugit quidem earum ullam dolor possimus voluptatum fuga. Lorem ipsum dolor
                            sit, amet consectetur adipisicing elit. Dolore magni cumque aut nisi. Architecto cum
                            temporibus porro praesentium maxime adipisci necessitatibus quia modi, esse eum saepe,
                            asperiores, corporis doloribus optio!</p>

                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto ab ipsum consequatur,
                            reiciendis id ad nisi, voluptates aliquid, ex tenetur deleniti! Asperiores, assumenda.
                            Suscipit magnam laboriosam pariatur quo facilis voluptatem. Lorem ipsum, dolor sit amet
                            consectetur adipisicing elit. Numquam quisquam magni architecto sint, a quia dolor eaque ex
                            quasi asperiores officiis quae facilis ipsa aperiam necessitatibus corporis, repellendus est
                            sequi. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit, necessitatibus non
                            officia amet, atque deserunt voluptatibus tempora laboriosam doloribus sequi totam dicta
                            veniam excepturi quo libero laudantium itaque tempore magni. Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Quae facilis ipsum reprehenderit perferendis dicta aut sint,
                            consectetur reiciendis corporis modi illo eaque officia provident doloribus. Quod quisquam
                            distinctio totam repellat? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores
                            tempora adipisci, quisquam sunt saepe dignissimos dolorum velit officia ipsa error
                            doloremque dicta fugit quidem earum ullam dolor possimus voluptatum fuga. Lorem ipsum dolor
                            sit, amet consectetur adipisicing elit. Dolore magni cumque aut nisi. Architecto cum
                            temporibus porro praesentium maxime adipisci necessitatibus quia modi, esse eum saepe,
                            asperiores, corporis doloribus optio!</p>
                    </div>

                    <div class="social-section margin-t-30">
                        <div>
                            <a href="#"
                                class="button button-icon radius-full margin-r-10 color-button-dark border-op-1"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="#"
                                class="button button-icon radius-full margin-r-10 color-button-dark border-op-1"><i
                                    class="fab fa-twitter"></i></a>
                            <a href="#"
                                class="button button-icon radius-full margin-r-10 color-button-dark border-op-1"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a href="#"
                                class="button button-icon radius-full margin-r-10 color-button-dark border-op-1"><i
                                    class="fab fa-dribbble"></i></a>
                        </div>
                    </div>

                </div>

            </div>
        </div>


        <div id="blog-02" class="white-popup-block single-blog popup-content animate fadeInDown mfp-hide radius-6">
            <div class="pop-header padding-b-0 position-rel height-px-500" data-ckav-sm="padding-30 padding-b-0">
                <div class="bg-holder zindex-0">

                    <!-- OVERLAY -->
                    <b data-bgholder="overlay" class="full-wh zindex-2"
                        data-linear-gradient="rgba(0,0,0, 0)|rgba(0,0,0, 0.5)"></b>

                    <!-- BACKGROUND IMAGE -->
                    <b data-bgholder="background-image" class="full-wh bg-cover bg-tc zindex-1"
                        data-bg-image="{{ asset('assets/website/themes/' . $theme->files_path) }}/images/blog-bg-02.jpg"></b>

                </div>
            </div>
            <div class="pop-body padding-tb-60" data-ckav-sm="padding-30 padding-t-30">

                <div class="container align-left">
                    <div class="section-heading-wrapper margin-auto" data-ckav-smd="width-100">
                        <p class="color-text-default bold-600">January 22, 2018 -- <span>LOGOS</span></p>
                        <h2 class="heading-section text-upper small bold-600" data-ckav-smd="small">Sharp design is
                            create more attraction</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto ab ipsum consequatur,
                            reiciendis id ad nisi, voluptates aliquid, ex tenetur deleniti! Asperiores, assumenda.
                            Suscipit magnam laboriosam pariatur quo facilis voluptatem. Lorem ipsum, dolor sit amet
                            consectetur adipisicing elit. Numquam quisquam magni architecto sint, a quia dolor eaque ex
                            quasi asperiores officiis quae facilis ipsa aperiam necessitatibus corporis, repellendus est
                            sequi. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit, necessitatibus non
                            officia amet, atque deserunt voluptatibus tempora laboriosam doloribus sequi totam dicta
                            veniam excepturi quo libero laudantium itaque tempore magni. Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Quae facilis ipsum reprehenderit perferendis dicta aut sint,
                            consectetur reiciendis corporis modi illo eaque officia provident doloribus. Quod quisquam
                            distinctio totam repellat? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores
                            tempora adipisci, quisquam sunt saepe dignissimos dolorum velit officia ipsa error
                            doloremque dicta fugit quidem earum ullam dolor possimus voluptatum fuga. Lorem ipsum dolor
                            sit, amet consectetur adipisicing elit. Dolore magni cumque aut nisi. Architecto cum
                            temporibus porro praesentium maxime adipisci necessitatibus quia modi, esse eum saepe,
                            asperiores, corporis doloribus optio!</p>

                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto ab ipsum consequatur,
                            reiciendis id ad nisi, voluptates aliquid, ex tenetur deleniti! Asperiores, assumenda.
                            Suscipit magnam laboriosam pariatur quo facilis voluptatem. Lorem ipsum, dolor sit amet
                            consectetur adipisicing elit. Numquam quisquam magni architecto sint, a quia dolor eaque ex
                            quasi asperiores officiis quae facilis ipsa aperiam necessitatibus corporis, repellendus est
                            sequi. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit, necessitatibus non
                            officia amet, atque deserunt voluptatibus tempora laboriosam doloribus sequi totam dicta
                            veniam excepturi quo libero laudantium itaque tempore magni. Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Quae facilis ipsum reprehenderit perferendis dicta aut sint,
                            consectetur reiciendis corporis modi illo eaque officia provident doloribus. Quod quisquam
                            distinctio totam repellat? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores
                            tempora adipisci, quisquam sunt saepe dignissimos dolorum velit officia ipsa error
                            doloremque dicta fugit quidem earum ullam dolor possimus voluptatum fuga. Lorem ipsum dolor
                            sit, amet consectetur adipisicing elit. Dolore magni cumque aut nisi. Architecto cum
                            temporibus porro praesentium maxime adipisci necessitatibus quia modi, esse eum saepe,
                            asperiores, corporis doloribus optio!</p>
                    </div>

                    <div class="social-section margin-t-30">
                        <div>
                            <a href="#"
                                class="button button-icon radius-full margin-r-10 color-button-dark border-op-1"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="#"
                                class="button button-icon radius-full margin-r-10 color-button-dark border-op-1"><i
                                    class="fab fa-twitter"></i></a>
                            <a href="#"
                                class="button button-icon radius-full margin-r-10 color-button-dark border-op-1"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a href="#"
                                class="button button-icon radius-full margin-r-10 color-button-dark border-op-1"><i
                                    class="fab fa-dribbble"></i></a>
                        </div>
                    </div>

                </div>

            </div>
        </div>


        <div id="blog-03" class="white-popup-block single-blog popup-content animate fadeInDown mfp-hide radius-6">
            <div class="pop-header padding-b-0 position-rel height-px-500" data-ckav-sm="padding-30 padding-b-0">
                <div class="bg-holder zindex-0">

                    <!-- OVERLAY -->
                    <b data-bgholder="overlay" class="full-wh zindex-2"
                        data-linear-gradient="rgba(0,0,0, 0)|rgba(0,0,0, 0.5)"></b>

                    <!-- BACKGROUND IMAGE -->
                    <b data-bgholder="background-image" class="full-wh bg-cover bg-tc zindex-1"
                        data-bg-image="{{ asset('assets/website/themes/' . $theme->files_path) }}/images/blog-bg-03.jpg"></b>

                </div>
            </div>
            <div class="pop-body padding-tb-60" data-ckav-sm="padding-30 padding-t-30">

                <div class="container align-left">
                    <div class="section-heading-wrapper margin-auto" data-ckav-smd="width-100">
                        <p class="color-text-default bold-600">January 22, 2018 -- <span>LOGOS</span></p>
                        <h2 class="heading-section text-upper small bold-600" data-ckav-smd="small">After support is
                            most important services</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto ab ipsum consequatur,
                            reiciendis id ad nisi, voluptates aliquid, ex tenetur deleniti! Asperiores, assumenda.
                            Suscipit magnam laboriosam pariatur quo facilis voluptatem. Lorem ipsum, dolor sit amet
                            consectetur adipisicing elit. Numquam quisquam magni architecto sint, a quia dolor eaque ex
                            quasi asperiores officiis quae facilis ipsa aperiam necessitatibus corporis, repellendus est
                            sequi. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit, necessitatibus non
                            officia amet, atque deserunt voluptatibus tempora laboriosam doloribus sequi totam dicta
                            veniam excepturi quo libero laudantium itaque tempore magni. Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Quae facilis ipsum reprehenderit perferendis dicta aut sint,
                            consectetur reiciendis corporis modi illo eaque officia provident doloribus. Quod quisquam
                            distinctio totam repellat? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores
                            tempora adipisci, quisquam sunt saepe dignissimos dolorum velit officia ipsa error
                            doloremque dicta fugit quidem earum ullam dolor possimus voluptatum fuga. Lorem ipsum dolor
                            sit, amet consectetur adipisicing elit. Dolore magni cumque aut nisi. Architecto cum
                            temporibus porro praesentium maxime adipisci necessitatibus quia modi, esse eum saepe,
                            asperiores, corporis doloribus optio!</p>

                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto ab ipsum consequatur,
                            reiciendis id ad nisi, voluptates aliquid, ex tenetur deleniti! Asperiores, assumenda.
                            Suscipit magnam laboriosam pariatur quo facilis voluptatem. Lorem ipsum, dolor sit amet
                            consectetur adipisicing elit. Numquam quisquam magni architecto sint, a quia dolor eaque ex
                            quasi asperiores officiis quae facilis ipsa aperiam necessitatibus corporis, repellendus est
                            sequi. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit, necessitatibus non
                            officia amet, atque deserunt voluptatibus tempora laboriosam doloribus sequi totam dicta
                            veniam excepturi quo libero laudantium itaque tempore magni. Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Quae facilis ipsum reprehenderit perferendis dicta aut sint,
                            consectetur reiciendis corporis modi illo eaque officia provident doloribus. Quod quisquam
                            distinctio totam repellat? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores
                            tempora adipisci, quisquam sunt saepe dignissimos dolorum velit officia ipsa error
                            doloremque dicta fugit quidem earum ullam dolor possimus voluptatum fuga. Lorem ipsum dolor
                            sit, amet consectetur adipisicing elit. Dolore magni cumque aut nisi. Architecto cum
                            temporibus porro praesentium maxime adipisci necessitatibus quia modi, esse eum saepe,
                            asperiores, corporis doloribus optio!</p>
                    </div>

                    <div class="social-section margin-t-30">
                        <div>
                            <a href="#"
                                class="button button-icon radius-full margin-r-10 color-button-dark border-op-1"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="#"
                                class="button button-icon radius-full margin-r-10 color-button-dark border-op-1"><i
                                    class="fab fa-twitter"></i></a>
                            <a href="#"
                                class="button button-icon radius-full margin-r-10 color-button-dark border-op-1"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a href="#"
                                class="button button-icon radius-full margin-r-10 color-button-dark border-op-1"><i
                                    class="fab fa-dribbble"></i></a>
                        </div>
                    </div>

                </div>

            </div>
        </div>



        <div id="blog-04" class="white-popup-block single-blog popup-content animate fadeInDown mfp-hide radius-6">
            <div class="pop-header padding-b-0 position-rel height-px-500" data-ckav-sm="padding-30 padding-b-0">
                <div class="bg-holder zindex-0">

                    <!-- OVERLAY -->
                    <b data-bgholder="overlay" class="full-wh zindex-2"
                        data-linear-gradient="rgba(0,0,0, 0)|rgba(0,0,0, 0.5)"></b>

                    <!-- BACKGROUND IMAGE -->
                    <b data-bgholder="background-image" class="full-wh bg-cover bg-tc zindex-1"
                        data-bg-image="{{ asset('assets/website/themes/' . $theme->files_path) }}/images/blog-bg-04.jpg"></b>

                </div>
            </div>
            <div class="pop-body padding-tb-60" data-ckav-sm="padding-30 padding-t-30">

                <div class="container align-left">
                    <div class="section-heading-wrapper margin-auto" data-ckav-smd="width-100">
                        <p class="color-text-default bold-600">January 22, 2018 -- <span>LOGOS</span></p>
                        <h2 class="heading-section text-upper small bold-600" data-ckav-smd="small">Get regular update
                        </h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto ab ipsum consequatur,
                            reiciendis id ad nisi, voluptates aliquid, ex tenetur deleniti! Asperiores, assumenda.
                            Suscipit magnam laboriosam pariatur quo facilis voluptatem. Lorem ipsum, dolor sit amet
                            consectetur adipisicing elit. Numquam quisquam magni architecto sint, a quia dolor eaque ex
                            quasi asperiores officiis quae facilis ipsa aperiam necessitatibus corporis, repellendus est
                            sequi. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit, necessitatibus non
                            officia amet, atque deserunt voluptatibus tempora laboriosam doloribus sequi totam dicta
                            veniam excepturi quo libero laudantium itaque tempore magni. Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Quae facilis ipsum reprehenderit perferendis dicta aut sint,
                            consectetur reiciendis corporis modi illo eaque officia provident doloribus. Quod quisquam
                            distinctio totam repellat? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores
                            tempora adipisci, quisquam sunt saepe dignissimos dolorum velit officia ipsa error
                            doloremque dicta fugit quidem earum ullam dolor possimus voluptatum fuga. Lorem ipsum dolor
                            sit, amet consectetur adipisicing elit. Dolore magni cumque aut nisi. Architecto cum
                            temporibus porro praesentium maxime adipisci necessitatibus quia modi, esse eum saepe,
                            asperiores, corporis doloribus optio!</p>

                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto ab ipsum consequatur,
                            reiciendis id ad nisi, voluptates aliquid, ex tenetur deleniti! Asperiores, assumenda.
                            Suscipit magnam laboriosam pariatur quo facilis voluptatem. Lorem ipsum, dolor sit amet
                            consectetur adipisicing elit. Numquam quisquam magni architecto sint, a quia dolor eaque ex
                            quasi asperiores officiis quae facilis ipsa aperiam necessitatibus corporis, repellendus est
                            sequi. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit, necessitatibus non
                            officia amet, atque deserunt voluptatibus tempora laboriosam doloribus sequi totam dicta
                            veniam excepturi quo libero laudantium itaque tempore magni. Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Quae facilis ipsum reprehenderit perferendis dicta aut sint,
                            consectetur reiciendis corporis modi illo eaque officia provident doloribus. Quod quisquam
                            distinctio totam repellat? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores
                            tempora adipisci, quisquam sunt saepe dignissimos dolorum velit officia ipsa error
                            doloremque dicta fugit quidem earum ullam dolor possimus voluptatum fuga. Lorem ipsum dolor
                            sit, amet consectetur adipisicing elit. Dolore magni cumque aut nisi. Architecto cum
                            temporibus porro praesentium maxime adipisci necessitatibus quia modi, esse eum saepe,
                            asperiores, corporis doloribus optio!</p>
                    </div>

                    <div class="social-section margin-t-30">
                        <div>
                            <a href="#"
                                class="button button-icon radius-full margin-r-10 color-button-dark border-op-1"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="#"
                                class="button button-icon radius-full margin-r-10 color-button-dark border-op-1"><i
                                    class="fab fa-twitter"></i></a>
                            <a href="#"
                                class="button button-icon radius-full margin-r-10 color-button-dark border-op-1"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a href="#"
                                class="button button-icon radius-full margin-r-10 color-button-dark border-op-1"><i
                                    class="fab fa-dribbble"></i></a>
                        </div>
                    </div>

                </div>

            </div>
        </div>


        <div id="blog-05" class="white-popup-block single-blog popup-content animate fadeInDown mfp-hide radius-6">
            <div class="pop-header padding-b-0 position-rel height-px-500" data-ckav-sm="padding-30 padding-b-0">
                <div class="bg-holder zindex-0">

                    <!-- OVERLAY -->
                    <b data-bgholder="overlay" class="full-wh zindex-2"
                        data-linear-gradient="rgba(0,0,0, 0)|rgba(0,0,0, 0.5)"></b>

                    <!-- BACKGROUND IMAGE -->
                    <b data-bgholder="background-image" class="full-wh bg-cover bg-tc zindex-1"
                        data-bg-image="{{ asset('assets/website/themes/' . $theme->files_path) }}/images/bg-01.jpg"></b>

                </div>
            </div>
            <div class="pop-body padding-tb-60" data-ckav-sm="padding-30 padding-t-30">

                <div class="container align-left">
                    <div class="section-heading-wrapper margin-auto" data-ckav-smd="width-100">
                        <p class="color-text-default bold-600">January 22, 2018 -- <span>LOGOS</span></p>
                        <h2 class="heading-section text-upper small bold-600" data-ckav-smd="small">Lorem ipsum dolor
                            sit amet consectetur adipisicing elit</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto ab ipsum consequatur,
                            reiciendis id ad nisi, voluptates aliquid, ex tenetur deleniti! Asperiores, assumenda.
                            Suscipit magnam laboriosam pariatur quo facilis voluptatem. Lorem ipsum, dolor sit amet
                            consectetur adipisicing elit. Numquam quisquam magni architecto sint, a quia dolor eaque ex
                            quasi asperiores officiis quae facilis ipsa aperiam necessitatibus corporis, repellendus est
                            sequi. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit, necessitatibus non
                            officia amet, atque deserunt voluptatibus tempora laboriosam doloribus sequi totam dicta
                            veniam excepturi quo libero laudantium itaque tempore magni. Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Quae facilis ipsum reprehenderit perferendis dicta aut sint,
                            consectetur reiciendis corporis modi illo eaque officia provident doloribus. Quod quisquam
                            distinctio totam repellat? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores
                            tempora adipisci, quisquam sunt saepe dignissimos dolorum velit officia ipsa error
                            doloremque dicta fugit quidem earum ullam dolor possimus voluptatum fuga. Lorem ipsum dolor
                            sit, amet consectetur adipisicing elit. Dolore magni cumque aut nisi. Architecto cum
                            temporibus porro praesentium maxime adipisci necessitatibus quia modi, esse eum saepe,
                            asperiores, corporis doloribus optio!</p>

                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto ab ipsum consequatur,
                            reiciendis id ad nisi, voluptates aliquid, ex tenetur deleniti! Asperiores, assumenda.
                            Suscipit magnam laboriosam pariatur quo facilis voluptatem. Lorem ipsum, dolor sit amet
                            consectetur adipisicing elit. Numquam quisquam magni architecto sint, a quia dolor eaque ex
                            quasi asperiores officiis quae facilis ipsa aperiam necessitatibus corporis, repellendus est
                            sequi. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit, necessitatibus non
                            officia amet, atque deserunt voluptatibus tempora laboriosam doloribus sequi totam dicta
                            veniam excepturi quo libero laudantium itaque tempore magni. Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Quae facilis ipsum reprehenderit perferendis dicta aut sint,
                            consectetur reiciendis corporis modi illo eaque officia provident doloribus. Quod quisquam
                            distinctio totam repellat? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores
                            tempora adipisci, quisquam sunt saepe dignissimos dolorum velit officia ipsa error
                            doloremque dicta fugit quidem earum ullam dolor possimus voluptatum fuga. Lorem ipsum dolor
                            sit, amet consectetur adipisicing elit. Dolore magni cumque aut nisi. Architecto cum
                            temporibus porro praesentium maxime adipisci necessitatibus quia modi, esse eum saepe,
                            asperiores, corporis doloribus optio!</p>
                    </div>

                    <div class="social-section margin-t-30">
                        <div>
                            <a href="#"
                                class="button button-icon radius-full margin-r-10 color-button-dark border-op-1"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="#"
                                class="button button-icon radius-full margin-r-10 color-button-dark border-op-1"><i
                                    class="fab fa-twitter"></i></a>
                            <a href="#"
                                class="button button-icon radius-full margin-r-10 color-button-dark border-op-1"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a href="#"
                                class="button button-icon radius-full margin-r-10 color-button-dark border-op-1"><i
                                    class="fab fa-dribbble"></i></a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- ************** END : BLOG SINGLE **************  -->

    </div>

    <!-- COMMON VENDOR SCRIPTS -->
    <script src="{{ asset('assets/website/themes/' . $theme->files_path) }}/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('assets/website/themes/' . $theme->files_path) }}/vendor/jquery/jquery-migrate-3.0.0.min.js">
    </script>
    <script src="{{ asset('assets/website/themes/' . $theme->files_path) }}/vendor/popper/umd/popper.min.js"></script>
    <script src="{{ asset('assets/website/themes/' . $theme->files_path) }}/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script
        src="{{ asset('assets/website/themes/' . $theme->files_path) }}/vendor/jquery-validation/jquery.validate.min.js">
    </script>
    <script src="{{ asset('assets/website/themes/' . $theme->files_path) }}/vendor/sweetalert/sweetalert2.min.js"></script>
    <script src="{{ asset('assets/website/themes/' . $theme->files_path) }}/vendor/jarallax/jarallax.min.js"></script>
    <script src="{{ asset('assets/website/themes/' . $theme->files_path) }}/vendor/owlcarousel/owl.carousel.min.js">
    </script>
    <script src="{{ asset('assets/website/themes/' . $theme->files_path) }}/vendor/swiper/js/swiper.min.js"></script>
    <script
        src="{{ asset('assets/website/themes/' . $theme->files_path) }}/vendor/jQuery-viewport-checker/jquery.viewportchecker.min.js">
    </script>
    <script src="{{ asset('assets/website/themes/' . $theme->files_path) }}/vendor/enquire/enquire.min.js"></script>
    <script
        src="{{ asset('assets/website/themes/' . $theme->files_path) }}/vendor/magnific-popup/jquery.magnific-popup.min.js">
    </script>
    <script src="{{ asset('assets/website/themes/' . $theme->files_path) }}/vendor/isotope/imagesloaded.pkgd.min.js">
    </script>
    <script src="{{ asset('assets/website/themes/' . $theme->files_path) }}/vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="{{ asset('assets/website/themes/' . $theme->files_path) }}/vendor/isotope/packery-mode.pkgd.min.js">
    </script>

    <!-- PAGE SPECIFIC VENDOR SCRIPTS -->

    <!-- TEMPLATE COMMON SCRIPTS -->
    <script src="{{ asset('assets/website/themes/' . $theme->files_path) }}/js/ckav-main.js"></script>


</body>

</html>
