<nav class="navbar-desctop visible-md visible-lg ">
    <div class="container_">
        <a href="{{ route('home') }}" class="logo_header">
            <img src="{{ $settings['logo'] }}" alt="">
        </a>
        <div class="list_icon">
            <!-- <i class="fas fa-bars"></i> -->
            <div class="phone">
                <div class="menu">
                    <div class="options">
                        <div class="option active">
                            <a href="{{ route('home') }}">Home</a>
                        </div>
                        <div class="option">
                            <a href="{{ route('about') }}">About</a>
                        </div>
                        <div class="option">
                            <a href="{{ route('projects') }}">Projects</a>
                        </div>
                        <div class="option">
                            <a href="{{ route('products') }}">products</a>
                        </div>
                        <div class="option">
                            <a href="{{ route('careers') }}">careers</a>
                        </div>
                        <div class="option">
                            <a href="{{ route('contact.us') }}">Contacts</a>
                        </div>
                    </div>
                </div>
                <div class="menu-click-area"></div>
            </div>
            <div class="icon">
                <div class="menu-icon menu-icon-5">
                    <div class="bar bar-1"></div>
                    <div class="bar bar-2"></div>
                    <div class="bar bar-3"></div>
                </div>
            </div>


        </div>
        <div class="app_links">
            <div class="ovrlay_div"></div>
            <ul class="nav navbar-desctop-menu">
                <li class="{{ request()->routeIs('*home') ? 'active' : '' }}">
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li class="{{ request()->routeIs('*about') ? 'active' : '' }}">
                    <a href="{{ route('about') }}">About</a>
                </li>
                <li class="{{ request()->routeIs('*projects') ? 'active' : '' }}">
                    <a href="{{ route('projects') }}">Projects</a>
                </li>
                <li class="{{ request()->routeIs('*products') ? 'active' : '' }}">
                    <a href="{{ route('products') }}">products</a>
                </li>
                <li class="{{ request()->routeIs('*careers') ? 'active' : '' }}">
                    <a href="{{ route('careers') }}">careers</a>
                </li>
                <li class="{{ request()->routeIs('*contact.us') ? 'active' : '' }}">
                    <a href="{{ route('contact.us') }}">Contacts</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
