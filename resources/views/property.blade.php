@extends('layout.master')
@section('content')
    <div class="container py-5 mt-5">
        <h2 class="tittle">Real estate & Perumahan untuk dijual</h2>

        <p class="textawal text-start">Menampilkan 100+ hasil di pencarian</p>

        

        <div class="row">
            @foreach ($properties as $p)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm" style="width: 26.25rem; border: none; border-radius: 20px">
                        <img class="imagess" src="{{ asset('images/property/property1.png') }}" class="card-img-fluid"
                            alt="property1">
                        <div class="card-body">
                            <h2 class="card-tittle"
                            style="font-weight: 600; font-family: Montserrat, sans-serif; font-size: 20px">
                            {{$p->property_name}}
                        </h2>
                            <h5 class="card-price"
                                style="font-weight: bold; font-family: Montserrat, sans-serif; font-size: 24px">
                                {{ 'Rp ' . number_format($p->price, 0, ',', '.') . ',00' }}
                            </h5>
                           
                            <h3 class="card-text"
                                style="font-weight: 600; font-family: Montserrat, sans-serif; font-size: 12px">By
                                {{ $p->owner }}</h3>
                            <p class="card-text"
                                style="font-family: Montserrat, sans-serif; font-size: 12px; opacity: 0.7;">
                                {{ $p->address }}</p>
                            <p class="card-text" style="font-family: Montserrat, sans-serif; font-size: 12px;">2-4 KT, LT
                                90-200
                                m², LB 80-150 m²</p>
                            <p class="card-text"
                                style="font-family: Montserrat, sans-serif; font-size: 12px; opacity: 0.7; margin-top: -10px;">
                                Diperbarui {{$p->updated_at->diffForHumans()}}</p>

                            <div class="mt-auto text-end">
                                    <a href="{{route("property.detail")}}" class="btn btn-lg"
                                        style="background-color: #44D7B5; border-color: #44D7B5; color: white;">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

          

            {{-- <nav aria-label="Page navigation example">
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
            </nav> --}}
        </div>

          {{-- Navigation --}}
          <div class="row pt-4 text-center">
            <div class="col">
                    {{$properties->links()}}
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


    .tittle {
        font-family: 'Monserrat', sans-serif;
        color: #000000;
        font-weight: semibold;
    }

    .textawal {
        font-family: 'Monserrat', sans-serif;
        font-size: 22px;
    }


    .imagess {
        width: 26.25rem;
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
