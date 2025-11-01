
        <!-- main header -->
        <header class="main-header header-one menu-absolute">
           <div class="container">
               <div class="header-top py-5">
                   <div class="row">
                       <div class="col-sm-8">
                           <div class="top-left">
                               <ul>
                                   <li><i class="far fa-phone"></i> <b>Call Us : </b> <a href="callto:+012(345)67895">012 (345) 67 895</a></li>
                                    <li><i class="far fa-clock"></i> <b>Opening Hour : </b> Sunday - Friday, 08 am - 09 pm</li>
                                </ul>
                           </div>
                       </div>
                       <div class="col-sm-4">
                           <div class="top-right text-center text-sm-right">
                                <div class="social-style-one">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-rocketchat"></i></a>
                                </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>

            <!--Header-Upper-->
            <div class="header-upper">
                <div class="container clearfix">

                    <div class="header-inner py-10 rpy-0 d-lg-flex align-items-center">
                        <div class="logo-outer">
                            <div class="logo"><a href="{{ route('home') }}"><img src="{{ asset('FrontendAssets/images/logos/logo.png')}}" alt="Logo" title="Logo"></a></div>
                        </div>

                        <div class="nav-outer clearfix mx-lg-auto">
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-lg">
                                <div class="navbar-header">
                                   <div class="mobile-logo my-15">
                                       <a href="{{ route('home') }}">
                                            <img src="{{ asset('FrontendAssets/images/logos/logo.png')}}" alt="Logo" title="Logo">
                                       </a>
                                   </div>

                                    <!-- Toggle Button -->
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li ><a href="{{ route('home') }}">Home</a>

                                        </li>
                                        <li><a href="{{ route('service') }}">Services</a>

                                        </li>
                                        <li><a href="{{ route('portfolio') }}">portfolio</a>

                                        </li>
                                        <!-- <li class="dropdown"><a href="#">pages</a>
                                            <ul>
                                                <li class="dropdown"><a href="#">Shop</a>
                                                    <ul>
                                                        <li><a href="shop.html">Shop</a></li>
                                                        <li><a href="product-details.html">Product Details</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="about.html">about us</a></li>
                                                <li><a href="pricing.html">Pricing</a></li>
                                                <li><a href="offers.html">Our Offers</a></li>
                                            </ul>
                                        </li> -->
                                        <li><a href="{{ route('about') }}">About</a>
                                        <li><a href="{{ route('blog') }}">blog</a>

                                        </li>
                                        <li><a href="{{ route('contact') }}">Contact</a></li>
                                    </ul>
                                </div>

                            </nav>
                            <!-- Main Menu End-->
                        </div>

                        <!-- Menu Button -->
                        <div class="menu-button d-none d-lg-block">
                           <a href="{{ route('appointment') }}" class="theme-btn">appointment <i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Header Upper-->
        </header>
