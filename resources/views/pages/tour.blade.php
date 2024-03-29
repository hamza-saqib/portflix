@extends('layouts.master')

@section('content')
    <!-- Banner Section -->
    <section class="inner-banner">
        <div class="{{ asset('assets/website') }}/image-layer"
            style="background-image: url({{ asset('assets/website') }}/images/background/banner-image-1.jpg);"></div>
        <div class="auto-container">
            <div class="content-box">
                <h2>Trekking</h2>
                <div class="bread-crumb">
                    <ul class="clearfix">
                        <li><span class="icon-home fa fa-home"></span><a href="index.html">Home</a></li>
                        <li class="current">Trekking</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!--Trekking Section-->
    <section class="trekking-section">
        <div class="floated-icon left"><img src="{{ asset('assets/website') }}/images/resource/hills-image-2.svg"
                alt="" title=""></div>
        <div class="floated-icon right"><img src="{{ asset('assets/website') }}/images/resource/stones-right.svg"
                alt="" title=""></div>
        <div class="floated-icon right-2"><img src="{{ asset('assets/website') }}/images/resource/floated-icon-right-2.svg"
                alt="" title=""></div>
        <div class="auto-container">
            <div class="title-box centered">
                <h2><span>Best Treks for you with Trekker</span></h2>
                <div class="text">Since 2014, we’ve helped more than 500,000 people of all ages enjoy the best outdoor
                    experience of their lives. Whether it’s for one day or a two-week vacation, close to home or a foreign
                    land.</div>
            </div>
            <!--MixitUp Galery-->
            <div class="mixitup-gallery">
                <!--Filter-->
                <div class="gallery-filters centered clearfix">
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="active filter" data-role="button" data-filter="all">All Types</li>
                        <li class="filter" data-role="button" data-filter=".easy-m">Easy Moderate</li>
                        <li class="filter" data-role="button" data-filter=".moderate">Moderate</li>
                        <li class="filter" data-role="button" data-filter=".m-difficult">Moderate Difficult</li>
                        <li class="filter" data-role="button" data-filter=".difficult">Difficult</li>
                    </ul>
                </div>
                <div class="filter-list row clearfix">
                    @foreach ($tours as $tour)
                    <!--Block-->
                    <div class="trek-block-one style-two mix all moderate m-difficult col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="{{ asset('assets/website') }}/image-box">
                                <div class="{{ asset('assets/website') }}/image"><a href="#"><img
                                            src="{{ asset('assets/website') }}/images/resource/f-image-1.jpg" alt=""
                                            title=""></a></div>
                                <div class="price"><span>${{$tour->price}}</span></div>
                                <div class="info">
                                    <span class="i-block"><i class="icon far fa-clock"></i> {{$tour->duration}} days</span> &ensp; | &ensp;
                                    {{-- <span class="i-block">259P, Himalaya Ag</span> --}}
                                </div>
                            </div>
                            <div class="lower-content">
                                <h4><a href="{{route('tour.show', $tour->id)}}">{{$tour->name}}</a></h4>
                                <div class="ratings clearfix">

                                </div>
                                <div class="text">{{$tour->summary}} </div>
                            </div>
                            <div class="bottom-box clearfix">
                                <div class="more-link"><a href="{{route('tour.show', $tour->id)}}" class="theme-btn"><span>View Details <i
                                                class="icon"><img
                                                    src="{{ asset('assets/website') }}/images/icons/logo-icon.svg"
                                                    alt=""></i></span></a></div>
                                                    @guest
                                                    <div class="video-link"><a href="{{route('wishlist.store', $tour->id)}}" class="theme-btn"><i
                                                                class="icon far fa-heart"></i></a></div>
                                                    @else
                                                    @foreach ($myWishlist as $myWishlistItem)
                                                        @if ($myWishlistItem->tour == $tour->id)
                                                        <div class="video-link"><a href="{{route('wishlist.store', $tour->id)}}" class="theme-btn"><i
                                                            class="icon far fa-video-camera"></i></a></div>
                                                        @break
                                                        @endif
                                                        @endforeach
                                                    @endguest
                            </div>
                        </div>
                    </div>

                    @endforeach

                </div>


            </div>
        </div>
    </section>


    <!-- Facts Section -->
    <section class="facts-section">
        <div class="image-layer" style="background-image: url(images/background/image-6.jpg);"></div>
        <div class="auto-container">
            <div class="content-box">
                <div class="video-btn"><a href="https://www.youtube.com/watch?v=0xhr0j877bI"
                        class="theme-btn lightbox-image"><span class="icon"><img src="images/icons/video-icon-2.svg"
                                alt="" title=""></span></a></div>
                <div class="subtitle">Are you ready to travel?</div>
                <h2>Treker is a World Leading Online Tour Booking Platform</h2>
            </div>
        </div>
        <div class="facts-box">
            <div class="auto-container">
                <div class="inner-box">
                    <div class="row clearfix">
                        <!--Block-->
                        <div class="fact-block col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="inner">
                                <div class="count"><span class="odometer" data-count="07"></span>+</div>
                                <div class="fact-title"><span>Years Exp</span></div>
                            </div>
                        </div>
                        <!--Block-->
                        <div class="fact-block col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="inner">
                                <div class="count"><span class="odometer" data-count="02"></span>k+</div>
                                <div class="fact-title"><span>Top Hosts</span></div>
                            </div>
                        </div>
                        <!--Block-->
                        <div class="fact-block col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="inner">
                                <div class="count"><span class="odometer" data-count="50"></span>+</div>
                                <div class="fact-title"><span>Top Country</span></div>
                            </div>
                        </div>
                        <!--Block-->
                        <div class="fact-block col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="inner">
                                <div class="count"><span class="odometer" data-count="10"></span>k+</div>
                                <div class="fact-title"><span>Client Avilable</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Facts Section -->

    <!--FAQs Section-->
    <section class="faq-one tracking-page">
        <div class="floated-icon left"><img src="images/resource/stones-left.svg" alt="" title=""></div>
        <div class="floated-icon right"><img src="images/resource/floated-icon-right-2.svg" alt=""
                title=""></div>
        <div class="auto-container">
            <div class="title-box centered">
                <h2><span>Get Some Important Answer</span></h2>
            </div>
            <div class="row clearfix">
                <!--Text Col-->
                <div class="text-col col-lg-6 col-md-12 col-sm-12">
                    <div class="inner wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="accordion-box clearfix">
                            <!--Block-->
                            <div class="accordion block active-block">
                                <div class="acc-btn active">What is Trekking? <i class="fa-regular fa-angle-down"></i>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">One of the major benefits of trekking is that it improves your
                                            physical health immensely. Spending multiple hours on the trail, climbing around
                                            boulders, rock hopping and ascending hills gives your whole body a workout,
                                            improving your strength, agility and cardio fitness.</div>
                                    </div>
                                </div>
                            </div>
                            <!--Block-->
                            <div class="accordion block">
                                <div class="acc-btn">What do I need to carry? <i class="fa-regular fa-angle-down"></i>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">One of the major benefits of trekking is that it improves your
                                            physical health immensely. Spending multiple hours on the trail, climbing around
                                            boulders, rock hopping and ascending hills gives your whole body a workout,
                                            improving your strength, agility and cardio fitness.</div>
                                    </div>
                                </div>
                            </div>
                            <!--Block-->
                            <div class="accordion block">
                                <div class="acc-btn">How concerned should I be about the altitude? <i
                                        class="fa-regular fa-angle-down"></i></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">One of the major benefits of trekking is that it improves your
                                            physical health immensely. Spending multiple hours on the trail, climbing around
                                            boulders, rock hopping and ascending hills gives your whole body a workout,
                                            improving your strength, agility and cardio fitness.</div>
                                    </div>
                                </div>
                            </div>
                            <!--Block-->
                            <div class="accordion block">
                                <div class="acc-btn">What do we eat and drink while on trek? <i
                                        class="fa-regular fa-angle-down"></i></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">One of the major benefits of trekking is that it improves your
                                            physical health immensely. Spending multiple hours on the trail, climbing around
                                            boulders, rock hopping and ascending hills gives your whole body a workout,
                                            improving your strength, agility and cardio fitness.</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--Image Col-->
                <div class="image-col col-lg-6 col-md-12 col-sm-12">
                    <div class="inner wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="image-box">
                            <img src="images/resource/faq-image-1.svg" alt="" title="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
