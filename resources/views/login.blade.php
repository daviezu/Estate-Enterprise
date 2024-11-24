@extends('layout.master')
@section('content')
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="row">
        <div class="col-md-6 d-none d-md-flex justify-content-center align-items-center" style="background-color: #000000; clip-path: polygon(50% 0%, 100% 100%, 0% 100%);">
            <div class="text-center text-white">
                <h3 class="mb-3">Belum punya akun?</h3>
                <p>Daftar untuk mengakses akun Anda dan nikmati fitur-fitur terbaik kami.</p>
                <a href="#" class="btn btn-outline-light">Register</a>
            </div>
        </div>
        
        <div class="col-md-6 d-flex justify-content-center align-items-center">
            <div class="card shadow p-4 d-flex flex-column justify-content-center align-items-center" style="width: 410px; height: 368px; border-radius: 20px; font-family: Montserrat, sans-serif; border: none">
                <h3 class="text-center mb-4" style="width: 59px; height: 24px; margin-top: -45px; margin-bottom: 100px; font-size: 20px; color: #43D3B2; font-weight: bold;">Login</h3>
                <form class="w-100 d-flex flex-column align-items-center">
                    <div class="username-form">
                        <input type="text" class="form-control" style="margin-top: 15px; margin-bottom: 20px; width: 283px; height: 32px; border-color: #43D2B1; border-radius: 5px; background-color: #F2F2F2; font-size: 12px" placeholder="Username" required>
                    </div>
                    <div class="password-form">
                        <input type="password" class="form-control" style="width: 283px; height: 32px; border-color: #43D2B1; border-radius: 5px; background-color: #F2F2F2; font-size: 12px" placeholder="Password" required>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="form-check">
                            <input class="form-check-input" style="border-color: #40C9A9" type="checkbox" id="rememberMe">
                            <label class="form-check-label" style="width: 62px; height: 15px; font-size: 12px;" for="rememberMe">Ingat saya</label>
                        </div>
                        <a href="#" class="text-decoration-none" style="width: 98px; height: 15px; color: #44D7B5; font-size: 12px">Lupa Password?</a>
                    </div>
                    <button type="submit" class="btn btn-primary" style="width: 106px; height: 32px; background-color: #44D7B5; border: none; border-radius: 5px; font-size: 12px; font-weight: bold">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection







{{-- Code design David Sebelumnya --}}

{{-- @extends('layout.master')
@section('content')
    <div class="container">
        <div class="login-box" style="background-color: #ffffff;">
            <p>Login</p>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                    aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Password" aria-label="Password"
                    aria-describedby="basic-addon1">
            </div>
            <div class="remember-me">
                <input type="checkbox">
                <label for="">Remember me</label>
                <a href="">Lupa Password?</a>
            </div>

            <form method="">

                <button type="button" class="btn">Login</button>
            </form>




        </div>
    </div>
@endsection --}}