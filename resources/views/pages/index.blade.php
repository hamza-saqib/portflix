@extends('layouts.master')

@section('content')
    <div class="slider_grey">
        <div class="container">
            <div class="row">
                <div class="col-md-6 my-5">
                    <h1 class="">The Ultimate <br> Portfolios Builder</h1>
                    <p class="lead">Portfolio for professionals to showcase the knack of one’s in his area.The backbone
                        of a creative as it shows what you're capable of make portfolio more interactive, Adding the
                        career journey videos, customer feedback and many more.</p>
                    <a class="btn btn-primary btn-lg " href="themes.html">Select Template</a>
                </div>
                <div class="col-md-6 ">
                    <div class="row">
                        <div class="col-6 ">
                            <marquee direction="up" height="420" behavior="alternate" scrollamount="4">
                                <img src="{{ asset('assets/website') }}/images/cv_slider.avif" class="img-fluid">
                                <img src="{{ asset('assets/website') }}/images/cv_slider2.avif" class="img-fluid"
                                    vspace="15px">
                                <img src="{{ asset('assets/website') }}/images/cv_slider.avif" class="img-fluid">
                            </marquee>
                        </div>
                        <div class="col-6">
                            <marquee direction="down" height="420" behavior="alternate" scrollamount="4">
                                <img src="{{ asset('assets/website') }}/images/cv_slider.avif" class="img-fluid">
                                <img src="{{ asset('assets/website') }}/images/cv_slider2.avif" class="img-fluid"
                                    vspace="15px">
                                <img src="{{ asset('assets/website') }}/images/cv_slider.avif" class="img-fluid">
                            </marquee>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5 ">
        <div class="row">
            <div class="col-md-12 text-center section">
                <h3>Recomended Themes Previews</h3>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row m-auto">
            <div class="col-lg-4  mt-4">
                <div class="card" style="width: 22rem;">
                    <img src="{{ asset('assets/website') }}/images/cv.svg" class="card-img-top" class="img-fluid"
                        alt="2k">
                    <a class="btn btn-primary  " href="IT_temp_1.html">Use Template</a>
                </div>
            </div>
            <div class="col-lg-4 mt-4">
                <div class="card" style="width: 22rem;">
                    <img src="{{ asset('assets/website') }}/images/c4.avif" class="card-img-top" class="img-fluid"
                        alt="2k">
                    <a class="btn btn-primary  " href="IT_temp_3.html">Use Template</a>
                </div>
            </div>
            <div class="col-lg-4 mt-4">
                <div class="card" style="width: 22rem;">
                    <img src="{{ asset('assets/website') }}/images/cv3.svg" class="card-img-top" class="img-fluid"
                        alt="2k">
                    <a class="btn btn-primary  " href="IT_temp_4.html">Use Template</a>
                </div>
            </div>
        </div>
    </div>

    <div id="service_bd_color">
        <div class="container ">
            <div class="row mt-5">
                <div class="col-md-12  mt-5 text-center text-white">
                    <h3 class="section">Our Services</h3>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row mt-3 ml-sm-5  py-5">
                <div class="col-lg-3 mt-3 ml-5 ">
                    <div class="card " style="width: 18rem;">
                        <img src="{{ asset('assets/website') }}/images/seo2.jpg" class="card-img-top" alt="...">
                        <div class="card-body card_bg_clr">
                            <h5 class="card-title">SEO</h5>
                            <p class="card-text">The SEO site description represents your homepage. Search engines show
                                this description in search results for your homepage if they don't find content more
                                relevant to a visitor's search terms</p>
                            <a href="web.html" class="btn btn-primary">View Services</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mt-3 ml-5 ">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('assets/website') }}/images/api.jpg" class="card-img-top" alt="...">
                        <div class="card-body card_bg_clr">
                            <h5 class="card-title">APIs</h5>
                            <p class="card-text">An API is a set of programming code that enables data transmission
                                between one software product and another. It also contains the terms of this data
                                exchange.</p>
                            <a href="marketing.html" class="btn btn-primary">View Services</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mt-3 ml-5">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('assets/website') }}/images/seo2.jpg" class="card-img-top" alt="...">
                        <div class="card-body card_bg_clr">
                            <h5 class="card-title">Portfolios</h5>
                            <p class="card-text">The best design portfolios are able to inform viewers of your work and
                                spark inspiration in those who are looking for it and more interactive customer feedback
                                and many more.</p>
                            <a href="app.html" class="btn btn-primary">View Services</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5 ">
        <div class="row">
            <div class="col-12 text-center section">
                <h3>Recent Blogs</h3>
            </div>
        </div>
    </div>

    <div class="container my-3">
        <div class="row">
            <div class="col-md-6 mt-4">
                <div class="row">
                    <div class="col-5 pr-0 ">
                        <img src="{{ asset('assets/website') }}/images/portfolio.png" alt="2k" class="img-fluid">
                    </div>
                    <div class="col-7 blog_card_bg_clr  ">
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <h5 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing.</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <a href="" class="text-decoration-none">Continue --></a>

                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-4">
                <div class="row">
                    <div class="col-5 pr-0  ">
                        <img src="{{ asset('assets/website') }}/images/portfolio.png" alt="2k" class="img-fluid">
                    </div>
                    <div class="col-7 blog_card_bg_clr  ">
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <h5 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing.</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <a href="" class="text-decoration-none">Continue --></a>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container ">
        <div class="row">
            <div class="col-md-6 mt-4">
                <div class="row">
                    <div class="col-5  pr-0 ">
                        <img src="{{ asset('assets/website') }}/images/portfolio.png" alt="2k" class="img-fluid">
                    </div>
                    <div class="col-7 blog_card_bg_clr   ">
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <h5 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing.</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <a href="" class="text-decoration-none">Continue --></a>

                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-4">
                <div class="row">
                    <div class="col-5 pr-0  ">
                        <img src="{{ asset('assets/website') }}/images/portfolio.png" alt="2k" class="img-fluid">
                    </div>
                    <div class="col-7 blog_card_bg_clr  ">
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <h5 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing.</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <a href="" class="text-decoration-none">Continue --></a>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
