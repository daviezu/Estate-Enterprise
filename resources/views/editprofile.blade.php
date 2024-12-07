@extends('layout.master')
@section('content')
    <div class="infoHeader">
        <h5 class="fw-bold mb-4"
            style="font-size: 25px; font-family: Montserrat, sans-serif; color: #44D7B5; margin-left: -105px;">Info Dasar
        </h5>
        <i class="bi bi-info-circle"
            style="font-size: 30px; color:#44D7B5; position: relative; bottom:8px; margin-left:20px;"></i>

    </div>
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

        <div class="edit card mt-4" style="margin-bottom: 75px;">
            <p style="margin-left: 30px">Gambar Profile</p>
            <div class="mb-3 text-left" style="margin-left: 80px;">

                <!-- Profile Picture -->
                <img src="{{ asset('images/profiles/rose.png') }}" alt="Avatar" class="rounded-circle mb-3"
                    style="width: 100px; height: 100px; object-fit: cover; border: 3px solid #44D7B5; margin-left: -50px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.25);">

                {{-- Button --}}
                <form action="{{ route('delete.profile.picture') }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-primary-delete mt-2 mb-3"
                        style="margin-left: 25px; font-weight: 500; background-color: #c6c6c6; border: none; font-family: Montserrat, sans-serif; font-size: 15px; width: 135px; height: 33px; border-radius: 10px; color: #ffffff; padding: 5px;">
                        Hapus Foto
                    </button>
                </form>
                <form action="{{ route('update.profile.picture') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="file" name="profilePicture" required>
                    @error('profilePicture')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <button type="submit" class="btn btn-primary-change mt-2 mb-3"
                        style="margin-left: 25px; font-weight: 500; background-color: #44D7B5; border: none; font-family: Montserrat, sans-serif; font-size: 15px; width: 135px; height: 33px; border-radius: 10px; color: #FFFFFF; padding: 5px;">
                        Ganti Foto
                    </button>
                </form>
            </div>
            {{-- Form Section --}}
            <form action="{{ route('update.profile.name') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form__section">
                    <p class="section__title" style="margin-left: 30px">Nama Depan</p>
                    <input type="text" class="form-control"
                        style="font-size: 13px; opacity: 0.8; border: 2px solid #43D2B1; border-radius: 12px; font-family: Montserrat, sans-serif; width: 420px; height: 40px; margin-left: 120px;"
                        id="name" placeholder="Nama Depan" name="firstName" required>
                </div>
                <div class="form__section">
                    <p class="section__title" style="margin-left: 30px">Nama Belakang</p>
                    <input type="text" class="form-control"
                        style="font-size: 13px; opacity: 0.8; border: 2px solid #43D2B1; border-radius: 12px; font-family: Montserrat, sans-serif; width: 420px; height: 40px; margin-left: 102px;"
                        id="name" placeholder="Nama Belakang" name="lastName" required>
                </div>
                <div class="form__section">
                    <p class="section__title" style="margin-left: 30px">Username</p>
                    <input type="text" class="form-control"
                        style="font-size: 13px; opacity: 0.8; border: 2px solid #43D2B1; border-radius: 12px; font-family: Montserrat, sans-serif; width: 420px; height: 40px; margin-left: 140px;"
                        id="username" placeholder="Username" name="username">
                </div>

                {{-- Button --}}
                <div class="d-flex justify-content-end">
                    <a href="{{ route('profile.index') }}" class="btn btn-secondary me-4"
                        style="font-weight: 500; margin-top: 30px; width: 123px; height: 42px; font-family: Montserrat, sans-serif; font-size: 15px; border-radius: 10px; padding: 9px; background-color: #c9c9c9; border:none; ">Batal</a>
                    <button type="submit" class="btn btn-primary-save me-5"
                        style="font-weight: 500; margin-top: 30px; width: 123px; height: 42px; font-family: Montserrat, sans-serif; font-size: 15px; border-radius: 10px; padding: 9px; color: #ffffff; background-color: #44D7B5; border: 2px solid #44D7B5; border: none;">Save
                    </button>
            </form> 
        </div>

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
