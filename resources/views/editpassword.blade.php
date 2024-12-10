@extends('layout.master')
@section('content')
 
    <div class="container mt-5 pt-5">
            <div class="d-flex">
                <h4 class="fw-bold text-center  "
                    style="color: #44D7B5; font-size: 24px; font-family: Montserrat, sans-serif; margin-bottom: 40px;">
                    Privasi dan Keamanan</h4>
                <img src="{{ asset('images/low-vision-regular-240 1.png') }}" class="icon" alt="Low Vision Icon">
            </div>

            <div class="container">
                <div class=" p-3 border-4 rounded-4 shadow mt-4" style="margin-bottom: 75px;">
                    <form action="#" method="POST" class="d-flex">
                        <div class="d-flex flex-column p-4 w-100" >

                            {{-- Form Section --}}
                            <div class="d-flex w-100">
                                <div class="title">
                               
                                    <p class="section__title" >Nomor telepon</p>
                                    <p class="section__title" >Password saat ini</p>
                                    <p class="section__title" >Password baru</p>
                                    <p class="section__title" >Konfirmasi password</p>
                                </div>
                                <div>
                                 
                                <div class="d-flex flex-column w-100 gap-4">

                                    <input class="w-100 px-3" type="text" class="form-control"
                                        style="font-size: 13px; opacity: 0.8; border: 2px solid #43D2B1; border-radius: 12px; font-family: Montserrat, sans-serif;  height: 40px;"
                                        id="name" placeholder="Nomor Telepon" name="phoneNumber" value="{{$user->phone_number}}">

                                    <input class="w-100 px-3" type="password" class="form-control"
                                        style="font-size: 13px; opacity: 0.8; border: 2px solid #43D2B1; border-radius: 12px; font-family: Montserrat, sans-serif;  height: 40px;"
                                        id="password" placeholder="Password saat ini" name="currentPassword" required>


                                    <input class="input__section w-100 px-3" type="password" class="form-control"
                                        style="font-size: 13px; opacity: 0.8; border: 2px solid #43D2B1; border-radius: 12px; font-family: Montserrat, sans-serif;height: 40px;"
                                        id="password" placeholder="Password baru" name="newPassword" required>


                                    <input class="input__section w-100 px-3" type="password" class="form-control"
                                        style="font-size: 13px; opacity: 0.8; border: 2px solid #43D2B1; border-radius: 12px; font-family: Montserrat, sans-serif; height: 40px;"
                                        id="password" placeholder="Konfirmasi password" name="confirmNewPassword" required>
                                </div>
                                </div>
                            </div>

                            {{-- Button --}}
                            <div class="d-flex ms-auto mt-auto gap-3">
                                <a href="{{ route('profile.index') }}" class="btn btn-secondary"
                                    style="font-weight: 500; margin-top: 30px; width: 123px; height: 42px; font-family: Montserrat, sans-serif; font-size: 15px; border-radius: 10px; padding: 9px; background-color: #c9c9c9; border:none; ">Batal</a>
                                <form action="{{ route('update.password') }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-primary-save me-5"
                                        style="font-weight: 500; margin-top: 30px; width: 123px; height: 42px; font-family: Montserrat, sans-serif; font-size: 15px; border-radius: 10px; padding: 9px; color: #ffffff; background-color: #44D7B5; border: 2px solid #44D7B5; border: none;">
                                        Save
                                    </button>
                                </form>
                            </div>

                    </form>
                </div>
            </div>


    

    <style>
        .title p {
            width: 200px;
            margin-bottom: 40px;
        }

        .edit__content {
            display: flex;
            justify-content: center;
            flex-direction: column;
            justify-content: center;
            align-content: center;
        }

        .form__box {
            justify-content: center;
            padding: 100px 20px 200px 100px;
            border: solid 1px #000000;
            width: 1000px;
        }

        .form__primary {
            display: flex;
            margin-top: 10px;
        }

        .infoHeader {
            margin-right: 1000px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .icon {
            margin-left: 20px;
            margin-bottom: 12px;
            height: 30px;
        }

        .icon {
            color: #44D7B5;
        }

        .btn-primary-save,
        .btn-secondary {
            transition-duration: 0.6s !important;
        }

        .btn-primary-save:hover {
            color: #FFFFFF !important;
            background-color: #28bc99 !important;
        }

        .btn-secondary:hover {
            background-color: #908e8e !important;
        }


        .card {
            width: 100%;
            height: 27.3125rem;
            border-radius: 20px !important;
            padding: 20px;
            margin: auto;
            margin-top: 50px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.40);
        }

        .btn-primary-delete,
        .btn-primary-change {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.34);
            transition-duration: 0.6s !important;
        }

        .btn-primary-delete:hover {
            font-weight: bold !important;
            color: #FFFFFF !important;
            background-color: #DC3545 !important;
        }

        .btn-primary-change:hover {
            background-color: #28bc99 !important;
        }
    </style>
@endsection
