@extends('layout.master')
@section('content')
    <div class="container my-1 mt-2 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-12 mb-4 d-flex justify-content-center">
                <div class="card"
                    style="width: 46.3125rem; height: 27.3125rem; border: none; border-radius: 20px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.60);">
                    <div class="card-body">
                        <!-- Profile Section -->
                        <div class="item d-flex align-items-center mb-4">
                            <div class="profile position-relative">
                                <img src="{{ asset('images/profiles/rose.png') }}" alt="Profile" class="profile-img">
                            </div>

                            <div class="ms-5">
                                <h5 style="font-family: Montserrat, sans-serif; margin-bottom: 0;">{{ $user->name }}</h5>
                            </div>
                        </div>

                        <!-- Contact Section -->
                        <div class="spacing" style="margin-left: 10px;">
                            <h5 class="contact"
                                style="color: #44D7B5; font-size: 20px; font-family: Montserrat, sans-serif; font-weight: bold; margin: 52px;">
                                Kontak</h5>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p class="email"
                                    style="font-weight: 600; font-size: 18px; font-family: Montserrat, sans-serif; margin-bottom: 0; margin-top: -20px; margin-left: 62px;">
                                    Email</p>
                            </div>
                            <div class="col-5">
                                <p class="email-text"
                                    style="font-family: Montserrat, sans-serif; margin-bottom: 0; font-size: 18px;     margin-top: -20px; margin-left: -100px;">
                                    {{ $user->email }}</p>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-6">
                                <p class="password"
                                    style="font-weight: 600; font-size: 18px; font-family: Montserrat, sans-serif; margin-bottom: 0; margin-left: 62px;">
                                    Nomor HP</p>
                            </div>
                            <div class="col-5">
                                <p class="pass-text"
                                    style="font-family: Montserrat, sans-serif; margin-bottom: 0; font-size: 18px; margin-left: -100px;">
                                    {{ $user->phone_number }}</p>
                            </div>

                            <div class="button">
                                <a href="{{ route('profile.edit') }}" class="btn btn-primary-edit"
                                    style="font-weight: bold; width: 74.92px; height: 34.5px; color: #FFFFFF; background-color: #44D7B5; border: none; font-family: Montserrat, sans-serif; font-size: 15px; float: right; margin-right: 50px; margin-top: 35px; text-align: left;">Edit</a>
                                <a href="{{ route('home') }}" class="btn btn-secondary"
                                    style="font-weight: bold; width: 74.92px; height: 34.5px; color: #FFFFFF; border: none; font-family: Montserrat, sans-serif; font-size: 15px; float: right; margin-right: 16px; margin-top: 35px;">Back</a>
                            </div>

                            <div class="col-1" style="margin-left: 633px; margin-top: -25px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                                    class="edit-icon-profile" viewBox="0 0 16 16">
                                    <path
                                        d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


<style>
    /* Styling Button */

    .btn-secondary {
        transition-duration: 0.4s !important;
    }

    .btn-primary-edit {
        transition-duration: 0.4s !important;
    }

    .btn-primary-edit:hover {
        background-color: #28bc99 !important;
    }

    /* Styling Card */
    .card {
        margin-top: 10px;
        border-radius: 20px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.60);
    }

    /* Styling Profile Section */
    .profile {
        width: 90px;
        height: 90px;
        border-radius: 50%;
        background-color: #f1f1f1;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: visible;
        border: 3px solid #44D7B5;
        margin-left: 55px;
    }

    .profile-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 50%;
    }

    .edit-icon-profile {
        fill: #FFFFFF;
    }


    .item {
        margin-top: 42px;
    }
</style>
