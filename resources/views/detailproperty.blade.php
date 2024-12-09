@extends('layout.master')
@section('content')


<div class="container my-3 pt-4">
    <div class="row">

        {{-- Bento Grid --}}
        <div class="container my-5 bento-grid">
    
            <div class="row g-4">
                <!-- Large item -->
                <div class="col-md-8">
                    <div class="bento-item" style=" height: 400px; border-radius: 8px; display: flex; justify-content: center; align-items: center; color: white; text-align: center; overflow: hidden;">
                        <img src="{{ asset('images/property/property10.png') }}" alt="Large Item" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                    </div>
                </div>
                <!-- Two small items -->
                <div class="col-md-4">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="bento-item" style="height: 200px; border-radius: 8px; display: flex; justify-content: center; align-items: center; color: white; text-align: center; overflow: hidden;">
                                <img src="{{ asset('images/property/property10.png') }}" alt="Small Item 1" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="bento-item" style="height: 200px; border-radius: 8px; display: flex; justify-content: center; align-items: center; color: white; text-align: center; overflow: hidden;">
                                <img src="{{ asset('images/property/property10.png') }}" alt="Small Item 2" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Medium item -->
                <div class="col-md-4">
                    <div class="bento-item" style=" height: 250px; border-radius: 8px; display: flex; justify-content: center; align-items: center; color: black; text-align: center; overflow: hidden;">
                        <img src="{{ asset('images/property/property10.png') }}" alt="Medium Item 1" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                    </div>
                </div>
                <!-- Medium item -->
                <div class="col-md-4">
                    <div class="bento-item" style=" height: 250px; border-radius: 8px; display: flex; justify-content: center; align-items: center; color: black; text-align: center; overflow: hidden;">
                        <img src="{{ asset('images/property/property10.png') }}" alt="Medium Item 2" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                    </div>
                </div>
                <!-- Medium item -->
                <div class="col-md-4">
                    <div class="bento-item" style=" height: 250px; border-radius: 8px; display: flex; justify-content: center; align-items: center; color: white; text-align: center; overflow: hidden;">
                        <img src="{{ asset('images/property/property10.png') }}" alt="Medium Item 3" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                    </div>
                </div>
            </div>
        </div>

        {{-- Carousel --}}
        <div class="container my-5 carousel">
            <div id="starryCarousel" class="carousel slide" data-bs-ride="carousel">
              
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('images/property/property10.png') }}" class="d-block w-100" >
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/property/property10.png') }}" class="d-block w-100">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/property/property10.png') }}" class="d-block w-100" >
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/property/property10.png') }}" class="d-block w-100" >
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/property/property10.png') }}" class="d-block w-100" >
                  </div>
                </div>
                <a class="carousel-control-prev" href="#starryCarousel" role="button" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#starryCarousel" role="button" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </a>
              </div>
    
            
            
              <!-- Information Property -->
        
        </div>

        <div class="container">

            <div class="row" style="margin-top: -15px;">
                  <div class="col-lg-7 col-md-4 col-sm ">
                    <h4 class="txt-tittle1" style="font-weight: 600; font-family: Montserrat, sans-serif; font-size: 28px; margin-left: 5px;">{{$property->property_name}}</h4>
                    <p class="text-muted1" style="font-weight: 300; font-family: Montserrat, sans-serif; font-size: 20px; margin-left: 5px;">{{$property->address}}</p>
               
                </div>
    
                <div class="col-lg-4 col-md-7 text-price">

        
                    <p class="" style="font-weight: 600; font-family: Montserrat, sans-serif; font-size: 20px; margin-left: 5px;">{{ 'Rp ' . number_format($property->price, 0, ',', '.') . ',00' }}</p>
                </div>
            </div>
        </div>

        {{-- Border Bottom --}}
        <div class="spacings" style="width: 1230px;   margin-bottom: 50px;"></div>
        

        <div class="container pb-3 ">
            <div class="row gx-3">

                {{-- Section Description --}}
                <div class="col-lg-8 col-md-7">
                    <div class="section-description">
                
                        <p class="text-description" style="font-weight: 400; font-family: Montserrat, sans-serif; font-size: 16px; margin-left: 5px;">
                            {{$property->description}}
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita, debitis. In quia, ullam dolorum aliquid earum sequi, assumenda sit odio hic odit quas suscipit modi dicta eveniet voluptatibus nobis nisi illum! Optio et quaerat itaque veritatis minus dolor, delectus, blanditiis voluptate ex quia nesciunt amet quae, nostrum enim molestias repudiandae quos aut voluptates. Voluptates placeat similique doloremque, maiores nam recusandae facilis velit laboriosam ad ducimus quaerat dolores, ut modi, optio aut? Dolore neque voluptatem unde aliquid, ipsum nobis autem nemo eveniet nostrum earum dolorem laboriosam, excepturi fuga repellat placeat fugiat. Eius et reiciendis quisquam maiores perspiciatis facilis ab aspernatur provident!
                        </p>

                    </div>
                </div>
                
                {{-- Section Agent--}}
                <div class="col-lg-3 col-md-4 mb-4 p-2 agent-card" style="height:100%;">
                    <div class="h-100 shadow-sm d-flex flex-column py-2 px-1 w-100 ">
                      <div class="image-container mx-auto mb-auto  w-100 h-100">
                        <img src="{{ asset('images/agents/agent13.png')}}" class="w-100" >
                      </div>
                      <div class="d-flex flex-column  w-100 text-center">
                            <p class="fs-6 fw-bold mb-0">Nicholas Nelson</p>
                            <p class="fs-6 w-100 mb-1 text-secondary">+6281272940557</p>
                            <div class="pb-2 w-100">
                                <a href="#" class="btn btn-sm"
                                    style="background-color: #44D7B5; border-color: #44D7B5; color: white;">Lihat Properti <span class="bg-warning px-1 rounded  text-light">15</span></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
        <div class="container  map-container pb-4" >
            <div class="row gx-5 h-100 gy-3 ">
                <div class="col-lg-3 col-md-4">
                    <div class="d-flex flex-column gap-2">
                        
                        <h4 class="mb-0 ms-1" style="font-weight: 600; font-family: Montserrat, sans-serif; font-size: 28px; ">Specification</h4>

                        <div class="d-flex">
                            
                            <p class="fs-6 mb-0" style="font-family: Montserrat, sans-serif;">Building Size</p>
                            <p class="fs-6 mb-0 ms-auto" style="font-family: Montserrat, sans-serif;">: {{$property->building_size}}m<sup>2</sup></p>
                        </div>

                        <div class="d-flex">

                            <p class="fs-6 mb-0" style="font-family: Montserrat, sans-serif;">Land Size</p>
                            <p class="fs-6 mb-0 ms-auto" style="font-family: Montserrat, sans-serif;">: {{$property->land_size}}m<sup>2</sup></p>
                        </div>

                        <div class="d-flex">

                            <p class="fs-6 mb-0" style="font-family: Montserrat, sans-serif;">Certificate</p>
                            <p class="fs-6 mb-0 ms-auto" style="font-family: Montserrat, sans-serif;">: {{$property->certificate}}</p>
                        </div>

                        <d class="d-flex">

                            <p class="fs-6 mb-0" style="font-family: Montserrat, sans-serif;">Bedroom</p>
                            <p class="fs-6 mb-0 ms-auto" style="font-family: Montserrat, sans-serif;">: {{$property->bedroom}} units</p>
                        </d>

                        <div class="d-flex">

                            <p class="fs-6 mb-0" style="font-family: Montserrat, sans-serif;">Bathroom</p>
                            <p class="fs-6 mb-0 ms-auto" style="font-family: Montserrat, sans-serif;">: {{$property->bathroom}} units</p>
                        </div>

                        <div class="d-flex">

                            <p class="fs-6 mb-0" style="font-family: Montserrat, sans-serif;">Carport</p>
                            <p class="fs-6 mb-0 ms-auto" style="font-family: Montserrat, sans-serif;">: {{$property->carport}} units</p>
                        </div>
                        
                    </div>
                </div>

                <div class="col-lg-8 col-md-7 h-100" >
                    <div class="d-flex flex-column gap-2 h-100 ">
                        <h4 class="mb-0 location-map" style="font-weight: 600; font-family: Montserrat, sans-serif; font-size: 28px; ">Location</h4>
                        <iframe class="g-maps h-100" style="border-radius: 10px; " 
                        src="{{$property->location_link}}" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div> 
                
                </div>
                  
                    
            </div>
        </div>
    
            
    </div>
</div>

    
    

@endsection



<style>

    .text-price {
        text-align:end;
    }


    .carousel {
        display:none;
    }

    .bento-grid {
        display:block;
    }
    .location-map {
        margin: 0 auto;
    }
    .map-container {
        min-height:20rem;
    }

    @media (max-width: 992px) {
        .agent-card {
            margin-left:auto;
        }
    }

    @media (max-width: 768px) {

        .carousel {
            display: block;
        }

        .agent-card {
            width:50%;
            margin: 0 auto;
        }

        .location-map {
            margin: 0 0;
        }
        .map-container {
            height:100%;
        }

        .bento-grid{
            display:none;
        }

        .text-price {
            text-align: start;
        }

      

    }
    @media (max-width: 576px) {
     

    }

    @media (max-width: 480px) {
      
    }

    .g-maps {
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.35);
    }

    .card-agent {
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.40);
    }

    .btn-primary-call, .btn-primary-chat {
        transition-duration: 0.4s !important;
    }

    .btn-primary-call:hover {
        font-weight: bold !important;
        color: #FFFFFF !important;
        background-color: #44D7B5 !important;
    }

    .btn-primary-chat:hover {
        font-weight: bold !important;
        color: #FFFFFF !important;
        background-color: #44D7B5 !important;
    }


    .spacings {
        margin-left: 17px;
        color: #7E7878;
        border-bottom: solid;
        border-width: 3px;
    }

    .imagessparent {
        border: none;
        border-radius: 20px;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .imagesschild{
        border: none;
        border-radius: 20px;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
</style>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Inisialisasi carousel agar berjalan otomatis (autoplay)
  var myCarousel = document.getElementById('starryCarousel');
  var carousel = new bootstrap.Carousel(myCarousel, {
    interval: 2000, // Menentukan interval 2 detik untuk pergantian slide otomatis
    ride: 'carousel' // Menentukan untuk berjalan otomatis
  });
</script>