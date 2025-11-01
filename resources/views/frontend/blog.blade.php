@extends('layouts.frontend.master')


@section('css')

@endsection

@section('content')



        <!-- Page Banner Start -->
        <section class="page-banner text-white py-190 rpy-130" style="background-image: url({{asset('FrontendAssets/images/banner/banner.jpg')}});">
            <div class="container">
                <div class="banner-inner">
                    <h1 class="page-title wow fadeInRight delay-0-2s">Blog</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center wow fadeInLeft delay-0-2s">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Blog Standard</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->


        <!-- Blog Standard Area Start -->
        <section class="blog-standard-area py-130 rpy-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-standard-item wow fadeInUp delay-0-2s">
                            <div class="image">
                                <img src="{{ asset('FrontendAssets/images/blog/blog-standard-1.jpg')}}" alt="Blog">
                            </div>
                            <div class="content">
                               <ul class="blog-meta">
                                   <li><i class="far fa-user-circle"></i> <a href="#">Michael M.</a></li>
                                   <li><i class="far fa-comments"></i> <a href="#">Comm (05)</a></li>
                               </ul>
                                <h3><a href="{{ route('blog.detail') }}">Build An Ethical User Research Practice At Any Organization Interactive Gantt Chart Component JavaScript</a></h3>
                                <p>Sed ut perspiciatis unde omnis natus error sit voluptatem accusantium doloremq laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitaes dicta sunt explicabo enim ipsam voluptatem quia voluptas sit aspernatur</p>
                                <a href="{{ route('blog.detail') }}" class="theme-btn">Read more <i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="blog-standard-item wow fadeInUp delay-0-2s">
                            <div class="image video-news">
                                <img src="{{ asset('FrontendAssets/images/blog/blog-standard-2.jpg')}}" alt="Blog">
                                <a href="https://www.youtube.com/watch?v=9Y7ma241N8k" class="mfp-iframe video-play"><i class="fas fa-play"></i></a>
                            </div>
                            <div class="content">
                               <ul class="blog-meta">
                                   <li><i class="far fa-user-circle"></i> <a href="#">Michael M.</a></li>
                                   <li><i class="far fa-comments"></i> <a href="#">Comm (05)</a></li>
                               </ul>
                                <h3><a href="{{ route('blog.detail') }}">Handling Mounting And Unmounting Of Navigation Routes React NativeBuild An Ethical User Research Practice</a></h3>
                                <p>Sed ut perspiciatis unde omnis natus error sit voluptatem accusantium doloremq laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitaes dicta sunt explicabo enim ipsam voluptatem quia voluptas sit aspernatur</p>
                                <a href="{{ route('blog.detail') }}" class="theme-btn">Read more <i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="blog-standard-item blog-blockquote wow fadeInUp delay-0-2s">
                            <div class="content">
                                <h3><a href="{{ route('blog.detail') }}">New Smashing Workshops on Front-End & DesignHandling Mounting And Unmounting Of Navigation Routes React NativeBuild An Ethical User Research Practice</a></h3>
                                <div class="author">
                                    <img src="{{ asset('FrontendAssets/images/blog/blockquote-author.jpg')}}" alt="Author">
                                    <span class="name">Ralph A. Roebuck</span>
                                </div>
                            </div>
                        </div>
                        <div class="blog-standard-item wow fadeInUp delay-0-2s">
                            <div class="image">
                                <img src="{{ asset('FrontendAssets/images/blog/blog-standard-3.jpg')}}" alt="Blog">
                            </div>
                            <div class="content">
                               <ul class="blog-meta">
                                   <li><i class="far fa-user-circle"></i> <a href="#">Michael M.</a></li>
                                   <li><i class="far fa-comments"></i> <a href="#">Comm (05)</a></li>
                               </ul>
                                <h3><a href="{{ route('blog.detail') }}">Build An Ethical User Research Practice At Any Organization Interactive Gantt Chart Component JavaScript</a></h3>
                                <p>Sed ut perspiciatis unde omnis natus error sit voluptatem accusantium doloremq laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitaes dicta sunt explicabo enim ipsam voluptatem quia voluptas sit aspernatur</p>
                                <a href="{{ route('blog.detail') }}" class="theme-btn">Read more <i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="blog-standard-item wow fadeInUp delay-0-2s">
                            <div class="image">
                                <img src="{{ asset('FrontendAssets/images/blog/blog-standard-4.jpg')}}" alt="Blog">
                            </div>
                            <div class="content">
                               <ul class="blog-meta">
                                   <li><i class="far fa-user-circle"></i> <a href="#">Michael M.</a></li>
                                   <li><i class="far fa-comments"></i> <a href="#">Comm (05)</a></li>
                               </ul>
                                <h3><a href="{{ route('blog.detail') }}">Build An Ethical User Research Practice At Any Organization Interactive Gantt Chart Component JavaScript</a></h3>
                                <p>Sed ut perspiciatis unde omnis natus error sit voluptatem accusantium doloremq laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitaes dicta sunt explicabo enim ipsam voluptatem quia voluptas sit aspernatur</p>
                                <a href="{{ route('blog.detail') }}" class="theme-btn">Read more <i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <nav aria-label="...">
                            <ul class="pagination style-two flex-wrap pt-40 rpt-20 wow fadeInUp delay-0-2s">
                                <li class="page-item disabled">
                                    <span class="page-link"><i class="fas fa-arrow-left"></i></span>
                                </li>
                                <li class="page-item active">
                                    <span class="page-link">
                                        01
                                        <span class="sr-only">(current)</span>
                                    </span>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">02</a></li>
                                <li class="page-item"><a class="page-link" href="#">03</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fas fa-arrow-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-4 col-md-7 col-sm-9">
                        <div class="blog-sidebar rmt-75">
                            <div class="widget widget-search wow fadeInUp delay-0-2s">
                               <h3 class="widget-title">Search</h3>
                                <form action="#">
                                   <input type="search" placeholder="Keywords" required="">
                                   <button type="submit"><i class="fas fa-search"></i></button>
                               </form>
                            </div>
                            <div class="widget widget-menu wow fadeInUp delay-0-2s">
                               <h3 class="widget-title">Best category</h3>
                                <ul>
                                    <li><a href="{{ route('blog') }}">Hair Cutting & Fitting <i class="far fa-long-arrow-right"></i></a></li>
                                    <li><a href="{{ route('blog') }}">Beauty & Spa <i class="far fa-long-arrow-right"></i></a></li>
                                    <li><a href="{{ route('blog') }}">Body Treatments <i class="far fa-long-arrow-right"></i></a></li>
                                    <li><a href="{{ route('blog') }}">Hair Colors <i class="far fa-long-arrow-right"></i></a></li>
                                    <li><a href="{{ route('blog') }}">Body Massages <i class="far fa-long-arrow-right"></i></a></li>
                                    <li><a href="{{ route('blog') }}">Fash Wash & Facial <i class="far fa-long-arrow-right"></i></a></li>
                                </ul>
                            </div>
                            <div class="widget widget-news  wow fadeInUp delay-0-2s">
                                <h5 class="widget-title">recent news</h5>
                                <ul>
                                    <li>
                                        <div class="image">
                                            <img src="{{ asset('FrontendAssets/images/widgets/widget-news1.jpg')}}" alt="News">
                                        </div>
                                        <div class="content">
                                            <span class="date"><i class="fal fa-calendar-alt"></i> 25 sep 2021</span>
                                            <h6><a href="{{ route('blog.detail') }}">Build Ethical Research Prac Organiza</a></h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="image">
                                            <img src="{{ asset('FrontendAssets/images/widgets/widget-news2.jpg')}}" alt="News">
                                        </div>
                                        <div class="content">
                                            <span class="date"><i class="fal fa-calendar-alt"></i> 25 sep 2021</span>
                                            <h6><a href="{{ route('blog.detail') }}">Build Ethical Research Prac Organiza</a></h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="image">
                                            <img src="{{ asset('FrontendAssets/images/widgets/widget-news3.jpg')}}" alt="News">
                                        </div>
                                        <div class="content">
                                            <span class="date"><i class="fal fa-calendar-alt"></i> 25 sep 2021</span>
                                            <h6><a href="{{ route('blog.detail') }}">Build Ethical Research Prac Organiza</a></h6>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget widget-tag-cloud  wow fadeInUp delay-0-2s">
                                <h5 class="widget-title">Product Tags</h5>
                                <div class="tag-coulds">
                                    <a href="{{ route('blog') }}">Salon</a>
                                    <a href="{{ route('blog') }}">Beauty</a>
                                    <a href="{{ route('blog') }}">Treatments</a>
                                    <a href="{{ route('blog') }}">Massage</a>
                                    <a href="{{ route('blog') }}">GYM & Yoga</a>
                                    <a href="{{ route('blog') }}">Hair</a>
                                    <a href="{{ route('blog') }}">Hair Color</a>
                                    <a href="{{ route('blog') }}">Shaving</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Standard Area End -->


@endsection

@section('script')

@endsection
