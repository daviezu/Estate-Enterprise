@extends('layout.master')
@section('content')

    <div class="container-md pt-5 mt-5 container">
      <div class="row">
        <div class="col-lg-9 col-md-8">
          <p class="fs-2 fw-semibold">Daftar Agent</p>
        </div>

        {{-- Search Section --}}
        <div class="col-lg-9 col-md-8">
            <form action="" class="d-flex py-2 gap-2">
                <input type="text" class="form-control form-control-sm rounded border-0" style="background-color:#F2F2F2;" 
               name="search" placeholder="Cari Agent..." value={{$search?? ""}}  > 
                <button class="btn rounded text-light"  style="background-color: #44D7B5;" >Search</button>
            </form>
        </div>


      </div>

      {{-- Agent List Section --}}
      <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 justify-center text-center py-2 gy-2">


        <div class="container mt-2">
          <div class="row ">
              @foreach ($agents as $agent)
                  <div class="col-lg-3 col-md-4 col-sm-6 mb-4 " style="height:100%;">
                      <div class="h-100 shadow-sm d-flex flex-column py-2 px-1 w-100 ">
                        <div class="mx-auto mb-auto w-100 " style="height:295px; width:100%">
                          <img src="{{$agent->picture_path}}" class="w-100 h-100 rounded" style="background-position:center; object-fit:cover;" >
                        </div>
                        <div class="d-flex flex-column  w-100" >
                              <p class="fs-6 fw-bold mb-0">{{$agent->fullname}}</p>
                              <p class="fs-6 text-secondary mb-0">{{$agent->phone_number}}</p>
                        
                              <div class="pb-2 w-100 py-2">
                                  <a href="{{route("agent.detail", $agent->user_id)}}" class="btn btn-lg"
                                      style="background-color: #44D7B5; border-color: #44D7B5; color: white;">Lihat Properti </a>
                              </div>
                          </div>
                      </div>
                  </div>
                  {{-- Pagination --}}
            
           
              @endforeach

                  <div class="col-12 py-4">

                    <div class="row pt-4 text-center">
                      <div class="col">
                          {{$agents->links()}}
                      </div>
                    </div>
                  </div>
          </div>
      </div>

    </div>

@endsection

<style>


 

  @media (max-width: 992px) {
  
  }
  
  @media (max-width: 768px) {
    p.fs-2 {
      margin-top:1rem;
      text-align:center;
    }
  }
  
  @media (max-width: 576px) {
  

  }
  
  @media (max-width: 480px) {
   
  }

</style>

