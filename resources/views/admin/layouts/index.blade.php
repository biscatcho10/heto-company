@include('admin.layouts.header')
@include('admin.layouts.sidebar')
@include('admin.layouts.nav')
<div class="main-content-inner mt-2 ">
    @include("admin.errors.fetchErrors")
    @include("admin.success.success")
    @yield('content')
</div>
@include('admin.layouts.footer')
