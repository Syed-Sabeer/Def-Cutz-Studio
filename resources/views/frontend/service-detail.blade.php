@extends('layouts.frontend.master')


@section('css')

@endsection

@section('content')


       <!-- Page Banner Start -->
        <section class="page-banner text-white py-190 rpy-130" style="background-image: url({{asset('FrontendAssets/images/banner/banner.jpg')}});">
            <div class="container">
                <div class="banner-inner">
                    <h1 class="page-title wow fadeInRight delay-0-2s">Details</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center wow fadeInLeft delay-0-2s">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Service Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->


        <!-- Service Details Area Start -->
        <section class="service-details-area py-130 rpt-90 rpb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="service-details-content rmb-75">
                            <div class="content wow fadeInUp delay-0-2s">
                                <h2>Hair Cutting & Colors</h2>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia</p>
                            </div>
                            <div class="image mb-45 wow fadeInUp delay-0-2s">
                                <img src="{{ asset('FrontendAssets/images/services/service-details.jpg')}}" alt="Service Details">
                            </div>
                            <div class="content wow fadeInUp delay-0-2s">
                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil</p>
                            </div>
                            <div class="service-middle pb-10 wow fadeInUp delay-0-2s">
                                <div class="image-part mb-30">
                                    <img src="{{ asset('FrontendAssets/images/services/service-middle.jpg')}}" alt="Service">
                                </div>
                                <div class="video-part mb-30">
                                    <img src="{{ asset('FrontendAssets/images/services/service-middle-video.jpg')}}" alt="Video">
                                    <a href="{{ asset('FrontendAssets/video/video.mp4')}}" class="mfp-iframe video-play"><i class="fas fa-play"></i></a>
                                </div>
                            </div>
                            <div class="content wow fadeInUp delay-0-2s">
                                <h2>benefit our services</h2>
                                <p>We will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because </p>
                                <div class="faqs mt-35 wow fadeInUp delay-0-2s" id="faqs">
                                    <div class="card">
                                        <h5 class="collapsed card-header" data-toggle="collapse" data-target="#collapse0" aria-expanded="false" aria-controls="collapse0">Best Hair Cutting & Fitting Near City <i class="far fa-long-arrow-right"></i>
                                        </h5>
                                        <div id="collapse0" class="collapse" data-parent="#faqs">
                                            <div class="card-body">
                                                <p>We will give you a complete account of the system, and expound the teachings of the great explorer of the truth, the master-builder of human happiness. No orejects, dislikes, or avoids pleasure itself, because it is pleasure, but because </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <h5 class="card-header" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">experience & profesional team member<i class="far fa-long-arrow-right"></i>
                                        </h5>
                                        <div id="collapse2" class="collapse show" data-parent="#faqs">
                                            <div class="card-body">
                                                <p>We will give you a complete account of the system, and expound the teachings of the great explorer of the truth, the master-builder of human happiness. No orejects, dislikes, or avoids pleasure itself, because it is pleasure, but because </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <h5 class="collapsed card-header" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">low cost & very much friendly <i class="far fa-long-arrow-right"></i>
                                        </h5>
                                        <div id="collapse3" class="collapse" data-parent="#faqs">
                                            <div class="card-body">
                                                <p>We will give you a complete account of the system, and expound the teachings of the great explorer of the truth, the master-builder of human happiness. No orejects, dislikes, or avoids pleasure itself, because it is pleasure, but because </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-7 col-sm-9">
                        <div class="service-sidebar">
                            <div class="widget widget-menu wow fadeInUp delay-0-2s">
                                <ul>
                                    <li><a class="active" href="{{ route('service.detail') }}">Hair Cutting & Fitting <i class="far fa-long-arrow-right"></i></a></li>
                                    <li><a href="{{ route('service.detail') }}">Beauty & Spa <i class="far fa-long-arrow-right"></i></a></li>
                                    <li><a href="{{ route('service.detail') }}">Body Treatments <i class="far fa-long-arrow-right"></i></a></li>
                                    <li><a href="{{ route('service.detail') }}">Hair Colors <i class="far fa-long-arrow-right"></i></a></li>
                                    <li><a href="{{ route('service.detail') }}">Body Massages <i class="far fa-long-arrow-right"></i></a></li>
                                    <li><a href="{{ route('service.detail') }}">Fash Wash & Facial <i class="far fa-long-arrow-right"></i></a></li>
                                </ul>
                            </div>
                            <div class="widget widget-form wow fadeInUp delay-0-2s">
                                <h3 class="widget-title">Appointment</h3>
                                <form action="#">
                                    <div class="form-group">
                                        <input type="text" id="name" name="name" class="form-control" value="" placeholder="Your Full Name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" id="email" name="email" class="form-control" value="" placeholder="Email Address" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="phone" name="phone" class="form-control" value="" placeholder="Phone Number" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="date-time"><i class="far fa-calendar-alt"></i></label>
                                        <input type="text" id="date-time" name="date-time" class="form-control" value="" placeholder="Date & Time">
                                    </div>
                                    <button type="submit" class="theme-btn btn-border w-100">appointment now<i class="far fa-long-arrow-right"></i></button>
                                </form>
                            </div>
                            <div class="widget widget-btns wow fadeInUp delay-0-2s">
                                <a href="{{ route('contact') }}" class="theme-btn style-four mb-10">Download Pdf <i class="far fa-file-pdf"></i></a>
                                <a href="{{ route('contact') }}" class="theme-btn">download brochure <i class="far fa-file-word"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service Details Area End -->


@endsection

@section('script')

@endsection
