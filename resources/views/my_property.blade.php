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
        <div class="d-flex justify-content-between align-items-center" style="margin-bottom: 50px;">
            <h2 class="tittlePage">My Properties</h2>
            <a href="{{ route('editmyProperty') }}" class="btn btn-success-add" style="font-family: 'Montserrat', sans-serif; background-color: #44D7B5; color: #FFFFFF; font-size: 16px; font-weight: 600; border-radius: 5px;">Tambah</a>
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

                    {{-- Table Row 1 --}}
                    <tr class="row-1">
                        <td>
                            <img src="{{ asset('images/property/property1.png') }}" alt="Property Image" class="img-fluid-property1">
                        </td>
                        <td class="txt-judulrow1">Dijual Rumah Mewah dengan Halaman Luas & Strategis</td>
                        <td class="txt-deskripsirow1">Dijual Rumah Mewah dengan Halaman Luas dan Strategis....</td>
                        <td class="txt-lokasirow1">Jakarta Barat, DKI Jakarta</td>
                        <td>
                            <a href="#" class="btn btn-primary btn-sm" style="font-family: 'Montserrat', sans-serif; color: #ffffff; background-color: #44A8D7; border: none;">Lihat</a>
                            <a href="#" class="btn btn-warning btn-sm" style="font-family: 'Montserrat', sans-serif; color: #ffffff; background-color: #D7CB44; border: none; ">Edit</a>
                            <form action="#" method="POST" class="d-inline">
                                <button type="submit" class="btn btn-danger btn-sm" style="font-family: 'Montserrat', sans-serif; color: #ffffff; background-color: #D74446; border: none;">Hapus</button>
                            </form>
                        </td>
                    </tr>

                    {{-- Spacing between row--}}
                    <tr class="spacer-row">
                        <td colspan="5"></td>
                    </tr>

                    {{-- Table Row 2 --}}
                    <tr class="row-2">
                        <td>
                            <img src="{{ asset('images/property/property2.png') }}" alt="Property Image" class="img-fluid-property2">
                        </td>
                        <td class="txt-judulrow1">Dijual Rumah Mewah dengan Halaman Luas & Strategis</td>
                        <td class="txt-deskripsirow1">Dijual Rumah Mewah dengan Halaman Luas dan Strategis....</td>
                        <td class="txt-lokasirow1">Jakarta Barat, DKI Jakarta</td>
                        <td>
                            <a href="#" class="btn btn-primary btn-sm" style="font-family: 'Montserrat', sans-serif; color: #ffffff; background-color: #44A8D7; border: none;">Lihat</a>
                            <a href="#" class="btn btn-warning btn-sm" style="font-family: 'Montserrat', sans-serif; color: #ffffff; background-color: #D7CB44; border: none; ">Edit</a>
                            <form action="#" method="POST" class="d-inline">
                                <button type="submit" class="btn btn-danger btn-sm" style="font-family: 'Montserrat', sans-serif; color: #ffffff; background-color: #D74446; border: none;">Hapus</button>
                            </form>
                        </td>
                    </tr>

                    {{-- Spacing between row --}}
                    <tr class="spacer-row">
                        <td colspan="5"></td>
                    </tr>

                    {{-- Table Row 3 --}}
                    <tr class="row-3">
                        <td>
                            <img src="{{ asset('images/property/property3.png') }}" alt="Property Image" class="img-fluid-property3">
                        </td>
                        <td class="txt-judulrow1">Dijual Rumah Mewah dengan Halaman Luas & Strategis</td>
                        <td class="txt-deskripsirow1">Dijual Rumah Mewah dengan Halaman Luas dan Strategis....</td>
                        <td class="txt-lokasirow1">Jakarta Barat, DKI Jakarta</td>
                        <td>
                            <a href="#" class="btn btn-primary btn-sm" style="font-family: 'Montserrat', sans-serif; color: #ffffff; background-color: #44A8D7; border: none;">Lihat</a>
                            <a href="#" class="btn btn-warning btn-sm" style="font-family: 'Montserrat', sans-serif; color: #ffffff; background-color: #D7CB44; border: none; ">Edit</a>
                            <form action="#" method="POST" class="d-inline">
                                <button type="submit" class="btn btn-danger btn-sm" style="font-family: 'Montserrat', sans-serif; color: #ffffff; background-color: #D74446; border: none;">Hapus</button>
                            </form>
                        </td>
                    </tr>

                    {{-- Spacing between row --}}
                    <tr class="spacer-row">
                        <td colspan="5"></td>
                    </tr>

                    {{-- Table Row 4 --}}
                    <tr class="row-4">
                        <td>
                            <img src="{{ asset('images/property/property4.png') }}" alt="Property Image" class="img-fluid-property4">
                        </td>
                        <td class="txt-judulrow1">Dijual Rumah Mewah dengan Halaman Luas & Strategis</td>
                        <td class="txt-deskripsirow1">Dijual Rumah Mewah dengan Halaman Luas dan Strategis....</td>
                        <td class="txt-lokasirow1">Jakarta Barat, DKI Jakarta</td>
                        <td>
                            <a href="#" class="btn btn-primary btn-sm" style="font-family: 'Montserrat', sans-serif; color: #ffffff; background-color: #44A8D7; border: none;">Lihat</a>
                            <a href="#" class="btn btn-warning btn-sm" style="font-family: 'Montserrat', sans-serif; color: #ffffff; background-color: #D7CB44; border: none; ">Edit</a>
                            <form action="#" method="POST" class="d-inline">
                                <button type="submit" class="btn btn-danger btn-sm" style="font-family: 'Montserrat', sans-serif; color: #ffffff; background-color: #D74446; border: none;">Hapus</button>
                            </form>
                        </td>
                    </tr>

                    {{-- Spacing between row --}}
                    <tr class="spacer-row">
                        <td colspan="5"></td>
                    </tr>


                    {{-- Table Row 5 --}}
                    <tr class="row-5">
                        <td>
                            <img src="{{ asset('images/property/property10.png') }}" alt="Property Image" class="img-fluid-property10">
                        </td>
                        <td class="txt-judulrow1">Dijual Rumah Mewah dengan Halaman Luas & Strategis</td>
                        <td class="txt-deskripsirow1">Dijual Rumah Mewah dengan Halaman Luas dan Strategis....</td>
                        <td class="txt-lokasirow1">Jakarta Barat, DKI Jakarta</td>
                        <td>
                            <a href="#" class="btn btn-primary btn-sm" style="font-family: 'Montserrat', sans-serif; color: #ffffff; background-color: #44A8D7; border: none;">Lihat</a>
                            <a href="#" class="btn btn-warning btn-sm" style="font-family: 'Montserrat', sans-serif; color: #ffffff; background-color: #D7CB44; border: none; ">Edit</a>
                            <form action="#" method="POST" class="d-inline">
                                <button type="submit" class="btn btn-danger btn-sm" style="font-family: 'Montserrat', sans-serif; color: #ffffff; background-color: #D74446; border: none;">Hapus</button>
                            </form>
                        </td>
                    </tr>


                    {{-- Spacing between row --}}
                    <tr class="spacer-row">
                        <td colspan="5"></td>
                    </tr>

                    {{-- Table Row 6 --}}
                    <tr class="row-6">
                        <td>
                            <img src="{{ asset('images/property/property6.png') }}" alt="Property Image" class="img-fluid-property6">
                        </td>
                        <td class="txt-judulrow1">Dijual Rumah Mewah dengan Halaman Luas & Strategis</td>
                        <td class="txt-deskripsirow1">Dijual Rumah Mewah dengan Halaman Luas dan Strategis....</td>
                        <td class="txt-lokasirow1">Jakarta Barat, DKI Jakarta</td>
                        <td>
                            <a href="#" class="btn btn-primary btn-sm" style="font-family: 'Montserrat', sans-serif; color: #ffffff; background-color: #44A8D7; border: none;">Lihat</a>
                            <a href="#" class="btn btn-warning btn-sm" style="font-family: 'Montserrat', sans-serif; color: #ffffff; background-color: #D7CB44; border: none; ">Edit</a>
                            <form action="#" method="POST" class="d-inline">
                                <button type="submit" class="btn btn-danger btn-sm" style="font-family: 'Montserrat', sans-serif; color: #ffffff; background-color: #D74446; border: none;">Hapus</button>
                            </form>
                        </td>
                    </tr>









                </tbody>
            </table>
        </div>
    </div> 




    @endsection
    
    
</body>
</html>