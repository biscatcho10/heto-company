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

    <!-- start style about  -->
    <link rel="stylesheet" href="{{ asset('assets/css/about/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/about/responsive.css') }}" />
    <!-- start style about  -->

    <!-- layout-singl-page -->
    <link rel="stylesheet" href="{{ asset('assets/css/layout-singl-page.css') }}">
    <!-- End css -->

    <!-- seo data  -->
    {!! $settings['google_analysis'] !!}
    {!! $settings['facebook_pixel'] !!}
</head>

<body>
    <!-- start Header -->
    @include('frontend.layouts.header')
    <!-- / Header -->

    <div class="layout">
        <main class="main">
            <img src="{{ $banner ?? asset('assets/images/carousel-1.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover"
                data-bgrepeat="no-repeat" class="rev-slidebg" />
        </main>
    </div>

    <!-- satrt About -->
    <section id="contentAbout">
        <div class="big_title left_title">About</div>
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
                    <!-- start top section  -->
                    <div class="top_seciton d-flex">
                        <!-- start img sec  -->
                        <div class="img_top_sec left_width" data-aos="fade-in" data-aos-duration="1500"
                            data-aos-delay="400">
                            <img src="{{ asset('assets/svg/logo-page-about.svg') }}" alt="" />
                        </div>
                        <!-- End img sec  -->
                        <!-- start text top  -->
                        <div class="text_top_sec text_ right_width" data-aos="fade-up" data-aos-duration="700"
                            data-aos-delay="500">
                            <div class="app_text">
                                <h3 class="uppercase"> {{ $settings['who_we_are_title'] }} </h3>
                                {!! $settings['who_we_are_desc'] !!}
                            </div>
                        </div>
                        <!-- End text top  -->
                    </div>
                    <!-- End top section  -->
                    <!-- strat experince  -->
                    <div class="experience d-flex">
                        <!-- start left  -->
                        <div class="left_experience left_width">
                            <div class="app_num_experience" data-aos="fade-in" data-aos-duration="1500"
                                data-aos-delay="400">
                                <div class="text num_experience">
                                    <!-- number of years from 1980  -->
                                    {{ date_diff(date_create("0-01-1980"), date_create(date('Y')))->y }}

                                </div>
                            </div>
                            <h3 data-aos="fade-in" data-aos-duration="2000" data-aos-delay="500">Years<br />Experince
                            </h3>
                            <p data-aos="fade-in" data-aos-duration="2000" data-aos-offset="50" data-aos-delay="500"
                                class="text_experience text_">
                                Heliopolis Engineering and trading Heto / Electromechanical
                                contractor
                            </p>
                        </div>
                        <!-- End left  -->
                        <!-- start right  -->
                        <div class="text_experience_sec text_ right_width" data-aos="fade-up" data-aos-duration="700"
                            data-aos-delay="500">
                            <div class="app_text">
                                <h3 class="uppercase">
                                    {{ $settings['what_we_do_title'] }}
                                </h3>
                                <p>
                                    {!! $settings['what_we_do_desc'] !!}
                                </p>
                            </div>
                        </div>
                        <!-- End right  -->
                    </div>
                    <!-- End experince  -->
                    <!-- start card about  -->
                    <div class="card_page_about">
                        <!-- start singl card -->
                        <div class="singl_card" data-aos="fade-right">
                            <!-- start top card  -->
                            <div class="top_card d-flex">
                                <div class="icon">
                                    <svg class="soavl" version="1.1" id="Layer_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        x="0px" y="0px" viewBox="0 0 850.4 850.4"
                                        style="enable-background:new 0 0 850.4 850.4;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M170,547.4c0.8-4.4,1.5-8.8,2.4-13.2c4.2-19.9,14-36.9,28.3-51.2c34.1-34.2,68.3-68.3,102.5-102.4c6.4-6.4,11.5-6.3,18,0.1
                        c15.5,15.4,30.9,30.8,46.3,46.3c1.3,1.3,2.3,2.9,3.5,4.5c1.6-1.3,2.6-1.9,3.4-2.6c8.4-8.3,16.8-16.6,25-25.1c1.1-1.2,2-3.9,1.4-5.3
                        c-7.2-18.9-3.2-35.3,10.9-49.4c35-35,70-69.9,105-104.9c22.3-22.3,44.5-44.5,66.9-66.7c2.6-2.5,5.6-4.6,8.4-6.9c1.7,0,3.3,0,5,0
                        c2.6,2,5.4,3.8,7.7,6.1c23.8,23.6,47.5,47.3,71.2,71.1c2.3,2.3,4.1,5.2,6.1,7.8c0,1.7,0,3.3,0,5c-2.3,2.8-4.4,5.8-7,8.4
                        c-56.4,56.5-113,112.8-169.3,169.4c-15.1,15.2-31.9,21-52.5,12.8c-1-0.4-3,0-3.9,0.8c-9.5,9.3-18.9,18.7-28.6,28.4
                        c8.2,8.2,16,16,23.9,23.9c9.1,9.1,18.2,18.1,27.2,27.2c5.8,5.9,6,11.2,0.3,16.9c-35.8,35.8-71.5,71.8-107.8,107.2
                        c-17.1,16.6-38.3,25-62.1,26.3c-1.5,0.1-2.9,0.5-4.3,0.8c-0.7,0-1.3,0-2,0c-4.3-0.5-8.6-0.7-12.8-1.5c-28-5.7-56-11.6-84-17.1
                        c-6.5-1.3-9.8-4.7-11.1-11c-2.9-14.8-6.1-29.6-9.2-44.4c-3-14.6-6-29.3-8.9-43.9C170,558.7,170,553.1,170,547.4z M406.2,494.5
                        c-14.3,14.4-28.5,28.7-42.8,42.9c-5.5,5.5-10.9,11.3-17,16.1c-13.8,11-35.1,8.5-46.4-5c-12.4-14.8-11.2-34.1,3.1-48.6
                        c16.8-16.9,33.7-33.7,50.6-50.5c1.3-1.3,2.4-2.6,3-3.2c-15.2-15.4-30-30.5-45-45.7c-0.2,0.2-0.7,0.4-1,0.7
                        c-32.3,32.3-64.8,64.4-96.8,96.9c-18.8,19.1-27.2,42.3-22.7,68.9c4.2,25.1,10,49.9,15.3,74.8c0.3,1.5,2.6,3.2,4.3,3.6
                        c21.6,4.7,43.3,9.1,64.9,13.8c32,6.9,59-1.4,82-24.8c30-30.5,60.5-60.6,90.8-90.9c1.2-1.2,2.4-2.6,3.3-3.5
                        C436.5,524.9,421.6,509.9,406.2,494.5z M594.6,195.2c-47.6,47.7-95.1,95.4-142.6,143c7.7,7.7,15.7,15.7,24.5,24.6
                        c1.1-1.5,2.1-3.3,3.5-4.7c27.1-27.1,54.2-54.2,81.3-81.3c6.5-6.5,12.2-7.5,16.9-3c4.8,4.6,3.9,10.6-2.8,17.2
                        c-27.2,27.2-54.4,54.4-81.7,81.5c-1.3,1.3-3.1,1.9-4.1,2.5c9.2,9.2,17.1,17.2,25,25c47.3-47.4,94.8-95.1,142.2-142.6
                        C636.3,237,615.5,216.2,594.6,195.2z M414.7,417.2c-0.9,0.8-2,1.8-3.1,2.8c-31.3,31.3-62.7,62.6-94,93.9c-0.9,0.9-1.9,1.9-2.7,2.9
                        c-3.9,4.8-4.5,11.2-1.6,16.4c2.9,5.2,8.9,8.5,14.7,7c3.6-0.9,7.4-3.2,10.1-5.8c31.5-31.2,62.8-62.5,94.1-93.9c1-1,2-2.2,2.7-2.9
                        C428.2,430.8,421.7,424.2,414.7,417.2z M498.8,415.3c-7.7-7.7-15.7-15.7-23.4-23.3c-9.1,9.2-18.6,18.7-27.9,28.1
                        c2.8,2.9,5.7,6.4,9.1,9.3c8.4,7.2,20.6,7.3,28.8,0.1C490.4,425.1,494.6,419.8,498.8,415.3z M436.2,352.5c-1.9,1.9-3.7,4.1-5.8,6
                        c-18.4,15.9-17,31,1.6,46.4c0.1,0.1,0.3,0.2,0,0c9.6-9.6,19.1-19.1,28.3-28.4C452.6,368.9,444.6,360.9,436.2,352.5z" />
                                            <path
                                                d="M602.7,240.2c5.6,0.1,9.7,4.2,9.7,9.8c0,5.5-4.3,9.7-9.8,9.8c-5.7,0-10.1-4.5-9.9-10.2C592.7,244,596.9,240.1,602.7,240.2z
                        " />
                                        </g>
                                    </svg>
                                </div>
                                <div class="titl_card">
                                    {{ $settings['contracting_department_title'] }}
                                </div>
                            </div>
                            <!-- start text crad  -->
                            <p class="text_card">
                                {!! $settings['contracting_department_desc'] !!}
                            </p>
                        </div>
                        <!-- start singl card -->
                        <div class="singl_card" data-aos="fade-left">
                            <!-- start top card  -->
                            <div class="top_card d-flex">
                                <div class="icon">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 490.1 490.1" style="enable-background: new 0 0 490.1 490.1"
                                        xml:space="preserve">
                                        <g>
                                            <g>
                                                <path
                                                    d="M469.4,182.1h-38.2c-3.1-7.2-5.2-13.4-8.3-19.6l26.8-26.8c7.1-7.1,9.2-19.7,0-28.9l-64-64c-8.3-8.3-20.6-8.3-28.9,0
                      L330,69.6c-6.2-3.1-13.4-6.2-19.6-8.3V23.2c0-11.3-9.3-20.6-20.6-20.6h-89.7c-11.3,0-20.6,9.3-20.6,20.6v33
                      c-7.2,3.1-13.4,5.2-19.6,8.3l-26.8-26.8c-8.3-8.3-20.6-8.3-28.9,0l-64,64c-8.3,8.3-8.3,20.6,0,28.9L67,157.4
                      c-3.1,6.2-6.2,13.4-8.3,19.6H20.6C9.3,177,0,186.3,0,197.6v89.7c0,11.3,9.3,20.6,20.6,20.6h36.1c3.1,7.2,5.2,13.4,8.3,19.6
                      l-26.8,26.8c-8.3,8.3-8.3,20.6,0,28.9l64,64c11.8,11.8,24.8,4.1,28.9,0l26.8-26.8c6.2,3.1,13.4,6.2,19.6,8.3v38.2
                      c0,11.3,9.3,20.6,20.6,20.6h89.7c10.3,0,19.6-9.3,22.7-15.5v-38.2c7.2-3.1,13.4-5.2,19.6-8.3l26.8,26.8c8.3,7.2,21.7,7.2,28.9,0
                      l64-64c8.3-8.3,8.3-20.6,0-28.9L423,332.6c3.1-6.2,6.2-13.4,8.3-19.6h38.2c11.3,0,20.6-9.3,20.6-20.6v-89.7
                      C490,191.4,480.7,182.1,469.4,182.1z M444.6,269.8h-32c-9.3,0-17.5,6.2-19.6,15.5c-3.1,13.4-8.3,25.8-15.5,38.2
                      c-5.2,8.3-3.1,18.6,3.1,24.8l22.7,22.7l-35.1,35.1l-22.7-22.7c-7.2-6.2-16.5-7.2-24.8-3.1c-11.3,6.2-24.8,12.4-38.2,15.5
                      c-9.3,2.1-15.5,10.3-15.5,19.6v32h-49.5v-32c0-9.3-6.2-17.5-15.5-19.6c-13.4-3.1-25.8-8.3-38.2-15.5c-8.3-5.2-18.6-3.1-24.8,3.1
                      l-22.7,22.7L81.2,371l22.7-22.7c6.2-7.2,7.2-16.5,3.1-24.8c-6.2-11.3-12.4-24.8-15.5-38.2c-2.1-9.3-10.3-15.5-19.6-15.5h-32v-49.5
                      h32c9.3,0,17.5-6.2,19.6-15.5c3.1-13.4,8.3-25.8,15.5-38.2c5.2-8.3,3.1-18.6-3.1-24.8l-22.7-22.7L116.3,84l22.7,22.7
                      c7.2,6.2,16.5,7.2,24.8,3.1c11.3-6.2,24.8-12.4,38.2-15.5c9.3-2.1,15.5-10.3,15.5-19.6v-32H267v32c0,9.3,6.2,17.5,15.5,19.6
                      c13.4,3.1,25.8,8.3,38.2,15.5c8.3,5.2,18.6,3.1,24.8-3.1L368.2,84l35.1,35.1l-22.7,22.7c-6.2,7.2-7.2,16.5-3.1,24.8
                      c6.2,11.3,12.4,24.8,15.5,38.2c2.1,9.3,10.3,15.5,19.6,15.5h32V269.8z" />
                                                <path
                                                    d="M242.4,132.6C181.6,132.6,131,183.1,131,245c0,60.9,49.5,111.4,111.4,111.4S353.8,306.9,353.8,245
                      S304.3,132.6,242.4,132.6z M242.4,316.2c-39.2,0-71.2-32-71.2-71.2s32-71.2,71.2-71.2s71.2,32,71.2,71.2S281.6,316.2,242.4,316.2z
                      " />
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <div class="titl_card">
                                    {{ $settings['services_department_title'] }}
                                </div>
                            </div>
                            <!-- start text crad  -->
                            <p class="text_card">
                                {!! $settings['services_department_desc'] !!}
                            </p>
                        </div>
                    </div>
                    <!-- End card about  -->
                </div>
            </div>
            <!-- / content  -->
        </div>
    </section>
    <!-- / About -->

    <section id="founded">
        <div class="container_">
            <div class="row">
                <!-- start text section  -->
                <div class="left_section" data-aos="fade-up" data-aos-duration="800" data-aos-offset="50"
                    data-aos-delay="600">
                    <div class="icon">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 349.078 349.078" style="enable-background:new 0 0 349.078 349.078;"
                            xml:space="preserve">
                            <g>
                                <path
                                    d="M150.299,26.634v58.25c0,7.9-6.404,14.301-14.304,14.301c-28.186,0-43.518,28.909-45.643,85.966h45.643
                  c7.9,0,14.304,6.407,14.304,14.304v122.992c0,7.896-6.404,14.298-14.304,14.298H14.301C6.398,336.745,0,330.338,0,322.447V199.455
                  c0-27.352,2.754-52.452,8.183-74.611c5.568-22.721,14.115-42.587,25.396-59.048c11.608-16.917,26.128-30.192,43.16-39.44
                  C93.886,17.052,113.826,12.333,136,12.333C143.895,12.333,150.299,18.734,150.299,26.634z M334.773,99.186
                  c7.896,0,14.305-6.407,14.305-14.301v-58.25c0-7.9-6.408-14.301-14.305-14.301c-22.165,0-42.108,4.72-59.249,14.023
                  c-17.035,9.248-31.563,22.523-43.173,39.44c-11.277,16.461-19.824,36.328-25.393,59.054c-5.426,22.166-8.18,47.266-8.18,74.605
                  v122.992c0,7.896,6.406,14.298,14.304,14.298h121.69c7.896,0,14.299-6.407,14.299-14.298V199.455
                  c0-7.896-6.402-14.304-14.299-14.304h-44.992C291.873,128.095,306.981,99.186,334.773,99.186z" />
                            </g>
                        </svg>
                    </div>
                    <h4>{{ $settings['ceo_sec_title'] }}</h4>
                    <p>
                        {!! $settings['ceo_sec_description'] !!}
                    </p>
                </div>
                <!-- End text section  -->
                <!-- start img section  -->
                <div class="right_section" data-aos="fade-left" data-aos-duration="500" data-aos-offset="70"
                    data-aos-delay="300">
                    <div class="text_founded">
                        <img src="{{ asset('heto/sections/'. $settings['ceo_image'] ) }}" alt="">
                        <div class="name_founded">
                            {{ $settings['ceo_name'] }}<br>
                            <div>CEO/Owner/Founder</div>
                        </div>
                        <div class="Signature_founded">
                            {{ $settings['ceo_signature'] }}
                        </div>
                    </div>
                </div>
                <!-- End img section  -->
            </div>
        </div>
    </section>

    <!-- start footer  -->
    @include('frontend.layouts.footer')
    <!-- / footer  -->

    <!-- start javaScript -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        (function($) {
            // start move backgrouend page about
            window.onscroll = function() {
                // console.log($('.num_experience').style.background);
                let secAbout = $('#contentAbout')
                if (secAbout.offset().top <= window.scrollY) {
                    document.querySelector('.num_experience').style.backgroundPositionY =
                        `${(window.scrollY - secAbout.offset().top)/ 5 }px`
                }
            }
        })(jQuery);
    </script>
</body>

</html>
