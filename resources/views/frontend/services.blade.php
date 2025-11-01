@extends('layouts.frontend.master')


@section('css')

@endsection

@section('content')



        <!-- Page Banner Start -->
        <section class="page-banner text-white py-190 rpy-130" style="background-image: url({{asset('FrontendAssets/images/banner/banner.jpg')}});">
            <div class="container">
                <div class="banner-inner">
                    <h1 class="page-title wow fadeInRight delay-0-2s">Services</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center wow fadeInLeft delay-0-2s">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Services</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->


        <!-- About Us Area Start -->
        <section class="about-us-four py-130 rpt-100 rpb-90">
            <div class="container">
                <div class="row align-items-center justify-content-around">
                    <div class="col-lg-6">
                        <div class="about-left-image rmb-55 wow fadeInUp delay-0-2s">
                            <img src="{{ asset('FrontendAssets/images/about/service-page-about.jpg')}}" alt="About Left">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="about-content-four wow fadeInUp delay-0-4s">
                            <h3 class="experience mb-35"><span class="number">25</span> years of experience</h3>
                            <div class="section-title mb-35">
                                <h2 class="title">we’re Best barbers & hair cutting salon</h2>
                            </div>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, consequuntur magni dolores eos qui ratione sed quia sequi nesciunt.</p>
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
            </div>
        </section>
        <!-- About Us Area End -->


        <!-- What We Offer Start -->
        <section class="what-we-offer-three bg-black rel z-2 pt-120 rpt-90 pb-130 rpb-100">
            <div class="container">
               <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="section-title text-white text-center mb-55">
                            <h2 class="title">what we offers</h2>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptate accusantium doloremque laudantium totam aperiam eaque quae abillo</p>
                            <span class="sub-title">Services</span>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-2 col-lg-3 col-md-4 col-6 col-small">
                        <div class="ww-offer-item wow fadeInUp delay-0-2s">
                            <i class="flaticon-salon"></i>
                            <h4><a href="{{ route('service.detail') }}">Hair Cutting</a></h4>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-6 col-small">
                        <div class="ww-offer-item wow fadeInUp delay-0-3s">
                            <i class="flaticon-shampoo"></i>
                            <h4><a href="{{ route('service.detail') }}">Hair Washing</a></h4>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-6 col-small">
                        <div class="ww-offer-item wow fadeInUp delay-0-4s">
                            <i class="flaticon-hot-stone"></i>
                            <h4><a href="{{ route('service.detail') }}">Body Massage</a></h4>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-6 col-small">
                        <div class="ww-offer-item wow fadeInUp delay-0-5s">
                            <i class="flaticon-treatment"></i>
                            <h4><a href="{{ route('service.detail') }}">Beauty & Spa</a></h4>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-6 col-small">
                        <div class="ww-offer-item wow fadeInUp delay-0-6s">
                            <i class="flaticon-shaving-razor"></i>
                            <h4><a href="{{ route('service.detail') }}">Stylist Shaving</a></h4>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-6 col-small">
                        <div class="ww-offer-item wow fadeInUp delay-0-7s">
                            <i class="flaticon-hair-dye"></i>
                            <h4><a href="{{ route('service.detail') }}">Hair Colors</a></h4>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center mt-30">
                    <div class="col-lg-5">
                        <div class="morder-tools-content text-white rmb-55 wow fadeInLeft delay-0-2s">
                            <h3>modern tools for your hair style fashion</h3>
                            <p>Sed ut perspiciatis unde omnis natus voluptae accusantium doloremque laudantium totam aper iam eaque ipsa quae ab illo inventore veritatis et quase architecto beatae vitae dictae explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia</p>
                            <a href="{{ route('about') }}" class="theme-btn style-four mt-20">learn more <i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="morder-toots-image wow fadeInRight delay-0-2s">
                            <img src="{{ asset('FrontendAssets/images/about/modern-tools.jpg')}}" alt="Modern Tools">
                        </div>
                    </div>
                </div>
            </div>
            <div class="services-shapes">
                <img class="shape-one" src="{{ asset('FrontendAssets/images/shapes/wwo-one.png')}}" alt="Shape">
                <img class="shape-two" src="{{ asset('FrontendAssets/images/shapes/wwo-two.png')}}" alt="Shape">
            </div>
        </section>
        <!-- What We Offer End -->


        <!-- Working + Contact Start -->
        <section class="working-contact pt-100 rpt-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="working-hour text-white bgs-cover mt-30 br-10 overflow-hidden p-60 py-50 wow fadeInUp delay-0-2s" style="background-image: url({{asset('FrontendAssets/images/background/working-hour-bg.jpg')}});">
                            <h3>working hours</h3>
                            <p>Sit amet consectetur adipiscing elit eiusmod tempor incididunt labore dolorema</p>
                            <table>
                                <tr>
                                    <td>MONDAY</td>
                                    <td>09.00-19.00</td>
                                </tr>
                                <tr>
                                    <td>TUESDAY</td>
                                    <td>09.00-19.00</td>
                                </tr>
                                <tr>
                                    <td>FRIDAY</td>
                                    <td>09.00-19.00</td>
                                </tr>
                                <tr>
                                    <td>SATUREDAY</td>
                                    <td>09.00-19.00</td>
                                </tr>
                                <tr>
                                    <td>SUNDAY</td>
                                    <td><span class="color-yellow">Closed</span></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="contact-form-wrap br-10 overflow-hidden mt-30">
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
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="name" name="name" class="form-control" value="" placeholder="Your Full Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" id="email" name="email" class="form-control" value="" placeholder="Email Address" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="phone" name="phone" class="form-control" value="" placeholder="Phone Number" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-20">
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
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="date-time"><i class="far fa-calendar-alt"></i></label>
                                            <input type="text" id="date-time" name="date-time" class="form-control" value="" placeholder="Appointment Date & Time">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-0">
                                            <button type="submit" class="theme-btn btn-border w-100">appointment now<i class="far fa-long-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Working + Contact End -->


        <!-- News Area Start -->
        <section class="news-area-two rel z-2 pt-120 rpt-90 pb-100 rpb-70">
            <div class="container">
               <div class="row justify-content-center mb-10">
                    <div class="col-xl-6 col-lg-7">
                        <div class="section-title text-center mb-60">
                            <h2 class="title">latest news & blog</h2>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptate accusantium doloremque laudantium totam aperiam eaque quae abillo</p>
                            <span class="sub-title">blogs</span>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-md-6">
                        <div class="news-item style-two wow fadeInUp delay-0-2s">
                            <div class="image">
                                <img src="{{ asset('FrontendAssets/images/blog/news4.jpg')}}" alt="News">
                            </div>
                            <div class="content">
                               <ul class="blog-meta">
                                   <li><i class="far fa-user-circle"></i> <a href="#">Michael M.</a></li>
                                   <li><i class="far fa-comments"></i> <a href="#">Comm (05)</a></li>
                               </ul>
                                <h5><a href="{{ route('blog.detail') }}">Started With Node An Introduction To APIs, HTTP And ES6+ JavaScript</a></h5>
                                <a href="{{ route('blog.detail') }}" class="read-more">Read more <i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="news-item style-two wow fadeInUp delay-0-4s">
                            <div class="image">
                                <img src="{{ asset('FrontendAssets/images/blog/news5.jpg')}}" alt="News">
                            </div>
                            <div class="content">
                               <ul class="blog-meta">
                                   <li><i class="far fa-user-circle"></i> <a href="#">Michael M.</a></li>
                                   <li><i class="far fa-comments"></i> <a href="#">Comm (05)</a></li>
                               </ul>
                                <h5><a href="{{ route('blog.detail') }}">Deep Dive Into The Wonderful World Of SVG Displacement Filtering</a></h5>
                                <a href="{{ route('blog.detail') }}" class="read-more">Read more <i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="news-item style-two wow fadeInUp delay-0-6s">
                            <div class="image">
                                <img src="{{ asset('FrontendAssets/images/blog/news6.jpg')}}" alt="News">
                            </div>
                            <div class="content">
                               <ul class="blog-meta">
                                   <li><i class="far fa-user-circle"></i> <a href="#">Michael M.</a></li>
                                   <li><i class="far fa-comments"></i> <a href="#">Comm (05)</a></li>
                               </ul>
                                <h5><a href="{{ route('blog.detail') }}">Started With Node An Introduction To APIs, HTTP And ES6+ JavaScript</a></h5>
                                <a href="{{ route('blog.detail') }}" class="read-more">Read more <i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- News Area End -->


@endsection

@section('script')

@endsection
