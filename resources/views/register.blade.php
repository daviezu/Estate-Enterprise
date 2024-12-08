@extends('layout.master')
@section('content')
    {{-- displaying error  --}}
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
    <div class="col-md-6 d-flex justify-content-start align-items-start" style="margin: 200px 100px;">
        <div class="card shadow p-4 d-flex flex-column justify-content-center align-items-center"
            style="width: 500px; height: 550px; border-radius: 20px; font-family: Montserrat, sans-serif; border: none; z-index: 2; position: relative; margin-left: 335px; z-index: 200;">
            <h3 class="text-center mb-4"
                style="height: 24px; margin-top: 30px; margin-bottom: 100px; font-size: 30px; color: #43D3B2; font-weight: bold;">
                Sign Up</h3>
            <form action="{{ route('register.post') }}" method="POST" class="w-100 d-flex flex-column align-items-center">
                @csrf
                <div class="firstname-form">
                    <input type="text" name="firstName" class="form-control"
                        style="margin-top: 15px; margin-bottom: 20px; width: 290px; height: 40px; border-color: #43D2B1; border-radius: 10px; background-color: #F2F2F2; font-size: 15px"
                        placeholder="First Name" required>
                </div>
                <div class="lastname-form">
                    <input type="text" name="lastName" class="form-control"
                        style="margin-bottom:20px;  width: 290px; height: 40px; border-color: #43D2B1; border-radius: 10px; background-color: #F2F2F2; font-size: 15px"
                        placeholder="Last Name" required>
                </div>

                <div class="email-form">
                    <input type="text" name="email" class="form-control"
                        style="margin-bottom:20px;  width: 290px; height: 40px; border-color: #43D2B1; border-radius: 10px; background-color: #F2F2F2; font-size: 15px"
                        placeholder="E-mail" required>
                </div>

                <div class="phonenumber-form">
                    <input type="text" name="phoneNumber" class="form-control"
                        style="margin-bottom:20px;  width: 290px; height: 40px; border-color: #43D2B1; border-radius: 10px; background-color: #F2F2F2; font-size: 15px"
                        placeholder="Phone Number" required>
                </div>

                <div class="password-form">
                    <input type="password" name="password" class="form-control"
                        style="margin-bottom:20px;  width: 290px; height: 40px; border-color: #43D2B1; border-radius: 10px; background-color: #F2F2F2; font-size: 15px"
                        placeholder="Password" required>
                </div>

                <div class="confirm-form">
                    <input type="password" name="confirmPassword" class="form-control"
                        style="margin-bottom:20px;  width: 290px; height: 40px; border-color: #43D2B1; border-radius: 10px; background-color: #F2F2F2; font-size: 15px"
                        placeholder="Confirm Password" required>

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
                style="margin-top: -45px; margin-bottom: 100px; color: #43D3B2; font-weight: bold; font-size: 25px">Sudah
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
@endsection



{{-- Additional CSS --}}

<style>
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
        top: 73px;
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
</style>
