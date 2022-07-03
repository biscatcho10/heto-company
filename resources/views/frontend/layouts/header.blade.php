<header id="top" class="header-home">
    <div class="vertical-panel-top">
        <a href="{{ route('home') }}" class="logo_header">
            <img src="{{ intval($settings['logo']) != 0 ? asset('heto/gallery/' . get_file_name(intval($settings['logo']))) : asset($settings['logo']) }}" alt="" />
        </a>
    </div>
    <div class="vertical-panel"></div>
    <div class="vertical-panel-content">
        <div class="vertical-panel-info">
            <div class="vertical-panel-title">Architecture buro</div>
            <div class="line"></div>
        </div>
        <ul class="social-list">
            <li><a href="{{ $settings['fb_link'] ?? '#' }}" class="fab fa-facebook-f"></a></li>
            <li><a href="{{ $settings['in_link'] ?? '#' }}" class="fab fa-instagram"></a></li>
            <li><a href="{{ $settings['wts_link'] ?? '#' }}" class="fab fa-whatsapp"></a></li>
        </ul>
    </div>
    <!-- Navigation Desctop -->
    @include('frontend.layouts.nav')
</header>
