@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div>SHOW</div>
                    <div>                    
                        <a href="{{ route('products.index') }}">
                            <button type="button" class="btn btn-primary">Wróć</button>
                        </a>
                    </div>
                </div>

                <div class="card-body d-flex">
                    <div class="mb-3">
                        <img src="{{ asset('app/'.$product->image_path) }}" height="200" width="200"/>
                    </div>

                    <form method="POST" action="{{ route('cart.add') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="quantity" class="col-md-6 col-form-label text-md-end">Ilość sztuk (max {{ $product->quantity }}):</label>

                            <div class="col-md-6">
                                <input id="quantity" type="number" min="1" max="{{ $product->quantity }}" class="form-control @error('quantity') is-invalid @enderror" name="quantity" required>

                                @error('quantity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a href="{{ route('cart.add') }}">
                                    <button type="submit" class="btn btn-success">
                                        Kup
                                    </button>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection