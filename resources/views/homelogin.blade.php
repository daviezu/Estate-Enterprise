@extends('layout.masterlogin')

@section('title', 'Homepage')

@section('content')
<!-- Hero Section -->
<div class="hero-section position-relative">
    <!-- Background Gambar -->
    <div class="hero-background"></div>
    
    <!-- Konten -->
    <div class="container py-5 position-relative" style="z-index: 2;">
        <div class="row align-items-center">
            <!-- Teks -->
            <div class="col-lg-6 text-green">
                <h1 class="display-4 fw-bold">Temukan Rumah Impian<br>Anda dengan <span class="text-primary">Mudah.</span></h1>
                <p class="lead mt-3">Cari properti terbaik dengan EstateVerse.</p>
                <div class="mt-4 position-relative">
                    <div class="mt-auto text-center">
                    <input type="text" class="form-control form-control-lg search-input" placeholder="Cari alamat">
                    <button class="btn btn-primary search-btn"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bagian di bawah Hero -->
<div class="container mt-5">
    <div class="row">
        <!-- Teks -->
        <div class="col-lg-8">
            <h1 class="fw-bold text-primary display-1">ESTATEVERSE</h1>
            <h1 class="fw-bold text-primary display-1">ESTATEVERSE</h1>
            <h1 class="fw-bold text-primary display-1">ESTATEVERSE</h1>
            <h1 class="fw-bold text-primary display-1">ESTATEVERSE</h1>
        </div>
        <!-- Kartu Login -->
        <div class="col-lg-4 d-flex align-items-center">
            <div class="card shadow-lg p-4 text-center">
                <img src="{{ asset('images/login-icon.png') }}" alt="Login Icon" class="mb-3" width="80">
                <p class="fw-bold">Masuk dan Temukan<br>Rumah Impian Anda</p>
                <a href="#" class="btn btn-primary btn-lg">Login</a>
            </div>
        </div>
    </div>
</div>

<!-- Kartu Properti -->
<div class="container mt-5">
    <div class="row">
        <!-- Data Dummy -->
        @for ($i = 0; $i < 9; $i++)
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="card h-100">
                <img src="{{ asset('images/house' . (($i % 3) + 1) . '.jpg') }}" class="card-img-top" alt="Properti {{ $i }}">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Properti Contoh {{ $i + 1 }}</h5>
                    <p class="card-text">Rp {{ number_format(100000000 + $i * 50000000, 0, ',', '.') }}</p>
                    <div class="mt-auto text-end">
                        <a href="#" class="btn btn-outline-primary">Detail</a>
                    </div>
                </div>
            </div>
        </div>
        @endfor
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-4">
        <nav>
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
            </ul>
        </nav>
    </div>
</div>
@endsection
