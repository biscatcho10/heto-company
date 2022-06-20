<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield("title", title())</title>

    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="shortcut icon" type="image/png" href="styles/admin/images/icon/favicon.ico">
    <link rel="stylesheet" href="styles/admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/admin/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/admin/css/themify-icons.css">
    <link rel="stylesheet" href="styles/admin/css/metisMenu.css">
    <link rel="stylesheet" href="styles/admin/css/owl.carousel.min.css">
    <link rel="stylesheet" href="styles/admin/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="styles/admin/css/typography.css">
    <link rel="stylesheet" href="styles/admin/css/default-css.css">
    <link rel="stylesheet" href="styles/admin/css/styles.css">
    <link rel="stylesheet" href="styles/admin/css/responsive.css">
    <!-- modernizr css -->
    <script src="styles/admin/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<div class="login-area login-s2">
    <div class="container">
        <div class="login-box ptb--100">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="login-form-head">
                <h4>Sign In</h4>
            </div>
            <div class="login-form-body">
                    <div class="form-gp  {{app()->env == 'local' ? 'focused':""}}">
                        <label for="exampleInputEmail1">Email address</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                               name="email" value="{{app()->env == 'local' ? 'admin@admin.com' : old('email')}}" required
                               autocomplete="email" autofocus>
                        <i class="ti-email"></i>
                        <div class="text-danger"></div>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-gp {{app()->env == 'local' ? 'focused':""}}">
                        <label for="exampleInputPassword1">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                               name="password" value="{{app()->env == 'local' ? '1234' : ""}}" required
                               autocomplete="current-password">
                        <i class="ti-lock"></i>
                        <div class="text-danger"></div>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="row mb-4 rmber-area">
{{--                        <div class="col-8">--}}
{{--                            <div class="icheck-primary">--}}
{{--                                <input class="form-check-input" type="checkbox" name="remember"--}}
{{--                                       id="remember" {{ old('remember') ? 'checked' : (app()->env == 'local' ? 'checked' : '') }}>--}}
{{--                                <label for="remember" class="form-check-label">--}}
{{--                                    Remember Me--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="col-6">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input class="form-check-input" type="checkbox" name="remember"
                                       id="remember" {{ old('remember') ? 'checked' : (app()->env == 'local' ? 'checked' : '') }}>
                                <label for="remember" class="form-check-label">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="submit-btn-area">
                        <button id="form_submit" type="submit">Submit <i class="ti-arrow-right"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>

<!-- jquery latest version -->
<script src="styles/admin/js/vendor/jquery-2.2.4.min.js"></script>
<!-- bootstrap 4 js -->
<script src="styles/admin/js/popper.min.js"></script>
<script src="styles/admin/js/bootstrap.min.js"></script>
<script src="styles/admin/js/owl.carousel.min.js"></script>
<script src="styles/admin/js/metisMenu.min.js"></script>
<script src="styles/admin/js/jquery.slimscroll.min.js"></script>
<script src="styles/admin/js/jquery.slicknav.min.js"></script>

<!-- others plugins -->
<script src="styles/admin/js/plugins.js"></script>
<script src="styles/admin/js/scripts.js"></script>
</body>
</html>
