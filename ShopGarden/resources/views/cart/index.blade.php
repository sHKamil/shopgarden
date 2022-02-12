@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 d-flex justify-content-between">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                  <span class="text-muted">Koszyk</span>
                </h4>
              
            </div>
            <div class="row d-flex justify-content-between">
              <div class="col-7 ml-5 mr-1">
                <div class="row d-flex justify-content-between p-2">
                  @if(empty($carts[0]))
                    <div class="col-12 text-center">
                      <h2 class="my-0 fs-1">Twój koszyk jest pusty</h2>
                    </div>
                  @endif
                  @foreach($carts as $index => $cart)
                  <div class="mt-2 col-12 justify-content-between row border border-5 rounded-pill p-2">
                    <div class="col-2 pr-0">
                      <img width="70" height="70" src="{{asset('app/'.$products[$index]->image_path)}}">
                    </div>
                    <div class="col-3">
                      <h6 class="my-0">{{$products[$index]->name}}</h6>
                      <small class="text-muted">sztuk: x{{$cart->quantity}}</small>
                    </div>
                    <div class="col-4 text-center row align-items-center">
                      <span class="col-12 text-muted fs-5">{{$products[$index]->price*$cart->quantity }} PLN</span>
                      <span class="col-12 text-muted small">Cena za szt: {{$products[$index]->price; }} PLN</span>
                    </div>
                    <div class="col-2 row align-items-center">
                      <button class="col-md-12 h-100 btn btn-danger rounded-pill-right btn-sm delete cart" data-id="{{ $cart->id }}">
                        X
                      </button>
                    </div>
                  </div>
                  @endforeach
                  <div class="mt-4 col-12 row justify-content-between border border-info rounded-pill">
                    <div class="col-6 pr-0">
                    </div>
                    <div class="col-4 text-center">
                      <span class="fs-5 text-muted">Suma: {{$sum}} PLN</span>
                    </div>
                    <div class="col-1">
                    </div>
                  </div>
              </div>
            </div>
            <div style="min-height: 30vh;" class="col-5 ml-1 mr-5 border rounded-3 row">
              <form class="col-12 my-4">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Kod promocyjny">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-secondary">Odbierz</button>
                  </div>
                </div>
                <div class="input-group-append">
                  <button type="submit" class="btn btn-success w-100 mt-5">Złóż zamóweinie</button>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js-files')
  <script src="{{ asset('js/delete.js') }}"></script>
@endsection
{{-- 
@extends('layouts.app')

@section('css-files')
    <link href="{{ asset('css/cart.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="container">
        @include('helpers.flash-messages')
        <div class="cart_section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="cart_container">
                            <div class="cart_title">Koszyk<small> ({{ $cart->getItems()->count() }}) </small></div>
                            <div class="cart_items">
                                <ul class="cart_list">
                                    @foreach($cart->getItems() as $item)
                                        <li class="row text-center justify-content-center cart_item clearfix align-items-center">
                                            <div class="col-md-2">
                                                <img src="{{ $item->getImage() }}" class="img-fluid mx-auto d-block" alt="Zdjęcie produktu">
                                            </div>
                                            <div class="col-md-3">
                                                <div class="cart_item_title">Nazwa</div>
                                                <div class="cart_item_text">{{ $item->getName() }}</div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="cart_item_title">Ilość</div>
                                                <div class="cart_item_text">{{ $item->getQuantity() }}</div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="cart_item_title">Cena [PLN]</div>
                                                <div class="cart_item_text">{{ $item->getPrice() }}</div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="cart_item_title">Suma [PLN]</div>
                                                <div class="cart_item_text">{{ $item->getSum() }}</div>
                                            </div>
                                            <div class="col-md-1">
                                                <button class="btn btn-danger btn-sm delete" data-id="{{ $item->getProductId() }}">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="order_total">
                                <div class="order_total_content text-md-right">
                                    <div class="order_total_title">Suma [PLN]:</div>
                                    <div class="order_total_amount">{{ $cart->getSum() }}</div>
                                </div>
                            </div>
                            <div class="cart_buttons">
                                <a href="/" class="button cart_button_clear">Wróć do sklepu</a>
                                <button type="button" class="button cart_button_checkout" disabled>Zapłać</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
    const deleteUrl = "{{ url('cart') }}/";
    const confirmDelete = "{{ __('shop.messages.delete_confirm') }}";
@endsection
@section('js-files')
    <script src="{{ asset('js/delete.js') }}"></script>
@endsection --}}
