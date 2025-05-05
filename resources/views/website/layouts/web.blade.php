<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Heating & Air Conditioning Repair & Installation Services</title>
    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,600i,700" rel="stylesheet">
    <!--favicon-->
    <link rel="icon" href="assets/images/favicon.png">
    <!--stylesheet-->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontello.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>

<body>

    {{-- Start PreLoader --}}

    <div class="preloader">
        <div class="loader">
            <span></span>
        </div>
    </div>

    {{-- End PreLoader --}}


    {{-- Start Header --}}

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
                            <li><i class="icon-placeholder"></i> Address<a href="">Shop No 4 Maurya Market Priti Nagar, Lukhnow</a></li>
                            <li><i class="icon-phone-call"></i> Call Now<a href=""> 8418951771</a></li>
                            <li><i class="icon-clock"></i> Open Hours<a href=""> 9am - 9pm</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!--end .container-->
    </header>
    {{-- End Header --}}

    {{-- Start Main Menu --}}
    <div class="main_menu_area">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-12">
                    <button type="button" class="navbar-toggles">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="{{ route('home') }}" class="logo">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="Logo">
                    </a>
                </div>
                <div class="col-md-10 col-sm-9 collapse_responsive">
                    <div class="collapse navbar-collapse remove_padding" id="myNavbar">
                        <ul class="nav navbar-nav text-center">

                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('about') }}">About</a></li>
                            <li><a href="{{ route('services') }}">Services</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                            <li class="header_right_btn">
                                <a class="btn-yellow" href="#">BOOK TODAY</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End Main Menu --}}

    {{-- Main Content  --}}
    {{ $slot }}
    {{-- End Main Content --}}

    {{-- Start Footer --}}

    <footer class="footer_area">
        <div class="footer_contact text-center">
            <div class="container">
                <div class="col-md-4 col-sm-4">
                    <div class="footer_contact_width text-left">
                        <p><i class="icon-placeholder"></i> Address <span>66 Broklyn Street, New York</span></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="footer_contact_width">
                        <p><i class="icon-contact"></i> Email <span><a
                                    href="mailto:layerdrops@gmail.com">help@loazzne.com</a></span></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="footer_contact_width text-right">
                        <p><i class="icon-clock"></i> Open Hours <span><a href="">Mon-Sat: 9am - 6pm</a></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_content section_padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="footer_textwidget textwidget">
                            <h2>About Loazzne</h2>
                            <p>
                                At Lennom, We don’t just provide resi-dential and commercial heating and air
                                conditioning services; we make people’s lives easier. Better.
                            </p>
                            <h4>Get a Quote</h4>
                            <span class="number">666 888 000</span>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3">
                        <h2>Quick Links</h2>
                        <ul class="footer_link">
                            <li><a href="">Services</a></li>
                            <li><a href="">Request Appointment</a></li>
                            <li><a href="">Site Map</a></li>
                            <li><a href="">About Us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-3">
                        <ul class="footer_link extra_mt">
                            <li><a href="">Careers</a></li>
                            <li><a href="">Privacy Policy</a></li>
                            <li><a href="">Change Location</a></li>
                            <li><a href="">Expert Tips</a></li>
                            <li><a href="">Terms & Conditions</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="newslatter">
                            <h2>Newsletter</h2>
                            <input type="EMAIL" placeholder="Enter your email">
                            <button class="btn-yellow" value="SUBMIT NOW">SUBSCRIBE</button>
                        </div>
                    </div>
                </div>
                <div class="copyright_area">
                    <div class="row">
                        <div class="col-md-8 col-sm-6 copyright_text">
                            <p>&copy; copyright 2019 by Layerdrops.com</p>
                        </div>
                        <div class="col-md-4 col-sm-6 copyright_social text-right">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('assets/images/shape/footer-shape.png') }}" class="footer_shape" alt="footer shape">
    </footer>
    {{-- End Footer --}}


    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoint.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom-map.js') }}"></script>
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_Agsvf36du-7l_mp8iu1a-rXoKcWfs2I"></script> --}}
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>
