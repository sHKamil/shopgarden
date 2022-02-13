@extends('layouts.appMainView')

@section('content')
<div class="container">
    <div class="">
        <a class="nav-link d-inline fw-bold text-dark" href="{{ route('welcome') }}">Strona główna</a>>
        @if(!empty($product->category->name))
        <a class="nav-link d-inline text-dark" href="/?category={{ $product->category->id }}">{{$product->category->name}}</a>
        @endif
    </div>
    <section class="py-0">
        <div class="container px-4 px-lg-5 my-2">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{asset('app/'.$product->image_path)}}" alt="..." /></div>
                <div class="col-md-6">
                    <div class="small mb-1">SKU: BST-498</div>
                    <h1 class="display-5 fw-bolder">{{$product->name}}</h1>
                    <div class="fs-5 mb-5">
                        <span class="text-decoration-line-through"></span>
                        <span>{{$product->price}} PLN</span>
                    </div>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium at dolorem quidem modi. Nam sequi consequatur obcaecati excepturi alias magni, accusamus eius blanditiis delectus ipsam minima ea iste laborum vero?</p>
                    <div class="d-flex">
                        <input class="form-control text-center me-3" id="inputQuantity" type="number" value="1" min="1" max="{{$product->quantity}}" style="max-width: 4rem" />
                        <button class="btn btn-outline-dark flex-shrink-0 add-to-cart" data-id="{{$product->id}}" type="button">
                            <i class="bi-cart-fill me-1"></i>
                            Dodaj do koszyka
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-light">
        <div class="container px-4 px-lg-5 mt-5">
            <h2 class="fw-bolder mb-4">Sprawdź także</h2>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach($products as $product)
                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" width="200" height="200" src="{{asset('app/'.$product->image_path)}}" alt="Zdjęcie poglądowe" />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">{{$product->name}}</h5>
                                {{$product->price}} PLN
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/item/{{$product->id}}">Sprawdź</a></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
@endsection
@section('javascript')
    const addToCart = '{{ url('cart') }}';
@endsection
@section('js-files')
    <script src="{{ asset('js/show.js') }}"></script>
@endsection