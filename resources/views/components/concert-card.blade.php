<div class="col-md-6 col-lg-4 col-xl-3">
    <div class="rounded position-relative fruite-item">
        <div class="fruite-img">
            <img src="{{ asset('storage/' . $concert->image) }}" class="img-fluid w-100 rounded-top"
                alt="{{ $concert->title }}">
        </div>
        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">
            {{ $concert->genre }}
        </div>
        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
            <h4>{{ $concert->title }}</h4>
            <p>{{ $concert->location }} -
                {{ \Carbon\Carbon::parse($concert->datetime)->format('d M Y, H:i') }}
            </p>

            <div class="d-flex justify-content-between flex-lg-wrap justify-content-center mt-2">

                @if ($concert->discount && $concert->discount->discount_percentage > 0)
                    @php
                        $discount = $concert->discount->discount_percentage;
                        $discountedPrice = $concert->price * (1 - $discount / 100);
                    @endphp

                    <div class="text-center">
                        <p class="text-danger mb-1">-{{ $discount }}% Diskon</p>
                        <p class="mb-0">
                            <span class="text-decoration-line-through text-muted small">
                                Rp{{ number_format($concert->price, 0, ',', '.') }}
                            </span><br>
                            <span class="text-success fw-bold">
                                Rp{{ number_format($discountedPrice, 0, ',', '.') }}
                            </span>
                        </p>
                    </div>
                @else
                    <p class="text-dark fs-5 fw-bold mb-0">
                        Rp{{ number_format($concert->price, 0, ',', '.') }}
                    </p>
                @endif

                <div class="mt-3 text-center">
                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">
                        <i class="fa fa-ticket me-2"></i> Pesan Tiket
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>
