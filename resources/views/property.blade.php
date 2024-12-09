@extends('layout.master')
@section('content')

        <div class="container py-5 page-content">
            <h2 class="tittle">Real estate & Perumahan untuk dijual</h2>
    
            <p class="textawal text-start">Menampilkan 100+ hasil di pencarian</p>
    
            <div class="row">
                @foreach ($properties as $p)
                    <div class="col-md-4 mb-4">
                        <div class="card" style="width: 100%; border: none; border-radius: 20px">
                            <img class="imagess" src="{{ asset('images/property/property1.png') }}" class="card-img-fluid"
                                alt="property1">
                            <div class="card-body">
                                <h5 class="card-price"
                                    style="font-weight: bold; font-family: Montserrat, sans-serif; font-size: 24px">
                                    {{ $p->price }}
                                </h5>
                                <h2 class="card-tittle"
                                    style="font-weight: 600; font-family: Montserrat, sans-serif; font-size: 20px">
                                    {{ $p->property_name }}</h2>
                                <h3 class="card-text"
                                    style="font-weight: 600; font-family: Montserrat, sans-serif; font-size: 12px">By
                                    {{ $p->owner }}</h3>
                                <p class="card-text"
                                    style="font-family: Montserrat, sans-serif; font-size: 12px; opacity: 0.7;">
                                    {{ $p->location }}</p>
                                <p class="card-text" style="font-family: Montserrat, sans-serif; font-size: 12px;">2-4 KT, LT
                                    90-200
                                    m², LB 80-150 m²</p>
                                <p class="card-text"
                                    style="font-family: Montserrat, sans-serif; font-size: 12px; opacity: 0.7; margin-top: -10px;">
                                    Diperbarui 1 hari lalu</p>
    
                                <a href="#" class="btn btn-primary"
                                    style="color: #FFFFFF; background-color: #44D7B5; border: none; font-family: Montserrat, sans-serif; font-size: 12px; float: right; margin-right: 16px;">Lihat
                                    Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            {{-- Property 2 --}}
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 26.25rem; border: none; border-radius: 20px">
                    <img class="imagess" src="{{ asset('images/property/property2.png') }}" class="card-img-fluid"
                        alt="property2">
                    <div class="card-body">
                        <h5 class="card-price"
                            style="font-weight: bold; font-family: Montserrat, sans-serif; font-size: 24px">Rp
                            850 Jt - 1,3
                            M</h5>
                        <h2 class="card-tittle"
                            style="font-weight: 600; font-family: Montserrat, sans-serif; font-size: 20px">
                            Sunrise Hills
                            Residence</h2>
                        <h3 class="card-text"
                            style="font-weight: 600; font-family: Montserrat, sans-serif; font-size: 12px">By Andi
                            Wijaya
                        </h3>
                        <p class="card-text" style="font-family: Montserrat, sans-serif; font-size: 12px; opacity: 0.7;">
                            Cibubur, Jakarta Timur</p>
                        <p class="card-text" style="font-family: Montserrat, sans-serif; font-size: 12px;">3-5 KT, LT
                            100-220 m², LB 80-140 m²</p>
                        <p class="card-text"
                            style="font-family: Montserrat, sans-serif; font-size: 12px; opacity: 0.7; margin-top: -10px;">
                            Diperbarui 2 hari lalu</p>


                        <a href="#" class="btn btn-primary"
                            style="color: #FFFFFF; background-color: #44D7B5; border: none; font-family: Montserrat, sans-serif; font-size: 12px; float: right; margin-right: 16px;">Lihat
                            Detail</a>
                    </div>
                </div>
            </div>


            {{-- Property 3 --}}
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 26.25rem; border: none; border-radius: 20px">
                    <img class="imagess" src="{{ asset('images/property/property11.png') }}" class="card-img-fluid"
                        alt="property3">
                    <div class="card-body">
                        <h5 class="card-price"
                            style="font-weight: bold; font-family: Montserrat, sans-serif; font-size: 24px">Rp
                            950 Jt - 1,4
                            M</h5>
                        <h2 class="card-tittle"
                            style="font-weight: 600; font-family: Montserrat, sans-serif; font-size: 20px">Maple
                            Green
                            Estate</h2>
                        <h3 class="card-text"
                            style="font-weight: 600; font-family: Montserrat, sans-serif; font-size: 12px">By
                            Lestari
                            Rahmadani</h3>
                        <p class="card-text" style="font-family: Montserrat, sans-serif; font-size: 12px; opacity: 0.7;">
                            Bekasi, Jawa Barat</p>
                        <p class="card-text" style="font-family: Montserrat, sans-serif; font-size: 12px;">2-4 KT, LT 90-180
                            m², LB 70-130 m²</p>
                        <p class="card-text"
                            style="font-family: Montserrat, sans-serif; font-size: 12px; opacity: 0.7; margin-top: -10px;">
                            Diperbarui 3 hari lalu</p>


                        <a href="#" class="btn btn-primary"
                            style="color: #FFFFFF; background-color: #44D7B5; border: none; font-family: Montserrat, sans-serif; font-size: 12px; float: right; margin-right: 16px;">Lihat
                            Detail</a>
                    </div>
                </div>
            </div>


            {{-- Property 4 --}}
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 26.25rem; border: none; border-radius: 20px">
                    <img class="imagess" src="{{ asset('images/property/property4.png') }}" class="card-img-fluid"
                        alt="property4">
                    <div class="card-body">
                        <h5 class="card-price"
                            style="font-weight: bold; font-family: Montserrat, sans-serif; font-size: 24px">Rp
                            1,2 M - 2 M
                        </h5>
                        <h2 class="card-tittle"
                            style="font-weight: 600; font-family: Montserrat, sans-serif; font-size: 20px">
                            Emerald Park
                            Residence</h2>
                        <h3 class="card-text"
                            style="font-weight: 600; font-family: Montserrat, sans-serif; font-size: 12px">By Dedi
                            Pratama
                        </h3>
                        <p class="card-text" style="font-family: Montserrat, sans-serif; font-size: 12px; opacity: 0.7;">
                            Depok, Jawa Barat</p>
                        <p class="card-text" style="font-family: Montserrat, sans-serif; font-size: 12px;">3-4 KT, LT
                            120-250 m², LB 100-160 m²</p>
                        <p class="card-text"
                            style="font-family: Montserrat, sans-serif; font-size: 12px; opacity: 0.7; margin-top: -10px;">
                            Diperbarui 1 hari lalu</p>


                        <a href="#" class="btn btn-primary"
                            style="color: #FFFFFF; background-color: #44D7B5; border: none; font-family: Montserrat, sans-serif; font-size: 12px; float: right; margin-right: 16px;">Lihat
                            Detail</a>
                    </div>
                </div>
            </div>

            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center mt-5 mb-5">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
@endsection


<style>
    .page-content {
        margin-top: calc(56px + 20px); /* Adjust 56px to the height of your navbar */
    }

    .btn-primary {
        transition-duration: 0.4s !important;
    }

    .btn-primary:hover {
        background-color: #28bc99 !important;
    }

    .tittle {
        font-family: 'Monserrat', sans-serif;
        color: #000000;
        font-weight: semibold;
    }

    .textawal {
        font-family: 'Monserrat', sans-serif;
        font-size: 22px;
    }

    .card {
        margin-top: 40px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.60);
    }

    .imagess {
        width: 100%;
        object-fit: cover;
        border-radius: 20px 20px 0 0;
    }

    .page-link {
        font-weight: 600;
        color: black !important;
        outline: 2px solid #44D7B5 !important;
        border: none;
        border-radius: 5px;
        width: 50px;
        height: 50px;
        text-align: center;
        align-content: center;
    }

    .page-item {
        font-family: 'Monserrat', sans-serif;
        margin: 0 10px;
    }

    .page-link:hover {
        color: black !important;
        background-color: #E6FCF6 !important;
        text-decoration: none;
    }

    .page-item.active .page-link,
    .page-link:focus {
        color: white !important;
        background-color: #44D7B5 !important;
        outline: none;
        border-color: #44D7B5 !important;
    }

    .pagination {
        display: flex;
        align-items: center;
        list-style: none;
        padding: 0;
    }
</style>
