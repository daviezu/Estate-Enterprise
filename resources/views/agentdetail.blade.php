@extends('layout.master')

@section('title', 'Detail')

@section('content')

<div class="container my-5 pt-4">

    <div class="row gy-4">

        <div class="col-12 ">

            <div class="d-flex w-100 gap-4 py-4 mx-auto">

                <div class="agent-picture" >
                    <img src="{{ asset('images/agents/agent13.png')}}" alt="" class="w-100 h-100">
                </div>

                <div class="d-flex flex-column gap-0">

                    
                    <h1 class=" fs-1">{{$agent->first_name}} <span>{{$agent->last_name}}</span></h1>
                    <div class="d-flex gap-2 ">
                        <i class="bi bi-envelope"></i>
                        <p class="fs-6">{{$agent->email}}</p>
                    </div>
                    <div class="d-flex gap-2 ">
                        <i class="bi bi-telephone"></i>
                        <p class="fs-6">{{$agent->phone_number}}</p>
                    </div>
                    
                </div>
            </div>

        </div>

        <div class="col-12 ">
            <p class="fs-2" style="font-weight: 600; font-family: Montserrat, sans-serif;" >Properti yang dimiliki : {{$properties->count()}}</p>
            <div class="row">
                @foreach ($properties as $p)
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card shadow-sm h-100" style="border-radius: 20px; border: none;">
                        <div class="" style="width:100%; height:195px;">
                            <img class="w-100 h-100" src="{{ asset('images/property/property1.png') }}" alt="property1">
                        </div>
                        <div class="d-flex flex-column p-3 gap-1">
                            <div class="d-flex flex-column flex-grow-1">
                                <h5 class="card-title mb-1" style="font-weight: 600; font-family: Montserrat, sans-serif; font-size: 20px;">
                                    {{$p->property_name}}
                                </h5>
                                <p class="text-secondary mb-1" style="font-weight: 600; font-family: Montserrat, sans-serif; font-size: 16px;">
                                    {{$p->property_owner}}
                                </p>
                                <p class="card-price mb-1" style="font-weight: bold; font-family: Montserrat, sans-serif; ">
                                    {{ 'Rp ' . number_format($p->price, 0, ',', '.') . ',00' }}
                                </p>
                                
                                <p class="card-text mb-1" style="font-family: Montserrat, sans-serif; font-size: 12px; opacity: 0.7;">
                                    {{ $p->address }}
                                </p>
                                <p class="card-text mb-3" style="font-family: Montserrat, sans-serif; font-size: 12px;">
                                   LT 90-200 m², LB 80-150 m²
                                </p>
                                <p class="card-text" style="font-family: Montserrat, sans-serif; font-size: 12px; opacity: 0.7; margin-top: -10px;">
                                    Diperbarui {{$p->updated_at->diffForHumans()}}
                                </p>
                            </div>
                            <div class="mt-auto text-end">
                                <a href="{{ route('property.detail', $p->slug) }}" class="btn btn-lg text-light" style="background-color:#44D7B5">
                                    Lihat Detail
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
</div>

<style>

    .agent-picture {
        width:250px;
        height:250px;
    }

    @media (max-width: 992px) {
  
    }

    @media (max-width: 768px) {
        .agent-picture {
            width:150px;
            height:150px;
        }
    }

    @media (max-width: 576px) {


    }

    @media (max-width: 480px) {
        .agent-picture {
            width:120px;
            height:120px;
        }
    }
</style>

@endsection