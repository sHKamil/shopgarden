@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                  <div>
                    Produkty
                  </div>

                  <div>
                    <a href="{{ route('products.create') }}">
                      <button type="button" class="btn btn-primary">Dodaj</button>
                    </a>
                  </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nazwa</th>
                            <th scope="col">Kategoria</th>
                            <th scope="col">Cena za sztukę [PLN]</th>
                            <th scope="col">Ilość</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($products as $product)
                          <tr>
                            <th scope="row">{{ $product->id }}</th>
                            <td class="text-center">{{ $product->name }}</td> 
                            <td class="text-center">{{ $product->category->name }}</td> 
                            <td class="text-center">{{ $product->price }}</td> 
                            <td class="text-center">{{ $product->quantity }}</td> 
                            <td>
                              <a href="{{ route('products.edit', $product->id) }}">
                                <button class="btn btn-success btn-sm">
                                  E
                                </button>
                              </a>
                                <button class="btn btn-danger btn-sm delete prod" data-id="{{ $product->id }}">
                                  X
                                </button>
                            </td> 
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                  <div>
                    Kody promocyjne
                  </div>

                  <div>
                    <a href="{{ route('products.promoCreate') }}">
                      <button type="button" class="btn btn-primary">Dodaj</button>
                    </a>
                  </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Kod promocyjny</th>
                            <th scope="col">Rodzaj</th>
                            <th scope="col">Ilość</th>
                            <th scope="col">Pozostała ilość</th>
                            <th scope="col">Przecena [PLN]</th>
                            <th scope="col">Id produktu</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($promo_codes as $promo_code)
                          <tr>
                            <th scope="row">{{ $promo_code->id }}</th>
                            <td class="text-center">{{ $promo_code->promo_code }}</td> 
                            <td class="text-center">{{ $promo_code->type }}</td> 
                            <td class="text-center">{{ $promo_code->quantity }}</td> 
                            <td class="text-center">{{ $promo_code->quantity_left }}</td> 
                            <td class="text-center">{{ $promo_code->linear_discount }}</td> 
                            <td class="text-center">{{ $promo_code->product_id }}</td> 
                            <td>
                              <a href="{{ route('products.promoEdit', $promo_code->id) }}">
                                <button class="btn btn-success btn-sm">
                                  E
                                </button>
                              </a>
                                <button class="btn btn-danger btn-sm delete promo" data-id="{{ $promo_code->id }}">
                                  X
                                </button>
                            </td> 
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('javascript')
  const url = "{{ url('items') }}/";
@endsection
@section('js-files')
  <script src="{{ asset('js/delete.js') }}"></script>
@endsection
