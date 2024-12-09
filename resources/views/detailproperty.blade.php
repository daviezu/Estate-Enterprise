@extends('layout.master')
@section('content')
    <div class="container my-3">
        <div class="row">

            {{-- Parent Card & Image --}}
            <div class="col-md-4 mb-4">
                <div class="cardparent" style="width: 40.5rem; height: 22.875rem; border: none; border-radius: 20px;">
                    <img class="imagessparent" src="{{ asset('images/property/property10.png') }}" class="card-img-fluid"
                        alt="property">
                </div>
            </div>


            {{-- Child Card & Image --}}
            <div class="col-md-4 mb-4">
                <div class="cardchild"
                    style="width: 15.875rem; height: 10.8125rem; border: none; border-radius: 20px; margin-left: 250px;">
                    <img class="imagesschild" src="{{ asset('images/property/property10.png') }}" class="card-img-fluid"
                        alt="property">
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="cardchild"
                    style="width: 15.875rem; height: 10.8125rem; border: none; border-radius: 20px; margin-left: 109px;">
                    <img class="imagesschild" src="{{ asset('images/property/property10.png') }}" class="card-img-fluid"
                        alt="property">
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="cardchild"
                    style="width: 15.875rem; height: 10.8125rem; border: none; border-radius: 20px; margin-left: 690px; margin-top: -200px;">
                    <img class="imagesschild" src="{{ asset('images/property/property10.png') }}" class="card-img-fluid"
                        alt="property">
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="cardchild"
                    style="width: 15.875rem; height: 10.8125rem; border: none; border-radius: 20px; margin-left: 550px; margin-top: -200px;">
                    <img class="imagesschild" src="{{ asset('images/property/property10.png') }}" class="card-img-fluid"
                        alt="property">
                </div>
            </div>


            <!-- Information Property -->
            <div class="row" style="margin-top: -15px;">
                <div class="col-lg-8">
                    <h4 class="txt-tittle1"
                        style="font-weight: 600; font-family: Montserrat, sans-serif; font-size: 28px; margin-left: 5px;">
                        Dijual Rumah Mewah dengan Halaman Luas & Strategis</h4>
                    <p class="text-muted1"
                        style="font-weight: 300; font-family: Montserrat, sans-serif; font-size: 20px; margin-left: 5px;">
                        {{ $property->address }}</p>
                </div>


                <div class="col-lg-4">
                    <p class="text-muted2"
                        style="font-weight: 400; font-family: Montserrat, sans-serif; font-size: 20px; margin-left: 225px;">
                        OFFERS OVER</p>
                    <h3 class="text-price"
                        style="font-weight: bold; font-family: Montserrat, sans-serif; font-size: 40px; margin-left: 202px; margin-top: -15px;">
                        {{ $property->price }} </h3>
                </div>
            </div>

            {{-- Border Bottom --}}
            <div class="spacings" style="width: 1230px;  margin-top: 44px; margin-bottom: 50px;"></div>


            {{-- Section Description --}}
            <div class="section-description">
                <h4 class="txt-tittle2"
                    style="font-weight: 600; font-family: Montserrat, sans-serif; font-size: 28px; margin-left: 5px;">
                    Rumah for Sale in Jakarta Selatan, DKI Jakarta
                </h4>

                {{-- BACKEND RESPONSIVE --}}
                <p class="text-description"
                    style="font-weight: 400; font-family: Montserrat, sans-serif; font-size: 16px; margin-left: 5px;">
                    {{ $property->description }}
                </p>


                {{-- <p class="text-description"
                    style="font-weight: 400; font-family: Montserrat, sans-serif; font-size: 16px; margin-left: 5px;">
                    Dijual Rumah Mewah dengan Halaman Luas dan Strategis @Tebet
                </p>

                <p class="text-description"
                    style="font-weight: 400; font-family: Montserrat, sans-serif; font-size: 16px; margin-left: 5px; margin-top: -20px;">
                    Properti yang menakjubkan ini menawarkan perpaduan kemewahan, kenyamanan, dan fungsionalitas
                </p>

                <p class="text-description"
                    style="font-weight: 400; font-family: Montserrat, sans-serif; font-size: 16px; margin-left: 5px; margin-top: -20px;">
                    yang luar biasa. Dibangun di atas lahan seluas 840 meter persegi, dengan luas bangunan 1.000 meter
                </p>

                <p class="text-description"
                    style="font-weight: 400; font-family: Montserrat, sans-serif; font-size: 16px; margin-left: 5px; margin-top: -20px;">
                    persegi, rumah ini sangat cocok untuk keluarga yang mencari ruang dan keanggunan.
                </p>

                <ul class="text-description"
                    style="font-weight: 400; font-family: Montserrat, sans-serif; font-size: 16px; margin-left: 5px; list-style: disc; padding-left: 20px;">
                    <li class="description">Kamar Tidur: 6 kamar tidur luas yang dirancang untuk relaksasi, dengan
                        pencahayaan alami yang cukup</li>
                    <p class="description" style="margin-top: -2px;">dan interior yang stylish.</p>
                    <li class="description" style="margin-top: 10px">Kamar Mandi: 6 kamar mandi modern, termasuk 3 kamar
                        mandi dalam untuk kenyamanan dan privasi.</li>
                    <li class="description" style="margin-top: 13px;">Garasi & Carport: Tampung kendaraan Anda dengan mudah
                        di garasi 2 mobil dan carport tambahan</li>
                    <p class="description" style="margin-top: -2px;">untuk 4 mobil.</p>
                    <li class="description" style="margin-top: 13px;">Keanggunan Arsitektur: Properti ini memiliki detail
                        arsitektur yang menakjubkan, termasuk foyer yang</li>
                    <p class="description" style="margin-top: -2px;">megah dan desain interior yang sangat indah.</p>
                    <li class="description" style="margin-top: 13px;">Oasis Luar Ruangan: Halaman belakang yang luas
                        memiliki kolam yang tenang, taman yang rimbun, dan</li>
                    <p class="description" style="margin-top: -2px;">ruang yang luas untuk kegiatan di luar ruangan,
                        menjadikannya tempat peristirahatan yang ideal.</p>
                </ul> --}}
            </div>


            {{-- Section Agent --}}
            <div class="card-agent text-center"
                style="width: 275px; height: 390px; border-radius: 15px; border: none; margin-top: 30px; margin-left: -348px;">

                <div class="card-body">
                    <div class="text-center">
                        {{-- <img src="{{ asset($agent->picture_path ?? 'images/agents/agent16.png') }}" alt="AgentCaleb"
                        class="rounded-circle" style="width: 162px; height: 162px; object-fit: cover;"> --}}

                        {{-- NGAMBIL FOTO DARI BACKEND DATABASE --}}
                        {{-- <img src="{{ asset($agent->picture_path) }}" alt="AgentCaleb"
                            class="rounded-circle" style="width: 162px; height: 162px; object-fit: cover;"> --}}
                        <img src="{{ asset('images/detailproperty/EstateVerse.png') }}" alt="EstateVerse"
                            style="width: 60%; margin-bottom: 20px; margin-top: 35px;">
                        <img src="{{ asset('images/agents/agent16.png') }}" alt="AgentCaleb" class="rounded-circle"
                            style="width: 162px; height: 162px; object-fit: cover;">
                    </div>
                    <h6 class="agent-name mt-3 mb-3" style="font-family: Montserrat, sans-serif; font-size: 12px;">Agent
                        {{ $agent->first_name }} {{ $agent->last_name }}
                    </h6>
                    <div class="button">
                        <a href="#" class="btn btn-primary-call mb-2"
                            style="font-weight: bold; background-color: #FFFFFF; border: 2px solid #44D7B5; font-family: Montserrat, sans-serif; font-size: 10px; width: 150px; height: 33px; border-radius: 10px; color: #9D9B9B; padding: 7px">Call
                            {{ $agent->first_name }} {{ $agent->last_name }}</a>
                        <a href="#" class="btn btn-primary-chat mt-1"
                            style="font-weight: bold; background-color: #FFFFFF; border: 2px solid #44D7B5; font-family: Montserrat, sans-serif; font-size: 10px; width: 150px; height: 33px; border-radius: 10px; color: #9D9B9B; padding: 7px">Chat
                            {{ $agent->first_name }} {{ $agent->last_name }}</a>
                    </div>
                </div>

            </div>


            {{-- Section Specification --}}
            <div class="section-specification">
                <h4 class="txt-specification"
                    style="font-weight: 600; font-family: Montserrat, sans-serif; font-size: 28px; margin-top: 30px;">
                    Specification</h4>
                <div class="text-spec"
                    style="font-weight: 400; font-family: Montserrat, sans-serif; font-size: 16px; display: flex; flex-direction: column; gap: 5px;">

                    <div style="display: flex; justify-content: space-between;">
                        <span>Building Size</span>
                        <span style="margin-right: 1057px;">: {{ $property->building_size }} m2</span>
                    </div>
                    <div style="display: flex; justify-content: space-between;">
                        <span>Land Size</span>
                        <span style="margin-right: 1063px;">: {{ $property->land_size }} m2</span>
                    </div>
                    <div style="display: flex; justify-content: space-between;">
                        <span>Certificate</span>
                        <span style="margin-right: 1010px;">: {{ $property->certificate }}</span>
                    </div>
                    <div style="display: flex; justify-content: space-between;">
                        <span>Bedroom</span>
                        <span style="margin-right: 1116px;">: {{ $property->bedroom }}</span>
                    </div>
                    <div style="display: flex; justify-content: space-between;">
                        <span>Bathroom</span>
                        <span style="margin-right: 1116px;">: {{ $property->bathroom }}</span>
                    </div>
                    <div style="display: flex; justify-content: space-between;">
                        <span>Carport</span>
                        <span style="margin-right: 1115px;">: {{ $property->carport }}</span>
                    </div>

                </div>
            </div>


            {{-- Section Property Map or Location --}}
            <div class="section-location">
                <h4 class="txt-specification"
                    style="font-weight: 600; font-family: Montserrat, sans-serif; font-size: 28px; margin-top: -269px; margin-left: 435px;">
                    Location</h4>
                <iframe class="g-maps"
                    style="border-radius: 10px; margin-left: 435px; margin-top: 5px; margin-bottom: 55px;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126920.28228573789!2d106.74711712480918!3d-6.229569453346221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e945e34b9d%3A0x5371bf0fdad786a2!2sJakarta!5e0!3m2!1sen!2sid!4v1733036106429!5m2!1sen!2sid"
                    width="428" height="220" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
@endsection



<style>
    .g-maps {
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.35);
    }

    .card-agent {
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.40);
    }

    .btn-primary-call,
    .btn-primary-chat {
        transition-duration: 0.4s !important;
    }

    .btn-primary-call:hover {
        font-weight: bold !important;
        color: #FFFFFF !important;
        background-color: #44D7B5 !important;
    }

    .btn-primary-chat:hover {
        font-weight: bold !important;
        color: #FFFFFF !important;
        background-color: #44D7B5 !important;
    }


    .spacings {
        margin-left: 17px;
        color: #7E7878;
        border-bottom: solid;
        border-width: 3px;
    }

    .imagessparent {
        border: none;
        border-radius: 20px;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .imagesschild {
        border: none;
        border-radius: 20px;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>
