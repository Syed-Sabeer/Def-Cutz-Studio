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
                            <li class="breadcrumb-item active">Blog Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->


        <!-- Blog Details Area Start -->
        <section class="blog-details-area py-130 rpy-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-details-content">
                           <ul class="blog-meta mb-30">
                               <li><i class="far fa-user-circle"></i> <a href="#">Leland M. Bormann</a></li>
                               <li><i class="far fa-calendar-alt"></i> <a href="#">25 September 2021</a></li>
                               <li><i class="far fa-comments"></i> <a href="#">Comments (05)</a></li>
                               <li><i class="far fa-eye"></i> <a href="#">View (3m)</a></li>
                           </ul>
                           <h3 class="title">Build An Ethical User Research Practice At Any Organization Interactive Gantt Chart Component JavaScript</h3>
                           <div class="image my-25 wow fadeInUp delay-0-2s">
                               <img src="{{ asset('FrontendAssets/images/blog/blog-details.jpg')}}" alt="Blog">
                           </div>
                           <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur</p>
                            <div class="blog-standard-item blog-blockquote mt-30 wow fadeInUp delay-0-2s">
                                <div class="content">
                                    <h3><a href="{{ route('blog.detail') }}">New Smashing Workshops on Front-End & DesignHandling Mounting And Unmounting Of Navigation Routes React NativeBuild An Ethical User Research Practice</a></h3>
                                    <div class="author">
                                        <img src="{{ asset('FrontendAssets/images/blog/blockquote-author.jpg')}}" alt="Author">
                                        <span class="name">Ralph A. Roebuck</span>
                                    </div>
                                </div>
                            </div>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia wants consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
                            <div class="tag-share pt-20">
                                <div class="tag-coulds pb-20">
                                    <b>Tags:</b>
                                    <a href="{{ route('blog') }}">Agency</a>
                                    <a href="{{ route('blog') }}">Cosmetics</a>
                                    <a href="{{ route('blog') }}">Beauty</a>
                                </div>
                                <div class="social-style-one pb-15">
                                    <b>Share:</b>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="admin-comment bg-lighter mt-30 mb-55 p-50 py-35 wow fadeInUp delay-0-2s">
                                <div class="comment-body">
                                    <div class="author-thumb">
                                        <img src="{{ asset('FrontendAssets/images/blog/admin-comment.jpg')}}" alt="Author">
                                    </div>
                                    <div class="comment-content">
                                        <div class="name-date">
                                            <h5>Dennis R. Grimaldi</h5>
                                        </div>
                                        <p>Sed ut perspiciatis unde omnis iste natus voluptatem accusantium doloremque laudantium to aperiam eaque ipsa quae abillo inventore veritatis quase</p>
                                        <div class="social-style-one pt-5">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                            <a href="#"><i class="fab fa-behance"></i></a>
                                            <a href="#"><i class="fab fa-dribbble"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="next-prev-post pb-10">
                                <div class="npp-item wow fadeInRight delay-0-2s">
                                    <img src="{{ asset('FrontendAssets/images/blog/prev-post.jpg')}}" alt="Blog">
                                    <div class="content">
                                        <h6><a href="{{ route('blog.detail') }}">New War Smashing Workshops Front-End & Design</a></h6>
                                        <span class="date"><i class="far fa-calendar-alt"></i> 25 Sep 2021</span>
                                    </div>
                                </div>
                                <div class="npp-item wow fadeInLeft delay-0-2s">
                                    <img src="{{ asset('FrontendAssets/images/blog/next-post.jpg')}}" alt="Blog">
                                    <div class="content">
                                        <h6><a href="{{ route('blog.detail') }}">Handling Mounting Unounting Navigation Routes Native</a></h6>
                                        <span class="date"><i class="far fa-calendar-alt"></i> 25 Sep 2021</span>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="comment-list pt-45 wow fadeInUp delay-0-2s">
                                <h3 class="title-two mb-35">Peopel Comments</h3>
                                <div class="comment-body">
                                    <div class="author-thumb">
                                        <img src="{{ asset('FrontendAssets/images/blog/author1.jpg')}}" alt="Author">
                                    </div>
                                    <div class="comment-content">
                                        <div class="name-date">
                                            <h5>John F. Medina</h5>
                                            <span class="comment-date">25 Feb 2022</span>
                                        </div>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae</p>
                                        <a href="#" class="reply-link">Reply <i class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                                <div class="comment-body child-comment">
                                    <div class="author-thumb">
                                        <img src="{{ asset('FrontendAssets/images/blog/author2.jpg')}}" alt="Author">
                                    </div>
                                    <div class="comment-content">
                                        <div class="name-date">
                                            <h5>Jeffrey T. Kelly</h5>
                                            <span class="comment-date">25 Feb 2022</span>
                                        </div>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae</p>
                                        <a href="#" class="reply-link">Reply <i class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                                <div class="comment-body">
                                    <div class="author-thumb">
                                        <img src="{{ asset('FrontendAssets/images/blog/author3.jpg')}}" alt="Author">
                                    </div>
                                    <div class="comment-content">
                                        <div class="name-date">
                                            <h5>Richard B. Zellmer</h5>
                                            <span class="comment-date">25 Feb 2022</span>
                                        </div>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae</p>
                                        <a href="#" class="reply-link">Reply <i class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <form action="#" class="comment-form mt-70 wow fadeInUp delay-0-2s">
                                <h3 class="title-two mb-35">Leave A Message</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="name" name="name" class="form-control" value="" placeholder="Full name" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="phone" name="phone" class="form-control" value="" placeholder="Phone Number" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" id="email" name="email" class="form-control" value="" placeholder="Email Address" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-30">
                                        <div class="form-group">
                                            <select name="subject" id="subject">
                                                <option value="value1">Subject :</option>
                                                <option value="value2">Barber</option>
                                                <option value="value3">Hair</option>
                                                <option value="value4">Cutting</option>
                                                <option value="value5">Trimmer</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" id="message" class="form-control" rows="4" placeholder="Write message" required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group mb-0">
                                            <button type="submit" class="theme-btn w-100">send message <i class="far fa-long-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
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
        <!-- Blog Details Area End -->



@endsection

@section('script')

@endsection
