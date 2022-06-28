<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ asset('assets/images/logo.png') }}" />
    <title>HETO Dedign</title>

    <!-- start css -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/aos.min.css') }}" />

    <!-- start min style  -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
    <!-- / min style  -->

    <!-- start style Services  -->
    <link rel="stylesheet" href="{{ asset('assets/css/mini-services/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/mini-services/responsive.css') }}" />
    <!-- start style Services  -->

    <!-- layout-singl-page -->
    <link rel="stylesheet" href="{{ asset('assets/css/layout-singl-page.css') }}" />
    <!-- End css -->

   @include('frontend.layouts.seo')
</head>

<body>
    <!-- start Header -->
    @include('frontend.layouts.header')
    <!-- / Header -->

    <div class="layout">
        <main class="main">
            <img src="{{ $banner ?? asset('assets/images/carousel-1.jpg') }}" alt="" data-bgposition="center center"
                data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" />
        </main>
    </div>

    <!-- satrt Services -->
    <section id="mini_Services">
        <div class="backgrouend_left">
            <img src="{{ asset('assets/images/page-services/filter-left.jpg') }}" alt="" />
        </div>
        <div class="backgrouend_right">
            <img src="{{ asset('assets/images/page-services/backgrouend-filter.jpg') }}" alt="" />
        </div>
        <div class="big_title left_title">Services</div>
        <div class="container_">
            <!-- satrt line color section  -->
            <div class="all_line">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <!-- / line color section  -->
            <div class="location_page">
                <a href="{{ route('home') }}"><span>Home</span><b>/</b></a>
                <a href="{{ route('products') }}"><span> Works</span><b>/</b></a>
                <span class="active">{{ $project->name }}</span>
            </div>
            <!-- satrt content  -->
            <div class="content">
                <div class="row justify-content-around">
                    <!-- start text  -->
                    <div class="my_text">
                        <!-- start singl text   -->
                        <div class="text_" data-aos="fade-left">
                            <h3>{{ $project->title }}</h3>
                            <p>
                                {{ $project->description }}
                            </p>
                        </div>
                        <!-- start singl text   -->
                        <div class="text_" data-aos="fade-left">
                            <h3>{{ $project->title2 }}</h3>
                            <p>
                                {{ $project->description2 }}
                            </p>
                        </div>
                    </div>
                    <!-- End text  -->
                    <!-- start owl carousel -->
                    <div class="Services_slider owl-carousel" data-aos="fade-up">
                        @forelse ($gallery as $photo)
                            <div class="slider-item">
                                <img src="{{ asset('heto/gallery/' . get_file_name($photo)) }}" alt="" />
                            </div>
                        @empty
                        @endforelse
                    </div>
                    <!-- End owl carousel -->
                </div>
            </div>
            <!-- / content  -->
        </div>
    </section>
    <!-- / Services -->

    <!-- start sec carousel card  -->
    <section id="carousel_card">
        <div class="container_ location_item">
            @isset($next_project)
                <a href="{{ route('show.project', $next_project->id) }}">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <polygon
                            points="3.828 9 9.899 2.929 8.485 1.515 0 10 .707 10.707 8.485 18.485 9.899 17.071 3.828 11 20 11 20 9 3.828 9">
                        </polygon>
                    </svg>
                    <span>{{ $next_project->name }}</span>
                </a>
            @endisset

            @isset($prev_project)
                <a href="{{ route('show.project', $prev_project->id) }}">
                    <svg class="angl_right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M16.172 9l-6.071-6.071 1.414-1.414L20 10l-.707.707-7.778 7.778-1.414-1.414L16.172 11H0V9z">
                        </path>
                    </svg>
                    <span>{{ $prev_project->name }}</span>
                </a>
            @endisset
        </div>
        <!-- start owl carousel -->
        <div class="card_slider owl-carousel" data-aos="fade-up">
            @forelse ($different_projects as $proj)
                <div class="slider-item">
                    <img src="{{ asset('heto/gallery/' . get_file_name($proj->thumbnail_image)) }}" alt="" />
                    <div class="text_card">
                        <p>{{ $proj->date }}</p>
                        <h3>{{ $proj->name }}</h3>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
        <!-- End owl carousel -->
    </section>
    <!-- End sec carousel card  -->

    <!-- start footer  -->
    @include('frontend.layouts.footer')
    <!-- / footer  -->

    <!-- start javaScript -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        (function($) {
            // start logo carousel
            $(".Services_slider").owlCarousel({
                loop: true,
                autoplay: true,
                margin: 0,
                animateIn: "fadeIn",
                animateOut: "fadeOut",
                autoplayTimeout: 5000,
                slideSpeed: 5000,
                nav: true,
                autoplayHoverPause: true,
                items: 1,
                navText: [
                    '<svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><polygon points="3.828 9 9.899 2.929 8.485 1.515 0 10 .707 10.707 8.485 18.485 9.899 17.071 3.828 11 20 11 20 9 3.828 9"/></svg>',
                    '<svg class="angl_right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M16.172 9l-6.071-6.071 1.414-1.414L20 10l-.707.707-7.778 7.778-1.414-1.414L16.172 11H0V9z"/></svg>',
                ],
                responsive: {
                    0: {
                        items: 1,
                    },
                    66600: {
                        items: 1,
                    },
                    100000: {
                        items: 1,
                    },
                },
            });
            // start owl card
            $(".card_slider").owlCarousel({
                autoplay: true,
                loop: true,
                margin: 0,
                dots: false,
                slideTransition: "linear",
                autoplayHoverPause: true,
                navText: [
                    '<svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><polygon points="3.828 9 9.899 2.929 8.485 1.515 0 10 .707 10.707 8.485 18.485 9.899 17.071 3.828 11 20 11 20 9 3.828 9"/></svg>',
                    '<svg class="angl_right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M16.172 9l-6.071-6.071 1.414-1.414L20 10l-.707.707-7.778 7.778-1.414-1.414L16.172 11H0V9z"/></svg>',
                ],
                responsive: {
                    0: {
                        items: 1,
                    },
                    500: {
                        items: 2,
                    },
                    768: {
                        items: 3,
                    },
                    1024: {
                        items: 4,
                    },
                },
            });
            // $(".card_slider .owl-nav").addClass("container_");
        })(jQuery);
    </script>
</body>

</html>
