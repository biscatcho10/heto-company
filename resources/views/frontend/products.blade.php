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

    <!-- start style products  -->
    <link rel="stylesheet" href="{{ asset('assets/css/products/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/products/responsive.css') }}" />
    <!-- start style products  -->

    <!-- layout-singl-page -->
    <link rel="stylesheet" href="{{ asset('assets/css/layout-singl-page.css') }}">
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

    <!-- satrt section Products  -->
    <section id="Products" class="page__Products" style="background-color: transparent;">
        <div class="big_title left_title">products</div>
        <div class="container_">
            <!-- satrt content  -->
            <div class="content">
                <div class="row justify-content-between">
                    @forelse ($products as $product)
                        <!-- satrt card  -->
                        <a href="{{ $product->file }}" target="_blank" class="card d-flex"
                            data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
                            <div class="img_card">
                                <img src="{{ $product->image }}" alt="Products">
                            </div>
                            <div class="content_card ">
                                <span>Catalog</span>
                                <h3>{{ $product->name }}</h3>
                                <p> {{ $product->desc }} </p>
                                <h6><span>Model</span> {{ $product->model }}</h6>
                            </div>
                        </a>
                        <!-- / card  -->
                    @empty
                    @endforelse
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

                    {{-- {{ $products->links() }} --}}

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
