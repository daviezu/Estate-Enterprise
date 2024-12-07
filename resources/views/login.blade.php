@extends('layout.master')
@section('content')
    {{-- displaying error  --}}
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 500px; text-align: center; margin-left: 1000px; border-radius: 10px;">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" ></button>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert" style="width: 500px; text-align: center; margin-left: 1000px; border-radius: 10px;">
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
            style="width: 10%; position: relative; right: -430px; top: 470px; z-index: 2;">   

    </div>

    <!-- Card Login -->
    <div class="col-md-6 d-flex justify-content-start align-items-start" style="margin: 200px 100px;">
        <div class="card shadow p-4 d-flex flex-column justify-content-center align-items-center"
            style="width: 500px; height: 380px; border-radius: 20px; font-family: Montserrat, sans-serif; border: none; margin-left: 335px; position: relative; z-index: 200;">
            <h3 class="text-center mb-4"
                style="height: 24px; margin-top: 30px; margin-bottom: 100px; font-size: 30px; color: #43D3B2; font-weight: bold;">
                Login</h3>
            <form action="{{ route('login.post') }}" method="POST" class="w-100 d-flex flex-column align-items-center">
                @csrf
                <div class="username-form">
                    <input name="email" type="text" class="form-control"
                        style="margin-top: 15px; margin-bottom: 20px; width: 290px; height: 40px; border-color: #43D2B1; border-radius: 10px; background-color: #F2F2F2; font-size: 15px"
                        placeholder="Username" required>
                </div>
                <div class="password-form">
                    <input name="password" type="password" class="form-control"
                        style="margin-bottom:20px;  width: 290px; height: 40px; border-color: #43D2B1; border-radius: 10px; background-color: #F2F2F2; font-size: 15px"
                        placeholder="Password" required>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-4" style="width: 283px;">

                    <!-- "Ingat saya" -->
                    <div class="form-check d-flex align-items-center" style="margin-top: -5px;">
                        <input class="form-check-input me-2" style="border-color: #40C9A9; font-size: 20px; margin-left: -27px;" type="checkbox" id="rememberMe"
                            name="rememberMe">
                        <label class="form-check-label" style="font-size: 13px;" for="rememberMe">Ingat saya</label>
                    </div>

                    <!-- "Lupa Password?" -->
                    <a href="#" class="text-decoration-none"
                        style="margin-top: -6px; color: #44D7B5; font-size: 14px;">Lupa Password?</a>
                </div>

                {{-- Login Button --}}
                <div class="d-flex justify-content-end" style="width: 283px; margin-top: 5px;">
                    <button type="submit" class="btn btn-primary-login"
                        style="width: 106px; height: 32px; background-color: #44D7B5; border: none; border-radius: 5px; font-size: 15px; font-weight: bold; color: #FFFFFF">Login</button>
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
                style="margin-top: -45px; margin-bottom: 100px; color: #43D3B2; font-weight: bold; font-size: 25px;">Belum
                punya akun?</h2>
            <p>Daftar untuk mengakses akun Anda dan nikmati fitur-fitur terbaik kami.</p>

            <div class="d-flex justify-content-end" style="width: 283px; margin-top: 50px;">
                <a href="{{ route('register.index') }}">

                    <button type="submit" class="btn btn-primary-register"
                        style="width: 106px; height: 32px; background-color: black; color: #FFFFFF;  border-color:#44D7B5; border-radius: 5px; font-size: 12px; font-weight: bold;">Register</button>
                </a>
            </div>

        </div>
    </div>
@endsection


{{-- Additional CSS --}}

<style>

    .body {
        overflow-x: hidden !important;
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

    .segitigacontainer {
        width: 100% !important;
        position: absolute;
        top: 73px;
        right: 0;
        display: flex;
        justify-content: flex-end;
        overflow: hidden !important;
        z-index: 3;
    }

    .segitiga {
        width: 100%;
        max-width: 740px;
        object-fit: cover;
    }

    .content-section {
        font-family: 'Montserrat', sans-serif;
        position: absolute;
        right: 2%;
        top: 22%;
    }


    .content-section p {
        font-size: 14px;
        color: #FFFFFF;
        width: 280px;
        margin-left: 25px;
    }
</style>
