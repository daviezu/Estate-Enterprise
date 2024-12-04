@extends('layout.master')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>EstateVerse</title>
    </head>

    <body>
        <div class="edit__content">
            <div class="infoHeader">
                <h4 class="fw-bold text-center mt-4"
                    style="color: #44D7B5; font-size: 24px; font-family: Montserrat, sans-serif; margin-bottom: 40px;">
                    Privasi dan Keamanan</h4>
                <img src="{{ asset('images/low-vision-regular-240 1.png') }}" class="icon" alt="Low Vision Icon">
            </div>

            <div class="container">
                <div class="edit card mt-4" style="margin-bottom: 75px;">
                    <form action="#" method="POST">
                        <div class="mb-3 text-left" style="margin-left: 80px;">

                            {{-- Form Section --}}
                            <div class="form__primary">
                                <div class="title">
                                    <p class="section__title" style="margin-left: 30px">Email</p>
                                    <p class="section__title" style="margin-left: 30px">Nomor telepon</p>
                                    <p class="section__title" style="margin-left: 30px">Password saat ini</p>
                                    <p class="section__title" style="margin-left: 30px">Password baru</p>
                                    <p class="section__title" style="margin-left: 30px">Konfirmasi password</p>
                                </div>
                                <div>
                                    <input class="input__section" type="text" class="form-control"
                                        style="font-size: 13px; opacity: 0.8; border: 2px solid #43D2B1; border-radius: 12px; font-family: Montserrat, sans-serif; width: 420px; height: 40px;"
                                        id="name" placeholder="Email" required>


                                    <input class="input__section" type="text" class="form-control"
                                        style="font-size: 13px; opacity: 0.8; border: 2px solid #43D2B1; border-radius: 12px; font-family: Montserrat, sans-serif; width: 420px; height: 40px;"
                                        id="name" placeholder="Nomor Telepon" required>

                                    <input class="input__section" type="password" class="form-control"
                                        style="font-size: 13px; opacity: 0.8; border: 2px solid #43D2B1; border-radius: 12px; font-family: Montserrat, sans-serif; width: 420px; height: 40px;"
                                        id="password" placeholder="Password saat ini" required>


                                    <input class="input__section" type="password" class="form-control"
                                        style="font-size: 13px; opacity: 0.8; border: 2px solid #43D2B1; border-radius: 12px; font-family: Montserrat, sans-serif; width: 420px; height: 40px;"
                                        id="password" placeholder="Password baru" required>


                                    <input class="input__section" type="password" class="form-control"
                                        style="font-size: 13px; opacity: 0.8; border: 2px solid #43D2B1; border-radius: 12px; font-family: Montserrat, sans-serif; width: 420px; height: 40px;"
                                        id="password" placeholder="Konfirmasi password" required>
                                </div>
                            </div>






                            {{-- Button --}}
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('profile.index') }}" class="btn btn-secondary me-4"
                                    style="font-weight: 500; margin-top: 30px; width: 123px; height: 42px; font-family: Montserrat, sans-serif; font-size: 15px; border-radius: 10px; padding: 9px; background-color: #c9c9c9; border:none; ">Batal</a>
                                <a href="{{ route('profile.edit.name.index') }}" class="btn btn-primary-save me-5"
                                    style="font-weight: 500; margin-top: 30px; width: 123px; height: 42px; font-family: Montserrat, sans-serif; font-size: 15px; border-radius: 10px; padding: 9px; color: #ffffff; background-color: #44D7B5; border: 2px solid #44D7B5;">
                                    Save </a>
                            </div>

                    </form>
                </div>
            </div>


    </body>

    </html>

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

        .input__section {
            margin-left: 200px;
            padding: 0 0 0 10px;
            margin-bottom: 20px;
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
            background-color: #44D7B5 !important;
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
