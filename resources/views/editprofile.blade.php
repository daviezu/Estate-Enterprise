@extends('layout.master')
@section('content')
    <div class="container">
        <div class="edit card mt-4" style="margin-bottom: 75px;">
            <h4 class="fw-bold text-center mt-4"
                style="color: #44D7B5; font-size: 24px; font-family: Montserrat, sans-serif; margin-bottom: 40px;">Edit
                Profile</h4>
            <form action="#" method="POST">
                <div class="mb-3 text-center">

                    <!-- Profile Picture -->
                    <img src="{{ asset('images/profiles/rose.png') }}" alt="Avatar" class="rounded-circle mb-3"
                        style="width: 100px; height: 100px; object-fit: cover; border: 3px solid #44D7B5; margin-left: -50px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.25);">

                    {{-- Button --}}
                    <a href="#" class="btn btn-primary-change mt-2 mb-3"
                        style="margin-left: 25px; font-weight: bold; background-color: #44D7B5; border: none; font-family: Montserrat, sans-serif; font-size: 15px; width: 135px; height: 33px; border-radius: 10px; color: #FFFFFF; padding: 5px;">Change
                        Photo</a>
                    <a href="#" class="btn btn-primary-delete mt-2 mb-3"
                        style="margin-left: 25px; font-weight: bold; background-color: #FFFFFF; border: none; font-family: Montserrat, sans-serif; font-size: 15px; width: 135px; height: 33px; border-radius: 10px; color: #DC3545; padding: 5px;">Delete
                        Photo</a>
                </div>

                {{-- Form Section --}}
                <div class="mb-4 mt-4">
                    <input type="text" class="form-control"
                        style="font-size: 13px; opacity: 0.8; border: 2px solid #43D2B1; background-color: #F2F2F2; border-radius: 12px; font-family: Montserrat, sans-serif; width: 420px; height: 40px; margin-left: 120px;"
                        id="name" placeholder="Username" required>
                </div>  

                <div class="mb-4">
                    <input type="email" class="form-control"
                        style="font-size: 13px; opacity: 0.8; border: 2px solid #43D2B1; background-color: #F2F2F2; border-radius: 12px; font-family: Montserrat, sans-serif; width: 420px; height: 40px; margin-left: 120px;"
                        id="email" placeholder="E-mail" required>
                </div>

                <div class="mb-4">
                    <input type="password" class="form-control"
                        style="font-size: 13px; opacity: 0.8; border: 2px solid #43D2B1; background-color: #F2F2F2; border-radius: 12px; font-family: Montserrat, sans-serif; width: 420px; height: 40px; margin-left: 120px;"
                        id="current-pass" placeholder="Current Password">
                </div>

                <div class="mb-4">
                    <input type="password" class="form-control"
                        style="font-size: 13px; opacity: 0.8; border: 2px solid #43D2B1; background-color: #F2F2F2; border-radius: 12px; font-family: Montserrat, sans-serif; width: 420px; height: 40px; margin-left: 120px;"
                        id="new-pass" placeholder="New Password">
                </div>


                <div class="mb-4">
                    <input type="password" class="form-control"
                        style="font-size: 13px; opacity: 0.8; border: 2px solid #43D2B1; background-color: #F2F2F2; border-radius: 12px; font-family: Montserrat, sans-serif; width: 420px; height: 40px; margin-left: 120px;"
                        id="confirm-pass" placeholder="Confirm New Password">
                </div>


                {{-- Button --}}
                <div class="d-flex justify-content-end">
                    <a href="{{ route('profile.index') }}" class="btn btn-secondary me-4"
                        style="font-weight: bold; margin-top: 30px; width: 140px; height: 42px; font-family: Montserrat, sans-serif; font-size: 15px; border-radius: 10px; padding: 9px;">Cancel</a>
                    <a href="{{ route('profile.update') }}" class="btn btn-primary-save me-5"
                        style="font-weight: bold; margin-top: 30px; width: 140px; height: 42px; font-family: Montserrat, sans-serif; font-size: 15px; border-radius: 10px; padding: 9px; color: #9D9B9B; background-color: #FFFFFF; border: 2px solid #44D7B5;">Save
                        Changes</a>
                </div>

            </form>
        </div>
    </div>
@endsection


<style>
    .btn-primary-save,
    .btn-secondary {
        transition-duration: 0.6s !important;
    }

    .btn-primary-save:hover {
        color: #FFFFFF !important;
        background-color: #44D7B5 !important;
    }


    .card {
        width: 46.3125rem;
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
