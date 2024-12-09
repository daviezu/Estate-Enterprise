<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('EstateVerseCSS/my-property.css') }}">
</head>


<body>
    @extends('layout.master')
    @section('content')
        <div class="container mt-4">
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
            <div class="d-flex justify-content-between align-items-center" style="margin-bottom: 50px;">
                <h2 class="tittlePage">Properti Saya</h2>
                <a href="{{ route('agent.property.create.index') }}" class="btn btn-success-add"
                    style="font-family: 'Montserrat', sans-serif; background-color: #44D7B5; color: #FFFFFF; font-size: 16px; font-weight: 600; border-radius: 5px;">Tambah</a>
            </div>

            <div class="card table-responsive mt-3">

                <table class="table table-borderless">
                    <thead class="thead-light">
                        <tr>
                            <th class="txt-gambar">Gambar</th>
                            <th class="txt-judul">Judul</th>
                            <th class="txt-deskripsi">Deskripsi</th>
                            <th class="txt-lokasi">Lokasi</th>
                            <th class="txt-action">Action</th>
                        </tr>
                    </thead>

                    {{-- Table Pembungkus --}}
                    <tbody>

                        {{-- Table Row from backend --}}
                        @foreach ($properties as $p)
                            <tr class="row-1">
                                <td>
                                    <img src="route{{ $p->picture_path }}" alt="Property Image" class="img-fluid-property1">
                                    {{-- <img src="{{ asset('images/property/property1.png') }}" alt="Property Image"
                                        class="img-fluid-property1"> --}}
                                </td>
                                <td class="txt-judulrow1">{{ $p->property_name }}</td>
                                <td class="txt-deskripsirow1">{{ $p->description }}</td>
                                <td class="txt-lokasirow1">{{ $p->address }}</td>
                                <td>
                                    <a href="{{ route('property.detail') }}" class="btn btn-primary btn-sm"
                                        style="font-family: 'Montserrat', sans-serif; color: #ffffff; background-color: #44A8D7; border: none;">Lihat</a>
                                    <a href="{{ route('agent.property.edit.index', $p->property_id) }}"
                                        class="btn btn-warning btn-sm"
                                        style="font-family: 'Montserrat', sans-serif; color: #ffffff; background-color: #D7CB44; border: none; ">Edit</a>
                                    <form action="{{ route('agent.property.delete', $p->property_id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            style="font-family: 'Montserrat', sans-serif; color: #ffffff; background-color: #D74446; border: none;">Hapus</button>
                                    </form>
                                </td>
                            </tr>

                            {{-- Spacing between row --}}
                            <tr class="spacer-row">
                                <td colspan="5"></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endsection


</body>

</html>
