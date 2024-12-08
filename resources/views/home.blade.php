@extends('layout.master')

@section('title', 'Homepage')

@section('content')

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session('error') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif


    <div class="hero-section text-light d-flex align-items-center py-5">
        <div class="overlay"></div>
        <div class="container position-relative z-1">
            <div class="row">
                <div class="col-md-6 ms-auto">
                    <h1 class="display-4 fw-bold">Temukan Rumah Impian<br>Anda dengan <span class="text-green">Mudah.</span>
                    </h1>
                    <p class="lead">Cari properti terbaik dengan EstateVerse.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-lg py-3">


        {{--   herosection buat sambungin ke cssnya 
        <div class="hero-section d-flex flex-column justify-content-between position-relative">
            gambarbackground header
            <div class="hero-background"></div>
    
            header
            <div class="container pt-5 position-relative" style="z-index: 2;">
                <div class="row">
                    teksbagian header
                    <div class="col-lg-6 offset-lg-6 text-white" style="padding-right: 50px;">
                        <h1 class="display-4 fw-bold mb-0">Temukan Rumah Impian<br>Anda dengan <span
                                class="text-green">Mudah.</span></h1>
                        <p class="lead mt-3">Cari properti terbaik dengan EstateVerse.</p>
                        <div class="d-flex justify-content-start mt-4 mb-5">
                            <a href="{{ route('login.index') }}" class="btn btn-lg" 
                               style="background-color: #44D7B5; border-color: #44D7B5; color: white;">
                               About Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="container mb-4 position-relative" style="z-index: 2;">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="hero-search-container mx-auto">
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Cari alamat" aria-label="Search">
                                <button class="btn" type="submit">
                                    <img src="{{ asset('images/Search Icon.png') }}" alt="search">
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- estateverse 4x --}}
        <div class="container">
            <div class="row">

                <div class="col-lg-8 mt-5 estateverse__title">
                    <h1 class="text1">ESTATEVERSE</h1>
                    <h1 class="text2">ESTATEVERSE</h1>
                    <h1 class="text1">ESTATEVERSE</h1>
                    <h1 class="text2">ESTATEVERSE</h1>
                </div>

                @if (!session('is_logged_in', false))
                    <div class="col-lg-3 d-flex align-items-center" id="logincard">
                        <div class="card shadow-lg p-4" style="border: none; border-radius: 12px;">
                            <div class="row align-items-center">
                                <div class="col-4 text-center">
                                    <img src="{{ asset('images/Homecard.png') }}" alt="EstateVerse Logo" class="img-fluid"
                                        width="80">
                                </div>

                                <div class="col-8 text-left">
                                    <p class="text__login">Masuk dan temukan <span class="highlighted">Rumah Impian</span>
                                        Anda</p>
                                    <a href="{{ route('login.index') }}" class="btn btn-lg"
                                        style="background-color: #44D7B5; border-color: #44D7B5; color: white;">Login</a>
                @endif
            </div>

        </div>
    </div>
    </div>
    </div>
    </div>
    <div class="margin__spacing"></div>

    <div class="container mt-4">
        <div class="mb-3">
            <h2 class="mb-1">Beberapa Pilihan</h2>
            <p class="mb-2">Real estate & Perumahan yang sedang dijual</p>
        </div>
    </div>

    {{-- ini  buat konten cardnya ya --}}
    <div class="container">
        <div class="row">
            @foreach ($properties as $property)
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset($property['image']) }}" class="card-img-top" alt="{{ $property['title'] }}">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $property['title'] }}</h5>
                            <p class="card-text">{{ $property['description'] }}</p>
                            <div class="mt-auto text-end">
                                <a href="#" class="btn btn-lg"
                                    style="background-color: #44D7B5; border-color: #44D7B5; color: white;">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- Pagination --}}
    <div class="d-flex justify-content-center mt-4 mb-5">
        <a href="{{ route('property.list') }}" class="btn btn-lg"
            style="background-color: #44D7B5; border-color: #44D7B5; color: white;">
            Lihat Lebih Banyak
        </a>
    </div>

    <div class="margin__spacing"></div>
    <div class="container mt-4">
        <div class="mb-5">
            <h1>Apa Kata Mereka Tentang <span><img src="{{ asset('images/EstateVerse Logo.png') }}" class="logo"
                        alt=""></span> ?</h1>
        </div>
    </div>

    <div class="testimony">
        <div class="testimony__card">
            <h5>Sarah - Pembeli Rumah</h5>
            <p>"EstateVerse mempermudah saya dalam mencari rumah impian. Platform ini intuitif dan saya bisa melihat banyak
                pilihan properti dalam waktu singkat. Agen yang bekerja sama juga sangat responsif dan profesional."</p>
        </div>
        <div class="testimony__card">
            <h5>Rizal - Agen Properti</h5>
            <p>"EstateVerse memberikan akses kepada lebih banyak calon pembeli yang serius. Dalam beberapa minggu saja, saya
                berhasil menjual beberapa properti melalui platform ini. Sistemnya memudahkan saya untuk mengelola listing
                dan berinteraksi dengan pembeli."</p>
        </div>
        <div class="testimony__card">
            <h5>Lisa - Penyewa Apartemen</h5>
            <p>"Saya sangat terbantu dengan EstateVerse saat mencari apartemen untuk disewa. Filter pencarian yang detail
                membantu saya menemukan unit yang sesuai dengan kebutuhan dan anggaran saya. Prosesnya cepat dan tanpa
                ribet!"</p>
        </div>
    </div>
    <div class="testimony2">
        <div class="testimony__card">
            <h5>Budi - Pemilik Properti</h5>
            <p>"Saya merasa EstateVerse sangat memudahkan saya untuk memasarkan properti saya kepada calon pembeli. Tidak
                perlu repot-repot mempromosikan sendiri, platform ini sudah melakukan semuanya untuk saya."</p>
        </div>
        <div class="testimony__card">
            <h5>Dina - Investor Properti</h5>
            <p>"Sebagai investor properti, saya selalu mencari peluang terbaik. EstateVerse membantu saya menemukan properti
                baru di lokasi-lokasi strategis dengan mudah. Platform ini sangat informatif dan mendukung kebutuhan saya."
            </p>
        </div>

    </div>

    {{-- images background --}}

    {{-- <div class="images_testimony">
            <img src={{asset('images/assets/house.png')}} class="testimony__image" alt="">
            <img src={{asset('images/assets/laptop.png')}} class="testimony__image2" alt="">
        </div> --}}
    </div>
@endsection



<style>
    @media (max-width: 992px) {
        .estateverse__title h1 {
            font-size: 90px;
        }
    }

    @media (max-width: 768px) {
        .estateverse__title h1 {
            font-size: 80px;
        }
    }

    @media (max-width: 576px) {
        .estateverse__title h1 {
            font-size: 70px;
        }
    }

    @media (max-width: 480px) {
        .estateverse__title h1 {
            font-size: 50px;
        }
    }

    .hero-section {
        background-image: url('{{ asset('images/property/property3.png') }}');
        background-size: cover;
        background-position: center;
        height: 60vh;
        margin-top: 0;
        top: 0;
    }

    /* .overlay {
        background-color: rgba(0, 0, 0, 0.5);
        position:relative;
        top:0;
        left:0;
        width:100%;
        height:100%;
    } */


    .testimony {
        display: flex;
        gap: 100px;
        justify-content: center;
        align-items: center;
        margin-bottom: 70px;
    }

    .testimony2 {
        display: flex;
        justify-content: center;
        gap: 100px;
        margin-bottom: 70px;
    }

    .testimony__card {
        width: 400px;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    body {
        margin: 0;
        padding: 0;
    }

    /* .hero-section {
        position: relative;
        margin: 0;
        padding: 0;
        overflow: hidden;
        min-height: 476px;
    } */

    .hero-background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('{{ asset('images/property/property3.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        z-index: 1;
    }

    .hero-section .container {
        position: relative;
        z-index: 2;
    }

    .text-green {
        color: #44D7B5;
    }

    .col-lg-6.offset-lg-6 {
        padding-right: 50px;
    }

    .logo {
        width: 250px;
        margin-bottom: 10px;
    }

    .text1 {
        font-weight: bolder;
        font-size: 100px;
        color: #44D7B5;
        animation: text1__animation ease-in-out 10s infinite;
    }

    .text2 {
        font-weight: bolder;
        font-size: 100px;
        color: white;
        animation: text2__animation ease-in-out 10s infinite;
        text-shadow:
            -1px -1px 0 #44D7B5,
            1px -1px 0 #44D7B5,
            -1px 1px 0 #44D7B5,
            1px 1px 0 #44D7B5;
    }

    .margin__spacing {
        margin-bottom: 100px;
    }

    .highlighted {
        color: #44D7B5;
    }

    .text__login {
        text-align: left;
    }

    #logincard {
        transform: scale(1.7);
    }

    @keyframes text1__animation {
        0% {
            color: #44D7B5;
        }

        50% {
            color: white;
            text-shadow:
                -1px -1px 0 #44D7B5,
                1px -1px 0 #44D7B5,
                -1px 1px 0 #44D7B5,
                1px 1px 0 #44D7B5;
        }

        100% {
            color: #44D7B5;
        }
    }

    @keyframes text2__animation {
        0% {
            color: white;
            text-shadow:
                -1px -1px 0 #44D7B5,
                1px -1px 0 #44D7B5,
                -1px 1px 0 #44D7B5,
                1px 1px 0 #44D7B5;
        }

        50% {
            color: #44D7B5;
        }

        100% {
            color: white;
            text-shadow:
                -1px -1px 0 #44D7B5,
                1px -1px 0 #44D7B5,
                -1px 1px 0 #44D7B5,
                1px 1px 0 #44D7B5;

        }
    }

    @media (max-width: 991.98px) {

        .col-lg-6.offset-lg-6 {
            padding-right: 15px;
            padding-left: 15px;
        }


        .hero-search-container {
            max-width: 100%;
            height: 40px;
        }
    }

    main {
        flex: 1;
    }

    footer {
        margin-top: 20px;

        /* Jarak di atas footer */
    }
</style>
