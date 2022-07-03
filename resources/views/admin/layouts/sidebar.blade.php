<div class="page-container">
<div class="sidebar-menu">
    <div class="sidebar-header">
        @php
            $settings = \App\Models\Setting::first();
        @endphp
        <div class="logo">
           <a href="{{ route('home') }}"><img src="{{ asset('heto/gallery/logo.png') }}" alt="logo"></a>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">
                    <li class="{{areActiveRoutes(['dashboard'])}}">
                        <a href="{{route("dashboard")}}" >
                            <i class="ti-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="{{areActiveRoutes(['services.*'])}}">
                        <a href="javascript:void(0)" aria-expanded="false">
                            <i class="fa fa-wrench" aria-hidden="true"></i>
                            <span>Services</span></a>
                        <ul class="collapse" style="height: 0px;">
                            <li>
                                <a href="{{route("project-types.index")}}">
                                    <i class="fa fa-wrench" aria-hidden="true"></i>
                                    <span>Services Type</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route("project-types.show",1)}}">
                                    <i class="fa fa-building" aria-hidden="true"></i>
                                    <span>Commercial Projects</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route("project-types.show",2)}}">
                                    <i class="fa fa-home" aria-hidden="true"></i>
                                    <span>Reseditail Projects</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route("project-types.show",3)}}">
                                    <i class="fa fa-industry" aria-hidden="true"></i>
                                    <span>Industry Projects</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="{{areActiveRoutes(['products.*'])}}">
                        <a href="{{route("products.index")}}" >
                            <i class="fas fa-shopping-bag"></i>
                            <span>Products</span>
                        </a>
                    </li>
                    <li class="{{areActiveRoutes(['careers.*'])}}">
                        <a href="{{route("careers.index")}}" >
                            <i class="fa fa-briefcase"></i>
                            <span>Careers</span>
                        </a>
                    </li>
                    <li class="{{areActiveRoutes(['categories.*'])}}">
                        <a href="{{route("categories.index")}}" >
                            <i class="fas fa-boxes"></i>
                            <span>Categories</span>
                        </a>
                    </li>
                    <li class="{{areActiveRoutes(['jobs.*'])}}">
                        <a href="{{route("jobs.index")}}" >
                            <i class="fa fa-list-alt"></i>
                            <span>Jobs</span>
                        </a>
                    </li>
                    <li class="{{areActiveRoutes(['clients.*'])}}">
                        <a href="{{route("clients.index")}}" >
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <span>Clients</span>
                        </a>
                    </li>
                    <li class="{{areActiveRoutes(['sections.*'])}}">
                        <a href="{{route("sections")}}" >
                            <i class="fas fa-bars"></i>
                            <span>Sections</span>
                        </a>
                    </li>
                    <li class="{{areActiveRoutes(['sliders.*'])}}">
                        <a href="{{route("sliders.index")}}" >
                            <i class="ti-gallery"></i>
                            <span>Sliders</span>
                        </a>
                    </li>
                    <li class="{{areActiveRoutes(['banners.*'])}}">
                        <a href="{{route("banners.index")}}" >
                            <i class="ti-gallery"></i>
                            <span>Banners</span>
                        </a>
                    </li>
                    <li class="{{areActiveRoutes(['settings.*'])}}">
                        <a href="{{route("settings.index")}}" >
                            <i class="fa fa-gear"></i>
                            <span>Settings</span>
                        </a>
                    </li>
                    {{-- <li class="{{areActiveRoutes(['about.*'])}}">
                        <a href="{{route("about.index")}}" >
                            <i class="fas fa-info-circle"></i>
                            <span>About</span>
                        </a>
                    </li> --}}
                    <li class="{{areActiveRoutes(['seos.*'])}}">
                        <a href="{{route("seos.index")}}" >
                            <i class="fas fa-search"></i>
                            <span>Seo</span>
                        </a>
                    </li>
                    <li class="{{areActiveRoutes(['contacts.*'])}}">
                        <a href="{{route("contacts.index")}}" >
                            <i class="ti-comment"></i>
                            <span>Contact Us</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
