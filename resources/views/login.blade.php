@extends('layout.master')
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
@endsection
