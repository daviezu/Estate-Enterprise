@extends('layout.master')
@section('content')
    <div>
        <div class="container mt-4 pt-5 ">

            <div class="row ">

                <div class="col-12 ">
                    <h1 class="py-2 title">Tambah Properti</h1>
                </div>

                <div class="col">

                    <form action="{{ route('agent.property.create') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="container mt-4">
                           
                            <div class="mb-3 ">
                                <label for="property_name" class="form-label">Nama Properti</label>
                                <input type="text" class="form-control rounded border-2" style="border-color: #44D7B5;"
                                    name="property_name" id="property_name" placeholder="Ex: Rumah modern tingkat 3">
                                @error('property_name')
                                    <p class="fs-6 text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3 ">
                                <label for="property_owner" class="form-label">Pemilik Properti</label>
                                <input type="text" class="form-control rounded border-2" style="border-color: #44D7B5;"
                                    name="property_owner" id="property_owner" placeholder="Ex: Wilson Sumanto">
                                @error('property_owner')
                                    <p class="fs-6 text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3 ">
                                <label for="price" class="form-label">Harga Properti</label>
                                <input type="number" class="form-control rounded border-2" style="border-color: #44D7B5;"
                                    name="price" id="price" placeholder="Ex: Rp 1.500.000 (dalam rupiah)">
                                @error('price')
                                    <p class="fs-6 text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3 ">
                                <label for="description" class="form-label">Deskripsi Properti</label>
                                <textarea class="form-control border-2 rounded" placeholder="Ex: 3 lantai terdiri dari 10 ruangan"
                                    style="border-color: #44D7B5;" name="description" id="description" rows="3"></textarea>
                                @error('description')
                                    <p class="fs-6 text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3 ">
                                <label for="address" class="form-label">Lokasi</label>
                                <input type="text" class="form-control rounded border-2" style="border-color: #44D7B5;"
                                    name="address" id="address" placeholder="Ex: Jakarta barat">
                                @error('address')
                                    <p class="fs-6 text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3 ">
                                <label for="location_link" class="form-label">Link Lokasi</label>
                                <input type="url" class="form-control rounded border-2" style="border-color: #44D7B5;"
                                    name="location_link" id="location_link"
                                    placeholder="Ex: https://www.google.com/maps/embed?pb=!1m18!...">
                                @error('location_link')
                                    <p class="fs-6 text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3 ">
                                <label for="building_size" class="form-label">Building Size</label>
                                <input type="number" class="form-control rounded border-2" style="border-color: #44D7B5;"
                                    name="building_size" id="building_size" min="0"
                                    placeholder="Ex: 1000 (dalam satuan m2)">
                                @error('building_size')
                                    <p class="fs-6 text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3 ">
                                <label for="land_size" class="form-label">Land Size</label>
                                <input type="number" class="form-control rounded border-2" style="border-color: #44D7B5;"
                                    name="land_size" id="land_size" min="0" placeholder="Ex: 840 (dalam satuan m2)">
                                @error('land_size')
                                    <p class="fs-6 text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3 ">
                                <label for="certificate" class="form-label">Certificate</label>
                                <input type="text" class="form-control rounded border-2"
                                    style="border-color: #44D7B5;" name="certificate" id="certificate"
                                    placeholder="Ex: SHM/Freehold">
                                @error('certificate')
                                    <p class="fs-6 text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3 ">
                                <label for="bedroom" class="form-label">Bedroom</label>
                                <input type="number" class="form-control rounded border-2"
                                    style="border-color: #44D7B5;" name="bedroom" id="bedroom" min="0"
                                    placeholder="Ex: 6">
                                @error('bedroom')
                                    <p class="fs-6 text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3 ">
                                <label for="bathroom" class="form-label">Bathroom</label>
                                <input type="number" class="form-control rounded border-2"
                                    style="border-color: #44D7B5;" name="bathroom" id="bathroom" min="0"
                                    placeholder="Ex: 6">
                                @error('bathroom')
                                    <p class="fs-6 text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3 ">
                                <label for="carport" class="form-label">Carport</label>
                                <input type="number" class="form-control rounded border-2"
                                    style="border-color: #44D7B5;" name="carport" id="carport" min="0"
                                    placeholder="Ex: 4">
                                @error('carport')
                                    <p class="fs-6 text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3 ">
                                <label for="pictures" class="form-label">Gambar <span class="text-secondary">( Masukkan 6
                                        Gambar )</span></label>
                                <input class="form-control border-2 rounded" name="pictures[]"style="border-color: #44D7B5;"
                                    type="file" id="pictures" multiple required>
                                @error('pictures')
                                    <p class="fs-6 text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-5 ">
                                <button class="btn text-light" style="background-color: #44D7B5"
                                    type="submit">Tambah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>





        </div>


    </div>


    </div>

    <style>
        .title {
            text-align: start;
        }

        @media (max-width: 992px) {}

        @media (max-width: 768px) {}

        @media (max-width: 576px) {
            .title {
                text-align: center;
            }

        }

        @media (max-width: 480px) {}
    </style>
@endsection
