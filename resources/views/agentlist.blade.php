@extends('layout.master')
@section('content')
    <div class="container-md pt-5 mt-5 container">
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <p class="fs-2">Daftar Agent</p>
            </div>

            {{-- Search Section --}}
            <div class="col-lg-9 col-md-8">
                <form action="" class="d-flex py-2 gap-2">
                    <input type="text" class="form-control form-control-sm rounded border-0 bg-body-secondary"
                        name="search" placeholder="Cari Agent..." value={{ $search ?? '' }}>
                    <button class="btn rounded text-light" style="background-color: #44D7B5;">Search</button>
                </form>
            </div>


        </div>

        {{-- Agent List Section --}}
        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 justify-center text-center py-2 gy-2">


            <div class="container mt-2">
                <div class="row ">
                    @foreach ($agents as $a)
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-4 " style="height:100%;">
                            <div class="h-100 shadow-sm d-flex flex-column py-2 px-1 w-100 ">
                                <div class="image-container mx-auto mb-auto  w-100 h-100">
                                    <img src="{{ asset('images/agents/agent13.png') }}" class="w-100">
                                </div>
                                <div class="d-flex flex-column  w-100">
                                    <p class="fs-6 fw-bold mb-0">{{ $a->first_name }} {{ $a->last_name }}</p>
                                    <p class="fs-6 w-100 mb-1 text-secondary">{{ $a->phone_number }}</p>
                                    <div class="pb-2 w-100">
                                        <a href="#" class="btn btn-sm"
                                            style="background-color: #44D7B5; border-color: #44D7B5; color: white;">Lihat
                                            Properti <span class="bg-warning px-1 rounded  text-light">15</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    @endsection

    <style>
        @media (max-width: 992px) {}

        @media (max-width: 768px) {
            p.fs-2 {
                margin-top: 1rem;
                text-align: center;
            }
        }

        @media (max-width: 576px) {}

        @media (max-width: 480px) {}
    </style>
