@extends('layout.master')
@section('content')
    <div class="container">

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

        <div class="container-fluid mt-5 pt-5">

            <div class="profile-section" >
    
                <!-- Info Dasar -->
                <i class="bi bi-info-circle"
                    style="font-size: 25px; color:#44D7B5; margin-left: 150px; position: relative; top: 27px; "></i>
                <h5 class="fw-bold mb-4" style="font-size: 25px; font-family: Montserrat, sans-serif; color: #44D7B5;">Info
                    Dasar
                </h5>
                <div class="profile-card-info d-flex flex-column" style="margin-bottom: 70px;">
                    <div class="text-center my-3">
                        <p class="mt-2 text" style="font-size: 16px; font-family: Montserrat, sans-serif;">Gambar Profile</p>
                        {{-- <img src="{{ asset('images/profiles/rose.png') }}" alt="Profile Image" clgitass="profile-image"
                            style="margin-bottom: 30px;"> --}}
                        <div class="profile__picture">
                            <img src="{{ asset($user->picture_path) }}" alt="Profile Image" clgitass="profile-image"
                                style="margin-bottom: 30px;">
                        </div>
                    </div>
    
                    <table class="table" style="margin-bottom: 50px;">
    
                        <tr style="border-bottom: 2px solid #dee2e6;">
                            <th
                                style="font-size: 16px; font-family: Montserrat, sans-serif; font-weight: 400; padding-bottom: 19px;">
                                Nama Lengkap</th>
                            <td style="font-size: 16px; font-family: Montserrat, sans-serif; ">
                                {{ $user->fullname }}</td>
                        </tr>
    
                        
    
                    </table>
    
                    <div class="button mt-auto ms-auto">
                        <a href="{{ route('profile.edit.name.index') }}" class="btn btn-primary"
                            style="font-weight: bold; color: #FFFFFF; background-color: #44D7B5; border: none; font-family: Montserrat, sans-serif; font-size: 16px;  width: 145px; height: 48px; border-radius: 10px; padding-top: 14px; margin-top: -5px;">Edit
                            Profile</a>
                    </div>
    
                </div>
    
    
                <!-- Privasi & Keamanan -->
                <i class="bi bi-eye-slash"
                    style="font-size: 25px; color: #44D7B5; margin-left: 275px; position: relative; top: 28px;"></i>
                <h5 class="fw-bold mb-4" style="font-size: 25px; font-family: Montserrat, sans-serif; color: #44D7B5;">Privasi &
                    Keamanan</h5>
                <div class="profile-card-privacy d-flex flex-column" style="margin-bottom: 110px;">
    
                    <table class="table" style="margin-bottom: 50px;">
    
                        <tr style="border-bottom: 2px solid #dee2e6;">
                            <th
                                style="font-size: 16px; font-family: Montserrat, sans-serif; font-weight: 400; padding-bottom: 19px;">
                                Email</th>
                            <td style="font-size: 16px; font-family: Montserrat, sans-serif;">
                                {{ $user->email }}</td>
                        </tr>
                        <tr style="border-bottom: 2px solid #dee2e6;">
                            <th
                                style="font-size: 16px; font-family: Montserrat, sans-serif; font-weight: 400; padding-bottom: 19px;">
                                Nomor Telepon</th>
                            <td style="font-size: 16px; font-family: Montserrat, sans-serif; ">
                                {{ $user->phone_number }}</td>
                        </tr>
                        <tr style="border-bottom: 2px solid #dee2e6;">
                            <th
                                style="font-size: 16px; font-family: Montserrat, sans-serif; font-weight: 400; padding-bottom: 19px;">
                                Password</th>
                            <td style="font-size: 16px; font-family: Montserrat, sans-serif; ">
                                ************</td>
                        </tr>
    
                        
    
                    </table>
    
                    <div class="button ms-auto mt-auto">
                        <a href="{{ route('profile.edit.password.index') }}" class="btn btn-primary ms-auto"
                            style="font-weight: bold; color: #FFFFFF; background-color: #44D7B5; border: none; font-family: Montserrat, sans-serif; font-size: 16px;  width: 145px; height: 48px; border-radius: 10px; padding-top: 14px; margin-top: -22px;">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    @endsection


    <style>

       
        .profile__picture img {
            border-radius: 50px;
            width: 100px;
            height: 100px;
            object-fit: cover;
        }

        .alert-danger {
            background-color: rgb(192, 26, 26) !important; 
            color: #FFFFFF !important;
            border: 1px solid #c3e6cb !important;
            border-radius: 5px;
            padding: 10px 15px;
            margin-bottom: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15) !important;
            position: relative;
            font-family: Montserrat, sans-serif;
        }

        .alert-success {
            background-color: #44D7B5 !important;
            color: #FFFFFF !important;          
            border: 1px solid #c3e6cb !important;
            border-radius: 5px !important;
            font-family: Montserrat, sans-serif !important;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15) !important;
            position: relative;
        }


        .btn-primary {
            transition-duration: 0.4s !important;
        }

        .btn-primary:hover {
            background-color: #28bc99 !important;
        }

        .profile-card-info {
            width: 100%;
            height: 420px;
            border: 1px solid #dee2e6;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.20);
        }

        .profile-card-privacy {
            width: 100%;
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
