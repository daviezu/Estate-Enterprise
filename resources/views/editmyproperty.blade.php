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
    
    <form action="">
      <div class="container mt-4">
      <div class="mb-3 ms-5">
        <label for="formFileMultiple"  class="form-label">Gambar</label>
        <input class="form-control border-2 rounded" style="border-color: #44D7B5;" type="file" id="formFileMultiple" multiple>
      </div>
      <div class="mb-3 ms-5">
        <label for="property_name" class="form-label">Nama Properti</label>
        <input type="text" class="form-control rounded border-2" style="border-color: #44D7B5;" name="property_name" id="property_name" placeholder="Ex: Rumah modern tingkat 3">
      </div>
      <div class="mb-3 ms-5">
        <label for="description" class="form-label">Deskripsi Properti</label>
        <textarea class="form-control border-2 rounded" placeholder="Ex: 3 lantai terdiri dari 10 ruangan" style="border-color: #44D7B5;" name="description" id="description" rows="3"></textarea>
      </div>
      <div class="mb-3 ms-5">
        <label for="address" class="form-label">Lokasi</label>
        <input type="text" class="form-control rounded border-2" style="border-color: #44D7B5;" name="address" id="address" placeholder="Ex: Jakarta barat">
      </div>
      <div class="mb-3 ms-5">
        <label for="location_link" class="form-label">Link Lokasi</label>
        <input type="url" class="form-control rounded border-2" style="border-color: #44D7B5;" name="location_link" id="location_link" placeholder="Ex: https://www.google.com/maps/embed?pb=!1m18!...">
      </div>
      <div class="mb-3 ms-5">
        <label for="building_size" class="form-label">Building Size</label>
        <input type="number" class="form-control rounded border-2" style="border-color: #44D7B5;" name="building_size" id="building_size" min="0" placeholder="Ex: 1000 (dalam satuan m2)">
      </div>
      <div class="mb-3 ms-5">
        <label for="land_size" class="form-label">Land Size</label>
        <input type="number" class="form-control rounded border-2" style="border-color: #44D7B5;" name="land_size" id="land_size" min="0" placeholder="Ex: 840 (dalam satuan m2)">
      </div>
      <div class="mb-3 ms-5">
        <label for="certificate" class="form-label">Certificate</label>
        <input type="text" class="form-control rounded border-2" style="border-color: #44D7B5;" name="certificate" id="certificate" placeholder="Ex: SHM/Freehold">
      </div>
      <div class="mb-3 ms-5">
        <label for="bedroom" class="form-label">Bedroom</label>
        <input type="number" class="form-control rounded border-2" style="border-color: #44D7B5;" name="bedroom" id="bedroom" min="0" placeholder="Ex: 6">
      </div>
      <div class="mb-3 ms-5">
        <label for="bathroom" class="form-label">Bathroom</label>
        <input type="number" class="form-control rounded border-2" style="border-color: #44D7B5;" name="bathroom" id="bathroom" min="0" placeholder="Ex: 6">
      </div>
      <div class="mb-5 ms-5">
        <label for="carport" class="form-label">Carport</label>
        <input type="number" class="form-control rounded border-2" style="border-color: #44D7B5;" name="carport" id="carport" min="0" placeholder="Ex: 4">
      </div>
      <div class="mb-5 ms-5">
        <button class="btn text-light" style="background-color: #44D7B5" type="submit">Simpan</button>
      </div>
    </div>
  </form>

    </div>


  </div>

<body>

    @extends('layout.master')
    @section('content')
        <div>
            <h2 class="titlePage">My Properties</h2>
        </div>
        <div>
            <p class="description">Gambar</p>
            <div class="property__photos">
                <img src={{ asset('images/property/property1.png') }} alt="">
                <img src={{ asset('images/property/property2.png') }} alt="">
                <img src={{ asset('images/property/property7.png') }} alt="">
                <img src={{ asset('images/property/property6.png') }} alt="">
                <img src={{ asset('images/property/property5.png') }} alt="">
                <button class="addPhotos">
                    <img src="{{ asset('images/icons/plus.png') }}" alt="">
                    <p>Tambah Foto</p>
                </button>
            </div>
            <div class="form__section">
                <p class="description">Judul</p>
                <input type="text" class="form" id="name" placeholder="Judul" name="title" required>
            </div>
            <div class="form__section">
                <p class="description">Deskripsi</p>
                <input type="text" class="form" id="name" placeholder="Deskripsi" name="description" required>
            </div>
            <div class="form__section">
                <p class="description">Lokasi</p>
                <input type="text" class="form" id="name" placeholder="Lokasi" name="location" required>
            </div>
            <div class="form__section">
                <p class="description">Link Lokasi</p>
                <input type="url" class="form" id="name" placeholder="Link Lokasi" name="link" required>
            </div>
            <div class="form__section">
                <p class="description">Live ID</p>
                <input type="text" class="form" id="name" placeholder="Live ID" name="LiveID" required>
            </div>
            <div class="form__section">
                <p class="description">Listing ID</p>
                <input type="number" class="form" id="name" placeholder="Listing ID" name="ListingID" required>
            </div>
            <div class="form__section">
                <p class="description">Building Size</p>
                <input type="text" class="form" id="name" placeholder="Judul" name="title" required>
            </div>
            <div class="form__section">
                <p class="description">Land Size</p>
                <input type="text" class="form" id="name" placeholder="Land Size" name="landsize" required>
            </div>
            <div class="form__section">
                <p class="description">Certificate</p>
                <input type="text" class="form" id="name" placeholder="Certificate" name="certificate" required>
            </div>
            <div class="form__section">
                <p class="description">Bedroom</p>
                <input type="number" class="form" id="name" placeholder="Bedroom" name="bedroom" required>
            </div>
            <div class="form__section">
                <p class="description">Bathroom</p>
                <input type="number" class="form" id="name" placeholder="Bathroom" name="bathroom" required>
            </div>
            <div class="form__section">
                <p class="description">Carport</p>
                <input type="number" class="form" id="name" placeholder="Carport" name="carport" required>
            </div>
            <div class="button">
                <a href="" class="save__button">Save</a>
            </div>
        </div>
    @endsection

</body>

</html>
