@extends('layouts.frontend.master')


@section('css')

@endsection

@section('content')
  <!-- Hero Section Start -->
        <section class="hero-section py-250" style="background-image: url({{asset('FrontendAssets/images/hero/hero-bg.jpg')}});">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-7 col-lg-8">
                        <div class="hero-content py-10 rpt-0 text-white rmb-70">
                            <h1 class="wow fadeInUp delay-0-2s">Barbers & Hair Cutting</h1>
                            <p class="wow fadeInUp delay-0-4s">Sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua suspendisse ultrices gravida</p>
                            <a href="{{ route('service') }}" class="theme-btn wow fadeInUp delay-0-6s">explore our services <i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="hero-video text-lg-right wow zoomIn delay-0-6s">
                            <a href="{{ asset('FrontendAssets/video/video.mp4')}}" class="mfp-iframe video-play"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-bg-shapes"></div>
        </section>
        <!-- Hero Section End -->


        <!-- What We Do Area Start -->
        <section class="what-we-do-area pb-130 rpb-100">
            <div class="container">
                <div class="what-we-do-inner">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="feature-image wow fadeInLeft delay-0-2s" style="background-image: url({{asset('FrontendAssets/images/about/what-we-do.jpg')}});"></div>
                        </div>
                        <div class="col-xl-8 align-self-center">
                            <div class="what-we-do-content wow fadeInRight delay-0-2s">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="section-title mb-35">
                                            <h2 class="title">What We Do</h2>
                                            <p>Sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt labore dolore magna aliqua suspendisse</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="feature-item">
                                            <div class="icon">
                                                <i class="flaticon-scissors"></i>
                                            </div>
                                            <div class="content">
                                                <h4><a href="{{ route('service.detail') }}">Hair Cutting</a></h4>
                                                <p>Quis autem vel eumu reres ender quiea voluptate</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="feature-item">
                                            <div class="icon">
                                                <i class="flaticon-straight-razor"></i>
                                            </div>
                                            <div class="content">
                                                <h4><a href="{{ route('service.detail') }}">Shaving Style</a></h4>
                                                <p>Quis autem vel eumu reres ender quiea voluptate</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="feature-item">
                                            <div class="icon">
                                                <i class="flaticon-beauty-treatment"></i>
                                            </div>
                                            <div class="content">
                                                <h4><a href="{{ route('service.detail') }}">Spa & GYM</a></h4>
                                                <p>Quis autem vel eumu reres ender quiea voluptate</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="feature-item">
                                            <div class="icon">
                                                <i class="flaticon-hot-stones"></i>
                                            </div>
                                            <div class="content">
                                                <h4><a href="{{ route('service.detail') }}">Body Treatments</a></h4>
                                                <p>Quis autem vel eumu reres ender quiea voluptate</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- What We Do Area End -->


        <!-- About Us Area Start -->
        <section class="about-us-area">
            <div class="row">
                <div class="col-xl-3 col-sm-6">
                    <div class="about-left-image wow fadeInUp delay-0-2s">
                        <img src="{{ asset('FrontendAssets/images/about/about-left.jpg')}}" alt="About Left">
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 order-xl-2">
                    <div class="about-right-image wow fadeInUp delay-0-6s">
                        <img src="{{ asset('FrontendAssets/images/about/about-right.jpg')}}" alt="About Right">
                    </div>
                </div>
                <div class="col-xl-6 align-self-center">
                    <div class="about-content rp-15 rpb-90 text-center wow fadeInUp delay-0-4s">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="section-title mb-35">
                                    <h2 class="title">we’re Best barbers & hair cutting salon</h2>
                                </div>
                            </div>
                        </div>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        <div class="our-author mt-20">
                            <img src="{{ asset('FrontendAssets/images/about/author.jpg')}}" alt="Authro">
                            <div class="content">
                                <h4>Def Cutz Studio CEO</h4>
                                <img src="{{ asset('FrontendAssets/images/about/signature.png')}}" alt="Signature">
                            </div>
                        </div>
                        <img class="about-bg-shape" src="{{ asset('FrontendAssets/images/about/about-bg-shape.png')}}" alt="BG Shape">
                    </div>
                </div>
            </div>
        </section>
        <!-- About Us Area End -->


        <!-- Call To Action Start -->
        <section class="cta-area bgs-cover bg-yellow text-white py-40" style="background-image: url({{asset('FrontendAssets/images/background/cta-bg.png')}});">
            <div class="container">
                <div class="row justify-content-center text-center align-items-center">
                    <div class="col-xl-6 col-lg-7">
                        <div class="section-title mt-5 wow fadeInLeft delay-0-2s">
                            <h2>Ready to get our service ?</h2>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <a href="{{ route('appointment') }}" class="theme-btn btn-border my-10 wow fadeInRight delay-0-2s">appointment now <i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call To Action End -->


        <!-- Services Area Start -->
        <section class="services-area rel z-1 pt-120 rpt-90 pb-100 rpb-70">
            <div class="container">
               <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-8">
                        <div class="section-title text-center mb-55">
                            <h2 class="title">Service we provide</h2>
                            <p>Sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt labore dolore magna aliqua suspendisse</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item wow fadeInUp delay-0-2s">
                            <div class="icon">
                                <i class="flaticon-salon"></i>
                            </div>
                            <div class="content">
                                <h3><a href="{{ route('service.detail') }}">Hair Cutting Style</a></h3>
                                <p>Sit amet consectetur adipisci elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a href="{{ route('service.detail') }}" class="details-btn"><i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item wow fadeInUp delay-0-4s">
                            <div class="icon">
                                <i class="flaticon-shampoo"></i>
                            </div>
                            <div class="content">
                                <h3><a href="{{ route('service.detail') }}">Hair Washing</a></h3>
                                <p>Sit amet consectetur adipisci elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a href="{{ route('service.detail') }}" class="details-btn"><i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item wow fadeInUp delay-0-6s">
                            <div class="icon">
                                <i class="flaticon-hot-stone"></i>
                            </div>
                            <div class="content">
                                <h3><a href="{{ route('service.detail') }}">Body Treatments</a></h3>
                                <p>Sit amet consectetur adipisci elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a href="{{ route('service.detail') }}" class="details-btn"><i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item wow fadeInUp delay-0-2s">
                            <div class="icon">
                                <i class="flaticon-treatment"></i>
                            </div>
                            <div class="content">
                                <h3><a href="{{ route('service.detail') }}">Beauty & Spa</a></h3>
                                <p>Sit amet consectetur adipisci elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a href="{{ route('service.detail') }}" class="details-btn"><i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item wow fadeInUp delay-0-4s">
                            <div class="icon">
                                <i class="flaticon-shaving-razor"></i>
                            </div>
                            <div class="content">
                                <h3><a href="{{ route('service.detail') }}">Stylist Shaving</a></h3>
                                <p>Sit amet consectetur adipisci elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a href="{{ route('service.detail') }}" class="details-btn"><i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item wow fadeInUp delay-0-6s">
                            <div class="icon">
                                <i class="flaticon-hair-dye"></i>
                            </div>
                            <div class="content">
                                <h3><a href="{{ route('service.detail') }}">Multi Hair Colors</a></h3>
                                <p>Sit amet consectetur adipisci elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a href="{{ route('service.detail') }}" class="details-btn"><i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services-shapes">
                <img class="shape-one" src="{{ asset('FrontendAssets/images/shapes/service-one.png')}}" alt="Shape">
                <img class="shape-two" src="{{ asset('FrontendAssets/images/shapes/service-two.png')}}" alt="Shape">
            </div>
        </section>
        <!-- Services Area End -->


        <!-- Pricing Plan Area Start -->
        <section class="pricing-plan-area bgs-cover pt-120 rpt-90 pb-130 rpb-100" style="background-image: url({{asset('FrontendAssets/images/background/pricing-plan-bg.jpg')}});">
            <div class="container">
               <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-8">
                        <div class="section-title text-white text-center mb-55">
                            <h2 class="title">awesome pricing plan</h2>
                            <p>Sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt labore dolore magna aliqua suspendisse</p>
                        </div>
                    </div>
                </div>
                <div class="price-tab-wrap p-40 bg-white">
                    <ul class="nav nav-justified price-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#hair">
                                <i class="flaticon-beauty-salon"></i>
                                <span>hair solutions</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#beauty">
                                <i class="flaticon-relax"></i>
                                <span>beauty & spa</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#bodyy">
                                <i class="flaticon-massage"></i>
                                <span>body treatments</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#washing">
                                <i class="flaticon-spa"></i>
                                <span>Fash washing</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#meditations">
                                <i class="flaticon-yoga"></i>
                                <span>meditations</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#shaving">
                                <i class="flaticon-razor-blade"></i>
                                <span>shaving</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content price-tab-content">
                        <div class="tab-pane fade show active" id="hair">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="price-item wow fadeInUp delay-0-2s">
                                        <div class="image">
                                            <img src="{{ asset('FrontendAssets/images/price/pp-image1.jpg')}}" alt="Price">
                                        </div>
                                        <div class="content">
                                            <h5>Hair Cutting & Fitting</h5>
                                            <span>Clean & simple 30-40 minutes</span>
                                        </div>
                                        <span class="price">$89</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="price-item wow fadeInUp delay-0-4s">
                                        <div class="image">
                                            <img src="{{ asset('FrontendAssets/images/price/pp-image2.jpg')}}" alt="Price">
                                        </div>
                                        <div class="content">
                                            <h5>Shaving & Facial</h5>
                                            <span>Clean & simple 30-40 minutes</span>
                                        </div>
                                        <span class="price">$45</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="price-item wow fadeInUp delay-0-2s">
                                        <div class="image">
                                            <img src="{{ asset('FrontendAssets/images/price/pp-image3.jpg')}}" alt="Price">
                                        </div>
                                        <div class="content">
                                            <h5>Hair Color & Wash</h5>
                                            <span>Clean & simple 30-40 minutes</span>
                                        </div>
                                        <span class="price">$35</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="price-item wow fadeInUp delay-0-4s">
                                        <div class="image">
                                            <img src="{{ asset('FrontendAssets/images/price/pp-image4.jpg')}}" alt="Price">
                                        </div>
                                        <div class="content">
                                            <h5>Body Massage</h5>
                                            <span>Clean & simple 30-40 minutes</span>
                                        </div>
                                        <span class="price">$56</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="price-item wow fadeInUp delay-0-2s">
                                        <div class="image">
                                            <img src="{{ asset('FrontendAssets/images/price/pp-image5.jpg')}}" alt="Price">
                                        </div>
                                        <div class="content">
                                            <h5>Beauty & Spa</h5>
                                            <span>Clean & simple 30-40 minutes</span>
                                        </div>
                                        <span class="price">$27</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="price-item wow fadeInUp delay-0-4s">
                                        <div class="image">
                                            <img src="{{ asset('FrontendAssets/images/price/pp-image6.jpg')}}" alt="Price">
                                        </div>
                                        <div class="content">
                                            <h5>Facial & Face Wash</h5>
                                            <span>Clean & simple 30-40 minutes</span>
                                        </div>
                                        <span class="price">$63</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="price-item wow fadeInUp delay-0-2s">
                                        <div class="image">
                                            <img src="{{ asset('FrontendAssets/images/price/pp-image7.jpg')}}" alt="Price">
                                        </div>
                                        <div class="content">
                                            <h5>Backbone Massage</h5>
                                            <span>Clean & simple 30-40 minutes</span>
                                        </div>
                                        <span class="price">$43</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="price-item wow fadeInUp delay-0-4s">
                                        <div class="image">
                                            <img src="{{ asset('FrontendAssets/images/price/pp-image8.jpg')}}" alt="Price">
                                        </div>
                                        <div class="content">
                                            <h5>Meditation & Massage</h5>
                                            <span>Clean & simple 30-40 minutes</span>
                                        </div>
                                        <span class="price">$74</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="beauty">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="price-item">
                                        <div class="image">
                                            <img src="{{ asset('FrontendAssets/images/price/pp-image6.jpg')}}" alt="Price">
                                        </div>
                                        <div class="content">
                                            <h5>Facial & Face Wash</h5>
                                            <span>Clean & simple 30-40 minutes</span>
                                        </div>
                                        <span class="price">$63</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="price-item">
                                        <div class="image">
                                            <img src="{{ asset('FrontendAssets/images/price/pp-image7.jpg')}}" alt="Price">
                                        </div>
                                        <div class="content">
                                            <h5>Backbone Massage</h5>
                                            <span>Clean & simple 30-40 minutes</span>
                                        </div>
                                        <span class="price">$43</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="price-item">
                                        <div class="image">
                                            <img src="{{ asset('FrontendAssets/images/price/pp-image1.jpg')}}" alt="Price">
                                        </div>
                                        <div class="content">
                                            <h5>Hair Cutting & Fitting</h5>
                                            <span>Clean & simple 30-40 minutes</span>
                                        </div>
                                        <span class="price">$89</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="price-item">
                                        <div class="image">
                                            <img src="{{ asset('FrontendAssets/images/price/pp-image2.jpg')}}" alt="Price">
                                        </div>
                                        <div class="content">
                                            <h5>Shaving & Facial</h5>
                                            <span>Clean & simple 30-40 minutes</span>
                                        </div>
                                        <span class="price">$45</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="price-item">
                                        <div class="image">
                                            <img src="{{ asset('FrontendAssets/images/price/pp-image3.jpg')}}" alt="Price">
                                        </div>
                                        <div class="content">
                                            <h5>Hair Color & Wash</h5>
                                            <span>Clean & simple 30-40 minutes</span>
                                        </div>
                                        <span class="price">$35</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="price-item">
                                        <div class="image">
                                            <img src="{{ asset('FrontendAssets/images/price/pp-image4.jpg')}}" alt="Price">
                                        </div>
                                        <div class="content">
                                            <h5>Body Massage</h5>
                                            <span>Clean & simple 30-40 minutes</span>
                                        </div>
                                        <span class="price">$56</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="price-item">
                                        <div class="image">
                                            <img src="{{ asset('FrontendAssets/images/price/pp-image5.jpg')}}" alt="Price">
                                        </div>
                                        <div class="content">
                                            <h5>Beauty & Spa</h5>
                                            <span>Clean & simple 30-40 minutes</span>
                                        </div>
                                        <span class="price">$27</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="price-item">
                                        <div class="image">
                                            <img src="{{ asset('FrontendAssets/images/price/pp-image8.jpg')}}" alt="Price">
                                        </div>
                                        <div class="content">
                                            <h5>Meditation & Massage</h5>
                                            <span>Clean & simple 30-40 minutes</span>
                                        </div>
                                        <span class="price">$74</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="bodyy">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="price-item">
                                        <div class="image">
                                            <img src="{{ asset('FrontendAssets/images/price/pp-image4.jpg')}}" alt="Price">
                                        </div>
                                        <div class="content">
                                            <h5>Body Massage</h5>
                                            <span>Clean & simple 30-40 minutes</span>
                                        </div>
                                        <span class="price">$56</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="price-item">
                                        <div class="image">
                                            <img src="{{ asset('FrontendAssets/images/price/pp-image5.jpg')}}" alt="Price">
                                        </div>
                                        <div class="content">
                                            <h5>Beauty & Spa</h5>
                                            <span>Clean & simple 30-40 minutes</span>
                                        </div>
                                        <span class="price">$27</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="price-item">
                                        <div class="image">
                                            <img src="{{ asset('FrontendAssets/images/price/pp-image6.jpg')}}" alt="Price">
                                        </div>
                                        <div class="content">
                                            <h5>Facial & Face Wash</h5>
                                            <span>Clean & simple 30-40 minutes</span>
                                        </div>
                                        <span class="price">$63</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="price-item">
                                        <div class="image">
                                            <img src="{{ asset('FrontendAssets/images/price/pp-image1.jpg')}}" alt="Price">
                                        </div>
                                        <div class="content">
                                            <h5>Hair Cutting & Fitting</h5>
                                            <span>Clean & simple 30-40 minutes</span>
                                        </div>
                                        <span class="price">$89</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="price-item">
                                        <div class="image">
                                            <img src="{{ asset('FrontendAssets/images/price/pp-image2.jpg')}}" alt="Price">
                                        </div>
                                        <div class="content">
                                            <h5>Shaving & Facial</h5>
                                            <span>Clean & simple 30-40 minutes</span>
                                        </div>
                                        <span class="price">$45</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="price-item">
                                        <div class="image">
                                            <img src="{{ asset('FrontendAssets/images/price/pp-image3.jpg')}}" alt="Price">
                                        </div>
                                        <div class="content">
                                            <h5>Hair Color & Wash</h5>
                                            <span>Clean & simple 30-40 minutes</span>
                                        </div>
                                        <span class="price">$35</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="price-item">
                                        <div class="image">
                                            <img src="{{ asset('FrontendAssets/images/price/pp-image7.jpg')}}" alt="Price">
                                        </div>
                                        <div class="content">
                                            <h5>Backbone Massage</h5>
                                            <span>Clean & simple 30-40 minutes</span>
                                        </div>
                                        <span class="price">$43</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="price-item">
                                        <div class="image">
                                            <img src="{{ asset('FrontendAssets/images/price/pp-image8.jpg')}}" alt="Price">
                                        </div>
                                        <div class="content">
                                            <h5>Meditation & Massage</h5>
                                            <span>Clean & simple 30-40 minutes</span>
                                        </div>
                                        <span class="price">$74</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="washing">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="price-item">
                                        <div class="image">
                                            <img src="{{ asset('FrontendAssets/images/price/pp-image2.jpg')}}" alt="Price">
                                        </div>
                                        <div class="content">
                                            <h5>Shaving & Facial</h5>
                                            <span>Clean & simple 30-40 minutes</span>
                                        </div>
                                        <span class="price">$45</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="price-item">
                                        <div class="image">
                                            <img src="{{ asset('FrontendAssets/images/price/pp-image3.jpg')}}" alt="Price">
                                        </div>
                                        <div class="content">
                                            <h5>Hair Color & Wash</h5>
                                            <span>Clean & simple 30-40 minutes</span>
                                        </div>
                                        <span class="price">$35</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="price-item">
                                        <div class="image">
                                            <img src="{{ asset('FrontendAssets/images/price/pp-image1.jpg')}}" alt="Price">
                                        </div>
                                        <div class="content">
                                            <h5>Hair Cutting & Fitting</h5>
                                            <span>Clean & simple 30-40 minutes</span>
                                        </div>
                                        <span class="price">$89</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="price-item">
                                        <div class="image">
                                            <img src="{{ asset('FrontendAssets/images/price/pp-image4.jpg')}}" alt="Price">
                                        </div>
                                        <div class="content">
                                            <h5>Body Massage</h5>
                                            <span>Clean & simple 30-40 minutes</span>
                                        </div>
                                        <span class="price">$56</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="price-item">
                                        <div class="image">
                                            <img src="{{ asset('FrontendAssets/images/price/pp-image5.jpg')}}" alt="Price">
                                        </div>
                                        <div class="content">
                                            <h5>Beauty & Spa</h5>
                                            <span>Clean & simple 30-40 minutes</span>
                                        </div>
                                        <span class="price">$27</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="price-item">
                                        <div class="image">
                                            <img src="{{ asset('FrontendAssets/images/price/pp-image6.jpg')}}" alt="Price">
                                        </div>
                                        <div class="content">
                                            <h5>Facial & Face Wash</h5>
                                            <span>Clean & simple 30-40 minutes</span>
                                        </div>
                                        <span class="price">$63</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="price-item">
                                        <div class="image">
                                            <img src="{{ asset('FrontendAssets/images/price/pp-image7.jpg')}}" alt="Price">
                                        </div>
                                        <div class="content">
                                            <h5>Backbone Massage</h5>
                                            <span>Clean & simple 30-40 minutes</span>
                                        </div>
                                        <span class="price">$43</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="price-item">
                                        <div class="image">
                                            <img src="{{ asset('FrontendAssets/images/price/pp-image8.jpg')}}" alt="Price">
                                        </div>
                                        <div class="content">
                                            <h5>Meditation & Massage</h5>
                                            <span>Clean & simple 30-40 minutes</span>
                                        </div>
                                        <span class="price">$74</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="meditations">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="price-item">
                                        <div class="image">
                                            <img src="{{ asset('FrontendAssets/images/price/pp-image3.jpg')}}" alt="Price">
                                        </div>
                                        <div class="content">
                                            <h5>Hair Color & Wash</h5>
                                            <span>Clean & simple 30-40 minutes</span>
                                        </div>
                                        <span class="price">$35</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="price-item">
                                        <div class="image">
                                            <img src="{{ asset('FrontendAssets/images/price/pp-image4.jpg')}}" alt="Price">
                                        </div>
                                        <div class="content">
                                            <h5>Body Massage</h5>
                                            <span>Clean & simple 30-40 minutes</span>
                                        </div>
                                        <span class="price">$56</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="price-item">
                                        <div class="image">
                                            <img src="{{ asset('FrontendAssets/images/price/pp-image5.jpg')}}" alt="Price">
                                        </div>
                                        <div class="content">
                                            <h5>Beauty & Spa</h5>
                                            <span>Clean & simple 30-40 minutes</span>
                                        </div>
                                        <span class="price">$27</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="price-item">
                                        <div class="image">
                                            <img src="{{ asset('FrontendAssets/images/price/pp-image6.jpg')}}" alt="Price">
                                        </div>
                                        <div class="content">
                                            <h5>Facial & Face Wash</h5>
                                            <span>Clean & simple 30-40 minutes</span>
                                        </div>
                                        <span class="price">$63</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="price-item">
                                        <div class="image">
                                            <img src="{{ asset('FrontendAssets/images/price/pp-image1.jpg')}}" alt="Price">
                                        </div>
                                        <div class="content">
                                            <h5>Hair Cutting & Fitting</h5>
                                            <span>Clean & simple 30-40 minutes</span>
                                        </div>
                                        <span class="price">$89</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="price-item">
                                        <div class="image">
                                            <img src="{{ asset('FrontendAssets/images/price/pp-image2.jpg')}}" alt="Price">
                                        </div>
                                        <div class="content">
                                            <h5>Shaving & Facial</h5>
                                            <span>Clean & simple 30-40 minutes</span>
                                        </div>
                                        <span class="price">$45</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="price-item">
                                        <div class="image">
                                            <img src="{{ asset('FrontendAssets/images/price/pp-image7.jpg')}}" alt="Price">
                                        </div>
                                        <div class="content">
                                            <h5>Backbone Massage</h5>
                                            <span>Clean & simple 30-40 minutes</span>
                                        </div>
                                        <span class="price">$43</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="price-item">
                                        <div class="image">
                                            <img src="{{ asset('FrontendAssets/images/price/pp-image8.jpg')}}" alt="Price">
                                        </div>
                                        <div class="content">
                                            <h5>Meditation & Massage</h5>
                                            <span>Clean & simple 30-40 minutes</span>
                                        </div>
                                        <span class="price">$74</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="shaving">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="price-item">
                                        <div class="image">
                                            <img src="{{ asset('FrontendAssets/images/price/pp-image6.jpg')}}" alt="Price">
                                        </div>
                                        <div class="content">
                                            <h5>Facial & Face Wash</h5>
                                            <span>Clean & simple 30-40 minutes</span>
                                        </div>
                                        <span class="price">$63</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="price-item">
                                        <div class="image">
                                            <img src="{{ asset('FrontendAssets/images/price/pp-image7.jpg')}}" alt="Price">
                                        </div>
                                        <div class="content">
                                            <h5>Backbone Massage</h5>
                                            <span>Clean & simple 30-40 minutes</span>
                                        </div>
                                        <span class="price">$43</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="price-item">
                                        <div class="image">
                                            <img src="{{ asset('FrontendAssets/images/price/pp-image8.jpg')}}" alt="Price">
                                        </div>
                                        <div class="content">
                                            <h5>Meditation & Massage</h5>
                                            <span>Clean & simple 30-40 minutes</span>
                                        </div>
                                        <span class="price">$74</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="price-item">
                                        <div class="image">
                                            <img src="{{ asset('FrontendAssets/images/price/pp-image1.jpg')}}" alt="Price">
                                        </div>
                                        <div class="content">
                                            <h5>Hair Cutting & Fitting</h5>
                                            <span>Clean & simple 30-40 minutes</span>
                                        </div>
                                        <span class="price">$89</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="price-item">
                                        <div class="image">
                                            <img src="{{ asset('FrontendAssets/images/price/pp-image2.jpg')}}" alt="Price">
                                        </div>
                                        <div class="content">
                                            <h5>Shaving & Facial</h5>
                                            <span>Clean & simple 30-40 minutes</span>
                                        </div>
                                        <span class="price">$45</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="price-item">
                                        <div class="image">
                                            <img src="{{ asset('FrontendAssets/images/price/pp-image3.jpg')}}" alt="Price">
                                        </div>
                                        <div class="content">
                                            <h5>Hair Color & Wash</h5>
                                            <span>Clean & simple 30-40 minutes</span>
                                        </div>
                                        <span class="price">$35</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="price-item">
                                        <div class="image">
                                            <img src="{{ asset('FrontendAssets/images/price/pp-image4.jpg')}}" alt="Price">
                                        </div>
                                        <div class="content">
                                            <h5>Body Massage</h5>
                                            <span>Clean & simple 30-40 minutes</span>
                                        </div>
                                        <span class="price">$56</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="price-item">
                                        <div class="image">
                                            <img src="{{ asset('FrontendAssets/images/price/pp-image5.jpg')}}" alt="Price">
                                        </div>
                                        <div class="content">
                                            <h5>Beauty & Spa</h5>
                                            <span>Clean & simple 30-40 minutes</span>
                                        </div>
                                        <span class="price">$27</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing Plan Area End -->


        <!-- Gallery Area Start -->
        <section class="gallery-area rel z-1 pt-120 rpt-90 pb-100 rpb-70">
            <div class="container">
               <div class="row justify-content-between align-items-end mb-40">
                    <div class="col-xl-5 col-lg-6">
                        <div class="section-title mb-15 wow fadeInLeft delay-0-2s">
                            <h2 class="title">Latest photo gallery</h2>
                            <p>Sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt labore dolore magna aliqua suspendisse</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="section-header-btn text-lg-right mb-20 wow fadeInRight delay-0-2s">
                            <a href="{{ route('portfolio') }}" class="theme-btn">explore more gallery <i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-sm-6">
                        <div class="gallery-item wow fadeInUp delay-0-2s">
                            <img src="{{ asset('FrontendAssets/images/gellary/p1.png')}}" alt="Gallery">
                            <div class="gallery-content">
                                <h3>Hair Cutting</h3>
                                <p>Barbers & Salon Services</p>
                                <a  class="details-btn"><i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="gallery-item wow fadeInUp delay-0-4s">
                            <img src="{{ asset('FrontendAssets/images/gellary/p2.png')}}" alt="Gallery">
                            <div class="gallery-content">
                                <h3>Hair Cutting</h3>
                                <p>Barbers & Salon Services</p>
                                <a  class="details-btn"><i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="gallery-item wow fadeInUp delay-0-6s">
                            <img src="{{ asset('FrontendAssets/images/gellary/p3.png')}}" alt="Gallery">
                            <div class="gallery-content">
                                <h3>Hair Cutting</h3>
                                <p>Barbers & Salon Services</p>
                                <a  class="details-btn"><i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="gallery-item wow fadeInUp delay-0-8s">
                            <img src="{{ asset('FrontendAssets/images/gellary/p4.png')}}" alt="Gallery">
                            <div class="gallery-content">
                                <h3>Hair Cutting</h3>
                                <p>Barbers & Salon Services</p>
                                <a  class="details-btn"><i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Gallery Area End -->


        <!-- Contact Section Start -->
        <section class="contact-area rel z-1">
            <div class="container">
               <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-8">
                    </div>
                </div>
                <div class="contact-form-wrap">
                   <div class="image wow fadeInUp delay-0-2s" style="background-image: url({{asset('FrontendAssets/images/contact/left.jpg')}});"></div>
                    <form action="#" class="bg-yellow bgs-cover wow fadeInUp delay-0-4s" style="background-image: url({{asset('FrontendAssets/images/contact/contact-bg.png')}});">
                        <div class="row justify-content-center mb-35 text-white text-center">
                            <div class="col-lg-10">
                                <div class="section-title text-white">
                                    <h2 class="title">Make appointment</h2>
                                </div>
                                <p>Sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt labore dolore magna aliqua suspendisse</p>
                            </div>
                        </div>
                        <div class="row small-gap">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" id="name" name="name" class="form-control" value="" placeholder="Your Full Name" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="email" id="email" name="email" class="form-control" value="" placeholder="Email Address" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" id="phone" name="phone" class="form-control" value="" placeholder="Phone Number" required>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-20">
                                <div class="form-group">
                                    <select name="select-category" id="select-category">
                                        <option value="value1">Select Category</option>
                                        <option value="value1">Beauty & Spa</option>
                                        <option value="value1">Body Massage</option>
                                        <option value="value1">Shaving & Facial</option>
                                        <option value="value1">Hair Color</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="date-time"><i class="far fa-calendar-alt"></i></label>
                                    <input type="text" id="date-time" name="date-time" class="form-control" value="" placeholder="Appointment Date & Time">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" class="form-control" rows="4" placeholder="Write Message" required></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mb-0">
                                    <button type="submit" class="theme-btn btn-border w-100">appointment now<i class="far fa-long-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                   <div class="image wow fadeInUp delay-0-6s" style="background-image: url({{asset('FrontendAssets/images/contact/right.jpg')}});"></div>
                </div>
            </div>
            <div class="contact-shapes">
                <img class="shape-one" src="{{ asset('FrontendAssets/images/shapes/contact-one.png')}}" alt="Shape">
                <img class="shape-two" src="{{ asset('FrontendAssets/images/shapes/contact-two.png')}}" alt="Shape">
            </div>
        </section>
        <!-- Contact Section End -->


        <!-- Team Area Start -->
        <section class="team-area rel z-1 pt-120 rpt-90 pb-95 rpb-65">
            <div class="container">
               <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-8">
                        <div class="section-title text-center mb-50">
                            <h2 class="title">Meet our specialist</h2>
                            <p>Sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt labore dolore magna aliqua suspendisse</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="team-member-wrap d-flex justify-content-center align-items-center" >
    <div class="team-member wow fadeInUp delay-0-4s">
      <div class="image">
        <img src="{{ asset('FrontendAssets/images/team/member3.png')}}" alt="Member">
        <div class="social-style-two">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
          <a href="#"><i class="fab fa-rocketchat"></i></a>
        </div>
      </div>
      <div class="content text-center">
        <h3>Def Cutz Studio CEO</h3>
        <span class="designation">Hair Specialist</span>
      </div>
    </div>
  </div>
            </div>
        </section>
        <!-- Team Area End -->


        <!-- CTA Video Start -->
        <section class="cta-video-area rel z-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="cta-part bg-yellow text-center text-white p-40 rpy-55 wow fadeInLeft delay-0-2s" style="background-image: url({{asset('FrontendAssets/images/background/video-cta-bg.png')}});">
                            <div class="section-title mb-15">
                                <h2>Come &<br> get Freshness</h2>
                                <p>Sit amet consectetur adipiscing do eiusmod tempor incididunt labore dolore magna aliqua suspen</p>
                            </div>
                            <a href="{{ route('contact') }}" class="theme-btn btn-border">contact with us <i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="video-part rmt-30 wow fadeInRight delay-0-2s">
                            <img src="{{ asset('FrontendAssets/images/background/video-bg.jpg')}}" alt="Video">
                            <a href="{{ asset('FrontendAssets/video/video.mp4')}}" class="mfp-iframe video-play"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA Video End -->


        <!-- Testimonial Area Start -->
        <section class="testimonial-area rel z-1 pt-120 rpt-90 pb-125 rpb-95">
            <div class="container">
               <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-8">
                        <div class="section-title text-center mb-50">
                            <h2 class="title">What our clients say</h2>
                            <p>Sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt labore dolore magna aliqua suspendisse</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-wrap">
                    <div class="testimonial-item wow fadeInUp delay-0-2s">
                        <div class="image">
                            <img src="{{ asset('FrontendAssets/images/testimonials/testimonial1.jpg')}}" alt="Author">
                        </div>
                        <div class="description">
                            <p>Quis autem vel eum iure repreh enderit quin voluptate velit esse quam nihil molestiae consequa tur veillumqus dolore fugiat quo voluptas pariatuLorem psum</p>
                            <h4>Donald A. Guthrie</h4>
                            <span class="designation">Senior Manager</span>
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item wow fadeInUp delay-0-4s">
                        <div class="image">
                            <img src="{{ asset('FrontendAssets/images/testimonials/testimonial2.jpg')}}" alt="Author">
                        </div>
                        <div class="description">
                            <p>Sed ut perspiciatis unde omnis natus error sit voluac cusantium doloremque laudantium totame rem aperiam eaque quae abillo inventore veritatis et quase</p>
                            <h4>Justin D. Thompson</h4>
                            <span class="designation">Senior Manager</span>
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item wow fadeInUp delay-0-2s">
                        <div class="image">
                            <img src="{{ asset('FrontendAssets/images/testimonials/testimonial1.jpg')}}" alt="Author">
                        </div>
                        <div class="description">
                            <p>Quis autem vel eum iure repreh enderit quin voluptate velit esse quam nihil molestiae consequa tur veillumqus dolore fugiat quo voluptas pariatuLorem psum</p>
                            <h4>Donald A. Guthrie</h4>
                            <span class="designation">Senior Manager</span>
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item wow fadeInUp delay-0-2s">
                        <div class="image">
                            <img src="{{ asset('FrontendAssets/images/testimonials/testimonial2.jpg')}}" alt="Author">
                        </div>
                        <div class="description">
                            <p>Sed ut perspiciatis unde omnis natus error sit voluac cusantium doloremque laudantium totame rem aperiam eaque quae abillo inventore veritatis et quase</p>
                            <h4>Justin D. Thompson</h4>
                            <span class="designation">Senior Manager</span>
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-bg bg-lighter">
                <img class="bg" src="{{ asset('FrontendAssets/images/shapes/testi-bg.png')}}" alt="BG">
                <img class="shape" src="{{ asset('FrontendAssets/images/shapes/testi-right.png')}}" alt="Shape">
            </div>
        </section>
        <!-- Testimonial Area End -->


        <!-- News Area Start -->
        <section class="news-area rel z-2 pt-120 rpt-90 pb-100 rpb-70">
            <div class="container">
               <div class="row justify-content-between align-items-end mb-10">
                    <div class="col-xl-5 col-lg-6">
                        <div class="section-title mb-15">
                            <h2 class="title">Latest Blog & News</h2>
                            <p>Sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt labore dolore magna aliqua suspendisse</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="slider-btns text-lg-right mb-20">
                            <button class="news-prev"><i class="far fa-long-arrow-left"></i></button>
                            <button class="news-next"><i class="far fa-long-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="news-slider-wrap">
                    <div class="news-item wow fadeInUp delay-0-2s">
                        <div class="image">
                            <img src="{{ asset('FrontendAssets/images/blog/news1.jpg')}}" alt="News">
                        </div>
                        <div class="content">
                           <ul class="blog-meta">
                               <li><i class="far fa-user-circle"></i> <a href="#">Michael M.</a></li>
                               <li><i class="far fa-comments"></i> <a href="#">Comm (05)</a></li>
                           </ul>
                            <h5><a href="{{ route('blog.detail') }}">Started With Node An Introduction To APIs, HTTP And ES6+ JavaScript</a></h5>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantim doloremque laudantium totam</p>
                            <a href="{{ route('blog.detail') }}" class="read-more">Read more <i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="news-item wow fadeInUp delay-0-4s">
                        <div class="image">
                            <img src="{{ asset('FrontendAssets/images/blog/news2.jpg')}}" alt="News">
                        </div>
                        <div class="content">
                           <ul class="blog-meta">
                               <li><i class="far fa-user-circle"></i> <a href="#">Michael M.</a></li>
                               <li><i class="far fa-comments"></i> <a href="#">Comm (05)</a></li>
                           </ul>
                            <h5><a href="{{ route('blog.detail') }}">Video Playback On The Web Video See Delivery Best Practices Part 2</a></h5>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantim doloremque laudantium totam</p>
                            <a href="{{ route('blog.detail') }}" class="read-more">Read more <i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="news-item wow fadeInUp delay-0-6s">
                        <div class="image">
                            <img src="{{ asset('FrontendAssets/images/blog/news3.jpg')}}" alt="News">
                        </div>
                        <div class="content">
                           <ul class="blog-meta">
                               <li><i class="far fa-user-circle"></i> <a href="#">Michael M.</a></li>
                               <li><i class="far fa-comments"></i> <a href="#">Comm (05)</a></li>
                           </ul>
                            <h5><a href="{{ route('blog.detail') }}">Started With Node An Introduction To APIs, HTTP And ES6+ JavaScript</a></h5>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantim doloremque laudantium totam</p>
                            <a href="{{ route('blog.detail') }}" class="read-more">Read more <i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="news-item wow fadeInUp delay-0-2s">
                        <div class="image">
                            <img src="{{ asset('FrontendAssets/images/blog/news1.jpg')}}" alt="News">
                        </div>
                        <div class="content">
                           <ul class="blog-meta">
                               <li><i class="far fa-user-circle"></i> <a href="#">Michael M.</a></li>
                               <li><i class="far fa-comments"></i> <a href="#">Comm (05)</a></li>
                           </ul>
                            <h5><a href="{{ route('blog.detail') }}">Started With Node An Introduction To APIs, HTTP And ES6+ JavaScript</a></h5>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantim doloremque laudantium totam</p>
                            <a href="{{ route('blog.detail') }}" class="read-more">Read more <i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="news-item wow fadeInUp delay-0-2s">
                        <div class="image">
                            <img src="{{ asset('FrontendAssets/images/blog/news2.jpg')}}" alt="News">
                        </div>
                        <div class="content">
                           <ul class="blog-meta">
                               <li><i class="far fa-user-circle"></i> <a href="#">Michael M.</a></li>
                               <li><i class="far fa-comments"></i> <a href="#">Comm (05)</a></li>
                           </ul>
                            <h5><a href="{{ route('blog.detail') }}">Video Playback On The Web Video See Delivery Best Practices Part 2</a></h5>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantim doloremque laudantium totam</p>
                            <a href="{{ route('blog.detail') }}" class="read-more">Read more <i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="news-item wow fadeInUp delay-0-2s">
                        <div class="image">
                            <img src="{{ asset('FrontendAssets/images/blog/news3.jpg')}}" alt="News">
                        </div>
                        <div class="content">
                           <ul class="blog-meta">
                               <li><i class="far fa-user-circle"></i> <a href="#">Michael M.</a></li>
                               <li><i class="far fa-comments"></i> <a href="#">Comm (05)</a></li>
                           </ul>
                            <h5><a href="{{ route('blog.detail') }}">Started With Node An Introduction To APIs, HTTP And ES6+ JavaScript</a></h5>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantim doloremque laudantium totam</p>
                            <a href="{{ route('blog.detail') }}" class="read-more">Read more <i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- News Area End -->

@endsection

@section('script')

@endsection
