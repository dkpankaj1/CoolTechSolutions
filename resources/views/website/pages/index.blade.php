<x-web-layout>
    {{-- Start Header Slider --}}
    <section class="header_slider_area owl-carousel">
        <div class="header_slider_bg" style="background-image:url('{{ asset('assets/images/slider-1.webp') }}')">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p><span class="subtitle_number">01</span> Reliable Air Conditioning</p>
                        <h1>Installation Services &amp; Repair</h1>
                        <div class="slide_button">
                            <a href="#" class="btn-yellow">GET A FREE QUOTE</a>
                        </div><!--end .slide_button-->
                    </div><!--end .col-md-6-->
                </div><!--end .row-->
            </div><!--end .container-->
        </div><!--end .header_slider_bg-->
        <div class="header_slider_bg slider_bg2"
            style="background-image:url('{{ asset('assets/images/slider-2.webp') }}')">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p><span class="subtitle_number">02</span> Choos the Best Company</p>
                        <h1>Colling and Air Conditioning Specialist</h1>
                        <div class="slide_button">
                            <a href="#" class="btn-yellow">GET A FREE QUOTE</a>
                        </div><!--end .slide_button-->
                    </div><!--end .col-md-6-->
                </div><!--end .row-->
            </div><!--end .container-->
        </div><!--end .header_slider_bg-->
        <div class="header_slider_bg slider_bg3"
            style="background-image:url('{{ asset('assets/images/washing.jpg') }}')">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p><span class="subtitle_number">03</span> Quality that is Guaranteed</p>
                        <h1>Expert Repair  installation and service of Washing machine </h1>
                        <div class="slide_button">
                            <a href="#" class="btn-yellow">GET A FREE QUOTE</a>
                        </div><!--end .slide_button-->
                    </div><!--end .col-md-6-->
                </div><!--end .row-->
            </div><!--end .container-->
        </div><!--end .header_slider_bg-->
    </section>
    {{-- End Header Slider --}}

    {{-- Start Feature Service --}}
    <div class="feature_service_area text-center">
        <div class="feature_service_box_width">
            <i class="icon-wallet"></i>
            <p>No Upfront Payments</p>
        </div><!--end .feature_service_box_width-->
        <div class="feature_service_box_width">
            <i class="icon-diploma"></i>
            <p>Satisfaction Guarantee</p>
        </div><!--end .feature_service_box_width-->
        <div class="feature_service_box_width">
            <i class="icon-big_clock"></i>
            <p>Emergency Service</p>
        </div><!--end .feature_service_box_width-->
        <div class="feature_service_box_width">
            <i class="icon-handshake"></i>
            <p>Fixed Right Promise</p>
        </div><!--end .feature_service_box_width-->
        <div class="feature_service_box_width">
            <i class="icon-mechanic"></i>
            <p>8 Years Experience</p>
        </div><!--end .feature_service_box_width-->
    </div>
    {{-- End Feature Service --}}

    {{-- Start About --}}
    <section class="about_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about_image about-image__updated"
                        style="background-image:url('{{ asset('assets/images/freedg1.png') }}')"></div>
                </div><!--end .col-md-6-->
                <div class="col-md-6">
                    <div class="about_details">
                        <div class="hero-title-with-shape">
                            <h4 class="heading_with_border">Welcome to Colling Point</h4>
                            <h1>air conditioning ,Washing Maching Machine and Freedge repair and installation company
                            </h1>
                        </div><!--end .hero-title-with-shape-->
                        <p>
                            At Cooling Point, we specialize in delivering top-notch services in air conditioning repair
                            and installation, as well as expert care for washing machines and refrigerators. With years
                            of hands-on experience, our mission is to provide reliable, affordable, and efficient
                            solutions that keep your home cool and your appliances running smoothly.
                        </p>
                        <a href="{{ route('about') }}" class="btn-yellow">LEARN MORE</a>
                    </div><!--end .about_details-->
                </div><!--end .col-md-6-->
            </div><!--end .row-->
        </div><!--end .container-->
    </section>
    {{-- End About --}}

    {{-- Start Service --}}
    <section class="service_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hero-section-title text-center">
                        <h1>Our services</h1>
                    </div><!--end .hero-section-title-->
                </div><!--end .col-md-12-->
                <div class="col-md-4 col-sm-6">
                    <div class="service_box">
                        <div class="service_img">
                            <img src="assets/images/ac2.png" alt="service 1">
                            <div class="icon-box">
                                <i class="icon-snow"></i>
                            </div><!-- /.icon-box -->
                        </div><!--end .service_img-->
                        <div class="service_details">
                            <a href="service-details.html">
                                <h2>Air Condtioner Services</h2>
                            </a>
                            <p>
                                We provide expert air conditioner installation, repair,and maintenance to keep your home
                                cool and comfortable year-round.Trust our technicians for reliable and efficient
                                service.
                            </p>
                            <a href="{{ route('complain.create') }}" class="btn-yellow">Book Now</a>
                        </div><!--end .service_details-->
                    </div><!--end .service_box-->
                </div><!--end .col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="service_box">
                        <div class="service_img">
                            <img src="assets/images/freedge2.png" alt="service 2">
                            <div class="icon-box">
                                <i class="icon-fire"></i>
                            </div><!-- /.icon-box -->
                        </div><!--end .service_img-->
                        <div class="service_details">
                            <a href="service-details.html">
                                <h2>Freedge Services</h2>
                            </a>
                            <p>
                                Our fridge services cover all types of cooling issues, including gas refilling,
                                compressor repair, and regular maintenance, ensuring your food stays fresh and your
                                fridge runs smoothly.
                            </p>
                            <a href="{{ route('complain.create') }}" class="btn-yellow">Book Now</a>
                        </div><!--end .service_details-->
                    </div><!--end .service_box-->
                </div><!--end .col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="service_box">
                        <div class="service_img">
                            <img src="assets/images/washing2.png" alt="service 3">
                            <div class="icon-box">
                                <i class="icon-ac"></i>
                            </div><!-- /.icon-box -->
                        </div><!--end .service_img-->
                        <div class="service_details">
                            <a href="service-details.html">
                                <h2>Washing Machine Services</h2>
                            </a>
                            <p>
                                From drum issues to water drainage problems, our washing machine repair team handles it
                                all with care and precision to restore full functionality and extend your machine’s
                                life.


                            </p>
                            <a href="{{ route('complain.create') }}" class="btn-yellow">Book Now</a>
                        </div><!--end .service_details-->
                    </div><!--end .service_box-->
                </div><!--end .col-md-4-->
            </div><!--end .row-->
        </div><!--end .container-->
        <br />
        <div class="mt-10 text-center">
            <a href="{{ route('services') }}" class="btn-gray">All Services</a>
        </div>
    </section>
    {{-- End Service --}}



    {{-- Start CTA --}}
    <section class="call_to_action">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8 col-xs-12">
                    <h1>No overtime charges, 7 days a week</h1>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12 text-right cta_responsive_left">
                    <a href="{{ route('complain.create') }}" class="btn-gray">BOOK COMPLAIN</a>
                </div>
            </div>
        </div>
    </section>
    {{-- end CTA --}}


    {{-- Start CounterUp --}}
    <section class="counterup_area text-center section_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hero-section-title text-center">
                        <h1>Numbers of Client.</h1>
                    </div><!--end .hero-section-title-->
                </div><!--end .col-md-12-->
                <div class="col-md-4 col-sm-6">
                    <div class="counter_box">
                        <img src="assets/images/shape/about-shape.png" class="number_img_shape" alt="Shape">
                        <span class="counter">3000</span>
                        <p>Air Conditioning Repairs and Install in Lukhnow city</p>
                    </div><!--end .counter_box-->
                </div><!--end .col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="counter_box">
                        <img src="assets/images/shape/about-shape.png" class="number_img_shape" alt="Shape">
                        <span class="counter">3000</span>
                        <p>Freedge Repairs and Install in Lukhnow city</p>
                    </div><!--end .counter_box-->
                </div><!--end .col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="counter_box">
                        <img src="assets/images/shape/about-shape.png" class="number_img_shape" alt="Shape">
                        <span class="counter">5000</span>
                        <p>Washing Machine repair and Install in Lukhnow city</p>
                    </div><!--end .counter_box-->
                </div><!--end .col-md-4-->
            </div><!--end .row-->
        </div><!--end .container-->
    </section>
    {{-- End CounterUp --}}

    {{-- Start Gallery --}}
    <section class="gallery_area">
        <div class="gallery_width">
            <div class="gallery_fixed_height">
                <img src="assets/images/gallery/ac271.png" alt="gallery 1">
                <div class="gallery_overlay">
                    <h3>Maintenance and Repair</h3>
                    <a href="#" class="gallery_icon_btn text-right"><i class="fa fa-angle-right"></i></a>
                </div><!--end .gallery_overlay-->
            </div><!--end .gallery_fixed_height-->
        </div><!--end .gallery_width-->
        <div class="gallery_width">
            <div class="gallery_fixed_height">
                <img src="assets/images/gallery/fridge328.png" alt="gallery 2">
                <div class="gallery_overlay">
                    <h3>Maintenance and Repair</h3>
                    <a href="#" class="gallery_icon_btn text-right"><i class="fa fa-angle-right"></i></a>
                </div><!--end .gallery_overlay-->
            </div><!--end .gallery_fixed_height-->
        </div><!--end .gallery_width-->
        <div class="gallery_width">
            <div class="gallery_fixed_height">
                <img src="assets/images/gallery/ac348.png" alt="gallery 3">
                <div class="gallery_overlay">
                    <h3>Maintenance and Repair</h3>
                    <a href="#" class="gallery_icon_btn text-right"><i class="fa fa-angle-right"></i></a>
                </div><!--end .gallery_overlay-->
            </div><!--end .gallery_fixed_height-->
        </div><!--end .gallery_width-->
        <div class="gallery_width">
            <div class="gallery_fixed_height">
                <img src="assets/images/gallery/fridge.png" alt="gallery 4">
                <div class="gallery_overlay">
                    <h3>Maintenance and Repair</h3>
                    <a href="#" class="gallery_icon_btn text-right"><i class="fa fa-angle-right"></i></a>
                </div><!--end .gallery_overlay-->
            </div><!--end .gallery_fixed_height-->
        </div><!--end .gallery_width-->
        <div class="gallery_width">
            <div class="gallery_fixed_height">
                <img src="assets/images/gallery/was328.png" alt="gallery 5">
                <div class="gallery_overlay">
                    <h3>Maintenance and Repair</h3>
                    <a href="#" class="gallery_icon_btn text-right"><i class="fa fa-angle-right"></i></a>
                </div><!--end .gallery_overlay-->
            </div><!--end .gallery_fixed_height-->
        </div><!--end .gallery_width-->
        <div class="gallery_width">
            <div class="gallery_fixed_height">
                <img src="assets/images/gallery/fridge271.png" alt="gallery 6">
                <div class="gallery_overlay">
                    <h3>Maintenance and Repair</h3>
                    <a href="#" class="gallery_icon_btn text-right"><i class="fa fa-angle-right"></i></a>
                </div><!--end .gallery_overlay-->
            </div><!--end .gallery_fixed_height-->
        </div><!--end .gallery_width-->
    </section>
    {{-- End Gallery --}}

    {{-- Start Testimonial --}}
    <section class="testimonial_area text-center section_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="testimonial_slider owl-carousel">
                        <div class="testimonial_details">
                            <p>This is due to their excellent service, competitive pricing and customer support . It's
                                throughly refresing to get such a personal touch.</p>
                            <h4>Jim Doe</h4>
                            <span>Director</span>
                        </div><!--end .testimonial_details-->
                        <div class="testimonial_details">
                            <p>This is due to their excellent service, competitive pricing and customer support . It's
                                throughly refresing to get such a personal touch.</p>
                            <h4>Mark Doe</h4>
                            <span>Developer</span>
                        </div><!--end .testimonial_details-->
                        <div class="testimonial_details">
                            <p>This is due to their excellent service, competitive pricing and customer support . It's
                                throughly refresing to get such a personal touch.</p>
                            <h4>Shirley Smith</h4>
                            <span>Director</span>
                        </div><!--end .testimonial_details-->
                    </div><!--end .testimonial_slider-->
                </div><!--end .col-md-8-->
            </div><!--end .row-->
        </div><!--end .container-->
        <h1 class="testimonial_heading_shape">Testimonials</h1>
    </section>
    {{-- Start Testimonial --}}

    {{-- Start Client's Logo --}}
    <div class="clients_logo_area text-center section_padding">
        <div class="container">
            <div class="row">
                <div class="clients_logo owl-carousel">
                    <div class="item">
                        <img src="assets/images/brand1.png" alt="Clients Logos">
                    </div><!--end .item-->
                    <div class="item">
                        <img src="assets/images/brand2.png" alt="Clients Logos">
                    </div><!--end .item-->
                    <div class="item">
                        <img src="assets/images/brand3.png" alt="Clients Logos">
                    </div><!--end .item-->
                    <div class="item">
                        <img src="assets/images/brand4.png" alt="Clients Logos">
                    </div><!--end .item-->
                    <div class="item">
                        <img src="assets/images/brand5.png" alt="Clients Logos">
                    </div><!--end .item-->
                    <div class="item">
                        <img src="assets/images/brand6.png" alt="Clients Logos">
                    </div><!--end .item-->
                    <div class="item">
                        <img src="assets/images/brand7.png" alt="Clients Logos">
                    </div><!--end .item-->

                </div><!--end .clients_logo-->
            </div><!--end .row-->
        </div><!--end .container-->
    </div>
    {{-- End Client's Logo --}}





</x-web-layout>
