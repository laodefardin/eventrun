<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NobleUI Responsive Bootstrap 4 Dashboard Template</title>
    <link rel="stylesheet" href="{{ asset('nobleui/vendors/core/core.css') }} ">
    <link rel="stylesheet" href="{{ asset('nobleui/fonts/feather-font/css/iconfont.css') }} ">
    <link rel="stylesheet" href="{{ asset('nobleui/vendors/flag-icon-css/css/flag-icon.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('nobleui/css/demo_1/style.css') }} ">
    <link rel="shortcut icon" href="{{ asset('nobleui/images/favicon.png') }} " />
</head>
<style>
    .auth-page {
        .auth-left-wrapper {
            width: 100%;
            height: 100%;
            background-image: url('nobleui/images/bg-login.png');
            background-size: cover;
            border-radius: 15px !important;
            -webkit-border-radius: 15px !important;
        }
    }
</style>

<body>
    <div class="main-wrapper">
        <div class="page-wrapper full-page">
            <div class="page-content d-flex align-items-center justify-content-center">

                <div class="row w-100 mx-0 auth-page">
                    <div class="col-md-8 col-xl-6 mx-auto">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-4 pr-md-0">
                                    <div class="auth-left-wrapper">

                                    </div>
                                </div>
                                <div class="col-md-8 pl-md-0">
                                    <div class="auth-form-wrapper px-md-5 py-md-5" style="min-height: 500px;">
                                        <div class="noble-ui-logo d-block mb-2 text-center">Event<span>Running</span>
                                        </div>
                                        <h5 class="text-muted font-weight-normal mb-4 text-center">Login</h5>
                                        @if (@session('warning'))
                                            <div class="alert alert-danger">
                                                <p>{{ Session::get('warning') }}</p>
                                            </div>
                                        @endif
                                        <form action="/prosesloginadmin" method="POST" autocomplete="off"
                                            class="forms-sample">
                                            @csrf
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Username Administrator</label>
                                                <input type="text" class="form-control" name="username"
                                                    id="username" placeholder="Username">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Google rechaptcha</label>
                                                <input type="password" class="form-control" name="password" id="password"
                                                    autocomplete="current-password" placeholder="Password">
                                            </div>

                                            <div class="mt-3">
                                                <button type="submit" class="btn btn-primary w-100">Masuk</button>
                                                <a href="{{ route('home') }}" id="btnBack"
                                                    class="btn btn-light w-100 mt-2">Ke Halaman Beranda</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="{{ asset('nobleui/vendors/core/core.js') }} "></script>
    <script src="{{ asset('nobleui/vendors/feather-icons/feather.min.js') }} "></script>
    <script src="{{ asset('nobleui/js/template.js') }} "></script>
</body>

</html>
