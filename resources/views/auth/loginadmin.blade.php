<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Admin</title>
    <link rel="stylesheet" href="{{ asset('nobleui/vendors/core/core.css') }} ">
    <link rel="stylesheet" href="{{ asset('nobleui/fonts/feather-font/css/iconfont.css') }} ">
    <link rel="stylesheet" href="{{ asset('nobleui/vendors/flag-icon-css/css/flag-icon.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('nobleui/css/demo_1/style.css') }} ">
    <link rel="shortcut icon" href="{{ asset('nobleui/images/favicon.ico') }} " />
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<style>
    .auth-page {
        .auth-left-wrapper {
            width: 100%;
            height: 100%;
            background-image: url('nobleui/images/bg-login2.jpeg');
            background-size: cover;
            border-radius: 15px !important;
            -webkit-border-radius: 15px !important;
        }
    }

    @media (max-width: 767.98px) {
        body {
            background-color: #fff;
        }
    }

    @media (max-width: 991px) {
        .page-wrapper {
            margin-top: 60px;
        }
    }

    .btn-primary,
    .swal2-modal .swal2-actions button.swal2-confirm,
    .wizard>.actions a,
    .wizard>.actions a:hover {
        color: #fff;
        background-color: #2b64c1;
        border-color: #2b64c1;
    }

    '
 .btn-primary:hover,
    .swal2-modal .swal2-actions button.swal2-confirm:hover,
    .wizard>.actions a:hover {
        color: #fff;
        background-color: #1e51a2;
        border-color: #1e51a2;
    }

    .noble-ui-logo span {
        color: #2b64c1;
        font-weight: 300;
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
                                    <div class="auth-form-wrapper px-4 py-5" style="min-height: 500px;">
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
                                                    id="username" placeholder="Username" value="{{ old('username') }}">
                                                @if ($errors->has('username'))
                                                    <span class="text-danger">{{ $errors->first('username') }}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" class="form-control" name="password"
                                                    id="password" autocomplete="current-password"
                                                    placeholder="Password">
                                                @if ($errors->has('password'))
                                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                                @endif
                                            </div>

                                            <div class="form-group">
                                                {{-- <label for="exampleInputPassword1">Google rechaptcha</label> --}}
                                                <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}">
                                                </div>
                                                @if ($errors->has('g-recaptcha-response'))
                                                    <span
                                                        class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                                                @endif
                                            </div>


                                            <div class="mt-3">
                                                <button type="submit"
                                                    class="btn btn-primary w-100 p-lg-3">Masuk</button>
                                                <a href="{{ route('home') }}" id="btnBack"
                                                    class="btn btn-light w-100 mt-2 p-sm-3">Ke Halaman Beranda</a>
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
