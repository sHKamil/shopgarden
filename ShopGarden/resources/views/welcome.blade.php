@extends('layouts.appMainView')

@section('content')
    <div class="container">
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
                            <div class="border rounded-3 border-1">
                                <div class="card h-100">
                                    <div class="card-img-top">
                                    @if(!is_null($product->image_path))
                                        <img src="{{ asset('app/' . $product->image_path) }}" class=" mx-auto d-block" width="200" height="200" alt="Miejsce na zdjęcie">
                                        {{-- <img src="storage/app/products/r6QuQDq9EuZuGzYN0LJ8b6PaUsY8AJkBqVnCLqqA.jpg" class="img-fluid mx-auto d-block" alt="Miejsce na zdjęcie"> --}}
                                    @else
                                        <img src="https://via.placeholder.com/240x240/5fa9f8/efefef" class="img-fluid mx-auto d-block" alt="Miejsce na zdjęcie">                            
                                    @endif
                                    </div>
                                    <div class="card-body text-left">
                                        <h4 class="card-title">
                                            <span class="font-weight-bold text-dark text-decoration-none small"> {{ $product->name }}</span>
                                        </h4>
                                        <h6 class="card-price text-dark m-0 lh-1 small">
                                            Kategoria: {{ $product->category->name }}
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
            </div>
            </div>
        </div>
        <div class="card border-light p-0" style="width: 15rem;">
            <div class="h-70 border border-3 rounded-3 border-info">
            <img src="{{ asset('app/'.$product->image_path) }}" class="card-img-top" alt="Zdjęcie poglądowe">
            <div class="card-body">
              <h5 class="card-title">{{ $product->name }}</h5>
              <p class="card-text">
                  Kod rabatowy: ******.<br/>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: {{ $product->quantity/100*100 }}%"></div>
                  </div>
                  Pozostało sztuk: {{ $product->quantity }} <br/>
                  <p class="mb-0 mt-2 lh-1 text-decoration-line-through text-muted">248.00 PLN</p>
                  <p class="m-0 lh-1">{{ $product->price }} PLN</p>
                </p>
                <div class="d-flex justify-content-center">
              <a href="#" class="btn btn-primary">Dodaj do koszyka</a>
            </div>
            </div>
            </div>
            <div class="h-30">
        </div>
        </div>
    </div>
</div>
@endsection
@section('js-files')
    <script src="{{ asset('js/welcome.js') }}"></script>
@endsection