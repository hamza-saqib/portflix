<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>CVIT - Multipurpose Personal vCard / CV / Resume Template</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <meta name="description" content="">
    <meta name="author" content="">

    <!-- ====Favicons==== -->
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="icon" href="favicon.png" type="image/x-icon">

    <!-- ==== Google Font ==== -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,500,700,800" rel="stylesheet">

    <!-- ==== Font Awesome ==== -->
    <link href="{{ asset('assets/website/themes/cvit') }}/css/font-awesome.min.css" rel="stylesheet">

    <!-- ==== Bootstrap ==== -->
    <link href="{{ asset('assets/website/themes/cvit') }}/css/bootstrap.min.css" rel="stylesheet">

    <!-- ==== jQuery UI ==== -->
    <link href="{{ asset('assets/website/themes/cvit') }}/css/jquery-ui.min.css" rel="stylesheet">

    <!-- ==== Owl Carousel Plugin ==== -->
    <link href="{{ asset('assets/website/themes/cvit') }}/css/owl.carousel.min.css" rel="stylesheet">

    <!-- ====Main Stylesheet==== -->
    <link href="{{ asset('assets/website/themes/cvit') }}/style.css" rel="stylesheet">

    <!-- ====Custom Stylesheet==== -->
    <link href="{{ asset('assets/website/themes/cvit') }}/css/custom-style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="{{ asset('assets/website/themes/cvit') }}/js/html5shiv.min.js"></script>
        <script src="{{ asset('assets/website/themes/cvit') }}/js/respond.min.js"></script>
    <![endif]-->
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="100">
    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Preloader Start -->
        <div id="preloader">
            <div class="preloader--bounce">
                <div class="preloader-bouncer--1"></div>
                <div class="preloader-bouncer--2"></div>
            </div>
        </div>
        <!-- Preloader End -->

        <!-- Header Area Start -->
        <div id="header">
            <nav class="header--navbar">
                <div class="container">
                    <div class="navbar">
                        <div class="navbar-header">
                            <!-- Header Custom Button Start -->
                            <div class="header--custom-btn hidden-lg hidden-md">
                                <a href="#hireMeModal" class="btn--default" data-toggle="modal"><i class="fa fa-user-plus"></i></a>
                            </div>
                            <!-- Header Custom Button End -->

                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#headerNav" aria-expanded="false" aria-controls="headerNav">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <!-- Logo Start -->
                            <a class="logo navbar-brand" href="#">
                                <div class="logo--img">
                                    <img src="{{ asset('assets/website/themes/cvit') }}/img/logo.png" class="img-responsive" alt="">
                                </div>

                                <div class="logo--content">
                                    <h1><strong>{{$user->name}}</strong></h1>
                                    <p>{{$user->tagline}}</p>
                                </div>
                            </a>
                            <!-- Logo End -->
                        </div>

                        <!-- Header Custom Button Start -->
                        <div class="header--custom-btn hidden-sm hidden-xs">
                            <a href="#hireMeModal" class="btn--default" data-toggle="modal">HIRE ME</a>
                        </div>
                        <!-- Header Custom Button End -->

                        <!-- Header Nav Start -->
                        <div id="headerNav" class="header--nav navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right AnimateScroll">
                                <li><a href="#banner">HOME</a></li>
                                <li><a href="#about">ABOUT</a></li>
                                <li><a href="#services">SERVICES</a></li>
                                <li><a href="#gallery">WORKS</a></li>
                                <li><a href="#feedback">FEEDBACK</a></li>
                                <li><a href="#blog">BLOG</a></li>
                                <li><a href="#contact">CONTACT</a></li>
                            </ul>
                        </div>
                        <!-- Header Nav End -->
                    </div>
                </div>
            </nav>
        </div>
        <!-- Header Area End -->

        <!-- Banner Area Start -->
        <div id="banner">
            <!-- Banner Slider Start -->
            <div class="banner--slider BannerSlider">
                <!-- Banner Item Start -->
                <div class="banner--item" data-bg-img="{{ asset('assets/website/themes/cvit') }}/img/banner-img/slider-01.jpg">
                    <div class="container">
                        <div class="vc--parent">
                            <div class="vc--child">
                                <!-- Banner Content Start -->
                                <div class="banner--content banner--content-left">
                                    <h2>Let's <span class="thick">Build</span> Something <span class="thick">Great</span> Together</h2>

                                    <p>I'm the pixel crafter based in <a href="https://en.wikipedia.org/wiki/Bangladesh" target="_blank"><strong>#Bangladesh</strong></a>. I make the visual for web and mobile application to be more interactive</p>

                                    <a href="#contact" class="btn--default AnimateScrollLink">LET'S TALK</a>
                                </div>
                                <!-- Banner Content End -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Banner Item End -->

                <!-- Banner Item Start -->
                <div class="banner--item" data-bg-img="{{ asset('assets/website/themes/cvit') }}/img/banner-img/slider-02.jpg">
                    <div class="container">
                        <div class="vc--parent">
                            <div class="vc--child">
                                <div class="row">
                                    <!-- Banner Content Start -->
                                    <div class="banner--content text-center col-md-8 col-md-offset-2">
                                        <h2>Let's <span class="thick">Build</span> Something <span class="thick">Great</span> Together</h2>

                                        <p>I'm the pixel crafter based in <a href="https://en.wikipedia.org/wiki/Bangladesh" target="_blank"><strong>#Bangladesh</strong></a>. I make the visual for web and mobile application to be more interactive</p>

                                        <a href="#contact" class="btn--default AnimateScrollLink">LET'S TALK</a>
                                    </div>
                                    <!-- Banner Content End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Banner Item End -->

                <!-- Banner Item Start -->
                <div class="banner--item bg--overlay" data-bg-video="2GqExKSwTEA">
                    <div class="container">
                        <div class="vc--parent">
                            <div class="vc--child">
                                <div class="row">
                                    <!-- Banner Content Start -->
                                    <div class="banner--content text-center col-md-8 col-md-offset-2">
                                        <h2>Let's <span class="thick">Build</span> Something <span class="thick">Great</span> Together</h2>

                                        <p>I'm the pixel crafter based in <a href="https://en.wikipedia.org/wiki/Bangladesh" target="_blank"><strong>#Bangladesh</strong></a>. I make the visual for web and mobile application to be more interactive</p>

                                        <a href="#contact" class="btn--default AnimateScrollLink">LET'S TALK</a>
                                    </div>
                                    <!-- Banner Content End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Banner Item End -->
            </div>
            <!-- Banner Slider End -->
        </div>
        <!-- Banner Area End -->

        <!-- About Area Start -->
        <div id="about">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section--title">
                    <h2><strong>ABOUT ME</strong></h2>
                </div>
                <!-- Section Title End -->

                <div class="row">
                    <div class="col-md-6">
                        <h3>WHO <strong>AM I</strong>?</h3>

                        <p>{{$user->bio}}</p>
                        <a href="#" class="btn btn--primary" download>DOWNLOAD MY CV</a>
                    </div>

                    <div class="col-md-6">
                        <h3>EXPERT <strong>IN</strong></h3>

                        <p>{{$user->skills_summary}}</p>
                        <!-- About Progrees Items Start -->
                        <div class="about--progress-items">
                            @foreach ($user->skills as $skill)
                            <!-- About Progrees Bar Start -->
                            <h4>{{$skill->name}}</h4>

                            <div class="progress">
                                <div class="progress-bar" data-progress="{{$skill->percentage}}"><span>{{$skill->percentage}}%</span></div>
                            </div>
                            <!-- About Progrees Bar End -->
                            @endforeach


                        </div>
                        <!-- About Progrees Items End -->
                    </div>
                </div>

                <!-- About Info Start -->
                <div class="about--info">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="about--info-wrapper">
                                <h3><strong>EDU</strong>CATION</h3>

                                @foreach ($user->educations as $education)
                                <!-- About Info Item Start -->
                                <div class="about--info-item">
                                    <div class="row reset-gutter">
                                        <div class="col-xs-4">
                                            @if ($education->is_currently_studying)
                                            <p>{{date('Y', strtotime($education->start_date))}} - current</p>
                                            @else
                                            <p>{{date('Y', strtotime($education->start_date))}} - {{date('Y', strtotime($education->end_date))}}</p>
                                            @endif
                                            <h5><strong>{{$education->institute_name}}</strong></h5>
                                        </div>

                                        <div class="col-xs-8 about--info-border">
                                            <h4><strong>{{$education->major_subject}}</strong></h4>
                                            <p>{{$education->description}}</p>
                                         </div>
                                    </div>
                                </div>
                                <!-- About Info Item End -->
                                @endforeach

                                <!-- About Info Item Start -->
                                {{-- <div class="about--info-item">
                                    <div class="row reset-gutter">
                                        <div class="col-xs-4">
                                            <p>2007-2008</p>
                                            <h5><strong>NY UNIVERSITY</strong></h5>
                                        </div>

                                        <div class="col-xs-8 about--info-border">
                                            <h4><strong>WEB</strong> DESIGN</h4>

                                            <p>Poin dui orci, pretium eget fringilla sit amet, luctus a nisl. Praesent tristique scelerisque sapien at aliquet.</p>
                                        </div>
                                    </div>
                                </div> --}}
                                <!-- About Info Item End -->
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="about--info-wrapper">
                                <h3><strong>EXP</strong>ERIENCE</h3>

                                @foreach ($user->experiences as $experience)
                                <!-- About Info Item Start -->
                                <div class="about--info-item">
                                    <div class="row reset-gutter">
                                        <div class="col-xs-4">
                                            @if ($experience->is_currently_working)
                                            <p>{{date('Y', strtotime($experience->start_date))}} - current</p>
                                            @else
                                            <p>{{date('Y', strtotime($experience->start_date))}} - {{date('Y', strtotime($experience->end_date))}}</p>
                                            @endif
                                            <h5><strong>{{$experience->company_name}}</strong></h5>
                                        </div>

                                        <div class="col-xs-8 about--info-border">
                                            <h4><strong>{{$experience->job_title}}</strong></h4>
                                            <p>{{$experience->description}}</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- About Info Item End -->
                                @endforeach

                                <!-- About Info Item Start -->
                                {{-- <div class="about--info-item">
                                    <div class="row reset-gutter">
                                        <div class="col-xs-4">
                                            <p>2011-2013</p>
                                            <h5><strong>UNIHOST2U INC.</strong></h5>
                                        </div>

                                        <div class="col-xs-8 about--info-border">
                                            <h4><strong>SENIOR</strong> DESIGNER</h4>

                                            <p>Poin dui orci, pretium eget fringilla sit amet, luctus a nisl. Praesent tristique scelerisque sapien at aliquet.</p>
                                        </div>
                                    </div>
                                </div> --}}
                                <!-- About Info Item End -->

                            </div>
                        </div>
                    </div>
                </div>
                <!-- About Info End -->
            </div>
        </div>
        <!-- About Area End -->

        <!-- Services Area Start -->
        <div id="services" class="bg--overlay" data-parallax-bg-img="{{ asset('assets/website/themes/cvit') }}/img/services-img/bg.jpg">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section--title">
                    <h2><strong>WHAT I DO</strong></h2>
                </div>
                <!-- Section Title End -->

                <div class="row row-eq-height">
                    @foreach ($user->services as $service)
                    <!-- Service Item Start -->
                    <div class="col-md-4 col-sm-6 service--item">
                        <div class="service--icon">
                            <i class="fa fa-laptop"></i>
                        </div>

                        <div class="service--content">
                            <h2><strong>{{$service->name}}</strong></h2>

                            <p>{{$service->summary}}</p>
                        </div>
                    </div>
                    <!-- Service Item End -->
                    @endforeach

                    <!-- Service Item Start -->
                    {{-- <div class="col-md-4 col-sm-6 service--item">
                        <div class="service--icon">
                            <i class="fa fa-object-group"></i>
                        </div>

                        <div class="service--content">
                            <h2>USER <strong>FLOW</strong> &amp; <strong>WIREFRAMES</strong></h2>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non vel, sint nisi possimus sunt veritatis totam velit.</p>
                        </div>
                    </div> --}}
                    <!-- Service Item End -->

                </div>
            </div>
        </div>
        <!-- Services Area End -->

        <!-- Gallery Area Start -->
        <div id="gallery">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section--title">
                    <h2><strong>AWESOME WORKS</strong></h2>
                </div>
                <!-- Section Title End -->

                <!-- Gallery Filter Menu Start -->
                <div class="gallery-filter-menu">
                    <ul>
                        <li class="active"><a href="*" class="btn--default">ALL PROJECTS</a></li>
                        <li><a href="website-item" class="btn--default">WEBSITE</a></li>
                        <li><a href="logo-item" class="btn--default">LOGO</a></li>
                        <li><a href="application-item" class="btn--default">APPLICATION</a></li>
                        <li><a href="illustation-item" class="btn--default">ILLUSTATION</a></li>
                        <li><a href="print-design-item" class="btn--default">PRINT DESIGN</a></li>
                    </ul>
                </div>
                <!-- Gallery Filter Menu End -->

                <!-- Gallery Items Start -->
                <div class="row gallery-items">
                    <!-- Gallery Item Start -->
                    <div class="col-xs-12 col-sm-4 col-md-3 thumbnail gallery-item" data-cat="website-item">
                        <img src="{{ asset('assets/website/themes/cvit') }}/img/gallery-img/gallery-photo-1.png" alt="" />

                        <div class="gallery-overlay">
                            <div class="vc--parent">
                            	<div class="vc--child">
                                    <h2>PROJECT TITLE</h2>

                                    <p>Lorem ipsum dolor sit amet con sectetur adipiscing elit sed do.</p>

                                    <a href="#galleryDetails" class="btn gallery--window" data-toggle="modal">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Gallery Item End -->

                    <!-- Gallery Item Start -->
                    <div class="col-xs-12 col-sm-4 col-md-3 thumbnail gallery-item" data-cat="website-item logo-item">
                        <img src="{{ asset('assets/website/themes/cvit') }}/img/gallery-img/gallery-photo-2.png" alt="" />
                        <span class="gallery--case-study">CASE STUDY</span>

                        <div class="gallery-overlay">
                            <div class="vc--parent">
                            	<div class="vc--child">
                                    <a href="#postDetails" class="icon-link" data-toggle="modal"><i class="icon fa fa-file-text-o"></i></a>

                                    <h2>PROJECT TITLE</h2>

                                    <p>Lorem ipsum dolor sit amet con sectetur adipiscing elit sed do.</p>

                                    <a href="#galleryDetails" class="btn gallery--window" data-toggle="modal">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Gallery Item End -->

                    <!-- Gallery Item Start -->
                    <div class="col-xs-12 col-sm-4 col-md-3 thumbnail gallery-item" data-cat="logo-item">
                        <img src="{{ asset('assets/website/themes/cvit') }}/img/gallery-img/gallery-photo-3.png" alt="" />

                        <div class="gallery-overlay">
                            <div class="vc--parent">
                            	<div class="vc--child">
                                    <h2>PROJECT TITLE</h2>

                                    <p>Lorem ipsum dolor sit amet con sectetur adipiscing elit sed do.</p>

                                    <a href="#galleryDetails" class="btn gallery--window" data-toggle="modal">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Gallery Item End -->

                    <!-- Gallery Item Start -->
                    <div class="col-xs-12 col-sm-4 col-md-3 thumbnail gallery-item" data-cat="logo-item application-item">
                        <img src="{{ asset('assets/website/themes/cvit') }}/img/gallery-img/gallery-photo-4.png" alt="" />

                        <div class="gallery-overlay">
                            <div class="vc--parent">
                            	<div class="vc--child">
                                    <h2>PROJECT TITLE</h2>

                                    <p>Lorem ipsum dolor sit amet con sectetur adipiscing elit sed do.</p>

                                    <a href="#galleryDetails" class="btn gallery--window" data-toggle="modal">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Gallery Item End -->

                    <!-- Gallery Item Start -->
                    <div class="col-xs-12 col-sm-4 col-md-3 thumbnail gallery-item" data-cat="application-item">
                        <img src="{{ asset('assets/website/themes/cvit') }}/img/gallery-img/gallery-photo-5.png" alt="" />

                        <div class="gallery-overlay">
                            <div class="vc--parent">
                            	<div class="vc--child">
                                    <h2>PROJECT TITLE</h2>

                                    <p>Lorem ipsum dolor sit amet con sectetur adipiscing elit sed do.</p>

                                    <a href="#galleryDetails" class="btn gallery--window" data-toggle="modal">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Gallery Item End -->

                    <!-- Gallery Item Start -->
                    <div class="col-xs-12 col-sm-4 col-md-3 thumbnail gallery-item" data-cat="application-item illustation">
                        <img src="{{ asset('assets/website/themes/cvit') }}/img/gallery-img/gallery-photo-6.png" alt="" />

                        <div class="gallery-overlay">
                            <div class="vc--parent">
                            	<div class="vc--child">
                                    <h2>PROJECT TITLE</h2>

                                    <p>Lorem ipsum dolor sit amet con sectetur adipiscing elit sed do.</p>

                                    <a href="#galleryDetails" class="btn gallery--window" data-toggle="modal">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Gallery Item End -->

                    <!-- Gallery Item Start -->
                    <div class="col-xs-12 col-sm-4 col-md-3 thumbnail gallery-item" data-cat="illustation-item">
                        <img src="{{ asset('assets/website/themes/cvit') }}/img/gallery-img/gallery-photo-7.png" alt="" />
                        <span class="gallery--case-study">CASE STUDY</span>

                        <div class="gallery-overlay">
                            <div class="vc--parent">
                            	<div class="vc--child">
                                    <a href="#postDetails" class="icon-link" data-toggle="modal"><i class="icon fa fa-file-text-o"></i></a>

                                    <h2>PROJECT TITLE</h2>

                                    <p>Lorem ipsum dolor sit amet con sectetur adipiscing elit sed do.</p>

                                    <a href="#galleryDetails" class="btn gallery--window" data-toggle="modal">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Gallery Item End -->

                    <!-- Gallery Item Start -->
                    <div class="col-xs-12 col-sm-4 col-md-3 thumbnail gallery-item" data-cat="illustation-item print-design-item">
                        <img src="{{ asset('assets/website/themes/cvit') }}/img/gallery-img/gallery-photo-8.png" alt="" />

                        <div class="gallery-overlay">
                            <div class="vc--parent">
                            	<div class="vc--child">
                                    <h2>PROJECT TITLE</h2>

                                    <p>Lorem ipsum dolor sit amet con sectetur adipiscing elit sed do.</p>

                                    <a href="#galleryDetails" class="btn gallery--window" data-toggle="modal">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Gallery Item End -->
                </div>
                <!-- Gallery Items End -->
            </div>

            <!-- Gallery Details Modal Start -->
            <div class="modal fade gallery--details" id="galleryDetails" role="dialog">
                <div class="modal-dialog modal-lg">
                    <!-- Modal Content Start -->
                    <div class="modal-content">
                        <!-- Modal Header Start -->
                        <div class="modal-header">
                            <span class="close" data-dismiss="modal">&times;</span>

                            <h4 class="modal-title">PROJECT NAME</h4>
                            <p>#UX Design #UI Design #Prototype #Design #Identity</p>
                        </div>
                        <!-- Modal Header End -->

                        <!-- Modal Body Start -->
                        <div class="modal-body">
                            <img src="{{ asset('assets/website/themes/cvit') }}/img/gallery-img/project-01.jpg" alt="" />
                        </div>
                        <!-- Modal Body End -->

                        <!-- Modal Footer Start -->
                        <div class="modal-footer gallery--description">
                            <p>Last time I created a full e-commerce web template for website owner who planning right now. In that design, I followed all the rules of UX latest design techniques. After finished, I started a dashboard design with the best experience for the adminstrator.</p>
                            <p>And finally, I finished the design.</p>
                        </div>
                        <!-- Modal Footer End -->
                    </div>
                    <!-- Modal Content End -->
                </div>
            </div>
            <!-- Gallery Details Modal End -->
        </div>
        <!-- Gallery Area End -->

        <!-- Feedback Area Start -->
        <div id="feedback" data-parallax-bg-img="{{ asset('assets/website/themes/cvit') }}/img/feedback-img/bg.jpg">
            <div class="container">
                <div class="row">
                    <!-- Feedback FAQ Start -->
                    <div class="col-md-4 feedback--faq">
                        <!-- Feedback Title Start -->
                        <h3 class="feedback--title">WHY ME?</h3>
                        <!-- Feedback Title End -->

                        <!-- Feedback Accordion Start -->
                        <div class="panel-group" id="feedbackA" role="tablist">
                            <!-- Feedback Accordion Item Start -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <a href="#feedbackA01" data-toggle="collapse" data-parent="#feedbackA">
                                        <h4 class="panel-title">Collapsible Group Item #1 <i class="fa fa-minus"></i></h4>
                                    </a>
                                </div>

                                <div id="feedbackA01" class="panel-collapse collapse in" role="tabpanel">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod tempor sunt aliqua put.
                                    </div>
                                </div>
                            </div>
                            <!-- Feedback Accordion Item End -->

                            <!-- Feedback Accordion Item Start -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <a href="#feedbackA02" class="collapsed" data-toggle="collapse" data-parent="#feedbackA">
                                        <h4 class="panel-title">Collapsible Group Item #2 <i class="fa fa-minus"></i></h4>
                                    </a>
                                </div>

                                <div id="feedbackA02" class="panel-collapse collapse" role="tabpanel">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod tempor sunt aliqua put.
                                    </div>
                                </div>
                            </div>
                            <!-- Feedback Accordion Item End -->

                            <!-- Feedback Accordion Item Start -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <a href="#feedbackA03" class="collapsed" data-toggle="collapse" data-parent="#feedbackA">
                                        <h4 class="panel-title">Collapsible Group Item #3 <i class="fa fa-minus"></i></h4>
                                    </a>
                                </div>

                                <div id="feedbackA03" class="panel-collapse collapse" role="tabpanel">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod tempor sunt aliqua put.
                                    </div>
                                </div>
                            </div>
                            <!-- Feedback Accordion Item End -->
                        </div>
                        <!-- Feedback Accordion End -->
                    </div>
                    <!-- Feedback FAQ End -->

                    <!-- Feedback Items Start -->
                    <div class="col-md-8 feedback--items">
                        <!-- Feedback Title Start -->
                        <h3 class="feedback--title">CLIENT'S FEEDBACK</h3>
                        <!-- Feedback Title End -->

                        <div class="feedback--slider FeedbackSlider">
                            <!-- Feedback Item Start -->
                            <div class="feedback--item" data-client-img="{{ asset('assets/website/themes/cvit') }}/img/feedback-img/client-01.jpg">
                                <i class="fa fa-quote-left"></i>

                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.</p>

                                <span class="cite">James, Web Developer</span>
                            </div>
                            <!-- Feedback Item End -->

                            <!-- Feedback Item Start -->
                            <div class="feedback--item" data-client-img="{{ asset('assets/website/themes/cvit') }}/img/feedback-img/client-02.jpg">
                                <i class="fa fa-quote-left"></i>

                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.</p>

                                <span class="cite">James, Web Developer</span>
                            </div>
                            <!-- Feedback Item End -->

                            <!-- Feedback Item Start -->
                            <div class="feedback--item" data-client-img="{{ asset('assets/website/themes/cvit') }}/img/feedback-img/client-03.jpg">
                                <i class="fa fa-quote-left"></i>

                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.</p>

                                <span class="cite">James, Web Developer</span>
                            </div>
                            <!-- Feedback Item End -->

                            <!-- Feedback Item Start -->
                            <div class="feedback--item" data-client-img="{{ asset('assets/website/themes/cvit') }}/img/feedback-img/client-04.jpg">
                                <i class="fa fa-quote-left"></i>

                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.</p>

                                <span class="cite">James, Web Developer</span>
                            </div>
                            <!-- Feedback Item End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feedback Area End -->

        <!-- Blog Area Start -->
        <div id="blog">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section--title">
                    <h2><strong>HELPFUL WRITING</strong></h2>
                </div>
                <!-- Section Title End -->

                <div class="blog--quick-nav clearfix">
                    <button class="toggle--btn btn--default"><i class="fa fa-indent"></i></button>

                    <!-- Posts Filter Menu Start -->
                    <div class="posts-filter-menu">
                        <ul>
                            <li><a href="*">All</a></li>
                            <li><a href="ux-design">UX Design</a></li>
                            <li><a href="ui-design">UI Design</a></li>
                            <li><a href="usability">Usability</a></li>
                            <li><a href="interaction-design">Intarection Design</a></li>
                            <li><a href="logo-design">Logo Design</a></li>
                            <li><a href="illustration">Illustration</a></li>
                            <li><a href="typography">Typography</a></li>
                            <li><a href="freelancing">Freelancing</a></li>
                            <li><a href="research">Research</a></li>
                            <li><a href="usability">Publishing</a></li>
                        </ul>
                    </div>
                    <!-- Posts Filter Menu End -->
                </div>

                <!-- Post Items Start -->
                <div class="row post-items">
                    <!-- Post Item Start -->
                    <div class="col-sm-4 col-md-3 post-item" data-cat="ux-design illustration">
                        <!-- Post Description Start -->
                        <div class="post-description">
                            <h2><a href="#postDetails" data-toggle="modal">User <strong>Experience</strong> (UX) <strong>Design</strong></a></h2>

                            <p class="post-date"><i class="fa fa-calendar"></i> <a href="#">28 Dec 2015</a></p>

                            <p class="post-description-content">I’m a freelance UX designer &amp; an all round good guy, building awesome things for the web and mobile. I live in <strong>#Dhaka</strong>, work remotely with seriously cool startups, on seriously cool stuff.</p>
                        </div>
                        <!-- Post Description End -->

                        <!-- Post Meta Start -->
                        <div class="post-meta clearfix">
                            <div class="post-meta-img">
                                <a href="#">
                                    <img src="{{ asset('assets/website/themes/cvit') }}/img/logo.png" alt="" class="img-responsive img-circle" />
                                </a>
                            </div>

                            <div class="post-meta-desc">
                                <h3><a href="#">JOHN <strong>DOE</strong></a></h3>
                                <p>On <a href="#"><strong>UX</strong> Design</a></p>
                            </div>
                        </div>
                        <!-- Post Meta End -->
                    </div>
                    <!-- Post Item End -->

                    <!-- Post Item Start -->
                    <div class="col-sm-4 col-md-3 post-item" data-cat="ux-design illustration typography">
                        <!-- Post Image Start -->
                        <div class="post--img">
                            <a href="#postDetails" data-toggle="modal">
                                <img src="{{ asset('assets/website/themes/cvit') }}/img/blog-img/post-01.jpg" alt="" />
                            </a>
                        </div>
                        <!-- Post Image End -->

                        <!-- Post Description Start -->
                        <div class="post-description">
                            <h2><a href="#postDetails" data-toggle="modal">User <strong>Experience</strong> (UX) <strong>Design</strong></a></h2>

                            <p class="post-date"><i class="fa fa-calendar"></i> <a href="#">28 Dec 2015</a></p>

                            <p class="post-description-content">I’m a freelance UX designer &amp; an all round good guy, building awesome things for the web and mobile. I live in <strong>#Dhaka</strong>, work remotely with seriously cool startups, on seriously cool stuff.</p>
                        </div>
                        <!-- Post Description End -->

                        <!-- Post Meta Start -->
                        <div class="post-meta clearfix">
                            <div class="post-meta-img">
                                <a href="#">
                                    <img src="{{ asset('assets/website/themes/cvit') }}/img/logo.png" alt="" class="img-responsive img-circle" />
                                </a>
                            </div>

                            <div class="post-meta-desc">
                                <h3><a href="#">JOHN <strong>DOE</strong></a></h3>
                                <p>On <a href="#"><strong>UX</strong> Design</a></p>
                            </div>
                        </div>
                        <!-- Post Meta End -->
                    </div>
                    <!-- Post Item End -->

                    <!-- Post Item Start -->
                    <div class="col-sm-4 col-md-3 post-item" data-cat="ux-design ui-design typography">
                        <!-- Post Description Start -->
                        <div class="post-description">
                            <h2><a href="#postDetails" data-toggle="modal">User <strong>Experience</strong> (UX) <strong>Design</strong></a></h2>

                            <p class="post-date"><i class="fa fa-calendar"></i> <a href="#">28 Dec 2015</a></p>

                            <p class="post-description-content">I’m a freelance UX designer &amp; an all round good guy, building awesome things for the web and mobile. I live in <strong>#Dhaka</strong>, work remotely with seriously cool startups, on seriously cool stuff.</p>
                        </div>
                        <!-- Post Description End -->

                        <!-- Post Meta Start -->
                        <div class="post-meta clearfix">
                            <div class="post-meta-img">
                                <a href="#">
                                    <img src="{{ asset('assets/website/themes/cvit') }}/img/logo.png" alt="" class="img-responsive img-circle" />
                                </a>
                            </div>

                            <div class="post-meta-desc">
                                <h3><a href="#">JOHN <strong>DOE</strong></a></h3>
                                <p>On <a href="#"><strong>UX</strong> Design</a></p>
                            </div>
                        </div>
                        <!-- Post Meta End -->
                    </div>
                    <!-- Post Item End -->

                    <!-- Post Item Start -->
                    <div class="col-sm-4 col-md-3 post-item" data-cat="ux-design ui-design typography logo-design">
                        <!-- Post Image Start -->
                        <div class="post--img">
                            <a href="#postDetails" data-toggle="modal">
                                <img src="{{ asset('assets/website/themes/cvit') }}/img/blog-img/post-02.jpg" alt="" />
                            </a>
                        </div>
                        <!-- Post Image End -->

                        <!-- Post Description Start -->
                        <div class="post-description">
                            <h2><a href="#postDetails" data-toggle="modal">User <strong>Experience</strong> (UX) <strong>Design</strong></a></h2>

                            <p class="post-date"><i class="fa fa-calendar"></i> <a href="#">28 Dec 2015</a></p>

                            <p class="post-description-content">I’m a freelance UX designer &amp; an all round good guy, building awesome things for the web and mobile. I live in <strong>#Dhaka</strong>, work remotely with seriously cool startups, on seriously cool stuff.</p>
                        </div>
                        <!-- Post Description End -->

                        <!-- Post Meta Start -->
                        <div class="post-meta clearfix">
                            <div class="post-meta-img">
                                <a href="#">
                                    <img src="{{ asset('assets/website/themes/cvit') }}/img/logo.png" alt="" class="img-responsive img-circle" />
                                </a>
                            </div>

                            <div class="post-meta-desc">
                                <h3><a href="#">JOHN <strong>DOE</strong></a></h3>
                                <p>On <a href="#"><strong>UX</strong> Design</a></p>
                            </div>
                        </div>
                        <!-- Post Meta End -->
                    </div>
                    <!-- Post Item End -->

                    <!-- Post Item Start -->
                    <div class="col-sm-4 col-md-3 post-item" data-cat="ui-design usability typography freelancing logo-design">
                        <!-- Post Image Start -->
                        <div class="post--img">
                            <a href="#postDetails" data-toggle="modal">
                                <img src="{{ asset('assets/website/themes/cvit') }}/img/blog-img/post-03.jpg" alt="" />
                            </a>
                        </div>
                        <!-- Post Image End -->

                        <!-- Post Description Start -->
                        <div class="post-description">
                            <h2><a href="#postDetails" data-toggle="modal">User <strong>Experience</strong> (UX) <strong>Design</strong></a></h2>

                            <p class="post-date"><i class="fa fa-calendar"></i> <a href="#">28 Dec 2015</a></p>

                            <p class="post-description-content">I’m a freelance UX designer &amp; an all round good guy, building awesome things for the web and mobile. I live in <strong>#Dhaka</strong>, work remotely with seriously cool startups, on seriously cool stuff.</p>
                        </div>
                        <!-- Post Description End -->

                        <!-- Post Meta Start -->
                        <div class="post-meta clearfix">
                            <div class="post-meta-img">
                                <a href="#">
                                    <img src="{{ asset('assets/website/themes/cvit') }}/img/logo.png" alt="" class="img-responsive img-circle" />
                                </a>
                            </div>

                            <div class="post-meta-desc">
                                <h3><a href="#">JOHN <strong>DOE</strong></a></h3>
                                <p>On <a href="#"><strong>UX</strong> Design</a></p>
                            </div>
                        </div>
                        <!-- Post Meta End -->
                    </div>
                    <!-- Post Item End -->

                    <!-- Post Item Start -->
                    <div class="col-sm-4 col-md-3 post-item" data-cat="ui-design usability interaction-design freelancing research">
                        <!-- Post Image Start -->
                        <div class="post--img">
                            <a href="#postDetails" data-toggle="modal">
                                <img src="{{ asset('assets/website/themes/cvit') }}/img/blog-img/post-04.jpg" alt="" />
                            </a>
                        </div>
                        <!-- Post Image End -->

                        <!-- Post Description Start -->
                        <div class="post-description">
                            <h2><a href="#postDetails" data-toggle="modal">User <strong>Experience</strong> (UX) <strong>Design</strong></a></h2>

                            <p class="post-date"><i class="fa fa-calendar"></i> <a href="#">28 Dec 2015</a></p>

                            <p class="post-description-content">I’m a freelance UX designer &amp; an all round good guy, building awesome things for the web and mobile. I live in <strong>#Dhaka</strong>, work remotely with seriously cool startups, on seriously cool stuff.</p>
                        </div>
                        <!-- Post Description End -->

                        <!-- Post Meta Start -->
                        <div class="post-meta clearfix">
                            <div class="post-meta-img">
                                <a href="#">
                                    <img src="{{ asset('assets/website/themes/cvit') }}/img/logo.png" alt="" class="img-responsive img-circle" />
                                </a>
                            </div>

                            <div class="post-meta-desc">
                                <h3><a href="#">JOHN <strong>DOE</strong></a></h3>
                                <p>On <a href="#"><strong>UX</strong> Design</a></p>
                            </div>
                        </div>
                        <!-- Post Meta End -->
                    </div>
                    <!-- Post Item End -->

                    <!-- Post Item Start -->
                    <div class="col-sm-4 col-md-3 post-item" data-cat="ui-design usability freelancing research">
                        <!-- Post Description Start -->
                        <div class="post-description">
                            <h2><a href="#postDetails" data-toggle="modal">User <strong>Experience</strong> (UX) <strong>Design</strong></a></h2>

                            <p class="post-date"><i class="fa fa-calendar"></i> <a href="#">28 Dec 2015</a></p>

                            <p class="post-description-content">I’m a freelance UX designer &amp; an all round good guy, building awesome things for the web and mobile. I live in <strong>#Dhaka</strong>, work remotely with seriously cool startups, on seriously cool stuff.</p>
                        </div>
                        <!-- Post Description End -->

                        <!-- Post Meta Start -->
                        <div class="post-meta clearfix">
                            <div class="post-meta-img">
                                <a href="#">
                                    <img src="{{ asset('assets/website/themes/cvit') }}/img/logo.png" alt="" class="img-responsive img-circle" />
                                </a>
                            </div>

                            <div class="post-meta-desc">
                                <h3><a href="#">JOHN <strong>DOE</strong></a></h3>
                                <p>On <a href="#"><strong>UX</strong> Design</a></p>
                            </div>
                        </div>
                        <!-- Post Meta End -->
                    </div>
                    <!-- Post Item End -->

                    <!-- Post Item Start -->
                    <div class="col-sm-4 col-md-3 post-item" data-cat="usability interaction-design freelancing">
                        <!-- Post Description Start -->
                        <div class="post-description">
                            <h2><a href="#postDetails" data-toggle="modal">User <strong>Experience</strong> (UX) <strong>Design</strong></a></h2>

                            <p class="post-date"><i class="fa fa-calendar"></i> <a href="#">28 Dec 2015</a></p>

                            <p class="post-description-content">I’m a freelance UX designer &amp; an all round good guy, building awesome things for the web and mobile. I live in <strong>#Dhaka</strong>, work remotely with seriously cool startups, on seriously cool stuff.</p>
                        </div>
                        <!-- Post Description End -->

                        <!-- Post Meta Start -->
                        <div class="post-meta clearfix">
                            <div class="post-meta-img">
                                <a href="#">
                                    <img src="{{ asset('assets/website/themes/cvit') }}/img/logo.png" alt="" class="img-responsive img-circle" />
                                </a>
                            </div>

                            <div class="post-meta-desc">
                                <h3><a href="#">JOHN <strong>DOE</strong></a></h3>
                                <p>On <a href="#"><strong>UX</strong> Design</a></p>
                            </div>
                        </div>
                        <!-- Post Meta End -->
                    </div>
                    <!-- Post Item End -->
                </div>
                <!-- Post Items End -->
            </div>

            <!-- Blog Details Start -->
            <div class="modal fade post--details" id="postDetails" role="dialog">
                <div class="modal-dialog modal-lg">
                    <!-- Modal Content Start -->
                    <div class="modal-content">
                        <!-- Modal Header Start -->
                        <div class="modal-header">
                            <span class="close" data-dismiss="modal">&times;</span>

                            <!-- Logo Start -->
                            <a class="logo" href="#">
                                <div class="logo--img">
                                    <img src="{{ asset('assets/website/themes/cvit') }}/img/logo.png" class="img-responsive" alt="">
                                </div>

                                <div class="logo--content">
                                    <h1>JOHN <strong>DOE</strong></h1>
                                    <p>On <strong>UX</strong> DESIGN</p>
                                </div>
                            </a>
                            <!-- Logo End -->

                            <!-- Social Links Start -->
                            <div class="social-icons">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                                </ul>
                            </div>
                            <!-- Social Links End -->
                        </div>
                        <!-- Modal Header End -->

                        <!-- Modal Body Start -->
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-offset-1 col-md-10 col-xs-offset-1 col-xs-10 reset-padding post-title">
                                    <h2><strong>The</strong> best <strong>UX</strong> technique <strong>in shopping</strong> website</h2>
                                    <p><i class="fa fa-calendar"></i> 28 Dec, 2015</p>
                                </div>

                                <div class="col-md-12">
                                    <img src="{{ asset('assets/website/themes/cvit') }}/img/blog-img/30-percent-offer.jpg" alt="" class="img-responsive" />
                                </div>

                                <div class="col-md-offset-1 col-md-10 col-xs-offset-1 col-xs-10 reset-padding post-content">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor tempora corporis eaque possimus veritatis, totam cum impedit omnis unde consequatur eveniet, temporibus cupiditate? Excepturi dolor nisi, quibusdam itaque reprehenderit libero.</p>

									<p>Sed augue ipsum, egestas nec, vestibulum et, malesuada adipiscing, dui. Nulla consequat massa quis enim. In ut quam vitae odio lacinia tincidunt. Fusce convallis metus id felis luctus adipiscing. Etiam imperdiet imperdiet orci. Cras risus ipsum, faucibus ut, ullamcorper id, varius ac, leo. Ut a nisl id ante tempus.</p>

									<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam cursus lacinia erat. In hac habitasse platea dictumst. Nullam vel sem. Nullam accumsan lorem in dui. Aenean commodo ligula eget dolor. Nulla sit amet est. Curabitur vestibulum aliquam leo. Phasellus volutpat, metus eget egestas mollis, lacus lacus blandit dui, id egestas quam mauris ut lacus. Suspendisse faucibus..</p>

									<blockquote>
										<p>Aenean ut eros et nisl sagittis vestibulum. Morbi mattis ullamcorper velit. Etiam vitae tortor. Donec posuere vulputate arcu. Nullam accumsan lorem in dui.</p>
									</blockquote>

									<p>Suspendisse feugiat. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Etiam feugiat lorem non metus. Vivamus quis mi. Donec vitae sapien ut libero venenatis faucibus. Phasellus gravida semper nisi. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum.</p>

									<ul>
										<li>Consectetur adipiscing elit vtae elit libero</li>
										<li>Nullam id dolor id eget lacinia odio posuere erat a ante</li>
										<li>Integer posuere erat dapibus posuere velit</li>
									</ul>

									<p>Vestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor. Fusce fermentum odio nec arcu. In auctor lobortis lacus. Fusce vel dui. Praesent turpis. Fusce fermentum odio nec arcu. Aenean commodo ligula eget dolor. Etiam iaculis nunc ac metus. Praesent blandit laoreet nibh. In hac habitasse platea dictumst. In hac habitasse platea dictumst. Ut varius tincidunt libero. Donec id justo.</p>

									<p><i>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam at velit nisl. Aenean vitae est nisl. Cras molestie molestie nisl vel imperdiet. Donec vel mi sem.</i></p>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Body End -->
                    </div>
                    <!-- Modal Content End -->
                </div>
            </div>
            <!-- Blog Details End -->
        </div>
        <!-- Blog Area End -->

        <!-- Counter Area Start -->
        <div id="counter" class="bg--overlay" data-parallax-bg-img="{{ asset('assets/website/themes/cvit') }}/img/counter-img/bg.jpg">
            <div class="container">
                <div class="row">
                    <!-- Counter Item Start -->
                	<div class="col-md-3 col-sm-6 counter--item">
                        <div class="counter--num">
                            <i class="fa fa-flag"></i>
                            <span class="CounterUp">2,500</span>
                        </div>

                        <div class="counter--text"><strong>PROJECT</strong> COMPLETED</div>
                    </div>
                    <!-- Counter Item End -->

                    <!-- Counter Item Start -->
                	<div class="col-md-3 col-sm-6 counter--item">
                        <div class="counter--num">
                            <i class="fa fa-smile-o"></i>
                            <span class="CounterUp">400</span>
                        </div>

                        <div class="counter--text"><strong>HAPPY</strong> CLIENTS</div>
                    </div>
                    <!-- Counter Item End -->

                    <!-- Counter Item Start -->
                	<div class="col-md-3 col-sm-6 counter--item">
                        <div class="counter--num">
                            <i class="fa fa-code"></i>
                            <span class="CounterUp">98</span>K
                        </div>

                        <div class="counter--text"><strong>LINE</strong> OF <strong>CODE</strong></div>
                    </div>
                    <!-- Counter Item End -->

                    <!-- Counter Item Start -->
                	<div class="col-md-3 col-sm-6 counter--item">
                        <div class="counter--num">
                            <i class="fa fa-coffee"></i>
                            <span class="CounterUp">78</span>K
                        </div>

                        <div class="counter--text"><strong>CUP</strong> OF <strong>COFFEE</strong></div>
                    </div>
                    <!-- Counter Item End -->
                </div>
            </div>
        </div>
        <!-- Counter Area End -->

        <!-- Contact Area Start -->
        <div id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <!-- Contact Address Start -->
                        <div class="contact--address">
                            <h2>CONTACT ADDRESS</h2>

                            <address>
                                <p><i class="fa fa-home"></i>{{$user->address}}</p>
                                <p><i class="fa fa-envelope"></i>{{$user->email}}</p>
                                <p><i class="fa fa-phone"></i>{{$user->phone}}</p>
                                {{-- <p><i class="fa fa-fax"></i>+1-212-9876543</p> --}}
                            </address>
                        </div>
                        <!-- Contact Address End -->

                        <!-- Contact Social Start -->
                        <div class="contact--social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-feed"></i></a></li>
                            </ul>
                        </div>
                        <!-- Contact Social End -->
                    </div>

                    <div class="col-sm-6">
                        <!-- Contact Form Start -->
                        <div class="contact--form">
                            <div class="contact-form-status"></div>

                            <form action="contact.php" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="contactName" class="form-control" placeholder="Name">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="contactEmail" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="contactSubject" class="form-control" placeholder="Subject">
                                </div>

                                <div class="form-group">
                                    <textarea name="contactMessage" class="form-control" rows="9" placeholder="Message"></textarea>
                                </div>

                                <input type="submit" value="SEND" class="submit-btn btn--primary">
                            </form>
                        </div>
                        <!-- Contact Form End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Area End -->

        <!-- Map Area Start -->
        <div id="map" data-latitude="23.790546" data-longitude="90.375583" data-zoom="16"></div>
        <!-- Map Area End -->

        <!-- Brands Area Start -->
        <div id="brands" class="bg--overlay" data-parallax-bg-img="{{ asset('assets/website/themes/cvit') }}/img/brands-img/bg.jpg">
            <div class="container">
                <!-- Brands Slider Start -->
                <div class="brands--slider BrandsSlider">
                    <!-- Brand Item Start -->
                    <div class="brand--item">
                        <img src="{{ asset('assets/website/themes/cvit') }}/img/brands-img/01.png" alt="" class="img-responsive center-block" />
                    </div>
                    <!-- Brand Item End -->

                    <!-- Brand Item Start -->
                    <div class="brand--item">
                        <img src="{{ asset('assets/website/themes/cvit') }}/img/brands-img/02.png" alt="" class="img-responsive center-block" />
                    </div>
                    <!-- Brand Item End -->

                    <!-- Brand Item Start -->
                    <div class="brand--item">
                        <img src="{{ asset('assets/website/themes/cvit') }}/img/brands-img/03.png" alt="" class="img-responsive center-block" />
                    </div>
                    <!-- Brand Item End -->

                    <!-- Brand Item Start -->
                    <div class="brand--item">
                        <img src="{{ asset('assets/website/themes/cvit') }}/img/brands-img/04.png" alt="" class="img-responsive center-block" />
                    </div>
                    <!-- Brand Item End -->

                    <!-- Brand Item Start -->
                    <div class="brand--item">
                        <img src="{{ asset('assets/website/themes/cvit') }}/img/brands-img/05.png" alt="" class="img-responsive center-block" />
                    </div>
                    <!-- Brand Item End -->

                    <!-- Brand Item Start -->
                    <div class="brand--item">
                        <img src="{{ asset('assets/website/themes/cvit') }}/img/brands-img/06.png" alt="" class="img-responsive center-block" />
                    </div>
                    <!-- Brand Item End -->
                </div>
                <!-- Brands Slider End -->
            </div>
        </div>
        <!-- Brands Area End -->

        <!-- Subscribe Area Start -->
        <div id="subscribe">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <!-- Section Title Start -->
                        <div class="section--title">
                            <h2><strong>SUBSCRIBE TO GET MY NEWSLETTER</strong></h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Subscribe Form Start -->
                        <div class="subscribe--form">
                            <form action="http://themelooks.us12.list-manage.com/subscribe/post?u=50e1e21235cbd751ab4c1ebaa&amp;id=ac81d988e4" method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate="novalidate">
                                <input type="text" value="" name="EMAIL" placeholder="Enter your email address" class="input-box">
                                <input type="submit" value="Subscribe" class="submit--btn btn--default">
                            </form>
                        </div>
                        <!-- Subscribe Form End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Subscribe Area End -->

        <!-- Footer Area Start -->
        <div id="footer">
            <div class="container">
                <!-- Footer Copyright Start -->
                <div class="footer--copyright">
                    <p>Copyright &copy; 2017 <a href="#">CVIT</a>. All Rights Reserved.</p>
                </div>
                <!-- Footer Copyright End -->
            </div>
        </div>
        <!-- Footer Area End -->

        <!-- Back To Top Area Start -->
        <div id="backToTop">
            <a href="#banner" class="btn--default AnimateScrollLink"><i class="fa fa-angle-up"></i></a>
        </div>
        <!-- Back To Top Area End -->

        <!-- Hire Me Modal Start -->
        <div class="hire-me--modal modal fade" id="hireMeModal" role="dialog">
            <div class="modal-dialog modal-lg">
                <!-- Modal Content Start -->
                <div class="modal-content">
                    <!-- Modal Header Start-->
                    <div class="modal-header">
                        <span class="close" data-dismiss="modal">&times;</span>

                        <h4 class="modal-title">HAVE A PROJECT?</h4>
                        <p>I’m ready to help you. You just type details below, and/or send us a file.</p>
                    </div>
                    <!-- Modal Header End-->

                    <!-- Modal Body Start-->
                    <div class="modal-body">
                        <form action="hire-me.php" method="post" id="popupContactForm">
                            <div class="row">
                                <div class="col-md-8 form-controls">
                                    <div class="row">
                                        <div class="col-md-6 name">
                                            <input type="text" name="name" placeholder="Your Name..." />
                                        </div>

                                        <div class="col-md-6 email">
                                            <input type="email" name="email" placeholder="Please Enter Your Email..." />
                                        </div>

                                        <div class="col-md-6 project-title">
                                            <input type="text" name="project_title" placeholder="Your Project Title..." />
                                        </div>

                                        <div class="col-md-6 case-category">
                                            <select name="category" class="bg-fa-caret-down SelectMenu">
                                                <option value="">-Select Case Category-</option>
                                                <option value="example">Example Category</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6 budget">
                                            <select name="budget" class="bg-fa-caret-down SelectMenu">
                                                <option value="">-Budget-</option>
                                                <option value="0">0</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6 date">
                                            <input type="text" name="date" class="DatePicker bg-fa-calender" placeholder="-Estimate Date-" />
                                        </div>

                                        <div class="col-md-12 message">
                                            <textarea name="message" rows="9">Your Message...</textarea>
                                        </div>

                                        <div class="col-md-4 text-center attachment reset-padding">
                                            <label for="fileUpload">
                                                <i class="glyphicon glyphicon-paperclip"></i>
                                                Attach File
                                            </label>

                                            <input type="file" name="attachment" id="fileUpload">
                                        </div>

                                        <div class="col-md-8 attachment-status">
                                            <span>No File Choosen</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 estimate-container">
                                    <div class="estimate-img">
                                        <img src="{{ asset('assets/website/themes/cvit') }}/img/hire-me-pic.png" alt="" class="center-block img-responsive"/>
                                    </div>

                                    <div class="estimate-text">
                                        <h4>Is An Estimate Required?</h4>

                                        <div class="radio">
                                          <input type="radio" name="estimate" value="no" checked="checked" id="estimateZERO"><label for="estimateZERO">No Estimate Required</label>
                                        </div>

                                        <div class="radio">
                                          <input type="radio" name="estimate" value="yes" id="estimateONE"><label for="estimateONE">Yes, I require an estimate cost of services. I understand I need to allow 2-4 business days to receive the estimate.</label>
                                        </div>

                                        <input type="submit" value="SEND OFFER" class="submit-btn btn--primary btn-block" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Modal Body End-->
                </div>
                <!-- Modal Content End -->
            </div>
        </div>
        <!-- Hire Me Modal End -->
    </div>
    <!-- Wrapper End -->

    <!-- ==== jQuery ==== -->
    <script src="{{ asset('assets/website/themes/cvit') }}/js/jquery.min.js"></script>

    <!-- ==== Bootstrap ==== -->
    <script src="{{ asset('assets/website/themes/cvit') }}/js/bootstrap.min.js"></script>

    <!-- ==== jQuery UI DatePicker Plugin ==== -->
    <script src="{{ asset('assets/website/themes/cvit') }}/js/jquery-ui.min.js"></script>

    <!-- ==== Owl Carousel Plugin ==== -->
    <script src="{{ asset('assets/website/themes/cvit') }}/js/owl.carousel.min.js"></script>

    <!-- ==== Isotope Plugin ==== -->
    <script src="{{ asset('assets/website/themes/cvit') }}/js/isotope-docs.min.js"></script>

    <!-- ==== jQuery Form Plugin ==== -->
    <script src="{{ asset('assets/website/themes/cvit') }}/js/jquery.form.min.js"></script>

    <!-- ==== jQuery Validation Plugin ==== -->
    <script src="{{ asset('assets/website/themes/cvit') }}/js/jquery.validate.min.js"></script>

    <!-- ==== Google Map API ==== -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBK9f7sXWmqQ1E-ufRXV3VpXOn_ifKsDuc"></script>

    <!-- ==== GMaps Plugin ==== -->
    <script src="{{ asset('assets/website/themes/cvit') }}/js/gmaps.min.js"></script>

    <!-- ==== jQuery Waypoints Plugin ==== -->
    <script src="{{ asset('assets/website/themes/cvit') }}/js/jquery.waypoints.min.js"></script>

    <!-- ==== Animate Scroll Plugin ==== -->
    <script src="{{ asset('assets/website/themes/cvit') }}/js/animatescroll.min.js"></script>

    <!-- ==== CounterUp Plugin ==== -->
    <script src="{{ asset('assets/website/themes/cvit') }}/js/jquery.counterup.min.js"></script>

    <!-- ==== jQuery Nice Scroll Plugin ==== -->
    <script src="{{ asset('assets/website/themes/cvit') }}/js/jquery.nicescroll.min.js"></script>

    <!-- ==== Parallax Plugin ==== -->
    <script src="{{ asset('assets/website/themes/cvit') }}/js/parallax.min.js"></script>

    <!-- ==== jQuery Tubular Plugin ==== -->
    <script src="{{ asset('assets/website/themes/cvit') }}/js/jquery.tubular.1.0.js"></script>

    <!-- ==== RetinaJS Plugin ==== -->
    <script src="{{ asset('assets/website/themes/cvit') }}/js/retina.min.js"></script>

    <!-- ==== Main Script ==== -->
    <script src="{{ asset('assets/website/themes/cvit') }}/js/main.js"></script>
</body>
</html>
