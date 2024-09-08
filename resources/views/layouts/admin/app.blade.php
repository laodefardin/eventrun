<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-layout="fluid" data-sidebar-theme="colored" data-sidebar-position="left"
    data-sidebar-behavior="sticky">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Bootstrap 5 Admin &amp; Dashboard Template">
    <meta name="author" content="Bootlab">

    <title>@yield('title')</title>

    <link rel="shortcut icon" href="https://appstack.bootlab.io/img/favicon.ico">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

    <link href="{{ asset('appstack/css/app.css') }}" rel="stylesheet">

    <!-- BEGIN SETTINGS -->
    <!-- Remove this after purchasing -->
    <script src="{{ asset('appstack/js/settings.js') }}"></script>
    <!-- END SETTINGS -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Q3ZYEKLQ68"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-Q3ZYEKLQ68');
    </script>
</head>

<body>
    <div class="wrapper">
     
        @include('layouts.admin.__sidebar')

        <div class="main">
            
            @include('layouts.admin.__nav')

            <main class="content">
                @yield('content')
            </main>

            @include('layouts.admin.__footer')
        </div>
    </div>

    <script src="{{ asset('appstack/js/app.js') }}"></script>
    @stack('myscript')

</body>

</html>
