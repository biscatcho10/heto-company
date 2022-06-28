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

    <!-- start style careers  -->
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/careers/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/careers/responsive.css') }}" />
    <!-- start style careers  -->

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
            <img src="{{ $banner ?? asset('assets/images/carousel-1.jpg') }}" alt=""
                data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" />
        </main>
    </div>

    <!-- satrt carrers -->
    <section id="contentCarrers">
        <div class="big_title left_title">careers</div>
        <div class="container_">
            <!-- satrt content  -->
            <div class="content">
                <p class="" data-aos="fade-in" data-aos-duration="1800" data-aos-delay="400">
                    {!! $settings['cr_desc'] !!}
                </p>
            </div>
            <!-- / content  -->
        </div>
    </section>
    <!-- / carrers -->

    <!-- start form carrers  -->
    <section id="form_carrers">
        <div class="container_">
            <!-- satrt content  -->
            <div class="content" data-aos="fade-up">
                <div class="row">
                    <form action="{{ route('save.careers') }}" method="POST" enctype="multipart/form-data"
                        id="career-form">
                        @csrf
                        <div class="form-group">
                            <input autocomplete="off" type="text" name="full_name" id="full_name" required>
                            <label for="full_name">Full name</label>
                        </div>
                        <div class="form-group">
                            <select class="wide" name="job_id" id="slelct_vacancy" required>
                                <option>Vacancy</option>
                                @foreach ($jobs as $id => $job)
                                    <option value="{{ $id }}">{{ $job }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <input autocomplete="off" type="text" name="phone" id="phone" required>
                            <label for="phone">Phone number</label>
                        </div>
                        <div class="form-group">
                            <input autocomplete="off" type="email" name="email" id="email" required>
                            <label for="email">Your Email</label>
                        </div>
                        <label for="file_upload" class="btn_upload">
                            Upload your resume <div class="">browse</div>
                        </label>
                        <input id="file_upload" autocomplete="off" placeholder="" type="file" name="upload_id"
                            required>


                        <button type="submit" class="btn_form">SUBMIT</button>
                    </form>
                </div>
            </div>
            <!-- / content  -->
        </div>
    </section>
    <!-- End form carrers  -->

    <!-- start footer  -->
    @include('frontend.layouts.footer')
    <!-- / footer  -->

    <!-- start javaScript -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('select').niceSelect();

            // parsely validation
            $(document).ready(function() {
                $('#career-form').parsley();
            });
        });
    </script>
</body>

</html>
