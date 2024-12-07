@extends('layout.master')

@section('title', 'Homepage')

@section('content')

    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session('success') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    {{-- herosection buat sambungin ke cssnya  --}}
    <div class="hero-section d-flex flex-column justify-content-between position-relative">
        {{-- gambarbackground header --}}
        <div class="hero-background"></div>

        {{-- header --}}
        <div class="container pt-5 position-relative" style="z-index: 2;">
            <div class="row">
                {{-- teksbagian header --}}
                <div class="col-lg-6 offset-lg-6 text-white" style="padding-right: 50px;">
                    <h1 class="display-4 fw-bold mb-0">Temukan Rumah Impian<br>Anda dengan <span
                            class="text-green">Mudah.</span></h1>
                    <p class="lead mt-3">Cari properti terbaik dengan EstateVerse.</p>
                </div>
            </div>
        </div>

        {{-- searchbar --}}
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
    </div>
    
    <div class="margin__spacing"></div>

    {{-- estateverse 4x --}}
    <div class="container">
        <div class="row">

            <div class="col-lg-8">
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
                                <p class="text__login">Masuk dan temukan <span class="highlighted">Rumah Impian</span> Anda</p>
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
            <h2 class="mb-1">Real estate & Perumahan untuk dijual</h2>
            <p>Menampilkan 100+ hasil di pencarian</p>
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
    <div class="d-flex justify-content-center mt-4">
        <nav>
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
            </ul>
        </nav>
    </div>
@endsection

<style>

    body {
        margin: 0;
        padding: 0;
    }

    .hero-section {
        position: relative;
        margin: 0;
        padding: 0;
        overflow: hidden;
        min-height: 476px;
    }

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


    .hero-search-container {
        width: 100%;
        max-width: 500px;
        border: 1px solid rgb(168, 168, 168);
        border-radius: 10px;
        background-color: transparent;
        display: flex;
        align-items: center;
        padding: 0 10px;
    }

    .hero-search-container form {
        width: 100%;
        display: flex;
        align-items: center;
    }

    .hero-search-container .form-control {
        border: none;
        font-size: 15px;
        background-color: transparent;
        color: white;
    }

    .hero-search-container .form-control::placeholder {
        color: white;
    }

    .hero-search-container .form-control:focus {
        outline: none;
        box-shadow: none;
        background-color: transparent;
    }

    .hero-search-container .btn {
        background-color: transparent;
        border: none;
        padding: 0;
    }

    .hero-search-container .btn img {
        width: 24px;
        height: 24px;
    }


    .text-stroke-green {
        color: white;
        -webkit-text-stroke: 2px #44D7B5;
        text-stroke: 2px #44D7B5;
    }

    .text-green {
        color: #44D7B5;
    }


    .col-lg-6.offset-lg-6 {
        padding-right: 50px;
    }

    .text1 {
        font-weight: bolder;
        font-size: 100px;
        color: #44D7B5;
        outline: #44D7B5;
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

    .highlighted{
        color: #44D7B5;
    }

    .text__login {
        text-align: left;
    }

    #logincard {
        scale: 1.7;
    }


    @keyframes text1__animation {
        0% {
            color: #44D7B5;
            outline: #44D7B5;
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
            outline: #44D7B5;
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
            outline: #44D7B5;
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
</style>
