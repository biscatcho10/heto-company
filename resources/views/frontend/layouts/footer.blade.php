<footer>
    <div class="backgrouend_footer">
    </div>
    <div class="container_">
        <div class="content">
            <!-- satrt link  -->
            <div class="linke">
                <ul class="d-flex align-items-center justify-content-center">
                    <li class="active">
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}">About</a>
                    </li>
                    <li>
                        <a href="{{ route('projects') }}">Projects</a>
                    </li>
                    <li>
                        <a href="{{ route('products') }}">products</a>
                    </li>
                    <li>
                        <a href="{{ route('careers') }}">careers</a>
                    </li>
                    <li>
                        <a href="{{ route('contact.us') }}">Contacts</a>
                    </li>
                </ul>
            </div>
            <!-- / link  -->
            <!-- paragraph -->
            <p class="paragraph">
                129 el Nozha St, Triumphe Sq. Heliopolis. Cairo, Egypt.<br>
                info@hetoegypt.com<br>
                (002) 02 27742593
            </p>
            <!-- paragraph -->

            <!-- satrt social -->
            <div class="social_footer d-flex justify-content-center align-items-center">
                <ul class="social-list d-flex">
                    <li><a href="{{ $settings['fb_link'] ?? '#' }}" class="fab fa-facebook-f"></a></li>
                    <li><a href="{{ $settings['in_link'] ?? '#' }}" class="fab fa-instagram"></a></li>
                    <li><a href="{{ $settings['wts_link'] ?? '#' }}" class="fab fa-whatsapp"></a></li>
                </ul>
            </div>
            <!-- satrt social -->

            <div class="end_footer">
                <!-- strat copyright  -->
                <div class="copyright d-flex align-items-end justify-content-between">
                    <!-- start logo  -->
                    <div class="logo_footer">
                        <img src="{{ asset('assets/images/logo-footer.png') }}" alt="">
                    </div>
                    <!-- / logo  -->
                    <p>© Copy Right 2022 HETO, All Right Reserved.</p>
                    <p><a href="https://www.creativetwinkles.com/" target="_blank">Powerd By Creative Twinkles</a>
                    </p>
                </div>
                <!-- / copyright  -->
            </div>
        </div>
    </div>
</footer>
