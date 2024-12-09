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
                        <img class="card-img-top" src="{{ asset('images/property/property1.png') }}" alt="property1">
                        <div class="card-body">
                            <h5 class="card-title" style="font-weight: 600; font-family: Montserrat, sans-serif; font-size: 20px;">
                                {{$p->property_name}}
                            </h5>
                            <h6 class="card-price" style="font-weight: bold; font-family: Montserrat, sans-serif; font-size: 24px;">
                                {{ 'Rp ' . number_format($p->price, 0, ',', '.') . ',00' }}
                            </h6>
                            <h6 class="card-text" style="font-weight: 600; font-family: Montserrat, sans-serif; font-size: 12px;">
                                By {{ $p->owner }}
                            </h6>
                            <p class="card-text" style="font-family: Montserrat, sans-serif; font-size: 12px; opacity: 0.7;">
                                {{ $p->address }}
                            </p>
                            <p class="card-text" style="font-family: Montserrat, sans-serif; font-size: 12px;">
                                2-4 KT, LT 90-200 m², LB 80-150 m²
                            </p>
                            <p class="card-text" style="font-family: Montserrat, sans-serif; font-size: 12px; opacity: 0.7; margin-top: -10px;">
                                Diperbarui {{$p->updated_at->diffForHumans()}}
                            </p>
                            <div class="mt-auto text-end">
                                <a href="{{ route('property.detail', $p->property_id) }}" class="btn btn-lg text-light" style="background-color:#44D7B5">
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
@endsection
