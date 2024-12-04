@extends('layout.master')
@section('content')
    <div class="infoHeader">
        <h4 class="fw-bold text-center mt-4"
            style="color: #44D7B5; font-size: 24px; font-family: Montserrat, sans-serif; margin-bottom: 40px;">Info Dasar
        </h4>
        <i class="bi bi-info-circle"
            style="font-size: 30px; color:#44D7B5; position: relative; bottom:8px; margin-left:20px;"></i>
    </div>
    <div class="container">
        <div class="edit card mt-4" style="margin-bottom: 75px;">
            <p style="margin-left: 30px">Gambar Profile</p>
            <form action="#" method="POST">
                <div class="mb-3 text-left" style="margin-left: 80px;">

                    <!-- Profile Picture -->
                    <img src="{{ asset('images/profiles/rose.png') }}" alt="Avatar" class="rounded-circle mb-3"
                        style="width: 100px; height: 100px; object-fit: cover; border: 3px solid #44D7B5; margin-left: -50px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.25);">

                    {{-- Button --}}
                    <a href="#" class="btn btn-primary-delete mt-2 mb-3"
                        style="margin-left: 25px; font-weight: 500; background-color: #c6c6c6; border: none; font-family: Montserrat, sans-serif; font-size: 15px; width: 135px; height: 33px; border-radius: 10px; color: #ffffff; padding: 5px;">Hapus
                        Foto</a>
                    <a href="#" class="btn btn-primary-change mt-2 mb-3"
                        style="margin-left: 25px; font-weight: 500; background-color: #44D7B5; border: none; font-family: Montserrat, sans-serif; font-size: 15px; width: 135px; height: 33px; border-radius: 10px; color: #FFFFFF; padding: 5px;">Ganti
                        Foto</a>
                </div>

                {{-- Form Section --}}
                <div class="form__section">
                    <p class="section__title" style="margin-left: 30px">Nama Depan</p>
                    <input type="text" class="form-control"
                        style="font-size: 13px; opacity: 0.8; border: 2px solid #43D2B1; border-radius: 12px; font-family: Montserrat, sans-serif; width: 420px; height: 40px; margin-left: 120px;"
                        id="name" placeholder="Nama Depan" required>
                </div>
                <div class="form__section">
                    <p class="section__title" style="margin-left: 30px">Nama Belakang</p>
                    <input type="text" class="form-control"
                        style="font-size: 13px; opacity: 0.8; border: 2px solid #43D2B1; border-radius: 12px; font-family: Montserrat, sans-serif; width: 420px; height: 40px; margin-left: 102px;"
                        id="name" placeholder="Nama Belakang" required>
                </div>
                <div class="form__section">
                    <p class="section__title" style="margin-left: 30px">Username</p>
                    <input type="text" class="form-control"
                        style="font-size: 13px; opacity: 0.8; border: 2px solid #43D2B1; border-radius: 12px; font-family: Montserrat, sans-serif; width: 420px; height: 40px; margin-left: 140px;"
                        id="username" placeholder="Username" required>
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
@endsection

<style>
    .form__section {
        display: flex;
        margin-bottom: 10px;
    }

    .infoHeader {
        margin-right: 1000px;
        display: flex;
        justify-content: center;
        align-items: center;
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
