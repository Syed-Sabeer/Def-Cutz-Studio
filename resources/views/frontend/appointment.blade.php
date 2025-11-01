@extends('layouts.frontend.master')


@section('css')

@endsection

@section('content')



        <!-- Page Banner Start -->
        <section class="page-banner text-white py-190 rpy-130" style="background-image: url({{asset('FrontendAssets/images/banner/banner.jpg')}});">
            <div class="container">
                <div class="banner-inner">
                    <h1 class="page-title wow fadeInRight delay-0-2s">Appointment</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center wow fadeInLeft delay-0-2s">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Appointment</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->



        <!-- Working + Contact Start -->
        <section class="working-contact pt-100 rpt-70 pb-100">
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



@endsection

@section('script')

@endsection
