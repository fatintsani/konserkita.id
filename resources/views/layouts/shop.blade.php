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
                            class="text-white">info@konserkita.id</a></small>
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

                        <a href="{{ route('concert.list') }}"
                            class="nav-item nav-link {{ request()->is('concerts') ? 'active' : '' }}">Concert</a>

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
                        <a href="{{ route('cart.index') }}" class="position-relative me-4 my-auto">
                            <i class="fa fa-shopping-bag fa-2x"></i>
                            @php
                                $cart = session('cart', []);
                                $totalItems = array_sum(array_column($cart, 'quantity'));
                            @endphp
                            <span
                                class="position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1"
                                style="top: -5px; left: 15px; height: 20px; min-width: 20px;">
                                {{ $totalItems }}
                            </span>
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

    <!-- Single Page Header start -->
    <div class="container-fluid page-header py-5">
        <h1 class="text-center text-white display-6">Daftar Konser</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active text-white">Concert</li>
        </ol>
    </div>
    <!-- Single Page Header End -->

    <!-- Fruits Shop Start-->
    <div class="container-fluid fruite py-5">
        <div class="container py-5">
            <h1 class="mb-4">Daftar Konser</h1>
            <div class="row g-4">
                <div class="col-lg-12">
                    <div class="row g-4">
                        <div class="col-xl-3">
                            <form method="GET" action="{{ route('concert.list') }}"
                                class="input-group w-100 mx-auto d-flex">
                                <input type="search" name="search" value="{{ request('search') }}"
                                    class="form-control p-3" placeholder="Cari konser..."
                                    aria-describedby="search-icon-1">
                                <button class="input-group-text p-3 bg-white border-start-0" type="submit"
                                    id="search-icon-1">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                        </div>

                        <div class="col-6"></div>
                        <div class="col-xl-3">
                            <form method="GET" action="{{ route('concert.list') }}" id="sortForm"
                                class="bg-light ps-3 py-3 rounded d-flex justify-content-between mb-4">

                                <label for="concertSort">Urutkan:</label>
                                <select id="concertSort" name="sort" class="border-0 form-select-sm bg-light me-3"
                                    onchange="document.getElementById('sortForm').submit()">
                                    <option value="">Default</option>
                                    <option value="date" {{ request('sort') == 'date' ? 'selected' : '' }}>Tanggal
                                        Terdekat</option>
                                    <option value="price_low" {{ request('sort') == 'price_low' ? 'selected' : '' }}>
                                        Harga Terendah</option>
                                    <option value="price_high"
                                        {{ request('sort') == 'price_high' ? 'selected' : '' }}>Harga Tertinggi
                                    </option>
                                </select>

                                @if (request('search'))
                                    <input type="hidden" name="search" value="{{ request('search') }}">
                                @endif

                            </form>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-3">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <h4>Genre Konser</h4>
                                        <ul class="list-unstyled fruite-categorie">

                                            @php
                                                $genres = ['Pop', 'Rock', 'Jazz', 'K-Pop'];
                                            @endphp

                                            @foreach ($genres as $genre)
                                                <li>
                                                    <div class="d-flex justify-content-between fruite-name">
                                                        <a href="{{ route('concert.list', ['genre' => $genre]) }}"
                                                            class="{{ request('genre') == $genre ? 'fw-bold text-primary' : '' }}">
                                                            <i class="fas fa-music me-2"></i>{{ $genre }}
                                                        </a>

                                                        <span>
                                                            {{ \App\Models\Concert::where('genre', $genre)->count() }}
                                                        </span>
                                                    </div>
                                                </li>
                                            @endforeach

                                            {{-- Link Semua Genre --}}
                                            <li class="mt-3">
                                                <a href="{{ route('concert.list') }}"
                                                    class="btn btn-outline-secondary w-100">
                                                    Tampilkan Semua
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <h4 class="mb-2">Filter Harga (Rp)</h4>

                                        <form method="GET" action="{{ route('concert.list') }}" id="priceForm">
                                            <input type="range" class="form-range w-100" id="rangeInput"
                                                name="max_price" min="0" max="1000000" step="10000"
                                                value="{{ request('max_price', 1000000) }}"
                                                oninput="amount.value = parseInt(rangeInput.value).toLocaleString('id-ID')">

                                            <output id="amount" name="amount" for="rangeInput">
                                                {{ number_format(request('max_price', 1000000), 0, ',', '.') }}
                                            </output>

                                            @if (request('search'))
                                                <input type="hidden" name="search"
                                                    value="{{ request('search') }}">
                                            @endif

                                            @if (request('genre'))
                                                <input type="hidden" name="genre" value="{{ request('genre') }}">
                                            @endif

                                            <button type="submit" class="btn btn-primary w-100 mt-3">
                                                Terapkan Filter Harga
                                            </button>
                                        </form>

                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <h4>Status Konser</h4>

                                        <form method="GET" action="{{ route('concert.list') }}" id="statusForm">
                                            <div class="mb-2">
                                                <input type="radio" id="status-all" name="status" value=""
                                                    onchange="document.getElementById('statusForm').submit()"
                                                    {{ (request()->has('status') ? request('status') == '' : false) ? 'checked' : '' }}>
                                                <label for="status-all">Semua</label>
                                            </div>

                                            <div class="mb-2">
                                                <input type="radio" id="status-upcoming" name="status"
                                                    value="upcoming"
                                                    onchange="document.getElementById('statusForm').submit()"
                                                    {{ request('status') == 'upcoming' || !request()->has('status') ? 'checked' : '' }}>
                                                <label for="status-upcoming">Akan Datang</label>
                                            </div>

                                            <div class="mb-2">
                                                <input type="radio" id="status-past" name="status" value="past"
                                                    onchange="document.getElementById('statusForm').submit()"
                                                    {{ request('status') == 'past' ? 'checked' : '' }}>
                                                <label for="status-past">Sudah Berlangsung</label>
                                            </div>

                                            <div class="mb-2">
                                                <input type="radio" id="status-free" name="status" value="free"
                                                    onchange="document.getElementById('statusForm').submit()"
                                                    {{ request('status') == 'free' ? 'checked' : '' }}>
                                                <label for="status-free">Konser Gratis</label>
                                            </div>

                                            @if (request('search'))
                                                <input type="hidden" name="search"
                                                    value="{{ request('search') }}">
                                            @endif
                                            @if (request('genre'))
                                                <input type="hidden" name="genre" value="{{ request('genre') }}">
                                            @endif
                                        </form>

                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <h4 class="mb-3">Konser Diskon</h4>

                                    @php
                                        $featuredConcerts = \App\Models\Concert::whereHas('discount')
                                            ->with('discount')
                                            ->latest()
                                            ->take(3)
                                            ->get();
                                    @endphp

                                    @forelse ($featuredConcerts as $concert)
                                        <div class="d-flex align-items-center justify-content-start mb-3">
                                            <div class="rounded me-4"
                                                style="width: 100px; height: 100px; overflow: hidden;">
                                                <img src="{{ asset('storage/' . $concert->image) }}"
                                                    class="img-fluid rounded"
                                                    style="width: 100%; height: 100%; object-fit: cover;"
                                                    alt="{{ $concert->title }}">
                                            </div>
                                            <div>
                                                <h6 class="mb-2">{{ $concert->title }}</h6>

                                                <p class="mb-2 small text-muted">{{ $concert->location }}</p>

                                                <div class="mb-2">
                                                    <span class="fw-bold text-success">
                                                        -{{ $concert->discount->discount_percentage }}% Diskon
                                                    </span>
                                                </div>

                                                <div class="mb-2">
                                                    <span class="fw-bold me-2 text-danger">
                                                        Rp{{ number_format($concert->price * (1 - $concert->discount->discount_percentage / 100), 0, ',', '.') }}
                                                    </span>
                                                    <span class="text-muted text-decoration-line-through small">
                                                        Rp{{ number_format($concert->price, 0, ',', '.') }}
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <p class="text-muted">Belum ada konser diskon.</p>
                                    @endforelse

                                    <div class="d-flex justify-content-center my-4">
                                        <a href="{{ route('concert.list', ['status' => 'discount']) }}"
                                            class="btn border border-secondary px-4 py-3 rounded-pill text-primary w-100">
                                            Lihat Semua Diskon
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="row g-4 justify-content-center">

                                @forelse ($concerts as $concert)
                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="{{ asset('storage/' . $concert->image) }}"
                                                    class="img-fluid w-100 rounded-top"
                                                    style="height: 200px; object-fit: cover;"
                                                    alt="{{ $concert->title }}">
                                            </div>

                                            <div class="text-primary bg-white px-3 py-1 rounded position-absolute"
                                                style="top: 10px; left: 10px;">
                                                {{ $concert->genre }}
                                            </div>

                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4>{{ $concert->title }}</h4>
                                                <p class="mb-1">{{ $concert->location }}</p>
                                                <p class="mb-1">
                                                    {{ \Carbon\Carbon::parse($concert->datetime)->format('d M Y, H:i') }}
                                                </p>

                                                {{-- Harga --}}
                                                @if ($concert->discount && $concert->discount->discount_percentage > 0)
                                                    <p class="mb-1 text-danger small">
                                                        -{{ $concert->discount->discount_percentage }}% Diskon
                                                        sampai
                                                        {{ \Carbon\Carbon::parse($concert->discount->valid_until)->translatedFormat('d M Y') }}
                                                    </p>
                                                    <p class="mb-0">
                                                        <span class="text-decoration-line-through text-muted small">
                                                            Rp{{ number_format($concert->price, 0, ',', '.') }}
                                                        </span>
                                                        <br>
                                                        <span class="fw-bold text-success fs-5">
                                                            Rp{{ number_format($concert->price * (1 - $concert->discount->discount_percentage / 100), 0, ',', '.') }}
                                                        </span>
                                                    </p>
                                                @else
                                                    <p class="text-dark fs-5 fw-bold mb-0">
                                                        Rp{{ number_format($concert->price, 0, ',', '.') }}
                                                    </p>
                                                @endif

                                                {{-- Tombol --}}
                                                <div class="mt-3 text-center">
                                                    @if (\Carbon\Carbon::parse($concert->datetime)->isPast())
                                                        <button class="btn btn-secondary rounded-pill px-3" disabled>
                                                            <i class="fa fa-clock me-2"></i> Acara Selesai
                                                        </button>
                                                    @else
                                                        <a href="{{ route('cart.add', $concert->id) }}"
                                                            class="btn border border-secondary rounded-pill px-3 text-primary">
                                                            <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                                            Cart
                                                        </a>
                                                    @endif
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <p class="text-center">Tidak ada konser ditemukan.</p>
                                @endforelse

                                {{-- Pagination --}}
                                <div class="col-12">
                                    <div class="pagination d-flex justify-content-center mt-5">
                                        {{ $concerts->withQueryString()->links() }}
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Fruits Shop End-->

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5">
            <div class="container py-5">
                <div class="pb-4 mb-4" style="border-bottom: 1px solid rgba(226, 175, 24, 0.5) ;">
                    <div class="row g-4">
                        <div class="col-lg-3">
                            <a href="#">
                                <h1 class="text-primary mb-0">konserkita.id</h1>
                                <p class="text-secondary mb-0">#tempatnyatiketkonser</p>
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
                                <a class="btn  btn-outline-secondary me-2 btn-md-square rounded-circle"
                                    href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle"
                                    href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle"
                                    href=""><i class="fab fa-youtube"></i></a>
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
                            <p class="mb-4">Platform pemesanan tiket konser yang mudah, cepat, dan terpercaya.
                                Dapatkan
                                pengalaman musik terbaik hanya di KonserKita.id!
                            </p>
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
                            <h4 class="text-light mb-3">Kontak Kami</h4>
                            <p>Bandung Jawa Barat, Indonesia</p>
                            <p>Email: info@konserkita.id</p>
                            <p>Telepon: +62 831-3397-7214</p>
                            <p>Payment Accepted:</p>
                            <img src="{{ asset('img/payment.png') }}" class="img-fluid" alt="Metode Pembayaran">
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
                        <span class="text-light">
                            <a href="{{ url('/') }}" class="text-light text-decoration-none">
                                <i class="fas fa-music text-light me-2"></i>KonserKita.id
                            </a>, Copyright by &copy; {{ date('Y') }}.
                        </span>
                    </div>
                    <div class="col-md-6 my-auto text-center text-md-end text-white">
                        Dibuat oleh <a class="border-bottom text-white text-decoration-none" href="#">Faisya
                            Company</a>
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
