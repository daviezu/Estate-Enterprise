<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EstateVerse</title>
    <link rel="stylesheet" href={{ asset('EstateVerseCSS/editmyproperty.css') }}>
    <link rel="icon" href="{{ asset('EstateVerse.ico') }}" type="image/x-icon">
</head>

<body>

    @extends('layout.master')
    @section('content')
        <div>
            <div class="container mt-4">
                <div>
                    <h2 class="titlePage">Edit Properti</h2>
                </div>
            </div>
            @if ($errors->any())
                <div>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('agent.property.edit', $property_id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="container mt-4">
                    <div class="mb-3 ms-5">
                        <label for="formFileMultiple" class="form-label">Gambar</label>
                        <input class="form-control border-2 rounded" style="border-color: #44D7B5;" type="file"
                            id="formFileMultiple" multiple>
                    </div>
                    <div class="mb-3 ms-5">
                        <label for="property_name" class="form-label">Nama Properti</label>
                        <input type="text" class="form-control rounded border-2" style="border-color: #44D7B5;"
                            name="property_name" id="property_name" placeholder="Ex: Rumah modern tingkat 3">
                    </div>
                    <div class="mb-3 ms-5">
                        <label for="price" class="form-label">Harga Properti</label>
                        <input type="number" class="form-control rounded border-2" style="border-color: #44D7B5;"
                            name="price" id="price" placeholder="Ex: Rp 1.500.000 (dalam rupiah)">
                    </div>
                    <div class="mb-3 ms-5">
                        <label for="description" class="form-label">Deskripsi Properti</label>
                        <textarea class="form-control border-2 rounded" placeholder="Ex: 3 lantai terdiri dari 10 ruangan"
                            style="border-color: #44D7B5;" name="description" id="description" rows="3"></textarea>
                    </div>
                    <div class="mb-3 ms-5">
                        <label for="address" class="form-label">Lokasi</label>
                        <input type="text" class="form-control rounded border-2" style="border-color: #44D7B5;"
                            name="address" id="address" placeholder="Ex: Jakarta barat">
                    </div>
                    <div class="mb-3 ms-5">
                        <label for="location_link" class="form-label">Link Lokasi</label>
                        <input type="url" class="form-control rounded border-2" style="border-color: #44D7B5;"
                            name="location_link" id="location_link"
                            placeholder="Ex: https://www.google.com/maps/embed?pb=!1m18!...">
                    </div>
                    <div class="mb-3 ms-5">
                        <label for="building_size" class="form-label">Building Size</label>
                        <input type="number" class="form-control rounded border-2" style="border-color: #44D7B5;"
                            name="building_size" id="building_size" min="0" placeholder="Ex: 1000 (dalam satuan m2)">
                    </div>
                    <div class="mb-3 ms-5">
                        <label for="land_size" class="form-label">Land Size</label>
                        <input type="number" class="form-control rounded border-2" style="border-color: #44D7B5;"
                            name="land_size" id="land_size" min="0" placeholder="Ex: 840 (dalam satuan m2)">
                    </div>
                    <div class="mb-3 ms-5">
                        <label for="certificate" class="form-label">Certificate</label>
                        <input type="text" class="form-control rounded border-2" style="border-color: #44D7B5;"
                            name="certificate" id="certificate" placeholder="Ex: SHM/Freehold">
                    </div>
                    <div class="mb-3 ms-5">
                        <label for="bedroom" class="form-label">Bedroom</label>
                        <input type="number" class="form-control rounded border-2" style="border-color: #44D7B5;"
                            name="bedroom" id="bedroom" min="0" placeholder="Ex: 6">
                    </div>
                    <div class="mb-3 ms-5">
                        <label for="bathroom" class="form-label">Bathroom</label>
                        <input type="number" class="form-control rounded border-2" style="border-color: #44D7B5;"
                            name="bathroom" id="bathroom" min="0" placeholder="Ex: 6">
                    </div>
                    <div class="mb-5 ms-5">
                        <label for="carport" class="form-label">Carport</label>
                        <input type="number" class="form-control rounded border-2" style="border-color: #44D7B5;"
                            name="carport" id="carport" min="0" placeholder="Ex: 4">
                    </div>
                    <div class="mb-5 ms-5">
                        <button class="btn text-light" style="background-color: #44D7B5" type="submit">Tambah</button>
                    </div>
                </div>
            </form>

        </div>


        </div>
    @endsection

</body>

</html>
