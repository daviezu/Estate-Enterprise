@extends('layout.master')
@section('content')
    <div class="register__content">
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

        <!-- Card Register -->
        <div class="h-100 py-2 px-0 card-register position-relative z-2 mt-5" style="margin-bottom: 100px; margin-left:10%">
            <div class="card shadow px-0 py-5 d-flex flex-column justify-content-center align-items-center w-100 mt-5"
                style=" border-radius: 20px; font-family: Montserrat, sans-serif; border: none;">
                <h3 class="text-center mb-4"
                    style="height: 24px; margin-top: 30px; margin-bottom: 100px; font-size: 30px; color: #43D3B2; font-weight: bold;">
                    Sign Up</h3>
                <form action="{{ route('register.post') }}" method="POST"
                    class="w-100 d-flex flex-column align-items-center">
                    @csrf
              
                    <div class="w-100 px-5">
                        <input name="fullname" type="text" class="form-control py-2"
                            style=" border-color: #43D2B1; border-radius: 10px; background-color: #F2F2F2; font-size: 15px"
                            placeholder="Nama Lengkap" required>
                    </div>
                    @error('fullname')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="w-100 px-5">
                        <input name="email" type="email" class="form-control py-2"
                            style=" border-color: #43D2B1; border-radius: 10px; background-color: #F2F2F2; font-size: 15px"
                            placeholder="Email" required>
                    </div>
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="w-100 px-5">
                        <input name="phoneNumber" type="number" class="form-control py-2"
                            style=" border-color: #43D2B1; border-radius: 10px; background-color: #F2F2F2; font-size: 15px"
                            placeholder="Nomor telepon" required>
                    </div>

                    @error('phoneNumber')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="w-100 px-5">
                        <input name="password" type="password" class="form-control py-2"
                            style=" border-color: #43D2B1; border-radius: 10px; background-color: #F2F2F2; font-size: 15px"
                            placeholder="Kata sandi" required>
                    </div>
                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="w-100 px-5">
                        <input name="confirmPassword" type="password" class="form-control py-2"
                            style=" border-color: #43D2B1; border-radius: 10px; background-color: #F2F2F2; font-size: 15px"
                            placeholder="Konfirmasi Kata sandi" required>
                    </div>
                    @error('confirmPassword')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="d-flex flex-column gap-2">
                        
                        <a href={{ route('login.index') }} class="text-decoration-none register-small"
                        style="color:black;  ">Sudah punya akun? <span style="color: #44D7B5; ">Masuk
                            Sini</span></a>
                    </div>

                    {{-- Register Button --}}
                    <div class="d-flex justify-content-end" style="width: 283px; margin-top: 5px;">
                        <button type="submit" class="btn btn-primary-register"
                            style="width: 106px; height: 32px; background-color: #44D7B5; color: #FFFFFF; border: none; border-radius: 5px; font-size: 12px; font-weight: bold;">Register</button>
                    </div>
                </form>
            </div>
        </div>

        {{-- Segitiga --}}
        <div class="segitigacontainer">
            <div>
                <img src="{{ asset('images/SegitigaBackground.png') }}" alt="Background" class="segitiga">
            </div>

            {{-- isi Content --}}
            <div class="content-section">
                <h2 class="text-center mb-4"
                    style="margin-top: -45px; margin-bottom: 100px; color: #43D3B2; font-weight: bold; font-size: 25px">
                    Sudah
                    punya akun?</h2>
                <p>Masuk untuk mengakses akun Anda dan nikmati fitur-fitur terbaik kami.</p>

                <div class="d-flex justify-content-end" style="width: 283px; margin-top: 50px;">
                    <a href="{{ route('login.index') }}">

                        <button type="submit" class="btn btn-primary-login"
                            style="width: 106px; height: 32px; background-color: black; color: #FFFFFF;  border-color:#44D7B5; border-radius: 5px; font-size: 12px; font-weight: bold;">Login</button>
                    </a>
                </div>

            </div>
        </div>
    </div>
@endsection



{{-- Additional CSS --}}

<style>
    .card-register {
        width: 450px;
        height: 380px;
        margin-left: 14%;

    }

    .card-register .d-flex .d-flex a.register-small {
        display: none;
        font-size: 14px;
    }

    input.form-control {
        margin-bottom: 20px;
    }

    .btn-primary-register {
        transition-duration: 0.4s !important;
    }

    .btn-primary-login {
        transition-duration: 0.4s !important;
    }

    .btn-primary-register:hover {
        background-color: #28bc99 !important;
    }

    .btn-primary-login:hover {
        background-color: #44D7B5 !important;
    }

    .segitigacontainer {
        position: absolute;
        top: 50px;
        right: 0;
        display: flex;
        justify-content: flex-end;
        overflow: hidden;
        z-index: 3;
    }

    .segitiga {
        width: 740px;
        object-fit: cover;
    }

    .content-section {
        font-family: 'Montserrat', sans-serif;
        position: absolute;
        right: 7%;
        top: 22%;
    }

    .content-section p {
        font-size: 14px;
        color: #FFFFFF;
        width: 280px;
        margin-left: 25px;
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

        div.card-register {
            width: 450px;
            margin: 0 auto;
        }

        .content-section {
            display: none;
        }

        .card-register .d-flex .d-flex a.register-small {
            display: block;
        }

    }

    @media (max-width: 480px) {
        div.card-register {

            width:360px;
            margin: 0 auto;
        }

        .card-register .d-flex .d-flex a.register-small {
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
