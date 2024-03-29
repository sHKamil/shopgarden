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
                
                <div class="row">
                    
                    
                    @foreach ($products as $product)
                        <div class="col-6 col-md-6 col-lg-4 my-1">
                            <a class="text-decoration-none" href="{{ route('products.show', $product->id) }}">
                                <div style="min-height: 300px" class="border rounded-3 border-1">
                                    <div style="min-height: 300px" class="card h-100">
                                        <div class="card-img-top">
                                        @if(!is_null($product->image_path))
                                            <img src="{{ asset('storage/' . $product->image_path) }}" class=" mx-auto d-block" width="200" height="200" alt="Miejsce na zdjęcie">
                                        @else
                                            <img src="https://via.placeholder.com/240x240/5fa9f8/efefef" class="img-fluid mx-auto d-block" alt="Miejsce na zdjęcie">                            
                                        @endif
                                        </div>
                                        <div class="card-body text-left">
                                            <h4 class="card-title">
                                                <span class="font-weight-bold text-dark text-decoration-none small fs-5 "> {{ $product->name }}</span>
                                            </h4>
                                            <h6 class="card-price text-dark m-0 lh-1 small">
                                                Kategoria: {{ $product->category->name ?? ''}}
                                            </h6>
                                            <h5 class="card-price text-dark m-0 lh-1 small">
                                                {{ $product->price }} PLN
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    <div class="d-flex justify-content-around">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
        @if(!is_null($promo_product))
        <div class="card border-light bg-light p-0" style="width: 15rem;">
            <div class="h-70 border border-3 rounded-3 border-info">
                @if(!is_null($promo_product->image_path))
                    <img src="{{ asset('storage/'.$promo_product->image_path) }}" height="232" class="card-img-top" alt="Zdjęcie poglądowe">
                @else
                    <img src="https://via.placeholder.com/240x240/5fa9f8/efefef" class="img-fluid mx-auto d-block" alt="Miejsce na zdjęcie">                            
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $promo_product->name }}</h5>
                    <p class="card-text">
                        Kod rabatowy: {{ $promo_code->promo_code }}<br/>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: {{ $promo_code->quantity_left/$promo_code->quantity*100 }}%"></div>
                        </div>
                        Pozostało sztuk: {{ $promo_code->quantity_left }} / {{ $promo_code->quantity}} <br/>
                        <p class="mb-0 mt-2 lh-1 text-decoration-line-through text-muted">{{ $promo_product->price }} PLN</p>
                        <p class="m-0 lh-1">{{ $promo_product->price-$promo_code->linear_discount }}.00 PLN</p>
                    </p>
                    <div class="d-flex justify-content-center">
                        <a href="#" class="btn btn-primary">Dodaj do koszyka</a>
                    </div>
                </div>
            </div>
            <div class="h-30">
        @endif
        </div>
        </div>
    </div>    
</div>
@endsection
@section('js-files')
    <script src="{{ asset('js/welcome.js') }}"></script>
@endsection