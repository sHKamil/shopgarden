@extends('layouts.appMainView')

@section('content')

<div class="container">
      <div id="carouselExampleCaptions" class="carousel slide mb-3" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item">
            <img src="https://picsum.photos/id/159/1400/300" style="filter: brightness(50%);" class="d-block w-100 rounded-pill" id="banner-1" alt="Banner numer 1">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="mb-5 pb-5">ShopGarden</h5>
              <p class="fs-3 mb-0 mb-5">Sprawdź nasze oferty z kategorii nawadnianie.</p>
            </div>
          </div>
          <div class="carousel-item active">
            <img src="https://picsum.photos/id/106/1400/300" style="filter: brightness(50%);" class="d-block w-100 rounded-pill" id="banner-2" alt="Banner numer 2">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="mb-5 pb-5">ShopGarden</h5>
              <p class="fs-2 text-white mb-5">Od 14.02 do 20.02 nasiona kwiatów w promocyjnej cenie!</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://picsum.photos/id/107/1400/300" style="filter: brightness(50%);" class="d-block w-100 rounded-pill" id="banner-3" alt="Banner numer 3">
            <div class="carousel-caption d-none d-md-block text-white">
                <h5 class="mb-5 pb-5">ShopGarden</h5>
              <p class="fs-1 text-white mb-5">Odśwież swój ogród na wakacje</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    <div class="row justify-content-around">
        <div class="col-md-8 order-md-2 col-lg-9">
            <div class="container-fluid">
                {{-- <div class="row   mb-5">
                    <div class="col-12">
                    <div class="dropdown text-md-left text-center float-md-left mb-3 mt-3 mt-md-0 mb-md-0">
                        <label class="mr-2">Sort by:</label>
                        <a class="btn btn-lg btn-light dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Relevance <span class="caret"></span></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" x-placement="bottom-start" style="position: absolute; transform: translate3d(71px, 48px, 0px); top: 0px; left: 0px; will-change: transform;">
                        <a class="dropdown-item" href="#">Relevance</a>
                        <a class="dropdown-item" href="#">Price Descending</a>
                        <a class="dropdown-item" href="#">Price Ascending</a>
                        <a class="dropdown-item" href="#">Best Selling</a>
                        </div>
                    </div>
                    <div class="btn-group float-md-right ml-3">
                        <button type="button" class="btn btn-lg btn-light"> <span class="fa fa-arrow-left"></span> </button>
                        <button type="button" class="btn btn-lg btn-light"> <span class="fa fa-arrow-right"></span> </button>
                    </div>
                    <div class="dropdown float-right">
                        <label class="mr-2">View:</label>
                        <a class="btn btn-lg btn-light dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">9 <span class="caret"></span></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" x-placement="bottom-end" style="will-change: transform; position: absolute; transform: translate3d(120px, 48px, 0px); top: 0px; left: 0px;">
                        <a class="dropdown-item" href="#">12</a>
                        <a class="dropdown-item" href="#">24</a>
                        <a class="dropdown-item" href="#">48</a>
                        <a class="dropdown-item" href="#">96</a>
                        </div>
                    </div>
                    </div>
                </div> --}}
                <div class="d-flex justify-content-around">
                    <p class="fs-1 text-grey mb-5">THERE IS NO ITEMS YET</p>
                </div>
            </div>
        </div>
    </div>    
</div>
@endsection
@section('js-files')
    <script src="{{ asset('js/welcome.js') }}"></script>
@endsection
