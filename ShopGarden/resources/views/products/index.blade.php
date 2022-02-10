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
                            <th scope="col">Cena za sztukę</th>
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
                                <button class="btn btn-danger btn-sm delete" data-id="{{ $product->id }}">
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
