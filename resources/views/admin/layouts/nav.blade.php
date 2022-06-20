<div class="main-content">
    <!-- header area start -->
    <div class="header-area">
        <div class="row align-items-center">
            <!-- nav and search button -->
            <div class="col-md-6 col-sm-8 clearfix">
                <div class="nav-btn pull-left">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a target="_blank" href="{{url("/")}}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="{{route("logout")}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"   class="nav-link">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </div>
            </div>
        </div>
    </div>
    <!-- header area end -->
    <!-- page title area start -->
{{--    <div class="page-title-area">--}}
{{--        <div class="row align-items-center">--}}
{{--            <div class="col-sm-6">--}}
{{--                <div class="breadcrumbs-area clearfix">--}}
{{--                    <h4 class="page-title pull-left">Dashboard</h4>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- page title area end -->
