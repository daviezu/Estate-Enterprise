@extends('layout.master')

@section('title', 'About Us')

@section('content')
<div class="container my-5 text-green">
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold">Team Kami</h1>
        <p class="text-muted">Ketahui Lebih Banyak Tentang Kami</p>
    </div>

    <div class="row">
        @foreach($members as $member)
            @if (!$loop->last)
                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="card h-100 shadow-sm" style="width: 18rem;">
                        <img src="{{ asset($member['image']) }}" class="card-img-top uniform-image" alt="{{ $member['name'] }}">
                        <div class="card-body d-flex flex-column justify-content-end pt-10px">
                            <h2 class="card-title text-start mb-0" style="margin-top: 0;">{{ $member['name'] }}</h2>
                            <p class="card-text text-start text-muted mb-0" style="font-family: Montserrat, sans-serif; font-size: 20px">
                                Roles : {{ $member['role'] }}
                            </p>
                            <p class="card-text text-start text-muted mb-0" style="font-family: Montserrat, sans-serif; font-size: 15px">
                                Umur : {{ $member['umur'] }}
                            </p>
                            <p class="card-text text-start text-muted mb-0" style="font-family: Montserrat, sans-serif; font-size: 12px">
                                <strong>Quotes from creator:</strong>
                            </p>
                            <p class="card-text text-muted" style="font-family: Montserrat, sans-serif; font-size: 12px; text-align: justify;">
                                {{ $member['quotes'] }}
                            </p>

                            <div class="mt-auto text-end">
                                <a href="{{ $member['link'] }}" class="btn btn-lg"
                                   style="background-color: #44D7B5; border-color: #44D7B5; color: white;">
                                   Git Hub
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>

    @if(count($members) > 0)
        <div class="row">
            <div class="col-12 d-flex justify-content-center mb-4">
                @php
                    $lastMember = $members[count($members)-1];
                @endphp
                <div class="card h-100 shadow-sm" style="width: 18rem;">
                    <img src="{{ asset($lastMember['image']) }}" class="card-img-top uniform-image" alt="{{ $lastMember['name'] }}">
                    <div class="card-body d-flex flex-column justify-content-end">
                        <h2 class="card-title text-start">{{ $lastMember['name'] }}</h2>
                        <p class="card-text text-start text-muted mb-0" style="font-family: Montserrat, sans-serif; font-size: 20px">
                            Roles : {{ $lastMember['role'] }}
                        </p>
                        <p class="card-text text-start text-muted mb-1" style="font-family: Montserrat, sans-serif; font-size: 17px">
                            Umur : {{ $member['umur'] }}
                        </p>
                        
                        <p class="card-text text-start text-muted mb-0" style="font-family: Montserrat, sans-serif; font-size: 14px">
                            <strong>Quotes from creator:</strong>
                        </p>
                        <p class="card-text text-muted" style="font-family: Montserrat, sans-serif; font-size: 13px; text-align: justify;">
                            {{ $member['quotes'] }}
                        </p>

                        <div class="mt-auto text-end">
                            <a href="{{ $member['link'] }}" class="btn btn-lg"
                               style="background-color: #44D7B5; border-color: #44D7B5; color: white;">
                               Git Hub
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    @endif
</div>




<style>
    .text-green {
        color: #44D7B5 !important;
    }
    .uniform-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }
    .text-justify {
    text-align: justify;
}


   
</style>
@endsection
