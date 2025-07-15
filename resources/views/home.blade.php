<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>konserkita.id - Temukan dan Pesan Tiket Konser Favoritmu!</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar start -->
    <div class="container-fluid fixed-top">
        <div class="container topbar bg-primary d-none d-lg-block">
            <div class="d-flex justify-content-between">
                <div class="top-info ps-2">
                    <small class="me-3"><i class="fas fa-map-marker-alt me-2 text-secondary"></i> <a href="#"
                            class="text-white">Bandung Jawa Barat, Indonesia</a></small>
                    <small class="me-3"><i class="fas fa-envelope me-2 text-secondary"></i><a href="#"
                            class="text-white">konserkitadotid@gmail.com</a></small>
                </div>
                <div class="top-link pe-2">
                    <a href="#" class="text-white"><small class="text-white mx-2">Privacy Policy</small>/</a>
                    <a href="#" class="text-white"><small class="text-white mx-2">Terms of Use</small>/</a>
                    <a href="#" class="text-white"><small class="text-white ms-2">Sales and Refunds</small></a>
                </div>
            </div>
        </div>
        <div class="container px-0">
            <nav class="navbar navbar-light bg-white navbar-expand-xl">
                <a href="index.html" class="navbar-brand">
                    <h1 class="text-primary display-6">KonserKita.id</h1>
                </a>
                <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                    <div class="navbar-nav mx-auto">
                        <a href="{{ url('/') }}"
                            class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                        <a href="{{ url('/concert') }}"
                            class="nav-item nav-link {{ request()->is('concert') ? 'active' : '' }}">Concert</a>
                        <a href="{{ url('/buy-ticket') }}"
                            class="nav-item nav-link {{ request()->is('buy-ticket') ? 'active' : '' }}">Buy Ticket</a>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                <a href="{{ url('/cart') }}" class="dropdown-item">Cart</a>
                                <a href="{{ url('/checkout') }}" class="dropdown-item">Checkout</a>
                                <a href="{{ url('/testimonial') }}" class="dropdown-item">Testimonial</a>
                                <a href="{{ url('/404') }}" class="dropdown-item">404 Page</a>
                            </div>
                        </div>

                        <a href="{{ url('/contact') }}"
                            class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
                    </div>
                    <div class="d-flex m-3 me-0">
                        <button
                            class="btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4"
                            data-bs-toggle="modal" data-bs-target="#searchModal"><i
                                class="fas fa-search text-primary"></i></button>
                        <a href="#" class="position-relative me-4 my-auto">
                            <i class="fa fa-shopping-bag fa-2x"></i>
                            <span
                                class="position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1"
                                style="top: -5px; left: 15px; height: 20px; min-width: 20px;">3</span>
                        </a>
                        <a href="{{ url('/admin') }}" class="my-auto">
                            <i class="fas fa-user fa-2x"></i>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="keywords"
                            aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->


    <!-- Hero Start -->
    <div class="container-fluid py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-md-12 col-lg-7">
                    <h4 class="mb-3 text-secondary">100% Musik Seru Langsung dari Panggung</h4>
                    <h1 class="mb-5 display-3 text-primary">Pesan Tiket Konser Favoritmu dengan Mudah & Cepat</h1>
                    <div class="position-relative mx-auto">
                        <input class="form-control border-2 border-secondary w-75 py-3 px-4 rounded-pill"
                            type="number" placeholder="Search">
                        <button type="submit"
                            class="btn btn-primary border-2 border-secondary py-3 px-4 position-absolute rounded-pill text-white h-100"
                            style="top: 0; right: 25%;">Submit Now</button>
                    </div>
                </div>
                <div class="col-md-12 col-lg-5">
                    <div id="carouselId" class="carousel slide position-relative" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active rounded">
                                <img src="img/hero-img-1.png" class="img-fluid w-100 h-100 bg-secondary rounded"
                                    alt="First slide">
                                <!-- <a href="#" class="btn px-4 py-2 text-white rounded">Konser Bandung 2025</a> -->
                            </div>
                            <div class="carousel-item rounded">
                                <img src="img/hero-img-2.png" class="img-fluid w-100 h-100 rounded"
                                    alt="Second slide">
                                <!-- <a href="#" class="btn px-4 py-2 text-white rounded">Konser Jakarta 2025</a> -->
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselId"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Featurs Section Start -->
    <div class="container-fluid featurs py-5">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="featurs-item text-center rounded bg-light p-4">
                        <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                            <i class="fas fa-car-side fa-3x text-white"></i>
                        </div>
                        <div class="featurs-content text-center">
                            <h5>Pesan Tiket Mudah</h5>
                            <p class="mb-0">Pilih konser, bayar, & e-ticket langsung dikirim</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="featurs-item text-center rounded bg-light p-4">
                        <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                            <i class="fas fa-user-shield fa-3x text-white"></i>
                        </div>
                        <div class="featurs-content text-center">
                            <h5>Pembayaran Aman</h5>
                            <p class="mb-0">Transaksi dengan sistem pembayaran terpercaya</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="featurs-item text-center rounded bg-light p-4">
                        <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                            <i class="fas fa-exchange-alt fa-3x text-white"></i>
                        </div>
                        <div class="featurs-content text-center">
                            <h5>Tiket Fleksibel</h5>
                            <p class="mb-0">Refund tiket sebelum konser berlangsung</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="featurs-item text-center rounded bg-light p-4">
                        <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                            <i class="fa fa-phone-alt fa-3x text-white"></i>
                        </div>
                        <div class="featurs-content text-center">
                            <h5>Bantuan 24 Jam</h5>
                            <p class="mb-0">Tim kami siap membantu kapan pun kamu butuh</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Featurs Section End -->


    <!-- Fruits Shop Start-->
    <div class="container-fluid fruite py-5">
        <div class="container py-5">
            <div class="tab-class text-center">
                <div class="row g-4">
                    <div class="col-lg-4 text-start">
                        <h1>Daftar Konser</h1>
                    </div>
                    <div class="col-lg-8 text-end">
                        <ul class="nav nav-pills d-inline-flex text-center mb-5">
                            <li class="nav-item">
                                <a class="d-flex m-2 py-2 bg-light rounded-pill active" data-bs-toggle="pill"
                                    href="#tab-all">
                                    <span class="text-dark" style="width: 130px;">All Concert</span>
                                </a>
                            </li>
                            @foreach ($genres as $genre)
                                <li class="nav-item">
                                    <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill"
                                        href="#tab-{{ strtolower($genre) }}">
                                        <span class="text-dark" style="width: 130px;">{{ $genre }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="tab-content">
                    {{-- All Concert --}}
                    <div id="tab-all" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            @foreach ($concerts as $concert)
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                            <img src="{{ asset('storage/' . $concert->image) }}"
                                                class="img-fluid w-100 rounded-top" alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                            style="top: 10px; left: 10px;">
                                            {{ $concert->genre }}
                                        </div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>{{ $concert->title }}</h4>
                                            <p>{{ $concert->location }} -
                                                {{ \Carbon\Carbon::parse($concert->datetime)->format('d M Y, H:i') }}
                                            </p>
                                            <div class="d-flex justify-content-between flex-lg-wrap">
                                                <p class="text-dark fs-5 fw-bold mb-0">
                                                    Rp{{ number_format($concert->price, 0, ',', '.') }}</p>
                                                <a href="#"
                                                    class="btn border border-secondary rounded-pill px-3 text-primary">
                                                    <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- Filter by Genre --}}
                    @foreach ($genres as $genre)
                        <div id="tab-{{ strtolower($genre) }}" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                @foreach ($concerts->where('genre', $genre) as $concert)
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        {{-- Duplikat isi card di atas --}}
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="{{ asset('storage/' . $concert->image) }}"
                                                    class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                                style="top: 10px; left: 10px;">
                                                {{ $concert->genre }}
                                            </div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4>{{ $concert->title }}</h4>
                                                <p>{{ $concert->location }} -
                                                    {{ \Carbon\Carbon::parse($concert->datetime)->format('d M Y, H:i') }}
                                                </p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">
                                                        Rp{{ number_format($concert->price, 0, ',', '.') }}</p>
                                                    <a href="#"
                                                        class="btn border border-secondary rounded-pill px-3 text-primary">
                                                        <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                                        cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Fruits Shop End-->


    <!-- Featurs Start -->
    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <a href="#">
                        <div class="service-item bg-secondary rounded border border-secondary">
                            <img src="img/featur-1.png" class="img-fluid rounded-top w-100" alt="">
                            <div class="px-4 rounded-bottom">
                                <div class="service-content bg-light text-center p-4 rounded">
                                    <h5 class="text-primary">Tiket Early Bird</h5>
                                    <h3 class="mb-0">Diskon hingga 30%</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="#">
                        <div class="service-item bg-dark rounded border border-dark">
                            <img src="img/featur-2.png" class="img-fluid rounded-top w-100" alt="">
                            <div class="px-4 rounded-bottom">
                                <div class="service-content bg-light text-center p-4 rounded">
                                    <h5 class="text-primary">Konser Terdekat</h5>
                                    <h3 class="mb-0">Gratis Biaya Admin</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="#">
                        <div class="service-item bg-secondary rounded border border-secondary">
                            <img src="img/featur-3.png" class="img-fluid rounded-top w-100" alt="">
                            <div class="px-4 rounded-bottom">
                                <div class="service-content bg-light text-center p-4 rounded">
                                    <h5 class="text-primary">Konser Populer</h5>
                                    <h3 class="mb-0">Tiket Hampir Habis!</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Featurs End -->


    <!-- Vesitable Shop Start-->
    <div class="container-fluid vesitable py-5">
        <div class="container py-5">
            <h1 class="mb-0">Konser Terdekat</h1>
            <div class="owl-carousel vegetable-carousel justify-content-center">
                @foreach ($upcomingConcerts as $concert)
                    <div class="border border-primary rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                            <img src="{{ asset('storage/' . $concert->image) }}" class="img-fluid w-100 rounded-top"
                                alt="{{ $concert->title }}">
                        </div>
                        <div class="text-white bg-primary px-3 py-1 rounded position-absolute"
                            style="top: 10px; right: 10px;">{{ $concert->genre }}</div>
                        <div class="p-4 rounded-bottom">
                            <h4>{{ $concert->title }}</h4>
                            <p class="mb-2">
                                {{ $concert->location }}<br>
                                {{ \Carbon\Carbon::parse($concert->datetime)->format('d M Y, H:i') }}
                            </p>

                            {{-- Countdown --}}
                            <div class="countdown text-danger fw-bold mb-3"
                                data-datetime="{{ \Carbon\Carbon::parse($concert->datetime)->toIso8601String() }}"
                                id="countdown-{{ $concert->id }}">
                                Memuat waktu...
                            </div>

                            <div class="d-flex justify-content-between flex-lg-wrap">
                                <p class="text-dark fs-5 fw-bold mb-0">
                                    Rp{{ number_format($concert->price, 0, ',', '.') }}
                                </p>
                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">
                                    <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Vesitable Shop End -->


    <!-- Banner Section Start-->
    <div class="container-fluid banner bg-secondary my-5">
        <div class="container py-5">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="py-4">
                        <h1 class="display-3 text-white">Buy Tiket Now</h1>
                        <p class="fw-normal display-3 text-dark mb-4"><i>in konserkita.id </i></p>
                        <p class="mb-4 text-dark">Nikmati pengalaman musik terbaik dari konser favoritmu. Pesan tiket
                            secara online dengan mudah, cepat, dan aman di KonserKita.id.</p>
                        <a href="{{ route('concert.list') }}"
                            class="banner-btn btn border-2 border-white rounded-pill text-dark py-3 px-5">
                            Lihat Tiket Konser
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="position-relative">
                        <img src="img/baner-1.png" class="img-fluid w-100 rounded" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Section End -->

    <!-- Bestsaler Product Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5" style="max-width: 700px;">
                <h1 class="display-4">Konser Populer</h1>
                <p>Pilih konser favoritmu! Pesan tiket sekarang dan jangan sampai kehabisan.</p>
            </div>

            <div class="row g-4">
                @foreach ($concerts as $concert)
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="{{ asset('storage/' . $concert->image) }}"
                                        class="img-fluid rounded w-100" alt="{{ $concert->title }}">
                                </div>
                                <div class="col-6">
                                    <a href="#" class="h5 d-block mb-2">{{ $concert->title }}</a>
                                    <p class="mb-1 text-muted">{{ $concert->location }}</p>
                                    <p class="mb-1 text-muted">
                                        {{ \Carbon\Carbon::parse($concert->datetime)->format('d M Y, H:i') }}</p>
                                    <p class="badge bg-primary mb-2">{{ $concert->genre }}</p>

                                    {{-- Bintang Favorit --}}
                                    <div class="d-flex my-2">
                                        @php
                                            $stars = $concert->genre === 'Pop' ? 5 : 3;
                                        @endphp

                                        @for ($i = 1; $i <= $stars; $i++)
                                            <i class="fas fa-star text-warning"></i>
                                        @endfor

                                        @for ($i = $stars + 1; $i <= 5; $i++)
                                            <i class="fas fa-star text-secondary"></i>
                                        @endfor
                                    </div>

                                    <h4 class="mb-3">Rp{{ number_format($concert->price, 0, ',', '.') }}</h4>
                                    <a href="#"
                                        class="btn border border-secondary rounded-pill px-3 text-primary">
                                        Pesan Tiket
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Bestsaler Product End -->


    <!-- Fact Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="bg-light p-5 rounded">
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="counter bg-white rounded p-5 text-center">
                            <i class="fa fa-music fa-2x text-success mb-3"></i>
                            <h4>Total Konser</h4>
                            <h1>{{ $concerts->count() }}</h1>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="counter bg-white rounded p-5 text-center">
                            <i class="fa fa-ticket-alt fa-2x text-success mb-3"></i>
                            <h4>Total Tiket Terjual</h4>
                            <h1>12.000+</h1> {{-- Bisa diganti dinamis jika ada tabel orders --}}
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="counter bg-white rounded p-5 text-center">
                            <i class="fa fa-users fa-2x text-success mb-3"></i>
                            <h4>Pengguna Aktif</h4>
                            <h1>5.000+</h1> {{-- Dinamis jika ada tabel users --}}
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="counter bg-white rounded p-5 text-center">
                            <i class="fa fa-star fa-2x text-success mb-3"></i>
                            <h4>Kepuasan Pengguna</h4>
                            <h1>4.8/5</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact Start -->


    <!-- Tastimonial Start -->
    <div class="container-fluid testimonial py-5">
        <div class="container py-5">
            <div class="testimonial-header text-center">
                <h4 class="text-success">Ulasan Pengguna</h4>
                <h1 class="display-5 mb-5 text-dark">Apa Kata Mereka?</h1>
            </div>

            <div class="owl-carousel testimonial-carousel">
                @forelse ($testimonials as $testimonial)
                    <div class="testimonial-item img-border-radius bg-light rounded p-4">
                        <div class="position-relative">
                            <i class="fa fa-quote-right fa-2x text-secondary position-absolute"
                                style="bottom: 30px; right: 0;"></i>

                            <div class="mb-4 pb-4 border-bottom border-secondary">
                                <p class="mb-0">{{ $testimonial->message }}</p>
                            </div>

                            <div class="d-flex align-items-center flex-nowrap">
                                <div class="bg-secondary rounded">
                                    <img src="{{ asset('storage/' . $testimonial->image) }}"
                                        class="img-fluid rounded" style="width: 100px; height: 100px;"
                                        alt="{{ $testimonial->name }}">
                                </div>

                                <div class="ms-4 d-block">
                                    <h4 class="text-dark">{{ $testimonial->name }}</h4>
                                    <p class="m-0 pb-3">{{ $testimonial->profession }}</p>

                                    {{-- Bintang Rating --}}
                                    <div class="d-flex pe-5">
                                        @for ($i = 0; $i < 5; $i++)
                                            @if ($i < $testimonial->rating)
                                                <i class="fas fa-star text-warning"></i>
                                            @else
                                                <i class="fas fa-star text-secondary"></i>
                                            @endif
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-center">Belum ada ulasan pengguna.</p>
                @endforelse
            </div>
        </div>
    </div>

    <!-- Tastimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5">
        <div class="container py-5">
            <div class="pb-4 mb-4" style="border-bottom: 1px solid rgba(226, 175, 24, 0.5) ;">
                <div class="row g-4">
                    <div class="col-lg-3">
                        <a href="#">
                            <h1 class="text-primary mb-0">Fruitables</h1>
                            <p class="text-secondary mb-0">Fresh products</p>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <div class="position-relative mx-auto">
                            <input class="form-control border-0 w-100 py-3 px-4 rounded-pill" type="number"
                                placeholder="Your Email">
                            <button type="submit"
                                class="btn btn-primary border-0 border-secondary py-3 px-4 position-absolute rounded-pill text-white"
                                style="top: 0; right: 0;">Subscribe Now</button>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="d-flex justify-content-end pt-3">
                            <a class="btn  btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i
                                    class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-secondary btn-md-square rounded-circle" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item">
                        <h4 class="text-light mb-3">Why People Like us!</h4>
                        <p class="mb-4">typesetting, remaining essentially unchanged. It was
                            popularised in the 1960s with the like Aldus PageMaker including of Lorem Ipsum.</p>
                        <a href="" class="btn border-secondary py-2 px-4 rounded-pill text-primary">Read
                            More</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex flex-column text-start footer-item">
                        <h4 class="text-light mb-3">Shop Info</h4>
                        <a class="btn-link" href="">About Us</a>
                        <a class="btn-link" href="">Contact Us</a>
                        <a class="btn-link" href="">Privacy Policy</a>
                        <a class="btn-link" href="">Terms & Condition</a>
                        <a class="btn-link" href="">Return Policy</a>
                        <a class="btn-link" href="">FAQs & Help</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex flex-column text-start footer-item">
                        <h4 class="text-light mb-3">Account</h4>
                        <a class="btn-link" href="">My Account</a>
                        <a class="btn-link" href="">Shop details</a>
                        <a class="btn-link" href="">Shopping Cart</a>
                        <a class="btn-link" href="">Wishlist</a>
                        <a class="btn-link" href="">Order History</a>
                        <a class="btn-link" href="">International Orders</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item">
                        <h4 class="text-light mb-3">Contact</h4>
                        <p>Address: 1429 Netus Rd, NY 48247</p>
                        <p>Email: Example@gmail.com</p>
                        <p>Phone: +0123 4567 8910</p>
                        <p>Payment Accepted</p>
                        <img src="img/payment.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Your
                            Site Name</a>, All right
                        reserved.</span>
                </div>
                <div class="col-md-6 my-auto text-center text-md-end text-white">
                    <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                    <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                    <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                    Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i
            class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
