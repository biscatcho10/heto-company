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
        <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/aos.min.css') }}">

        <!-- start min style  -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
        <!-- / min style  -->

        <!-- start style products  -->
        <link rel="stylesheet" href="{{ asset('assets/css/products/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/products/responsive.css') }}" />
        <!-- start style products  -->

        <!-- layout-singl-page -->
        <link rel="stylesheet" href="{{ asset('assets/css/layout-singl-page.css') }}">

        <!-- End css -->
    </head>

<body>
    <!-- start Header -->
    <header id="top" class="header-home">
        <div class="vertical-panel-top">
            <a href="#top" class="logo_header">
                <img src="{{ asset('assets/svg/logo.svg') }}" alt="" />
            </a>
        </div>
        <div class="vertical-panel"></div>
        <div class="vertical-panel-content">
            <div class="vertical-panel-info">
                <div class="vertical-panel-title">Architecture buro</div>
                <div class="line"></div>
            </div>
            <ul class="social-list">
                <li><a href="" class="fab fa-facebook-f"></a></li>
                <li><a href="" class="fab fa-instagram"></a></li>
                <li><a href="" class="fab fa-whatsapp"></a></li>

            </ul>
        </div>
        <!-- Navigation Desctop -->
        @include('frontend.layouts.nav')
    </header>
    <!-- / Header -->

    <div class="layout">
        <main class="main">
            <img src="{{ asset('assets/images/carousel-1.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover"
                data-bgrepeat="no-repeat" class="rev-slidebg" />
        </main>
    </div>

    <!-- satrt section Products  -->
    <section id="Products" class="page__Products" style="background-color: transparent;">
        <div class="big_title left_title">products</div>
        <div class="container_">
            <!-- satrt content  -->
            <div class="content">
                <div class="row justify-content-between">
                    <!-- satrt card  -->
                    <a href="{{ asset('assets/pdf/book2.pdf') }}" target="_blank" class="card d-flex" data-aos="fade-up"
                        data-aos-duration="500" data-aos-delay="300">
                        <div class="img_card">
                            <img src="{{ asset('assets/images/Products/Products-1.jpg') }}" alt="Products">
                        </div>
                        <div class="content_card ">
                            <span>Catalog</span>
                            <h3>HITATCHI Global SideSmart General catalogue</h3>
                            <p>Variable Refrigerant Flow system Slim Modular outdoor units Air source heat pump type</p>
                            <h6><span>Model</span> SideSmart</h6>
                        </div>
                    </a>
                    <!-- / card  -->
                    <!-- satrt card  -->
                    <a href="{{ asset('assets/pdf/book2.pdf') }}" target="_blank" class="card d-flex" data-aos="fade-up"
                        data-aos-duration="600" data-aos-delay="400">
                        <div class="img_card">
                            <img src="{{ asset('assets/images/Products/Products-2.jpg') }}" alt="Products">
                        </div>
                        <div class="content_card ">
                            <span>Catalog</span>
                            <h3>HITATCHI Global SideSmart General catalogue</h3>
                            <p>Variable Refrigerant Flow system Slim Modular outdoor units Air source heat pump type</p>
                            <h6><span>Model</span> SideSmart</h6>
                        </div>
                    </a>
                    <!-- / card  -->
                    <!-- satrt card  -->
                    <a href="{{ asset('assets/pdf/book2.pdf') }}" target="_blank" class="card d-flex" data-aos="fade-up"
                        data-aos-duration="500" data-aos-delay="300">
                        <div class="img_card">
                            <img src="{{ asset('assets/images/Products/Products-3.jpg') }}" alt="Products">
                        </div>
                        <div class="content_card ">
                            <span>Catalog</span>
                            <h3>HITATCHI Global SideSmart General catalogue</h3>
                            <p>Variable Refrigerant Flow system Slim Modular outdoor units Air source heat pump type</p>
                            <h6><span>Model</span> SideSmart</h6>
                        </div>
                    </a>
                    <!-- / card  -->
                    <!-- satrt card  -->
                    <a href="{{ asset('assets/pdf/book2.pdf') }}" target="_blank" class="card d-flex" data-aos="fade-up"
                        data-aos-duration="600" data-aos-delay="400">
                        <div class="img_card">
                            <img src="{{ asset('assets/images/Products/Products-4.jpg') }}" alt="Products">
                        </div>
                        <div class="content_card ">
                            <span>Catalog</span>
                            <h3>HITATCHI Global SideSmart General catalogue</h3>
                            <p>Variable Refrigerant Flow system Slim Modular outdoor units Air source heat pump type</p>
                            <h6><span>Model</span> SideSmart</h6>
                        </div>
                    </a>
                    <!-- / card  -->
                    <!-- satrt card  -->
                    <a href="{{ asset('assets/pdf/book2.pdf') }}" target="_blank" class="card d-flex" data-aos="fade-up"
                        data-aos-duration="500" data-aos-delay="300">
                        <div class="img_card">
                            <img src="{{ asset('assets/images/Products/Products-1.jpg') }}" alt="Products">
                        </div>
                        <div class="content_card ">
                            <span>Catalog</span>
                            <h3>HITATCHI Global SideSmart General catalogue</h3>
                            <p>Variable Refrigerant Flow system Slim Modular outdoor units Air source heat pump type</p>
                            <h6><span>Model</span> SideSmart</h6>
                        </div>
                    </a>
                    <!-- / card  -->
                    <!-- satrt card  -->
                    <a href="{{ asset('assets/pdf/book2.pdf') }}" target="_blank" class="card d-flex" data-aos="fade-up"
                        data-aos-duration="600" data-aos-delay="400">
                        <div class="img_card">
                            <img src="{{ asset('assets/images/Products/Products-2.jpg') }}" alt="Products">
                        </div>
                        <div class="content_card ">
                            <span>Catalog</span>
                            <h3>HITATCHI Global SideSmart General catalogue</h3>
                            <p>Variable Refrigerant Flow system Slim Modular outdoor units Air source heat pump type</p>
                            <h6><span>Model</span> SideSmart</h6>
                        </div>
                    </a>
                    <!-- / card  -->

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
            <!-- / content  -->
        </div>
    </section>
    <!-- / section projects  -->

    <!-- start footer  -->
    @include('frontend.layouts.footer')
    <!-- / footer  -->

    <!-- start javaScript -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>


</body>

</html>
