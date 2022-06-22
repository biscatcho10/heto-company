<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('assets/images/logo.png') }}">
    <title>HETO Dedign</title>

    <!-- start css -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <!-- End css -->
</head>

<body>
    <!-- start Header -->
    <header id="top" class="header-home">
        <div class="vertical-panel-top">
            <a href="./index.html" class="logo_header">
                <img src="{{ asset('assets/svg/logo.svg') }}" alt="">
            </a>
        </div>
        <div class="vertical-panel"></div>
        <div class="vertical-panel-content">
            <div class="vertical-panel-info">
                <div class="vertical-panel-title">Architecture buro</div>
                <div class="line"></div>
            </div>
            <ul class="social-list">
                <li><a href="{{ $settings['fb_link'] }}" class="fab fa-facebook-f"></a></li>
                <li><a href="{{ $settings['in_link'] }}" class="fab fa-instagram"></a></li>
                <li><a href="{{ $settings['wts_link'] }}" class="fab fa-whatsapp"></a></li>
            </ul>
        </div>

        <!-- Navigation Desctop -->
        @include('frontend.layouts.nav')
    </header>
    <!-- / Header -->

    <!-- start Layout -->
    <div class="layout">

        <!-- Home -->

        <main class="main">

            <div class="arrow-left"></div>
            <div class="arrow-right"></div>

            <!-- Start revolution slider -->

            <div class="rev_slider_wrapper">
                <div id="rev_slider" class="rev_slider fullscreenbanner">
                    <ul>
                        <!-- Slide 1 -->
                        <li data-transition="slotzoom-horizontal" data-slotamount="7" data-masterspeed="1000"
                            data-fsmasterspeed="1000">

                            <!-- Main image-->

                            <img src="{{ asset('assets/images/carousel-1.jpg') }}" alt=""
                                data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                                class="rev-slidebg">

                            <!-- Layer 1 -->

                            <div class="slide-title tp-caption tp-resizeme" data-x="['right','right','right','right']"
                                data-hoffset="['-18','-18','50','18']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['120','70', '120']" data-fontsize="['50']"
                                data-lineheight="['80','75', '65']" data-width="['1500','900','800']"
                                data-height="none" data-whitespace="normal" data-transform_idle="o:1;"
                                data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500"
                                data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                                data-elementdelay="0.05">We Do Our Job Safely And
                                Carefully
                            </div>

                            <!-- Layer 2 -->

                            <div class="slide-subtitle tp-caption tp-resizeme"
                                data-x="['right','right','right','right']" data-hoffset="['-18','-18','50','18']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['200','165', '280']"
                                data-fontsize="['50','20']" data-lineheight="['30']"
                                data-width="['1500','900','800']" data-height="none" data-whitespace="normal"
                                data-transform_idle="o:1;"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1200;e:Power1.easeInOut;"
                                data-transform_out="opacity:0;s:1000;s:1000;"
                                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                data-elementdelay="0.05">It is a long established fact
                                that a reader
                                will be distracted
                            </div>

                            <!-- Layer 3 -->

                        </li>

                        <!-- Slide 2 -->

                        <li data-transition="slotzoom-horizontal" data-slotamount="7" data-easein="Power3.easeInOut"
                            data-easeout="Power3.easeInOut" data-masterspeed="1000">

                            <!-- Main image -->

                            <img src="{{ asset('assets/images/carousel-2.jpg') }}" alt=""
                                data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                                class="rev-slidebg">

                            <!-- Layer 1 -->

                            <div class="slide-title tp-caption tp-resizeme" data-x="['right','right','right','right']"
                                data-hoffset="['-18','-18','50','18']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['120','100', '120']" data-fontsize="['50']"
                                data-lineheight="['80','75', '65']" data-width="['1500','900','800']"
                                data-height="none" data-whitespace="normal" data-transform_idle="o:1;"
                                data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500"
                                data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                                data-elementdelay="0.05">Exhibition center in boston
                            </div>


                            <!-- Layer 2 -->
                            <div class="slide-subtitle tp-caption tp-resizeme"
                                data-x="['right','right','right','right']" data-hoffset="['-18','-18','50','18']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['200','165', '280']"
                                data-fontsize="['50','30']" data-lineheight="['80','75', '65']"
                                data-width="['1500','900','800']" data-height="none" data-whitespace="normal"
                                data-transform_idle="o:1;"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1200;e:Power1.easeInOut;"
                                data-transform_out="opacity:0;s:1000;s:1000;"
                                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                data-elementdelay="0.05">Concert Hall is the
                                architecture of a new
                                generation, a building
                            </div>
                            <!-- Layer 3 -->

                        </li>

                        <!-- Slide 3 -->

                        <li data-transition="slotzoom-horizontal" data-slotamount="7" data-easein="Power3.easeInOut"
                            data-easeout="Power3.easeInOut" data-masterspeed="1000">

                            <!-- Main image-->

                            <img src="{{ asset('assets/images/carousel-3.jpg') }}" alt=""
                                data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                                class="rev-slidebg">

                            <!-- Layer 1 -->

                            <div class="slide-title tp-caption tp-resizeme" data-x="['right','right','right','right']"
                                data-hoffset="['-18','-18','50','18']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['120','100', '120']" data-fontsize="['50']"
                                data-lineheight="['80','75', '65']" data-width="['1500','900','800']"
                                data-height="none" data-whitespace="normal" data-transform_idle="o:1;"
                                data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500"
                                data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                                data-elementdelay="0.05">Modern hotel in london
                            </div>


                            <!-- Layer 2 -->
                            <div class="slide-subtitle tp-caption tp-resizeme"
                                data-x="['right','right','right','right']" data-hoffset="['-18','-18','50','18']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['200','165', '280']"
                                data-fontsize="['50','30']" data-lineheight="['80','75', '65']"
                                data-width="['1500','900','800']" data-height="none" data-whitespace="normal"
                                data-transform_idle="o:1;"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1200;e:Power1.easeInOut;"
                                data-transform_out="opacity:0;s:1000;s:1000;"
                                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                data-elementdelay="0.05">Concert Hall is the
                                architecture of a new
                                generation, a building
                            </div>

                            <!-- Layer 3 -->

                        </li>
                    </ul>
                </div>
            </div>

            <div class="container_">
                <div class="app_btn_header">
                    <a href="#" class="btn js-target-scroll"><span>Email:</span> info@hetoegypt.com <i
                            class="icon-next"></i></a>
                    <a href="#" class="btn js-target-scroll"><span>Phone:</span> <span>(+02) 27 74 25 93
                        </span><i class="icon-next"></i></a>
                </div>
            </div>
        </main>
    </div>
    <!-- / Layout -->

    <!-- satrt About -->
    <section id="About">
        <div class="big_title">About</div>
        <div class="container_">
            <!-- satrt line color section  -->
            <div class="all_line">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <!-- / line color section  -->

            <!-- satrt title section  -->
            <div class="sec_title">
                <div class="title">
                    <h3>
                        About<span>Heto</span>
                    </h3>
                </div>
            </div>
            <!-- / title section  -->

            <!-- satrt content  -->
            <div class="content">
                <div class="row justify-content-around">
                    <!-- satrt text section  -->
                    <div class="text_about left d-flex justify-content-center flex-column flex-wrap"
                        data-aos="fade-right">
                        <h5>Heliopolis Engineering and Trading company HETO</h5>
                        <p>Heliopolis Engineering and Trading company HETO is one of Egypt's leading MEP contractors,
                            importers and
                            distributors. HETO was founded by Eng Essam Morcos in 1980. The company offers a
                            comprehensive package of
                            Electro- mechanical services including complete Electrical, HVAC, Plumbing and Firefighting
                            supply and
                            installation as HETO is classified as class 3 in electromechanical in Egyptian Federation
                            for construction
                            and Building Contractors. At HETO we have a team of highly experienced engineers and highly
                            and highly
                            skilled technicians.</p>
                    </div>
                    <!-- / text section  -->

                    <!-- satrt img section  -->
                    <div class="img_About" data-aos="fade-left">
                        <img src="{{ asset('assets/images/about.jpg') }}" alt="">
                    </div>
                    <!-- / img section  -->
                </div>

            </div>
            <!-- / content  -->
        </div>
    </section>
    <!-- / About -->

    <!-- satrt section projects  -->
    <section id="Projects">
        <div class="big_title right_title">Projects</div>
        <div class="container_">
            <!-- satrt line color section  -->
            <div class="all_line">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <!-- / line color section  -->

            <!-- satrt title section  -->
            <div class="sec_title">
                <div class="title">
                    <h3>
                        projects
                    </h3>
                </div>
            </div>
            <!-- / title section  -->

            <!-- satrt content  -->
            <div class="content">
                <div class="row justify-content-between" data-aos="fade-up">
                    <!-- satrt card  -->
                    <div class="card d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-duration="600" data-aos-delay="500">

                        <div class="app"></div>
                        <h5>Residential</h5>
                        <div class="header_slider owl-carousel">
                            <div class="slider-item">
                                <img src="{{ asset('assets/images/project/project-2.jpg') }}" alt="">
                            </div>
                            <div class="slider-item">
                                <img src="{{ asset('assets/images/project/project-1.jpg') }}" alt="">
                            </div>
                            <div class="slider-item">
                                <img src="{{ asset('assets/images/project/project-2.jpg') }}" alt="">
                            </div>
                            <div class="slider-item">
                                <img src="{{ asset('assets/images/project/project-1.jpg') }}" alt="">
                            </div>
                        </div>
                        <p>We have a long and proud history givin emphasis to environment social and economic outcomes
                            to deliver
                            places that respond.</p>
                    </div>
                    <!-- / card  -->
                    <!-- satrt card  -->
                    <div class="card d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-duration="600" data-aos-delay="500">
                        <div class="after"></div>
                        <div class="before"></div>
                        <div class="app"></div>
                        <h5>COmmercial</h5>
                        <div class="header_slider owl-carousel">
                            <div class="slider-item">
                                <img src="{{ asset('assets/images/project/project-2.jpg') }}" alt="">
                            </div>
                            <div class="slider-item">
                                <img src="{{ asset('assets/images/project/project-1.jpg') }}" alt="">
                            </div>
                            <div class="slider-item">
                                <img src="{{ asset('assets/images/project/project-2.jpg') }}" alt="">
                            </div>
                            <div class="slider-item">
                                <img src="{{ asset('assets/images/project/project-1.jpg') }}" alt="">
                            </div>
                        </div>
                        <p>We have a long and proud history givin emphasis to environment social and economic outcomes
                            to deliver
                            places that respond.</p>
                    </div>
                    <!-- / card  -->
                </div>

            </div>
            <!-- / content  -->
        </div>
    </section>
    <!-- / section projects  -->

    <!-- start section clients  -->
    <section class="brand-logo wow bounceInUp animated">
        <div class="big_title">clients</div>
        <div class="container_">
            <!-- satrt line color section  -->
            <div class="all_line">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <!-- / line color section  -->

            <!-- satrt title section  -->
            <div class="sec_title">
                <div class="title">
                    <h3>
                        clients
                    </h3>
                </div>
            </div>
            <!-- / title section  -->

            <!-- satrt content  -->
            <div class="content">
                <div class="slider-items-products">
                    <div id="brand-logo-slider" class="product-flexslider hidden-buttons">
                        <div class="slider-items owl-carousel slider-width-col6">
                            <!-- Item -->
                            <div class="slider-item"><a href="#"><img
                                        src="{{ asset('assets/images/clients/clients-1.png') }}"
                                        alt="Image"></a>
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="slider-item"><a href="#"><img
                                        src="{{ asset('assets/images/clients/clients-2.png') }}"
                                        alt="Image"></a>
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="slider-item"><a href="#"><img
                                        src="{{ asset('assets/images/clients/clients-3.png') }}"
                                        alt="Image"></a>
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="slider-item"><a href="#"><img
                                        src="{{ asset('assets/images/clients/clients-4.png') }}"
                                        alt="Image"></a>
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="slider-item"><a href="#"><img
                                        src="{{ asset('assets/images/clients/clients-5.png') }}"
                                        alt="Image"></a>
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="slider-item"><a href="#"><img
                                        src="{{ asset('assets/images/clients/clients-6.png') }}"
                                        alt="Image"></a>
                            </div>
                            <!-- End Item -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- / content  -->

        </div>
    </section>
    <!-- / section projects  -->

    <!-- start section clients  -->
    <section id="portfolio">
        <!-- satrt line color section  -->
        <div class="container_">
            <div class="all_line">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <!-- satrt title section  -->
            <div class="sec_title">
                <div class="title">
                    <h3>
                        portfolio
                    </h3>
                </div>
            </div>
            <!-- / title section  -->
        </div>
        <!-- / line color section  -->

        <!-- satrt content  -->
        <div class="content">
            <div class="portfolio_slider owl-carousel">
                <div class="slider-item">
                    <img src="{{ asset('assets/images/portfolio/portfolio-1.jpg') }}" alt="">
                    <div class="container_" data-aos="fade-up">
                        <h3>Commercial Project</h3>
                        <a href="#">View Project <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="slider-item">
                    <img src="{{ asset('assets/images/portfolio/portfolio-2.jpg') }}" alt="">
                    <div class="container_" data-aos="fade-up">
                        <h3>Commercial Project</h3>
                        <a href="#">View Project <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="slider-item">
                    <img src="{{ asset('assets/images/portfolio/portfolio-1.jpg') }}" alt="">
                    <div class="container_" data-aos="fade-up">
                        <h3>Commercial Project</h3>
                        <a href="#">View Project <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="slider-item">
                    <img src="{{ asset('assets/images/portfolio/portfolio-2.jpg') }}" alt="">
                    <div class="container_" data-aos="fade-up">
                        <h3>Commercial Project</h3>
                        <a href="#">View Project <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- / content  -->
    </section>
    <!-- / section clients  -->

    <!-- satrt section Products  -->
    <section id="Products">
        <div class="big_title right_title">Products</div>
        <div class="container_">
            <!-- satrt line color section  -->
            <div class="all_line">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <!-- / line color section  -->

            <!-- satrt title section  -->
            <div class="sec_title">
                <div class="title">
                    <h3>
                        Products
                    </h3>
                </div>
                <div class="see_all">
                    <a href="#">See all Products</a>
                </div>
            </div>
            <!-- / title section  -->

            <!-- satrt content  -->
            <div class="content">
                <div class="row justify-content-between">
                    <!-- satrt card  -->
                    <a href="{{ asset('assets/pdf/book2.pdf') }}" target="_blank" class="card d-flex"
                        data-aos="fade-up" data-aos-offset="100" data-aos-duration="600" data-aos-delay="500">
                        <div class="img_card">
                            <img src="{{ asset('assets/images/Products/Products-1.jpg') }}" alt="Products">
                        </div>
                        <div class="content_card active">
                            <span>Catalog</span>
                            <h3>HITATCHI Global SideSmart General catalogue</h3>
                            <p>Variable Refrigerant Flow system Slim Modular outdoor units Air source heat pump type</p>
                            <h6><span>Model</span> SideSmart</h6>
                        </div>
                    </a>
                    <!-- / card  -->
                    <!-- satrt card  -->
                    <a href="{{ asset('assets/pdf/book2.pdf') }}" target="_blank" class="card d-flex"
                        data-aos="fade-up" data-aos-offset="100" data-aos-duration="900" data-aos-delay="700">
                        <div class="img_card">
                            <img src="{{ asset('assets/images/Products/Products-2.jpg') }}" alt="Products">
                        </div>
                        <div class="content_card">
                            <span>Catalog</span>
                            <h3>VARIABLE REFRIGERANT FLOW</h3>
                            <p>AIR SOURCE HEAT PUMP STANDARD AND HIGH EFFICIENCY (50 Hz)</p>
                            <h6><span>Model</span> FSNSE1 / FSNPE1 SERIES</h6>
                        </div>
                    </a>
                    <!-- / card  -->
                    <!-- satrt card  -->
                    <a href="{{ asset('assets/pdf/book2.pdf') }}" target="_blank" class="card d-flex"
                        data-aos="fade-up" data-aos-offset="100" data-aos-duration="600" data-aos-delay="500">
                        <div class="img_card">
                            <img src="{{ asset('assets/images/Products/Products-3.jpg') }}" alt="Products">
                        </div>
                        <div class="content_card">
                            <span>Catalog</span>
                            <h3>SET FREE mini</h3>
                            <p>VARIABLE REFRIGERANT FLOW AIR SOURCE HEAT PUMP TYPE</p>
                            <h6><span>Model</span> HNRQ SERIES</h6>
                        </div>
                    </a>
                    <!-- / card  -->
                    <a href="{{ asset('assets/pdf/book2.pdf') }}" target="_blank" class="card d-flex"
                        data-aos="fade-up" data-aos-offset="100" data-aos-duration="900" data-aos-delay="700">
                        <div class="img_card">
                            <img src="{{ asset('assets/images/Products/Products-4.jpg') }}" alt="Products">
                        </div>
                        <div class="content_card active">
                            <span>Catalog</span>
                            <h3>SET FREE mini</h3>
                            <p>VARIABLE REFRIGERANT FLOW AIR SOURCE HEAT PUMP TYPE</p>
                            <h6><span>Model</span> HNCQ SERIES</h6>
                        </div>
                    </a>
                    <!-- / card  -->
                </div>
            </div>
            <!-- / content  -->
        </div>
    </section>
    <!-- / section projects  -->

    <!-- start section break -->
    <section id="break">
        <div class="container_">
            <!-- satrt line color section  -->
            <div class="all_line">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <!-- / line color section  -->
        </div>
        <div class="content d-flex align-items-center justify-content-center">
            <div class="break_content d-flex align-items-center justify-content-center flex-column">
                <h2>Providing Personalized and High Quality Services</h2>
                <p>We can manage your dream building A small river
                    named Duden flows by their place</p>
                <button class="btn" data-aos="fade-in" data-aos-duration="500"
                    data-aos-delay="300">Request</button>
            </div>
        </div>
    </section>
    <!-- / section break -->

    <!-- Start footer -->
    @include('frontend.layouts.footer')
    <!-- End footer -->

    <!-- start javaScript -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>

    <!-- aos animation plugin -->
    <script src="{{ asset('assets/js/aos.min.js') }}"></script>

    <!-- SLIDER REVOLUTION -->
    <script src="{{ asset('assets/js/rev-slider/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('assets/js/rev-slider/jquery.themepunch.revolution.min.js') }}"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS   -->
    <script src="{{ asset('assets/js/rev-slider/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('assets/js/rev-slider/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/rev-slider/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('assets/js/rev-slider/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('assets/js/rev-slider/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('assets/js/rev-slider/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('assets/js/rev-slider/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('assets/js/rev-slider/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('assets/js/rev-slider/revolution.extension.video.min.js') }}"></script>
    <script src="{{ asset('assets/js/home.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <!-- End javaScript -->

</body>

</html>
