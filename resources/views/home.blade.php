@extends('layout.master')

@section('title', 'Homepage')

@section('content')

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="hero-section d-flex flex-column justify-content-between position-relative">
        <div class="hero-background"></div>

        <div class="container pt-5 position-relative" style="z-index: 2;">
            <div class="row">
                <div class="col-lg-6 offset-lg-6 text-white pe-5">
                    <h1 class="display-4 fw-bold mb-0">
                        Temukan Rumah Impian<br>Anda dengan 
                        <span class="text-green">Mudah.</span>
                    </h1>
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
    </div>
    
    <div class="my-5"></div>
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
                    <div class="card shadow-lg p-4 border-0 rounded-3">
                        <div class="row align-items-center">
                            <div class="col-4 text-center">
                                <img src="{{ asset('images/Homecard.png') }}" alt="EstateVerse Logo" class="img-fluid" width="80">
                            </div>

                            <div class="col-8 text-start">
                                <p class="text__login">Masuk dan temukan <span class="highlighted">Rumah Impian</span> Anda</p>
                                <a href="{{ route('login.index') }}" class="btn btn-lg"
                                   style="background-color: #44D7B5; border-color: #44D7B5; color: white;">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

        </div>
    </div>

    <div class="my-5"></div>

    <div class="container mt-4">
        <div class="mb-3">
            <h2 class="mb-1">Beberapa Pilihan</h2>
            <p class="mb-2">Real estate & Perumahan yang sedang dijual</p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($properties as $property)
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="{{ asset($property['image']) }}" class="card-img-top" alt="{{ $property['title'] }}">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $property['title'] }}</h5>
                            <p class="card-text">{{ $property['description'] }}</p>
                            <div class="mt-auto text-end">
                                <a href="#" class="btn btn-lg"
                                   style="background-color: #44D7B5; border-color: #44D7B5; color: white;">
                                   Lihat Detail
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="d-flex justify-content-center mt-4 mb-5">
        <a href="{{ route('property.list') }}" class="btn btn-lg" 
           style="background-color: #44D7B5; border-color: #44D7B5; color: white;">
           Lihat Lebih Banyak
        </a>
    </div>
@endsection

<style>
    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
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

    .text-green {
        color: #44D7B5;
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

    main {
        flex: 1;
    }

    footer {
        margin-top: 20px;
    }
</style>
