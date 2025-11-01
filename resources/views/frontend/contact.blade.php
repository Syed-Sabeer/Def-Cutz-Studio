@extends('layouts.frontend.master')


@section('css')

@endsection

@section('content')


     <!-- Page Banner Start -->
        <section class="page-banner text-white py-190 rpy-130" style="background-image: url({{asset('FrontendAssets/images/banner/banner.jpg')}});">
            <div class="container">
                <div class="banner-inner">
                    <h1 class="page-title wow fadeInRight delay-0-2s">Contact</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center wow fadeInLeft delay-0-2s">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Cotact Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->


        <!-- Contact Page Section Start -->
        <section class="contact-page pt-120 pb-130 rpt-90 rpb-100">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-4 col-lg-5">
                        <div class="contact-info-wrap rmb-55 wow fadeInLeft delay-0-2s">
                            <div class="section-title mb-40">
                                <h2>Contact Us</h2>
                                <p>Sit amet consectetur adipiscing elit eiusmod tempor incidi labore dolore magna</p>
                            </div>
                            <div class="contact-info-part p-40">
                                <div class="contact-info-item">
                                    <div class="icon">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="content">
                                        <h3>Address</h3>
                                        <span>6052 n fry st, Katy, TX, United States</span>
                                    </div>
                                </div>
                                <div class="contact-info-item">
                                    <div class="icon">
                                        <i class="fal fa-envelope-open"></i>
                                    </div>
                                    <div class="content">
                                        <h3>Email Us</h3>
                                        <a href="mailto:info@defcutzstudio.com">info@defcutzstudio.com</a><br>
                                        <a href="www.defcutzstudio.com">www.defcutzstudio.com</a>
                                    </div>
                                </div>
                                <div class="contact-info-item">
                                    <div class="icon">
                                        <i class="fal fa-phone"></i>
                                    </div>
                                    <div class="content">
                                        <h3>Phone</h3>
                                        <a href="calto:+13466579853">+1 346-657-9853</a><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="contact-page-form wow fadeInRight delay-0-2s">
                            <div class="row">
                                <div class="col-lg-11 col-md-10">
                                    <div class="section-title mb-40">
                                        <h2>send us message</h2>
                                        <p>Sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt labore dolore magna aliqua suspendisse</p>
                                    </div>
                                </div>
                            </div>
                            <form id="contactForm" action="assets/php/form-process.php" name="contactForm" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="name" name="name" class="form-control" value="" placeholder="Your Full name" required="" data-error="Please enter your name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="phone" name="phone" class="form-control" value="" placeholder="Phone Number" >
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" id="email" name="email" class="form-control" value="" placeholder="Email Address" required="" data-error="Please enter your Email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="subject" name="subject" class="form-control" value="" placeholder="Subject">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" id="message" class="form-control" rows="3" placeholder="Write message" required="" data-error="Please enter your Message"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="form-group mb-0">
                                            <button type="submit" class="theme-btn">send message <i class="far fa-long-arrow-right"></i></button>
                                            <div id="msgSubmit" class="hidden"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Page Section End -->


       <!-- Map Area Start -->
        <div class="contact-page-map wow fadeInUp delay-0-2s">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d136834.1519573059!2d-74.0154445224086!3d40.7260256534837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1639991650837!5m2!1sen!2sbd" style="border:0; width: 100%;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <!-- Map Area End -->


@endsection

@section('script')

@endsection
