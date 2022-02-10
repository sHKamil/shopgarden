@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-around bg-teal mt-5 pt-4">
            @foreach($categories as $category)
            <div class="mt-2 mb-2 pl-2">
            <div class="custom-control custom-checkbox">
                <a href="?category={{ $category->id }}">
                    <button type="button" class="btn btn-outline-success">{{ $category->name }}</button>
                </a>
            </div>
            </div>
            @endforeach 
        </div>
        <hr/>
        <div class="row">
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
                    <div class="col-6 col-md-6 col-lg-4 mb-3">
                        <a href="{{ route('products.show', $product->id) }}">
                            <div class="card h-100 border-0">
                                <div class="card-img-top">
                                @if(!is_null($product->image_path))
                                    <img src="{{ asset('app/' . $product->image_path) }}" class="img-fluid mx-auto d-block" alt="Miejsce na zdjęcie">
                                    {{-- <img src="storage/app/products/r6QuQDq9EuZuGzYN0LJ8b6PaUsY8AJkBqVnCLqqA.jpg" class="img-fluid mx-auto d-block" alt="Miejsce na zdjęcie"> --}}
                                @else
                                    <img src="https://via.placeholder.com/240x240/5fa9f8/efefef" class="img-fluid mx-auto d-block" alt="Miejsce na zdjęcie">                            
                                @endif
                            </div>
                                <div class="card-body text-center">
                                <h4 class="card-title">
                                    <a href="product.html" class=" font-weight-bold text-dark text-uppercase small"> {{ $product->name }}</a>
                                </h4>
                                <h5 class="card-price small text-warning">
                                    <i>{{ $product->price }}</i>
                                </h5>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            </div>
        </div>
        <form class="col-md-4 order-md-1 col-lg-3 sidebar-filter">
            {{-- <h3 class="mt-0 mb-5">Showing <span class="text-primary">12</span> Products</h3>
            <h6 class="text-uppercase font-weight-bold mb-3">Categories</h6> --}}
            {{-- @foreach($categories as $category)
            <div class="mt-2 mb-2 pl-2">
            <div class="custom-control custom-checkbox">
                <a href="?category={{ $category->id }}">
                    <label class="custom-control-label" for="category-1">{{ $category->name }}</label>
                </a>
            </div>
            </div>
            @endforeach --}}
            {{-- @foreach($categories as $category)
            <div class="mt-2 mb-2 pl-2">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="{{ $category->id }}">
                <label class="custom-control-label" for="category-1">{{ $category->name }}</label>
            </div>
            </div>
            @endforeach --}}
            
            <div class="divider mt-5 mb-5 border-bottom border-secondary"></div>
            <h6 class="text-uppercase mt-5 mb-3 font-weight-bold">Price</h6>
            <div class="price-filter-control">
                <input type="number" class="form-control w-50 pull-left mb-2" placeholder="50" id="price_min" name="filter[price_min]">
                <input type="number" class="form-control w-50 pull-right" placeholder="150" id="price_max" name="filter[price_max]">
            </div>
            <input id="ex2" type="text" class="slider " value="50,150" data-slider-min="10" data-slider-max="200" data-slider-step="5" data-slider-value="[50,150]" data-value="50,150" style="display: none;">
            <div class="divider mt-5 mb-5 border-bottom border-secondary"></div>
            <a href="#" id="filter-submit" class="btn btn-lg btn-block btn-primary mt-5">Update Results</a>
        </form>

        </div>
    </div>
@endsection
@section('js-files')
    <script src="{{ asset('js/welcome.js') }}"></script>
@endsection