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

    <!-- start style careers  -->
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/careers/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/careers/responsive.css') }}" />
    <!-- start style careers  -->

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
        <nav class="navbar-desctop visible-md visible-lg">
            <div class="container_">
                <a href="#top" class="logo_header">
                    <img src="{{ asset('assets/svg/logo.svg') }}" alt="" />
                </a>
                <div class="list_icon">
                    <i class="fas fa-bars"></i>
                </div>
                <div class="app_links">
                    <div class="ovrlay_div"></div>
                    <ul class="nav navbar-desctop-menu">
                        <li>
                            <a href="./index.html">Home</a>
                        </li>
                        <li>
                            <a href="./about.html">About</a>
                        </li>
                        <li>
                            <a href="./projects.html">Projects</a>
                        </li>
                        <li>
                            <a href="./products.html">products</a>
                        </li>
                        <li class="active">
                            <a href="./careers.html">careers</a>
                        </li>
                        <li>
                            <a href="./contact.html">Contacts</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- / Header -->

    <div class="layout">
        <main class="main">
            <img src="{{ asset('assets/images/carousel-1.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover"
                data-bgrepeat="no-repeat" class="rev-slidebg" />
        </main>
    </div>

    <!-- satrt carrers -->
    <section id="contentCarrers">
        <div class="big_title left_title">careers</div>
        <div class="container_">
            <!-- satrt content  -->
            <div class="content">
                <p class="" data-aos="fade-in" data-aos-duration="1800" data-aos-delay="400">
                    Drafts opens to a new page with the keyboard ready so you can type immediately. Go hands-free with
                    Dictation. Drafts lets you get things down before you forget without fiddling folders, naming, etc.
                    <br /><br />
                    Drafts is a launching-off point for text – use the actions to copy it, share it, or deep link into
                    other apps and services. Compose a tweet or message, create a file in Dropbox, send a task off to
                    Reminders – there are hooks into tons of your favorite apps, New entries go into the Inbox. Once
                    there, you can Tag them for organization, Flag them for importance, or Archive them for long-term
                    storage.
                    <br /><br />
                    Set up a text editing experience that’s perfect for you, with tons of interface adjustments like
                    custom fonts and control over spacing, line height, and margins.
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
                    <form action="" enctype="multipart/form-data">
                        <div class="form-group">
                            <input autocomplete="off" type="text" name="username" id="username">
                            <label for="username">name</label>
                        </div>
                        <div class="form-group">
                            <select class="wide" name="vacancy" id="slelct_vacancy">
                                <option>Vacancy</option>
                                <option value="one">one</option>
                                <option value="two">two</option>
                                <option value="three">three</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input autocomplete="off" type="text" name="PhoneNumber" id="PhoneNumber">
                            <label for="PhoneNumber">Phone number</label>
                        </div>
                        <div class="form-group">
                            <input autocomplete="off" type="email" name="email" id="email">
                            <label for="email">Your Email</label>
                        </div>
                        <label for="file_upload" class="btn_upload">Upload your resume<div class="">browse
                            </div></label>
                        <input id="file_upload" autocomplete="off" placeholder="" type="file" name="uploadFile"
                            id="">
                        <input type="submit" class="btn_form" value="SUBMIT">
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
        });
    </script>
</body>

</html>
