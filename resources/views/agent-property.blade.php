
    @extends('layout.master')
    @section('content')
        <div class="container mt-4 py-5">
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
            <div class="d-flex gap-2 ">
                <h2 class="tittlePage my-auto">Properti Saya</h2>
                <a href="{{ route('agent.property.create.index') }}" class="btn btn-lg mt-2"
                    style="font-family: 'Montserrat', sans-serif; color: #44D7B5; font-weight: 600; border-radius: 5px;"><i class="bi bi-plus-circle-dotted fs-2 mt-2"></i></a>
            </div>

            <div class="row py-2">
                @if ($properties->isEmpty())
                    <div class="col text-center h-full py-5">
                        <div class="h-100 m-auto p-4 rounded-3" style="background-color:#44D7B5; max-width:45rem;">

                            <h4 class="text-light">Anda belum menambahkan properti!</h4>
                        </div>
                    </div>
                @else

                    @foreach ($properties as $p)
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="card shadow-sm h-100" style="border-radius: 20px; border: none;">
                            
                                <div class="rounded-sm" style="height:195px; width:100%">
                                
                                        <img class="w-100 h-100 rounded" src="{{json_decode($p->picture_path, true)[0]}}" style="background-position:center; object-fit:cover;" alt="property1">
                                </div>
                                <div class="d-flex flex-column p-3 gap-1 h-100 ">
                                    <div class="d-flex flex-column flex-grow-1 text-truncate ">
                                        
                                        <h5 class="card-title mb-1 fs-5" style="font-weight: 600; font-family: Montserrat, sans-serif; font-size: clamp(12px, 3vw, 20px);">
                                            {{$p->property_name}}
                                        </h5>
                                        <p class="text-secondary mb-1 fs-6" style="font-weight: 600; font-family: Montserrat, sans-serif; font-size: clamp(10px, 3vw, 18px);">
                                            {{$p->property_owner}}
                                        </p>
                                        <p class="card-price mb-1 fs-6" style="font-weight: bold; font-family: Montserrat, sans-serif; font-size: clamp(10px, 3vw, 18px); ">
                                            {{ 'Rp ' . number_format($p->price, 0, ',', '.') . ',00' }}
                                        </p>
                                        
                                        <p class="card-text mb-1" style="font-family: Montserrat, sans-serif; font-size: 12px; opacity: 0.7;">
                                            {{ $p->address }}
                                        </p>
                                        <p class="card-text mb-3" style="font-family: Montserrat, sans-serif; font-size: 12px;">
                                            LT {{$p->land_size}} m², LB {{$p->building_size}} 
                                        </p>
                                        <p class="card-text" style="font-family: Montserrat, sans-serif; font-size: 12px; opacity: 0.7; margin-top: -10px;">
                                            Diperbarui {{$p->updated_at->diffForHumans()}}
                                        </p>
                                    </div>
                                    <div class="d-flex mt-auto ms-auto gap-2 ">
                                        <a href="{{ route('property.detail', $p->slug) }}" class="btn  text-light" style="background-color:#44D7B5">
                                            <i class="bi bi-eye-fill"></i>
                                        </a>
                                        <a href="{{ route('agent.property.edit.index', $p->property_id) }}" class="btn  text-light btn-warning" >
                                            <i class="bi bi-pencil-fill"></i>
                                        </a>
                                        <form action="{{ route('agent.property.delete', $p->property_id) }}" method="POST"
                                            onsubmit="return confirmDelete(event)">

                                            @csrf
                                            @method('DELETE')
                                            <button class="btn  text-light btn-danger" >
                                                <i class="bi bi-trash-fill"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>

            
        </div>

    <script>
            function confirmDelete(event) {
                // Tampilkan konfirmasi ke pengguna
                return confirm('Apa kamu yakin akan menghapus properti ini?');
            }
    </script>
    @endsection


