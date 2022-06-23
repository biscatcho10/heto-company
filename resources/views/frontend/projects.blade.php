<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ $settings['favicon'] }}" />
    <title>HETO Dedign</title>

    <!-- start css -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/aos.min.css') }}">

    <!-- start min style  -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
    <!-- / min style  -->

    <!-- start style Services  -->
    <link rel="stylesheet" href="{{ asset('assets/css/projects/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/projects/responsive.css') }}" />
    <!-- start style Services  -->

    <!-- layout-singl-page -->
    <link rel="stylesheet" href="{{ asset('assets/css/layout-singl-page.css') }}">

    <!-- End css -->
</head>

<body>
    <!-- start Header -->
    @include('frontend.layouts.header')
    <!-- / Header -->

    <div class="layout">
        <main class="main">
            <img src="{{ asset('assets/images/carousel-1.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover"
                data-bgrepeat="no-repeat" class="rev-slidebg" />
        </main>
    </div>

    <!-- satrt Services -->
    <section id="contentServices">
        <div class="backgrouend_left">
            <img src="{{ asset('assets/images/page-services/filter-left.jpg') }}" alt="">
        </div>
        <div class="backgrouend_right">
            <img src="{{ asset('assets/images/page-services/backgrouend-filter.jpg') }}" alt="">
        </div>
        <div class="big_title left_title">projects</div>
        <div class="container_">
            <!-- satrt line color section  -->
            <div class="all_line">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <!-- / line color section  -->

            <!-- satrt content  -->
            <div class="content">
                <div class="row justify-content-around">
                    <div class="filer-img">
                        <ul class="controls">
                            <li class="filter" data-filter="all">All</li>
                            <li class="filter" data-filter=".category-1">Commercial</li>
                            <li class="filter" data-filter=".category-2">Residnination</li>
                        </ul>
                        <div id="myFilter" class="myFilter">
                            <div class="singl_card mix category-1" data-myorder="1">
                                <div class="img_card">
                                    <a href="./mini-services.html">
                                        <img src="{{ asset('assets/images/page-services/img-1.jpg') }}" alt="">
                                    </a>
                                </div>
                                <p>20 Hours Ago .</p>
                                <h3>
                                    Discover The Amazing Inside Deco ACarte Museum In Slovakia
                                </h3>
                                <a href="./mini-services.html">
                                    full INFO >
                                </a>
                            </div>
                            <div class="singl_card mix category-2" data-myorder="1">
                                <div class="img_card">
                                    <a href="./mini-services.html">
                                        <img src="{{ asset('assets/images/page-services/img-2.jpg') }}" alt="">
                                    </a>
                                </div>
                                <p>Aug 30,2017 .</p>
                                <h3>
                                    Top 10 ArchitectureBuildings Unique In Shanghai, China
                                </h3>
                                <a href="./mini-services.html">
                                    full INFO >
                                </a>
                            </div>
                            <div class="singl_card mix category-2" data-myorder="1">
                                <div class="img_card">
                                    <a href="./mini-services.html">
                                        <img src="{{ asset('assets/images/page-services/img-3.jpg') }}" alt="">
                                    </a>
                                </div>
                                <p>Aug 25,2017 .</p>
                                <h3>
                                    Morroco Shopping Center by KONS
                                </h3>
                                <a href="./mini-services.html">
                                    full INFO >
                                </a>
                            </div>
                            <div class="singl_card mix category-1" data-myorder="1">
                                <div class="img_card">
                                    <a href="./mini-services.html">
                                        <img src="{{ asset('assets/images/page-services/img-4.jpg') }}" alt="">
                                    </a>
                                </div>
                                <p>Jul 18,2017 .</p>
                                <h3>
                                    Italy Winner AMMA Award 2017
                                </h3>
                                <a href="./mini-services.html">
                                    full INFO >
                                </a>
                            </div>
                            <div class="singl_card mix category-2" data-myorder="1">
                                <div class="img_card">
                                    <a href="./mini-services.html">
                                        <img src="{{ asset('assets/images/page-services/img-5.jpg') }}" alt="">
                                    </a>
                                </div>
                                <p>Jul 5,2017 .</p>
                                <h3>
                                    Discover Wood’s Struture From NAH Park, Germany
                                </h3>
                                <a href="./mini-services.html">
                                    full INFO >
                                </a>
                            </div>
                            <div class="singl_card mix category-2" data-myorder="1">
                                <div class="img_card">
                                    <a href="./mini-services.html">
                                        <img src="{{ asset('assets/images/page-services/img-6.jpg') }}" alt="">
                                    </a>
                                </div>
                                <p>Jun 23,2017 .</p>
                                <h3>
                                    New Construction Technology
                                </h3>
                                <a href="./mini-services.html">
                                    full INFO >
                                </a>
                            </div>
                            <div class="singl_card mix category-1" data-myorder="1">
                                <div class="img_card">
                                    <a href="./mini-services.html">
                                        <img src="{{ asset('assets/images/page-services/img-7.jpg') }}" alt="">
                                    </a>
                                </div>
                                <p>Jun 20,2017 .</p>
                                <h3>
                                    New Policy For Protect Workers InContrusction Industrial
                                </h3>
                                <a href="./mini-services.html">
                                    full INFO >
                                </a>
                            </div>
                            <div class="singl_card mix category-2" data-myorder="1">
                                <div class="img_card">
                                    <a href="./mini-services.html">
                                        <img src="{{ asset('assets/images/page-services/img-8.jpg') }}" alt="">
                                    </a>
                                </div>
                                <p>Jun 7,2017 .</p>
                                <h3>
                                    The Amazing Of Roof With Wood’sStructure By Ron Architect
                                </h3>
                                <a href="./mini-services.html">
                                    full INFO >
                                </a>
                            </div>
                            <div class="singl_card mix category-1" data-myorder="1">
                                <div class="img_card">
                                    <a href="./mini-services.html">
                                        <img src="{{ asset('assets/images/page-services/img-9.jpg') }}" alt="">
                                    </a>
                                </div>
                                <p>Jun 2,2017 .</p>
                                <h3>
                                    Launch Project UK Railway Roar
                                </h3>
                                <a href="./mini-services.html">
                                    full INFO >
                                </a>
                            </div>
                        </div>
                        <div class="Pagination">
                            <i class="fas fa-angle-left"></i>
                            <ul>
                                <li class="active">1</li>
                                <li>2</li>
                                <li>3</li>
                                <li>4</li>
                            </ul>
                            <i class="fas fa-angle-right"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / content  -->
        </div>
    </section>
    <!-- / Services -->

    <!-- start footer  -->
    @include('frontend.layouts.footer')
    <!-- / footer  -->

    <!-- start javaScript -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.min.js') }}"></script>
    <script src="{{ asset('assets/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        $(function() {
            $('#myFilter').mixItUp();
        });
    </script>
</body>

</html>
