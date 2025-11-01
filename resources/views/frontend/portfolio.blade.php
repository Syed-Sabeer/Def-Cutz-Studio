@extends('layouts.frontend.master')


@section('css')

@endsection

@section('content')


  <!-- Page Banner Start -->
        <section class="page-banner text-white py-190 rpy-130" style="background-image: url({{asset('FrontendAssets/images/banner/banner.jpg')}});">
            <div class="container">
                <div class="banner-inner">
                    <h1 class="page-title wow fadeInRight delay-0-2s">Portfolio</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center wow fadeInLeft delay-0-2s">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Portfolio</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->


        <!-- Gallery Area Start -->
        <section class="gallery-page-area rel z-1 pt-120 rpt-90 pb-100 rpb-70">
            <div class="container">
               <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-70">
                            <h2 class="title">Latest photo gallery</h2>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptate accusantium doloremque laudantium totam aperiam eaque quae abillo</p>
                            <span class="sub-title">gallery</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-md-8">
                        <div class="gallery-item style-two wow fadeInUp delay-0-2s">
                            <img src="{{ asset('FrontendAssets/images/gellary/gallery-big1.jpg')}}" alt="Gallery">
                            <div class="gallery-content">
                                <a href="{{asset('FrontendAssets/images/gellary/gallery-big1.jpg')}}" class="icon"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <div class="gallery-item style-two wow fadeInUp delay-0-4s">
                            <img src="{{ asset('FrontendAssets/images/gellary/p1.png')}}" alt="Gallery">
                            <div class="gallery-content">
                                <a href="{{asset('FrontendAssets/images/gellary/p1.png')}}" class="icon"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="gallery-item style-two wow fadeInUp delay-0-6s">
                            <img src="{{ asset('FrontendAssets/images/gellary/p2.png')}}" alt="Gallery">
                            <div class="gallery-content">
                                <a href="{{asset('FrontendAssets/images/gellary/p2.png')}}" class="icon"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="gallery-item style-two wow fadeInUp delay-0-2s">
                            <img src="{{ asset('FrontendAssets/images/gellary/p3.png')}}" alt="Gallery">
                            <div class="gallery-content">
                                <a href="{{asset('FrontendAssets/images/gellary/p3.png')}}" class="icon"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-8 order-mo-2">
                        <div class="gallery-item style-two wow fadeInUp delay-0-4s">
                            <img src="{{ asset('FrontendAssets/images/gellary/gallery-big2.jpg')}}" alt="Gallery">
                            <div class="gallery-content">
                                <a href="{{asset('FrontendAssets/images/gellary/gallery-big2.jpg')}}" class="icon"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <div class="gallery-item style-two wow fadeInUp delay-0-6s">
                            <img src="{{ asset('FrontendAssets/images/gellary/p4.png')}}" alt="Gallery">
                            <div class="gallery-content">
                                <a href="{{asset('FrontendAssets/images/gellary/p4.png')}}" class="icon"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-8">
                        <div class="gallery-item style-two wow fadeInUp delay-0-2s">
                            <img src="{{ asset('FrontendAssets/images/gellary/gallery-big5.jpg')}}" alt="Gallery">
                            <div class="gallery-content">
                                <a href="{{asset('FrontendAssets/images/gellary/gallery-big5.jpg')}}" class="icon"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <div class="gallery-item style-two wow fadeInUp delay-0-4s">
                            <img src="{{ asset('FrontendAssets/images/gellary/p5.png')}}" alt="Gallery">
                            <div class="gallery-content">
                                <a href="{{asset('FrontendAssets/images/gellary/p5.png')}}" class="icon"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <div class="gallery-item style-two wow fadeInUp delay-0-6s">
                            <img src="{{ asset('FrontendAssets/images/gellary/p6.png')}}" alt="Gallery">
                            <div class="gallery-content">
                                <a href="{{asset('FrontendAssets/images/gellary/p6.png')}}" class="icon"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-8">
                        <div class="gallery-item style-two wow fadeInUp delay-0-4s">
                            <img src="{{ asset('FrontendAssets/images/gellary/gallery-big1.jpg')}}" alt="Gallery">
                            <div class="gallery-content">
                                <a href="{{asset('FrontendAssets/images/gellary/gallery-big1.jpg')}}" class="icon"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="gallery-item style-two wow fadeInUp delay-0-6s">
                            <img src="{{ asset('FrontendAssets/images/gellary/p7.png')}}" alt="Gallery">
                            <div class="gallery-content">
                                <a href="{{asset('FrontendAssets/images/gellary/p7.png')}}" class="icon"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="gallery-item style-two wow fadeInUp delay-0-2s">
                            <img src="{{ asset('FrontendAssets/images/gellary/p9.png')}}" alt="Gallery">
                            <div class="gallery-content">
                                <a href="{{asset('FrontendAssets/images/gellary/p9.png')}}" class="icon"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Gallery Area End -->


@endsection

@section('script')

@endsection
