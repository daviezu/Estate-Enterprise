<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>EstateVerse</title>
  <link rel="stylesheet" href={{ asset('EstateVerseCSS/editmyproperty.css') }}>
</head>
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