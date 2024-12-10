@extends('layout.master')
@section('content')
    <div class="container py-5 mt-5">
        <h2 class="tittle">Real estate & Perumahan untuk dijual</h2>
        <p class="textawal text-start">Menampilkan 100+ hasil di pencarian</p>

        {{-- Card Property --}}
        <div class="row">
            @foreach ($properties as $p)
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card shadow-sm h-100" style="border-radius: 20px; border: none;">
                        <a href="{{route("agent.detail", $p->PropertyToAgent->user_id)}}" class="agent-picture d-block" >
                            <img src="{{$p->PropertyToAgent->picture_path}}" alt="" class="w-100 h-100 " style="object-fit: cover; border-radius:50%;">  
                        </a>
                        <div class="rounded-sm" style="height:195px; width:100%">
                                <img class="w-100 h-100 rounded" src="{{json_decode($p->picture_path, true)[0]}}" style="background-position:center; object-fit:cover;" alt="property1">
                        </div>
                        <div class="d-flex flex-column p-3 gap-1 h-100">
                            <div class="d-flex flex-column flex-grow-1 text-truncate">
                                
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
                                   LT {{$p->land_size}} m², LB {{$p->building_size}} m²
                                </p>
                                <p class="card-text" style="font-family: Montserrat, sans-serif; font-size: 12px; opacity: 0.7; margin-top: -10px;">
                                    Diperbarui {{$p->updated_at->diffForHumans()}}
                                </p>
                            </div>
                            <div class="text-end">
                                <a href="{{ route('property.detail', $p->slug) }}" class="btn btn-lg text-light" style="background-color:#44D7B5">
                                    Lihat Detail
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Pagination --}}
        <div class="row pt-4 text-center">
            <div class="col">
                {{$properties->links()}}
            </div>
        </div>
    </div>

<style>

    .agent-picture {
        border-radius:50%;
        width:50px;
        height:50px;
        position:absolute;
        top:7px;
        left:5px;
    }
</style>
@endsection
