@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div>Nowy kod promocyjny</div>
                    <div>                    
                        <a href="{{ route('products.index') }}">
                            <button type="button" class="btn btn-primary">Wróć</button>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('products.promo_add') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="promo_code" class="col-md-4 col-form-label text-md-end">Kod promocyjny</label>

                            <div class="col-md-6">
                                <input id="promo_code" type="text" class="form-control @error('promo_code') is-invalid @enderror" name="promo_code" value="{{ old('promo_code') }}" required autofocus>

                                @error('promo_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="type" class="col-md-4 col-form-label text-md-end">Rodzaj</label>

                            <div class="col-md-6">
                                <input id="type" type="text" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ old('type') }}" required autofocus>

                                @error('type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="product_id" class="col-md-4 col-form-label text-md-end">Id produktu</label>

                            <div class="col-md-6">
                                <input id="product_id" type="text" class="form-control @error('product_id') is-invalid @enderror" name="product_id" required>
                                    {{-- @foreach($categories as $category)
                                    <option value="{{ $category->id }}">
                                        {{ $category->name }}
                                    </option>
                                    @endforeach
                                </select> --}}
                                @error('product_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="quantity" class="col-md-4 col-form-label text-md-end">Ilość</label>

                            <div class="col-md-6">
                                <input id="quantity" type="number" min="1" class="form-control @error('quantity') is-invalid @enderror" name="quantity" required>

                                @error('quantity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="linear_discount" class="col-md-4 col-form-label text-md-end">Przecena</label>

                            <div class="col-md-6">
                                <input id="linear_discount" type="number" min="0.01" step="0.01" class="form-control @error('linear_discount') is-invalid @enderror" name="linear_discount" value="{{ old('linear_discount') }}" required>

                                @error('linear_discount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Dodaj kod promocyjny
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
