@extends('layout.master')
@section('content')
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
            style="width: 10%; position: relative; left: 500px; top: 500px; z-index: 1;">

    </div>

    <!-- Card Register -->
    <div class="col-md-6 d-flex justify-content-start align-items-start" style="margin: 200px 700px;">
        <div class="card shadow p-4 d-flex flex-column justify-content-center align-items-center"
            style="width: 410px; height: 444px; border-radius: 20px; font-family: Montserrat, sans-serif; border: none; z-index: 2; position: relative;">
            <h3 class="text-center mb-4"
                style="width: 82px; height: 24px; margin-top: -2px; margin-bottom: 100px; font-size: 20px; color: #43D3B2; font-weight: bold;">
                Sign Up</h3>
            <form action="{{ route('register.post') }}" method="POST" class="w-100 d-flex flex-column align-items-center">
                @csrf
                <div class="firstname-form">
                    <input type="text" name="firstName" class="form-control"
                        style="margin-top: 15px; margin-bottom: 20px; width: 283px; height: 32px; border-color: #43D2B1; border-radius: 5px; background-color: #F2F2F2; font-size: 12px"
                        placeholder="First Name" required>
                </div>
                <div class="lastname-form">
                    <input type="text" name="lastName" class="form-control"
                        style="margin-bottom:20px;  width: 283px; height: 32px; border-color: #43D2B1; border-radius: 5px; background-color: #F2F2F2; font-size: 12px"
                        placeholder="Last Name" required>
                </div>

                <div class="email-form">
                    <input type="text" name="email" class="form-control"
                        style="margin-bottom:20px;  width: 283px; height: 32px; border-color: #43D2B1; border-radius: 5px; background-color: #F2F2F2; font-size: 12px"
                        placeholder="E-mail" required>
                </div>

                <div class="password-form">
                    <input type="password" name="password" class="form-control"
                        style="margin-bottom:20px;  width: 283px; height: 32px; border-color: #43D2B1; border-radius: 5px; background-color: #F2F2F2; font-size: 12px"
                        placeholder="Password" required>
                </div>

                <div class="confirm-form">
                    <input type="password" name="confirmPassword" class="form-control"
                        style="margin-bottom:20px;  width: 283px; height: 32px; border-color: #43D2B1; border-radius: 5px; background-color: #F2F2F2; font-size: 12px"
                        placeholder="Confirm Password" required>
                    <div class="phonenumber-form">
                        <input type="text" name="phoneNumber" class="form-control"
                            style="margin-bottom:20px;  width: 283px; height: 32px; border-color: #43D2B1; border-radius: 5px; background-color: #F2F2F2; font-size: 12px"
                            placeholder="Phone Number" required>
                    </div>
                </div>

                {{-- Register Button --}}
                <div class="d-flex justify-content-end" style="width: 283px; margin-top: 5px;">
                    <button type="submit" class="btn btn-primary"
                        style="width: 106px; height: 32px; background-color: #44D7B5; border: none; border-radius: 5px; font-size: 12px; font-weight: bold;">Register</button>
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

                    <button type="submit" class="btn btn-primary"
                        style="width: 106px; height: 32px; background-color: black;  border-color:#44D7B5; border-radius: 5px; font-size: 12px; font-weight: bold;">Login</button>
                </a>
            </div>


        </div>
    </div>
@endsection



{{-- Additional CSS --}}

<style>
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
        top: 32%;
        transform: translateY(-50%);
    }


    .content-section p {
        font-size: 14px;
        color: #FFFFFF;
        width: 280px;
        margin-left: 25px;
    }
</style>
