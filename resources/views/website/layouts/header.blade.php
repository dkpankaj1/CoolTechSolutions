
<div class="preloader">
    <div class="loader">
        <span></span>
    </div><!--end .loader-->
</div>
<header class="header_area">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="header_social">
                    <ul class="hd_social_icons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9 col-sm-8 col-xs-12">
                <div class="header_contact text-right">
                    <ul class="hd_contact">
                        <li><i class="icon-placeholder"></i> Address<a href=""> 66 Broklyn Street, New York</a></li>
                        <li><i class="icon-phone-call"></i> Call Now<a href=""> 666 888 000</a></li>
                        <li><i class="icon-clock"></i> Open Hours<a href=""> Mon-Sat: 9am - 6pm</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="main_menu_area">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-12">
                <button type="button" class="navbar-toggles">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.html" class="logo">
                    <img src="assets/images/logo.png" alt="Logo">
                </a>
            </div><!--end .col-md-2-->
            <div class="col-md-10 col-sm-9 collapse_responsive">
                <div class="collapse navbar-collapse remove_padding" id="myNavbar">
                    <ul class="nav navbar-nav text-center">
                        <li>
                            <a href="{{ route('home') }}">Home </a> 
                           
                        </li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('services') }}">Services</a></li>
                        <li>
                            <a href="blog.html">Blog <i class="fa fa-angle-down"></i></a> <span class="responsive_menu"><i class="fa fa-angle-down"></i></span>
                            <ul class="dropdown-menu dropdown-menu-responsive2">
                                <li><a href="blog.html">Blog Grid</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                        <li class="header_right_btn">
                            <a class="btn-yellow" href="#">BOOK TODAY</a>
                        </li>
                    </ul>
                </div><!--end .collapse-->
            </div><!--end .col-md-10-->
        </div><!--end .row-->
    </div><!--end .container-->
</div><!--end .main_menu_area-->
