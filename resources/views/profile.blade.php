@section('content')
@extends('layout.master')


<div class="container">
    <div class="profile-section" style="margin-top: -10px; margin-left: 60px;">

        <!-- Info Dasar -->
        <i class="bi bi-info-circle" style="font-size: 25px; color:#44D7B5; margin-left: 150px; position: relative; top: 27px; "></i>
        <h5 class="fw-bold mb-4" style="font-size: 25px; font-family: Montserrat, sans-serif; color: #44D7B5;">Info Dasar</h5>
        <div class="profile-card-info" style="margin-bottom: 70px;">
            <div class="text-center my-3">
                <p class="mt-2 text" style="font-size: 16px; font-family: Montserrat, sans-serif;">Gambar Profile</p>
                <img src="{{ asset('images/profiles/rose.png') }}" alt="Profile Image" class="profile-image" style="margin-bottom: 30px;">              
            </div>


            <table class="table" style="margin-bottom: 50px;">

                <tr style="border-bottom: 2px solid #dee2e6;">
                    <th style="font-size: 16px; font-family: Montserrat, sans-serif; font-weight: 400; padding-bottom: 19px;">Nama Depan</th>
                    <td style="font-size: 16px; font-family: Montserrat, sans-serif; padding-right: 83px;">Roseanne</td>
                </tr>

                <tr style="border-bottom: 2px solid #dee2e6;">
                    <th style="font-size: 16px; font-family: Montserrat, sans-serif; font-weight: 400; padding-bottom: 19px; padding-top: 21px;">Nama Belakang</th>
                    <td style="font-size: 16px; font-family: Montserrat, sans-serif; padding-top: 21px; padding-left: -95px;">Park</td>
                </tr>

                <tr style="border-bottom: 2px solid #dee2e6;">
                    <th style="font-size: 16px; font-family: Montserrat, sans-serif; font-weight: 400; padding-bottom: 19px; padding-top: 21px;">Username</th>
                    <td style="font-size: 16px; font-family: Montserrat, sans-serif; padding-top: 21px; padding-left: -95px;">rose</td>
                </tr>

            </table>
            
            
            <div class="button">
                <a href="{{ route('profile.edit') }}" class="btn btn-primary" style="font-weight: bold; color: #FFFFFF; background-color: #44D7B5; border: none; font-family: Montserrat, sans-serif; font-size: 16px; float: right; margin-right: 50px; width: 145px; height: 48px; border-radius: 10px; padding-top: 14px; margin-top: -5px;">Edit Profile</a>
            </div>

        </div>


        <!-- Privasi & Keamanan -->
        <i class="bi bi-eye-slash" style="font-size: 25px; color: #44D7B5; margin-left: 275px; position: relative; top: 28px;"></i>
        <h5 class="fw-bold mb-4" style="font-size: 25px; font-family: Montserrat, sans-serif; color: #44D7B5;">Privasi & Keamanan</h5>
        <div class="profile-card-privacy" style="margin-bottom: 110px;">
            
            <table class="table" style="margin-bottom: 50px;">

                <tr style="border-bottom: 2px solid #dee2e6;">
                    <th style="font-size: 16px; font-family: Montserrat, sans-serif; font-weight: 400; padding-top: 25px; padding-bottom: 19px;">Email</th>
                    <td style="font-size: 16px; font-family: Montserrat, sans-serif; padding-left: 375px; padding-top: 25px;">roseannepark@gmail.com</td>
                </tr>

                <tr style="border-bottom: 2px solid #dee2e6;">
                    <th style="font-size: 16px; font-family: Montserrat, sans-serif; font-weight: 400; padding-top: 25px; padding-bottom: 19px;">Nomor Telepon</th>
                    <td style="font-size: 16px; font-family: Montserrat, sans-serif; padding-left: 375px; padding-top: 25px;">085261679011</td>
                </tr>

                <tr style="border-bottom: 2px solid #dee2e6;">
                    <th style="font-size: 16px; font-family: Montserrat, sans-serif; font-weight: 400; padding-bottom: 19px; padding-top: 21px;">Password</th>
                    <td style="font-size: 16px; font-family: Montserrat, sans-serif; padding-top: 21px; padding-left: 375px;">*******************</td>
                </tr>

            </table>

            <div class="button">
                <a href="{{ route('profile.editpassword') }}" class="btn btn-primary" style="font-weight: bold; color: #FFFFFF; background-color: #44D7B5; border: none; font-family: Montserrat, sans-serif; font-size: 16px; float: right; margin-right: 50px; width: 145px; height: 48px; border-radius: 10px; padding-top: 14px; margin-top: -22px;">Edit</a>
            </div>
        </div>
    </div>
@endsection


<style>

    .btn-primary {
        transition-duration: 0.4s !important;
    }

    .btn-primary:hover {
        background-color: #28bc99 !important;
    }

    .profile-card-info {
        width: 1189px;
        height: 569px;
        border: 1px solid #dee2e6;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.20);
    }

    .profile-card-privacy {
        width: 1189px;
        height: 320px;
        border: 1px solid #dee2e6;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.20);
    }

    .profile-image {
        width: 147.97px;
        height: 147.97px;
        border-radius: 50%;
        object-fit: cover;
        border: 5px solid #44D7B5;
    }

</style>
