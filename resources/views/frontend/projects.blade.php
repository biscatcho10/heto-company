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
                        <ul id="categories" class="controls">
                            <li class="filter" data-filter="all">All</li>
                            <li class="filter" data-filter=".category-1">Commercial</li>
                            <li class="filter" data-filter=".category-2">Residnination</li>
                        </ul>
                        <div style="clear: both"></div>

                        <div id="myFilter" class="myFilter">

                            @forelse ($projects as $project)
                                <div class="singl_card mix {{ $project->project_type_id == 1 ? 'category-1' : 'category-2' }} " data-myorder="1">
                                    <div class="img_card">
                                        <a href="{{ route('show.project', $project) }}">
                                            <img src="{{ asset('heto/gallery/' . get_file_name($project->thumbnail_image)) }}" alt="">
                                        </a>
                                    </div>
                                    <p>{{ $project->date }}</p>
                                    <h3>
                                        {{ $project->name }}
                                    </h3>
                                    <a href="{{ route('show.project', $project) }}"> full INFO ></a>
                                </div>
                            @empty
                            @endforelse

                        </div>
                        <div style="clear:both"></div>
                        <div id="pagination" class="pagination">
                            {{-- <i class="fas fa-angle-left"></i>
                            <ul>
                                <li class="active">1</li>
                                <li>2</li>
                                <li>3</li>
                                <li>4</li>
                            </ul>
                            <i class="fas fa-angle-right"></i> --}}

                            {{-- {{ $projects->links() }} --}}

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
    <script src="https://cdn.shopify.com/s/files/1/0771/2161/t/3/assets/jPages.min.js?10688064064350896456"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        // $(function() {
        //     $('#myFilter').mixItUp();
        // });



        var pagination = $('.pagination');

        function setPagination(){
            pagination.jPages({
                containerID: 'myFilter',
                perPage: 6,
                startPage: 1,
                startRange: 1,
                midRange: 3,
                endRange: 1,
                first: false,
                last: false
            });
        }

        function destroyPagination() {
            pagination.jPages('destroy');
        };

        setPagination();

        $('#myFilter').mixItUp({
            callbacks: {
                onMixLoad: function(state,futureState ){
                    console.log('mix Loaded');
                    //setPagination();
                },
                onMixStart: function(state,futureState ){
                    destroyPagination();
                },
                onMixEnd: function(state, futureState){
                    console.log('mix End');
                     setPagination();
                }
            }
        });





    </script>
</body>

</html>
