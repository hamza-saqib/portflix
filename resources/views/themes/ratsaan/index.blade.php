<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="portfolio,creative,business,company,agency,multipurpose,modern,bootstrap4">

    <meta name="author" content="themeturn.com">

    <title>Ratsaan| Creative portfolio template</title>

    <!-- Mobile Specific Meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap.min css -->
    <link rel="stylesheet"
        href="{{ asset('assets/website/themes/' . $user->selected_theme_path) }}/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Themeify Icon Css -->
    <link rel="stylesheet"
        href="{{ asset('assets/website/themes/' . $user->selected_theme_path) }}/plugins/themify/css/themify-icons.css">
    <!-- animate.css -->
    <link rel="stylesheet"
        href="{{ asset('assets/website/themes/' . $user->selected_theme_path) }}/plugins/animate-css/animate.css">
    <link rel="stylesheet" href="{{ asset('assets/website/themes/' . $user->selected_theme_path) }}/plugins/aos/aos.css">
    <!-- owl carousel -->
    <link rel="stylesheet"
        href="{{ asset('assets/website/themes/' . $user->selected_theme_path) }}/plugins/owl/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="{{ asset('assets/website/themes/' . $user->selected_theme_path) }}/plugins/owl/assets/owl.theme.default.min.css">
    <!-- Slick slider CSS -->
    <link rel="stylesheet"
        href="{{ asset('assets/website/themes/' . $user->selected_theme_path) }}/plugins/slick-carousel/slick/slick.css">
    <link rel="stylesheet"
        href="{{ asset('assets/website/themes/' . $user->selected_theme_path) }}/plugins/slick-carousel/slick/slick-theme.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/website/themes/' . $user->selected_theme_path) }}/css/style.css">

</head>

<body class="portfolio" id="top">


    <!-- Navigation start -->
    <!-- Header Start -->

    <nav class="navbar navbar-expand-lg bg-transprent py-4 fixed-top navigation" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <h2 class="logo">Ratsaan.</h2>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09"
                aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ti-view-list"></span>
            </button>

            <div class="collapse navbar-collapse text-center" id="navbarsExample09">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item"><a class="nav-link smoth-scroll" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link smoth-scroll" href="#skillbar">Expertise</a></li>
                    <li class="nav-item"><a class="nav-link smoth-scroll" href="#service">Services</a></li>
                    <li class="nav-item"><a class="nav-link smoth-scroll" href="#portfolio">portfolio</a></li>
                    <li class="nav-item"><a class="nav-link smoth-scroll" href="#blog">Blog</a></li>
                    <li class="nav-item"><a class="nav-link smoth-scroll" href="#contact">Contact</a></li>
                </ul>

                <ul class="list-inline mb-0 ml-lg-4 nav-social">
                    <li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="ti-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="ti-pinterest"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Navigation End -->

    <!-- Banner start -->

    <!-- Slider Start -->
    <section class="slider py-7 ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-sm-12 col-12 col-md-5">
                    <div class="slider-img position-relative">
                        <img src="images/about/9.jpg" alt="" class="img-fluid w-100">
                    </div>
                </div>

                <div class="col-lg-6 col-12 col-md-7">
                    <div class="ml-5 position-relative mt-5 mt-lg-0">
                        <span class="head-trans">Stephen</span>
                        <h1 class="font-weight-normal text-color text-md"><i class="ti-minus mr-2"></i>Theme Developer
                        </h1>
                        <h2 class="mt-3 text-lg mb-3 text-capitalize">{{$user->name}}.</h2>
                        <p class="animated fadeInUp lead mt-4 mb-5 text-white-50 lh-35">{{$user->bio}}</p>
                        <a href="#about" class="btn btn-solid-border">About Me</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

    <!-- About start -->
    <section class="section" id="about" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="row">
                        <div class="col-lg-4">
                            <h2><i class="ti-minus"></i>Myself</h2>
                        </div>
                        <div class="col-lg-8">
                            <p class="text-white-50 text-md">Hello! I’m <span class="text-white">Willium
                                    stephen</span> a self-taught & award winning Digital <span
                                    class="text-white">Designer & Developer</span> with over <span
                                    class="text-white">five years</span> work experience.</p>
                            <p class="text-white-50 text-md">Love the Web and the work we do.I work closely with my
                                clients to deliver the best <span class="text-white">possible solutions</span> for
                                their needs</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0 mt-md-0 col-md-6">
                    <div class="row">
                        <div class="col-lg-3">
                            <h2><i class="ti-minus"></i>Skills</h2>
                        </div>
                        <div class="col-lg-9 pl-5">
                            <p class="text-white-50 text-md">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam.
                            </p>

                            <ul class="list-unstyled lh-45">
                                <li> <i class="ti-check mr-3 text-color"></i><span class="text-white-50">Web
                                        Designing</span> - HTML/CSS</li>
                                <li><i class="ti-check mr-3 text-color"></i><span class="text-white-50">Graphic
                                        Design</span> - UI/UX</li>
                                <li><i class="ti-check mr-3 text-color"></i><span class="text-white-50">Web
                                        Development</span> - WORDPRESS/PHP</li>
                                <li><i class="ti-check mr-3 text-color"></i><span class="text-white-50">Application
                                        Dev</span> - ANDROID/ IOS</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <!-- About End -->

    <!-- Skills start -->
    <section class="section bg-gray" id="skillbar" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <span class="text-color mb-0 text-uppercase letter-spacing text-sm"><i
                                class="ti-minus mr-2"></i>Skills Set</span>
                        <h2 class="title">Expertise</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="skill-bar mb-4 mb-lg-0">
                        <div class="mb-4 text-right">
                            <h4 class="font-weight-normal">Html/Css </h4>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" data-percent="80">
                                <span class="percent-text"><span class="count">80</span>%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="skill-bar mb-4 mb-lg-0">
                        <div class="mb-4 text-right">
                            <h4 class="font-weight-normal">WordPress/PHP</h4>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" data-percent="95">
                                <span class="percent-text"><span class="count">95</span>%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="skill-bar mb-4 mb-lg-0">
                        <div class="mb-4 text-right">
                            <h4 class="font-weight-normal">Graphics Design </h4>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" data-percent="70">
                                <span class="percent-text"><span class="count">70</span>%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="skill-bar mb-4 mb-lg-0">
                        <div class="mb-4 text-right">
                            <h4 class="font-weight-normal">Marketing</h4>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" data-percent="85">
                                <span class="percent-text"><span class="count">85</span>%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="skill-bar mb-4 mb-lg-0">
                        <div class=" mb-4 text-right">
                            <h4 class="font-weight-normal">Branding</h4>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" data-percent="60">
                                <span class="percent-text"><span class="count">60</span>%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="skill-bar mb-4 mb-lg-0">
                        <div class=" mb-4 text-right">
                            <h4 class="font-weight-normal">Woo-Commerce</h4>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" data-percent="82">
                                <span class="percent-text"><span class="count">82</span>%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills End -->

    <!-- Service start -->
    <section class="section bg-gray" id="service" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <span class="text-color mb-0 text-uppercase letter-spacing text-sm"><i
                                class="ti-minus mr-2"></i>What i do</span>
                        <h2 class="title">Services</h2>
                    </div>
                </div>
            </div>

            <div class="row no-gutters">
                <div class="col-lg-4 col-md-6">
                    <div class="card p-5 rounded-0">
                        <i class="ti-layers text-lg-2 text-muted"></i>
                        <h3 class="my-4 text-capitalize">Graphics Branding Design</h3>
                        <p>It can change the way we feel about a company and the products & services they offer.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card p-5 rounded-0">
                        <i class="ti-layout text-lg-2 text-muted"></i>
                        <h3 class="my-4 text-capitalize">Front End Design Development</h3>
                        <p>It can change the way we feel about a company and the products & services they offer.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card p-5 rounded-0">
                        <i class="ti-stats-up text-lg-2 text-muted"></i>
                        <h3 class="my-4 text-capitalize">Digital Content Marketing</h3>
                        <p>It can change the way we feel about a company and the products & services they offer.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card p-5 rounded-0">
                        <i class="ti-android text-lg-2 text-muted"></i>
                        <h3 class="my-4 text-capitalize">Application devlopment</h3>
                        <p>It can change the way we feel about a company and the products & services they offer.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card p-5 rounded-0">
                        <i class="ti-camera text-lg-2 text-muted"></i>
                        <h3 class="my-4 text-capitalize">Videography Photography</h3>
                        <p>It can change the way we feel about a company and the products & services they offer.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card  p-5 rounded-0">
                        <i class="ti-desktop text-lg-2 text-muted"></i>
                        <h3 class="my-4 text-capitalize">Wordpress Development</h3>
                        <p>It can change the way we feel about a company and the products & services they offer.</p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center mt-5" data-aos="fade-up">
                <div class="col-lg-6 mt-5">
                    <h2 class="mb-5 text-lg-2 text-white-50">Let's <span class="text-white">work together</span> on
                        your next project </h2>
                </div>
                <div class="col-lg-4 ml-auto text-right">
                    <a href="#contact" class="btn btn-main text-white smoth-scroll">Hire Me</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Service End -->

    <!-- Portfolio start -->
    <section class="section" id="portfolio" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <span class="text-color mb-0 text-uppercase letter-spacing text-sm"><i
                                class="ti-minus"></i>works</span>
                        <h2 class="title">Portfolio</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="post_gallery owl-carousel owl-theme">
                    <div class="item">
                        <div class="portfolio-item position-relative">
                            <img src="images/portfolio/3.jpg" alt="" class="img-fluid">

                            <div class="portoflio-item-overlay">
                                <a href="portfolio-single.html"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <div class="text mt-3">
                            <h4 class="mb-1 text-capitalize">Web development</h4>
                            <p class="text-uppercase letter-spacing text-sm">wordpress</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="portfolio-item position-relative">
                            <img src="images/portfolio/4.jpg" alt="" class="img-fluid">

                            <div class="portoflio-item-overlay">
                                <a href="portfolio-single.html"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <div class="text mt-3">
                            <h4 class="mb-1 text-capitalize">Web development</h4>
                            <p class="text-uppercase letter-spacing text-sm">wordpress</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="portfolio-item position-relative">
                            <img src="images/portfolio/5.jpg" alt="" class="img-fluid">

                            <div class="portoflio-item-overlay">
                                <a href="portfolio-single.html"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <div class="text mt-3">
                            <h4 class="mb-1 text-capitalize">Web development</h4>
                            <p class="text-uppercase letter-spacing text-sm">wordpress</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="portfolio-item position-relative">
                            <img src="images/portfolio/6.jpg" alt="" class="img-fluid">

                            <div class="portoflio-item-overlay">
                                <a href="portfolio-single.html"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <div class="text mt-3">
                            <h4 class="mb-1 text-capitalize">Web development</h4>
                            <p class="text-uppercase letter-spacing text-sm">wordpress</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="portfolio-item position-relative">
                            <img src="images/portfolio/1.jpg" alt="" class="img-fluid">

                            <div class="portoflio-item-overlay">
                                <a href="portfolio-single.html"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <div class="text mt-3">
                            <h4 class="mb-1 text-capitalize">Web development</h4>
                            <p class="text-uppercase letter-spacing text-sm">wordpress</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="portfolio-item position-relative">
                            <img src="images/portfolio/2.jpg" alt="" class="img-fluid">

                            <div class="portoflio-item-overlay">
                                <a href="portfolio-single.html"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <div class="text mt-3">
                            <h4 class="mb-1 text-capitalize">Web development</h4>
                            <p class="text-uppercase letter-spacing text-sm">wordpress</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio End -->

    <!-- Tetsimonial start -->
    <section class="section testomionial" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title">
                        <span class="text-color mb-0 text-uppercase letter-spacing text-sm"> <i
                                class="ti-minus mr-2"></i>testimonial</span>
                        <h1 class="title">What People Say About me</h1>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="testimonial-slider">
                        <div class="testimonial-item position-relative">
                            <i class="ti-quote-left text-white-50"></i>
                            <div class="testimonial-content">
                                <p class="text-md mt-3">They do this through collaboration between our strategists,
                                    designers and technologists.They craft beautiful and unique digital
                                    experiences.Unlimited power and customization possibilities.Pixel perfect design &
                                    clear code delivered to you.</p>

                                <div class="media mt-5 align-items-center">
                                    <img src="images/about/2.jpg" alt=""
                                        class="img-fluid  rounded-circle align-self-center mr-4">
                                    <div class="media-body">
                                        <h3 class="mb-0">John Smith</h3>
                                        <span class="text-muted">Creative Designer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item position-relative">
                            <i class="ti-quote-left text-white-50"></i>
                            <div class="testimonial-content">
                                <p class="text-md mt-3">They do this through collaboration between our strategists,
                                    designers and technologists.They craft beautiful and unique digital
                                    experiences.Unlimited power and customization possibilities.Pixel perfect design &
                                    clear code delivered to you.</p>

                                <div class="media mt-5 align-items-center">
                                    <img src="images/about/3.jpg" alt=""
                                        class="img-fluid  rounded-circle align-self-center mr-4">
                                    <div class="media-body">
                                        <h3 class="mb-0">Smith Austin</h3>
                                        <span class="text-muted">Developer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item position-relative">
                            <i class="ti-quote-left text-white-50"></i>
                            <div class="testimonial-content">
                                <p class="text-md mt-3">They do this through collaboration between our strategists,
                                    designers and technologists.They craft beautiful and unique digital
                                    experiences.Unlimited power and customization possibilities.Pixel perfect design &
                                    clear code delivered to you.</p>

                                <div class="media mt-5 align-items-center">
                                    <img src="images/about/3.jpg" alt=""
                                        class="img-fluid  rounded-circle align-self-center mr-4">
                                    <div class="media-body">
                                        <h3 class="mb-0">Mike jack</h3>
                                        <span class="text-muted">Marketer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tetsimonial End -->

    <!-- Blog start -->
    <section class="section border-top-1" id="blog" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <span class="text-color mb-0 text-uppercase letter-spacing text-sm"> <i
                                class="ti-minus mr-2"></i>blog news</span>
                        <h1 class="title">Latest Article</h1>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="position-relative blog-item mb-5 mb-lg-0">
                        <img src="images/blog/img1.jpg" alt="blog-1" class="img-fluid">

                        <div class="blog-item-meta mb-3">
                            <span><i class="ti-user mr-2"></i>by Admin</span>
                            <span class="text-muted mx-2"> | </span>
                            <span class="text-white-50">Photography</span>
                        </div>

                        <div class="pl-4">
                            <a href="blog-single.html">
                                <h3 class="mb-4 ">20 Best Startup Ideas for Designers</h3>
                            </a>

                            <a href="blog-single.html" class="learn-more text-uppercase text-sm"><i
                                    class="ti-arrow-right mr-2"></i>Learn more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="position-relative blog-item mb-5 mb-lg-0">
                        <img src="images/blog/img3.jpg" alt="blog-1" class="img-fluid">

                        <div class="blog-item-meta mb-3">
                            <span><i class="ti-user mr-2"></i>by Admin</span>
                            <span class="text-muted mx-2"> | </span>
                            <span class="text-white-50">Branding</span>
                        </div>
                        <div class="pl-4">
                            <a href="blog-single.html">
                                <h3 class="mb-4">How to Incorporate Branding into Your Event</h3>
                            </a>

                            <a href="blog-single.html" class="learn-more text-uppercase text-sm"><i
                                    class="ti-arrow-right mr-2 show"></i>Learn more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="position-relative blog-item mb-5 mb-lg-0">
                        <img src="images/blog/img1.jpg" alt="blog-1" class="img-fluid">

                        <div class="blog-item-meta mb-3">
                            <span><i class="ti-user mr-2"></i>by Admin</span>
                            <span class="text-muted mx-2"> | </span>
                            <span class="text-white-50">Marketing</span>
                        </div>
                        <div class="pl-4">
                            <a href="blog-single.html">
                                <h3 class="mb-4 ">The Value of Video in Content Marketing</h3>
                            </a>
                            <a href="blog-single.html" class="learn-more text-uppercase text-sm"><i
                                    class="ti-arrow-right mr-2"></i>Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog End -->

    <!-- Contact start -->
    <section class="section" id="contact" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <span class="text-color mb-0 text-uppercase letter-spacing text-sm"> <i
                                class="ti-minus mr-2"></i>Contact</span>
                        <h1 class="title">Get in Touch</h1>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <form class="contact__form form-row contact-form" method="post" action="mail.php"
                        id="contactForm">
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                    Your message was sent successfully.
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-lg-6 mb-5">
                            <input type="text" id="name" name="name" class="form-control bg-transparent"
                                placeholder="Your Name">
                        </div>
                        <div class="form-group col-lg-6 mb-5">
                            <input type="text" name="email" id="email" class="form-control bg-transparent"
                                placeholder="Your Email">
                        </div>
                        <div class="form-group col-lg-12 mb-5">
                            <input type="text" name="subject" id="subject" class="form-control bg-transparent"
                                placeholder="Your Subject">
                        </div>

                        <div class="form-group col-lg-12 mb-5">
                            <textarea id="message" name="message" cols="30" rows="6" class="form-control bg-transparent"
                                placeholder="Your Message"></textarea>

                            <div class="text-center">
                                <input class="btn btn-main text-white mt-5" id="submit" name="submit"
                                    type="submit" class="btn btn-hero" value="Send Message">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact End -->

    <!-- Footer start -->
    <footer class="footer border-top-1">
        <div class="container">
            <div class="row align-items-center text-center text-lg-left">
                <div class="col-lg-2">
                    <h2 class="logo mb-4">Ratsaan.</h2>
                </div>

                <div class="col-lg-5">
                    <ul class="list-inline footer-socials ">
                        <li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="ti-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="ti-pinterest"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="ti-linkedin"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="ti-dribbble"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <p class="lead"><span class="text-color">Dreambuzz</span> © 2019 All Right Reserved Ratsaan.</p>
                    <a href="#top" class="backtop smoth-scroll"><i class="ti-angle-up"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->


    <!--
    Essential Scripts
    =====================================-->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- Main jQuery -->
    <script src="{{ asset('assets/website/themes/' . $user->selected_theme_path) }}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4.3.1 -->
    <script src="{{ asset('assets/website/themes/' . $user->selected_theme_path) }}/plugins/bootstrap/js/popper.js"></script>
    <script src="{{ asset('assets/website/themes/' . $user->selected_theme_path) }}/plugins/bootstrap/js/bootstrap.min.js">
    </script>
    <script src="{{ asset('assets/website/themes/' . $user->selected_theme_path) }}/plugins/nav/jquery.easing.1.3.js">
    </script>

    <!-- Slick Slider -->
    <script
        src="{{ asset('assets/website/themes/' . $user->selected_theme_path) }}/plugins/slick-carousel/slick/slick.min.js">
    </script>
    <script src="{{ asset('assets/website/themes/' . $user->selected_theme_path) }}/plugins/owl/owl.carousel.min.js">
    </script>

    <!-- Skill COunt -->
    <script src="{{ asset('assets/website/themes/' . $user->selected_theme_path) }}/plugins/counto/apear.js"></script>
    <script src="{{ asset('assets/website/themes/' . $user->selected_theme_path) }}/plugins/counto/counTo.js"></script>
    <!-- AOS Animation -->
    <script src="{{ asset('assets/website/themes/' . $user->selected_theme_path) }}/plugins/aos/aos.js"></script>
    <script src="{{ asset('assets/website/themes/' . $user->selected_theme_path) }}/js/script.js"></script>
    <script src="{{ asset('assets/website/themes/' . $user->selected_theme_path) }}/js/ajax-contact.js"></script>

</body>

</html>
