<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Bootstrap 5 Admin &amp; Dashboard Template">
    <meta name="author" content="Bootlab">

    <title>EventRun &amp; Dashboard</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('nobleui/images/favicon.ico') }} " />
    <link href="{{ asset('appstack/css/app.css') }}" rel="stylesheet">
</head>

<style>
    .card-cover {
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
    }
</style>

<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark landing-navbar">
        <div class="container">
            <a class="navbar-brand landing-brand text-white" href="">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    x="0px" y="0px" width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20"
                    xml:space="preserve">
                    <path d="M19.4,4.1l-9-4C10.1,0,9.9,0,9.6,0.1l-9,4C0.2,4.2,0,4.6,0,5s0.2,0.8,0.6,0.9l9,4C9.7,10,9.9,10,10,10s0.3,0,0.4-0.1l9-4
          C19.8,5.8,20,5.4,20,5S19.8,4.2,19.4,4.1z" />
                    <path d="M10,15c-0.1,0-0.3,0-0.4-0.1l-9-4c-0.5-0.2-0.7-0.8-0.5-1.3c0.2-0.5,0.8-0.7,1.3-0.5l8.6,3.8l8.6-3.8c0.5-0.2,1.1,0,1.3,0.5
          c0.2,0.5,0,1.1-0.5,1.3l-9,4C10.3,15,10.1,15,10,15z" />
                    <path d="M10,20c-0.1,0-0.3,0-0.4-0.1l-9-4c-0.5-0.2-0.7-0.8-0.5-1.3c0.2-0.5,0.8-0.7,1.3-0.5l8.6,3.8l8.6-3.8c0.5-0.2,1.1,0,1.3,0.5
          c0.2,0.5,0,1.1-0.5,1.3l-9,4C10.3,20,10.1,20,10,20z" />
                </svg>
                EventRun
            </a>

            <ul class="navbar-nav ms-auto">
                <li class="nav-item d-none d-md-inline-block">
                    <a class="nav-link active text-lg px-lg-3" href="/">Home</a>
                </li>
                <li class="nav-item d-none d-md-inline-block">
                    <a class="nav-link active text-lg px-lg-3" href="/events">List Event</a>
                </li>
                <li class="nav-item d-none d-md-inline-block">
                    <a class="nav-link active text-lg px-lg-3" href="#">Galery</a>
                </li>
                <li class="nav-item d-none d-md-inline-block">
                    <a class="nav-link active text-lg px-lg-3" href="#">FAQ</a>
                </li>
                <li class="nav-item d-none d-md-inline-block">
                    <a class="nav-link active text-lg px-lg-3" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <section class="landing-intro text-bg-dark pt-5 pt-lg-6 pb-5 pb-lg-7">
        <div class="landing-intro-content container">
            <div class="row align-items-center">
                <div class="col-lg-6 mx-auto">
                    <h1 class="my-4 text-white">Bersiaplah untuk Lari Terbaik dalam Hidupmu! <span
                            class="text-danger">Mari Berlari, Mari Menang!</span></h1>

                    <p class="text-lg text-white-50">Ayo bergabung dalam event lari paling seru tahun ini dan jadilah
                        bagian dari komunitas yang penuh semangat dan energi positif!</p>

                    <div class="my-4">
                        <a href="#events" class="btn btn-primary btn-lg btn-pill">List Event</a>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-flex mx-auto text-center">
                    <div class="pb-3">
                        <img src="{{ asset('assets/img/pngwing.com (1).png') }}" style="width:490px;"
                            alt="Dark/Light Bootstrap Admin Template" class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-6 bg-white">
        <div class="container">
            <div class="mb-5 text-center">
                <p class="text-muted fs-lg">"Apakah kamu siap menantang dirimu sendiri? Event lari ini bukan hanya
                    tentang kecepatan, tapi juga tentang semangat, kebersamaan, dan mencapai garis finish bersama!
                    Berlari bersama teman, keluarga, atau solo - semuanya dipersilakan! Dengan rute yang mempesona dan
                    suasana yang menyenangkan, acara ini akan menjadi momen yang tak terlupakan."</p>
            </div>
            <div class="mb-5 text-center">
                <h2 class="h1">Highlight Event:</h2>
            </div>

            <div class="row text-start">
                <div class="col-12 col-md-4">
                    <div class="d-flex align-items-start py-3">
                        <div class="landing-feature">
                            <i data-lucide="sliders"></i>
                        </div>
                        <div class="flex-grow-1">
                            <h4 class="mt-0">Kategori untuk Semua: </h4>
                            <p class="fs-lg">Pilih dari berbagai kategori mulai dari 5K, 10K, hingga Half Marathon.
                                Semua usia dan tingkat kemampuan dipersilakan!</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="d-flex align-items-start py-3">
                        <div class="landing-feature">
                            <i data-lucide="smartphone"></i>
                        </div>
                        <div class="flex-grow-1">
                            <h4 class="mt-0">Hadiah Menarik: </h4>
                            <p class="fs-lg">Raih medali eksklusif, merchandise, dan hadiah menarik lainnya!</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="d-flex align-items-start py-3">
                        <div class="landing-feature">
                            <i data-lucide="mail"></i>
                        </div>
                        <div class="flex-grow-1">
                            <h4 class="mt-0">Suasana Meriah: </h4>
                            <p class="fs-lg">Nikmati hiburan langsung, makanan lezat, dan spot foto menarik di
                                sepanjang jalur.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="d-flex align-items-start py-3">

                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="d-flex align-items-start py-3">
                        <div class="landing-feature">
                            <i data-lucide="chrome"></i>
                        </div>
                        <div class="flex-grow-1">
                            <h4 class="mt-0">Aman dan Terorganisir:</h4>
                            <p class="fs-lg">Dengan dukungan medis dan titik penyegaran di sepanjang jalur, fokusmu
                                hanya pada lari!</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="d-flex align-items-start py-3">

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section py-6" id="events">
        <div class="container position-relative z-3">
            <div class="row">
                <div class="col-md-12 mx-auto text-center">
                    <div class="row">
                        <div class="mb-4">
                            <h2 class="h1 mb-3">List Events</h2>
                            <p class="text-muted fs-lg">
                                Jangan lewatkan kesempatan untuk merasakan euforia berlari bersama ratusan peserta
                                lainnya! Daftar sekarang dan dapatkan diskon khusus untuk pendaftaran awal.
                                Kencangkan tali sepatumu, rasakan angin di wajahmu, dan berlari menuju kemenangan!
                            </p>
                        </div>
                        <div class="container" id="custom-cards">
                            <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
                                @foreach ($events as $event)
                                    @php
                                        $path = Storage::url('upload/events/' . $event->img);
                                    @endphp
                                    <div class="col">
                                        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
                                            style="background-image: url('{{ url($path) }}');">
                                            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                                                <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold text-white">
                                                    {{ $event->name }}</h3>
                                                <p>{{ $event->description }}</p>
                                                <ul class="d-flex list-unstyled mt-auto">
                                                    <li class="me-auto">
                                                        <div class="btn-group">
                                                            <a href="{{ route('events.eventshow', $event->slug) }}"
                                                                class="btn btn-sm btn-primary">
                                                                Join Event</a>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex align-items-center">
                                                        <svg class="bi me-2" width="1em" height="1em">
                                                            <use xlink:href="#calendar3" />
                                                        </svg>
                                                        <small>{{ $event->date }}</small>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            {{ $events->links('vendor.pagination.bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-5 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="text-white-50 mt-4 text-center mb-0">
                        © 2024 EventRun
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('appstack/js/app.js') }}"></script>

</body>

</html>
