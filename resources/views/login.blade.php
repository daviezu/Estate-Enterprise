@extends('layout.master')
@section('content')
    <div class="login__content">
        {{-- displaying error  --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show position-absolute mx-auto p-3" role="alert"
                style="width: 80%;  border-radius: 10px; top:90; left:10%;">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show position-absolute mx-auto p-3" role="alert"
                style="width: 80%;  border-radius: 10px; top:90; left:10%;;">
                <strong>{{ session('error') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="spacing__content"></div>
        {{-- Assset  --}}
        <div class="triangle-asset" style="height: 0px;">
            <img src="{{ asset('images/Triangle.png') }}" alt="triangleasset"
                style="width: 15%; position: relative; left: 300px; bottom: 200px; z-index: 1;">
            <img src="{{ asset('images/Triangle.png') }}" alt="triangleasset"
                style="width: 15%; position: relative; right: 630px; top: 200px; z-index: 1;">
            <img src="{{ asset('images/Triangle.png') }}" alt="triangleasset"
                style="width: 15%; position: relative; left: -15px; top: 100px; z-index: 1;">
            <img src="{{ asset('images/Triangle.png') }}" alt="triangleasset"
                style="width: 10%; position: relative; left: -300px; top: 550px; z-index: 1;">
            <img src="{{ asset('images/Triangle.png') }}" alt="triangleasset"
                style="width: 15%; position: relative; left: 350px; top: 100px; z-index: 1;">
            <img src="{{ asset('images/Triangle.png') }}" alt="triangleasset"
                style="width: 12%; position: relative; right: -400px; top: 450px; z-index: 1;">

        </div>

        <!-- Card Login -->
        <div class="h-100 py-2 px-0 card-login position-relative z-2 mt-5">
            <div class="card shadow px-0 py-5 d-flex flex-column justify-content-center align-items-center w-100 mt-5"
                style=" border-radius: 20px; font-family: Montserrat, sans-serif; border: none;">
                <h3 class="text-center mb-4 fw-bold" style="color: #43D3B2; ">
                    Login</h3>
                <form action="{{ route('login.post') }}" method="POST"
                    class="w-100 d-flex flex-column align-items-center gap-3 ">
                    @csrf
                    <div class="w-100 px-5">
                        <input name="email" type="text" class="form-control py-2"
                            style=" border-color: #43D2B1; border-radius: 10px; background-color: #F2F2F2; font-size: 15px"
                            placeholder="Email" required>
                    </div>
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="w-100 px-5">
                        <input name="password" type="password" class="form-control py-2"
                            style="border-color: #43D2B1; border-radius: 10px; background-color: #F2F2F2; font-size: 15px"
                            placeholder="Password" required>
                    </div>
                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="d-flex  w-100 px-5">

                        <div class="d-flex flex-column gap-2">

                            <!-- "Ingat saya" -->
                            <div class="d-flex align-items-center">
                                <input class="form-check-input me-2"
                                    style="border-color: #40C9A9; font-size: 20px;"type="checkbox" id="rememberMe"
                                    name="rememberMe">
                                <label class="form-check-label my-auto" style="font-size: 13px;" for="rememberMe">Ingat
                                    saya</label>
                            </div>

                            <a href={{ route('register.index') }} class="text-decoration-none register-small"
                                style="color:black;  ">Belum punya akun? <span style="color: #44D7B5; ">Daftar
                                    Sini</span></a>
                        </div>

                        <!-- "Lupa Password?" -->
                        {{-- <a href="#" class="text-decoration-none  ms-auto"
                            style="color: #44D7B5; font-size: 14px;">Lupa Password?</a> --}}
                    </div>

                    {{-- Login Button --}}
                    <div class="d-flex justify-content-end ms-auto px-5">
                        <button type="submit" class="btn btn-primary-login px-5"
                            style="background-color: #44D7B5; border: none; border-radius: 5px; font-size: 15px; font-weight: bold; color: #FFFFFF">Login</button>
                    </div>
                </form>
            </div>
        </div>

        {{-- Segitiga --}}
        <div class="position-absolute px-0 me-0" style="top:0; right:0; z-index:10; ">
            <div>
                <img src="{{ asset('images/SegitigaBackground.png') }}" alt="Background" class="segitiga">
            </div>

            {{-- isi Content --}}
            <div class="content-section me-0 ">
                <h2 class="text-center mb-4 font-content" style="color: #43D3B2; font-weight: bold; ">Belum
                    punya akun?</h2>
                <p class="font-content-small">Daftar untuk mengakses akun Anda dan nikmati fitur-fitur terbaik kami.</p>

                <div class="d-flex justify-content-end" style="width: 283px;">
                    <a href="{{ route('register.index') }}">

                        <button type="submit" class="btn btn-primary-register"
                            style="width: 106px; height: 32px; background-color: black; color: #FFFFFF;  border-color:#44D7B5; border-radius: 5px; font-size: 12px; font-weight: bold;">Register</button>
                    </a>
                </div>

            </div>
        </div>
        <div class="spacing__content"></div>
    </div>
@endsection



{{-- Additional CSS --}}

<style>
    .segitiga {
        width: 100%;
        max-width: 640px;
        object-fit: cover;
    }

    .content-section {
        font-family: 'Montserrat', sans-serif;
        position: absolute;
        right: 2%;
        top: 22%;
    }

    .content-section h2.font-content {
        font-size: 25px;
    }

    .content-section p {
        font-size: 14px;
        color: #FFFFFF;
        width: 280px;
        margin-left: 25px;
    }

    .card-login {
        width: 450px;
        height: 380px;
        margin-left: 14%;

    }

    .card-login .d-flex .d-flex a.register-small {
        display: none;
        font-size: 14px;
    }

    .spacing__content {
        margin-top: 50px;
    }

    .login__content {
        overflow-x: hidden;
        overflow-y: hidden;
    }

    @media (max-width: 992px) {
        .segitiga {
            max-width: 500px;
        }
    }

    @media (max-width: 768px) {
        .segitiga {
            display: none;
        }

        div.card-login {
            width: 450px;
            margin: 0 auto;
        }

        .content-section {
            display: none;
        }

        .card-login .d-flex .d-flex a.register-small {
            display: block;
        }

    }

    @media (max-width: 480px) {
        div.card-login {

            width:360px;

            margin: 0 auto;
        }

        .card-login .d-flex .d-flex a.register-small {
            font-size: 12px;
        }


    }

    .alert-success {
        background-color: #3e9f89 !important;
        color: #FFFFFF !important;
        border: 1px solid #c3e6cb !important;
        font-family: Montserrat, sans-serif !important;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15) !important;
        position: relative;
        z-index: 1200;
    }

    .alert-danger {
        background-color: rgb(192, 26, 26) !important;
        color: #FFFFFF !important;
        border: 1px solid #c3e6cb !important;
        border-radius: 10px !important;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15) !important;
        font-family: Montserrat, sans-serif !important;
    }

    .text-decoration-none:hover {
        color: #28bc99 !important;
    }

    .btn-primary-login {
        transition-duration: 0.4s !important;
    }

    .btn-primary-register {
        transition-duration: 0.4s !important;
    }

    .btn-primary-login:hover {
        background-color: #28bc99 !important;
    }

    .btn-primary-register:hover {
        background-color: #44D7B5 !important;
    }
</style>
