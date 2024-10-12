<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Join Event Running</title>
    <meta property="og:title" content="MILO Activ Indonesia Race">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('appstack/css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/img/run white.png') }} " />
</head>

<style>
    .counter {
        height: 74px;
        width: 100% !important;
        color: #ffffff;
        padding: 5px;
    }

    .timer {
        display: flex;
        text-align: center;
        justify-content: center;
    }

    .days,
    .hours,
    .minutes,
    .seconds,
    .tt {
        font-size: 22pt;
        line-height: 1;
    }
</style>
<style>
    html {
        scroll-snap-type: y mandatory;
        overflow-x: hidden;
    }

    body {
        background-color: #1b1b1b;
    }

    section {
        width: 100vw;
        height: 100vh;
        scroll-snap-align: start;
    }

    .mapIDpx {
        width: 100%;
        max-width: 1440px;
    }

    .road2MAIR {
        width: 90%;
        max-width: 960px;
        margin-top: 1.5rem;
    }
</style>

<body>

    <header class="fixed-top">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="navis col bg-blue position-relative">
                    <div class="ps-4 position-absolute top-0 start-0">
                        <a href=""><img src="{{ asset('assets/img/run white.png') }}" class=""
                                style="
                                width: 100px;
                            "></a>
                    </div>
                    <div class="row h-100">
                        <div class="col px-1 text-white text-end h3" style="padding-top:18px">
                        </div>
                        <div class="col-auto d-flex align-items-center px-0">
                            <svg class="ham ham6" viewBox="0 0 100 100" width="60" data-bs-toggle="offcanvas"
                                data-bs-target="#menuMilo" aria-controls="menuMilo">
                                <path class="line top"
                                    d="m 30,33 h 40 c 13.100415,0 14.380204,31.80258 6.899646,33.421777 -24.612039,5.327373 9.016154,-52.337577 -12.75751,-30.563913 l -28.284272,28.284272" />
                                <path class="line middle"
                                    d="m 70,50 c 0,0 -32.213436,0 -40,0 -7.786564,0 -6.428571,-4.640244 -6.428571,-8.571429 0,-5.895471 6.073743,-11.783399 12.286435,-5.570707 6.212692,6.212692 28.284272,28.284272 28.284272,28.284272" />
                                <path class="line bottom"
                                    d="m 69.575405,67.073826 h -40 c -13.100415,0 -14.380204,-31.80258 -6.899646,-33.421777 24.612039,-5.327373 -9.016154,52.337577 12.75751,30.563913 l 28.284272,-28.284272" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="offcanvas offcanvas-end bg-dark mt-5" tabindex="-1" data-bs-scroll="false" id="menuMilo"
        aria-labelledby="menuMiloLabel">
        <div class="offcanvas-body text-white px-0">
            <div class="pt-3">
                <ul class="navbar-nav fw-bold mb-4">
                    <li class="nav-item">
                        <a class="nav-link text-white active" aria-current="page" href="">HOME</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle collapsed" data-bs-toggle="collapse" href="#raceInfo"
                            role="button" aria-expanded="false" aria-controls="collapseExample">RACE INFO</a>
                        <div class="collapse" id="raceInfo">
                            <div class="px-3 pb-3">
                                <ul class="navbar-nav">
                                    <li class="nav-item"><button class="btn btn-link nav-link" data-bs-toggle="modal"
                                            data-bs-target="#modalAboutInformation">About Information</button></li>
                                </ul>
                                <ul class="navbar-nav">
                                    <li class="nav-item"><button class="btn btn-link nav-link" data-bs-toggle="modal"
                                            data-bs-target="#modalRaceInformation">Race Information</button></li>
                                </ul>
                                <ul class="navbar-nav">
                                    <li class="nav-item"><button class="btn btn-link nav-link" data-bs-toggle="modal"
                                            data-bs-target="#modalRoleInformation">Rules and Regulations</button></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">JOIN RACE</a>
                    </li>
                </ul>

            </div>
        </div>
        <div class="offcanvas-footer">
            <div class="row">
                <div class="col text-white text-center pb-3">
                    <div class="mb-2 fw-bold">CONNECT &amp; CONTACT WITH<br><small>OUR SUPPORT 24 HOURS</small></div>
                    <div class="row row-cols-6 justify-content-center g-3">
                        <div class="col">
                            <a href="https://wa.me/081232312323" target="_blank">
                                <img src="https://activindonesiarace.id/img/icWA.png" class="w-100"
                                    alt="MILO Contact Whatsapp">
                            </a>
                        </div>
                        <div class="col">
                            <a href="mailto:info@ad.com">
                                <img src="https://activindonesiarace.id/img/icMail.png" class="w-100"
                                    alt="MILO Contact Mail">
                            </a>
                        </div>
                    </div>
                    <div class="mt-4 small">
                        &copy; Event Run All Rights Reserved.<br>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalAboutInformation" tabindex="-1" aria-labelledby="modalAboutInformationLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalAboutInformationLabel">About Information
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Lari adalah kegiatan olahraga yang tidak hanya menyehatkan dan memperkuat daya tahan tubuh
                        tetapi juga membuka ruang pergaulan yang lebih luas, sehingga makin banyak teman. Dalam satu
                        dekade terakhir ini, berbagai lomba lari dan aktivitas lari marak bertumbuhan di Indonesia.
                        Minat masyarakat terhadap olahgara meningkat pesat, termasuk olahraga lari jalan raya, terbukti
                        dengan semakin banyaknya terbentuk komunitas-komunitas lari diberbagai daerah. <br>

                        <p></p>Salah satu komunitas yang terbentuk dan aktif melakukan kegiatan lari di Kabupaten Bone adalah
                        Medan Runner. Medan Runner merupakan salah satu wadah yang mempunyai hobi dan
                        kecintaan terhadap olahraga lari. <br>

                        <p></p>Sebagai wujud dan kecintaan terhadap olahraga lari, komunitas Medan Runner memiliki ide
                        untuk melaksanakan suatu kegiatan yaitu TENRIAWARU FUN RUN 2024. Kegiatan ini terbuka secara
                        umum untuk diikuti para pelari dalam dan luar negeri. <br>

                        <p></p>Diharapkan melalui kegiatan ini semangat dan gaya hidup sehat bugar dapat terus digaungkan,
                        kegiatan ini pula dimaksudkan sebagai salah satu upaya untuk lebih memperkenalkan potensi
                        Kabupaten Bone secara umum. Selain itu kegiatan ini dimaksudkan untuk mempererat hubungan
                        personal dan sosial untuk para penggiat lari. <br>

                        <p></p>Runners akan diajak untuk menikmati kota Bone yang ramah melalui kegiatan ini. Rute lari
                        disiapkan khusus sehingga runners dapat berlari dengan aman dan nyaman melewati jalur dengan
                        para penyelenggara yang berdikasi melayani.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalRaceInformation" tabindex="-1" aria-labelledby="modalTnCMenuLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTnCMenuLabel">Race Information
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5 class="modal-title mb-3 text-uppercase text-center">Road To Race Medan Series</h5>
                    <table class="table table-striped w-100 text-center">
                        <tr>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Location</th>
                            <th>Instagram</th>
                        </tr>
                        <tr>
                            <td>23 Desember 2024</td>
                            <td>06:00 WITA</td>
                            <td>Lapangan Merdeka, Kab. Mamuju, Sulawesi Barat</td>
                            <td>@racerunmedan</td>
                        </tr>
                    </table>
                    <p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d820.2956444302006!2d118.89032692840206!3d-2.677658632254298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d92d84cccaa78e7%3A0xf9715a3336fbbbec!2sLapangan%20Ahmad%20Kirang!5e0!3m2!1sid!2sid!4v1728739570964!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalRoleInformation" tabindex="-1" aria-labelledby="modalRoleInformation"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalRoleInformation">Rules and Regulations
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5 class="modal-title mb-3 text-uppercase text-center">Rules and Regulations</h5>

                </div>
            </div>
        </div>
    </div>

    <main>
        <section style="background-image: linear-gradient(to bottom, #1b1b1b, #2c2c42, #2c2c42, #2c2c42, #2c2c42);">
            <div class="position-relative h-100 w-100 text-center">
                {{-- background latar peta indonesia --}}
                {{-- <img src="https://activindonesiarace.id/img/mapIDpixel.png" class="mapIDpx" alt="Indonesia map pixel" style="margin-top:6rem"> --}}
                {{-- background latar peta indonesia --}}

                <div class="position-absolute w-100" style="bottom:30px">
                    <img src="{{ asset('assets/img/tree.webp') }}" class="w-100">
                </div>

                <div class="position-absolute w-100 start-50 translate-middle-x text-center" style="top:7rem">
                    <img src="{{ asset('assets/img/pngwing.com (1).png') }}" style="width: 350px"><br>
                    <h3 class="text-white"><strong>Road To Indonesia Race Medan Series</strong></h3>
                    <h5 class="text-white">15 Desember 2024</h5>

                    {{-- gambar road to race --}}
                    {{-- <img src="https://activindonesiarace.id/img/roadToMAIR.png" class="road2MAIR"> --}}
                    {{-- gambar road to race --}}

                    <div class="my-4">
                        <a href="{{ route('events.show', $event->slug) }}" class="btn btn-primary btn-sm"
                            style="padding: 10px 70px;border-radius: 9rem;">Join Race</a>
                    </div>
                </div>

                {{-- logo kanan --}}
                {{-- <img src="https://activindonesiarace.id/img/50thn.png" alt="50 tahun" class="position-absolute"
                    style="width:160px;top:5rem;right:2rem"> --}}
                {{-- logo kanan --}}

                <div class="position-absolute bottom-0 w-100">
                    <div class="counter text-center fw-bold small text-uppercase"
                        style="padding-bottom: 100px;background-color: #081d06;">
                        RACE DIMULAI DALAM
                        <div class="timer">
                            <div class="days-wrapper">
                                <span class="days"></span>
                                <div class="small">
                                    <small>HARI</small>
                                </div>
                            </div>
                            <span class="tt px-2">:</span>
                            <div class="hours-wrapper">
                                <span class="hours"></span>
                                <div class="small">
                                    <small>JAM</small>
                                </div>
                            </div>
                            <span class="tt px-2">:</span>
                            <div class="minutes-wrapper">
                                <span class="minutes"></span>
                                <div class="small">
                                    <small>MENIT</small>
                                </div>
                            </div>
                            <span class="tt px-2">:</span>
                            <div class="seconds-wrapper">
                                <span class="seconds"></span>
                                <div class="small">
                                    <small>DETIK</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <script type="text/javascript" src="{{ asset('appstack/js/jquery.countdown.js') }}"></script>
    <script type="text/javascript">
        var race = new Date("Sep 15, 2024 06:00:00");
    </script>
    <script type="text/javascript" src="{{ asset('appstack/js/home.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="/js/default.js"></script>
</body>

</html>
