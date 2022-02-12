@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div> </div>
                <div class="fs-4 text-center">Edytuj swoje dane dostawy</div>
                <div>                    
                    <a href="{{ route('welcome') }}">
                        <button type="button" class="btn btn-primary">Wróć</button>
                    </a>
                </div>
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name">

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="tel" class="col-md-4 col-form-label text-md-end">Telefon</label>

                        <div class="col-md-6">
                            <input id="tel" type="tel" class="form-control @error('tel') is-invalid @enderror" name="email" value="{{ $user->tel }}" required>

                            @error('tel')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="vivodeship" class="col-md-4 col-form-label text-md-end">Województwo</label>

                        <div class="col-md-6">
                            <input id="vivodeship" type="vivodeship" class="form-control @error('vivodeship') is-invalid @enderror" name="vivodeship" value="{{ $user->vivodeship }}" required>

                            @error('vivodeship')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="city" class="col-md-4 col-form-label text-md-end">Miejscowość</label>

                        <div class="col-md-6">
                            <input id="city" type="city" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ $user->city }}" required>

                            @error('city')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="zip_code" class="col-md-4 col-form-label text-md-end">Kod pocztowy</label>

                        <div class="col-md-6">
                            <input id="zip_code" type="zip_code" class="form-control @error('zip_code') is-invalid @enderror" name="zip_code" value="{{ $user->zip_code }}" required>

                            @error('zip_code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="street" class="col-md-4 col-form-label text-md-end">Ulica</label>

                        <div class="col-md-6">
                            <input id="street" type="street" class="form-control @error('street') is-invalid @enderror" name="street" value="{{ $user->street }}" required>

                            @error('street')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="h_number" class="col-md-4 col-form-label text-md-end">Numer domu</label>

                        <div class="col-md-6">
                            <input id="h_number" type="h_number" class="form-control @error('h_number') is-invalid @enderror" name="h_number" value="{{ $user->h_number }}" required>

                            @error('h_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="apartment" class="col-md-4 col-form-label text-md-end">Numer mieszkania</label>

                        <div class="col-md-6">
                            <input id="apartment" type="apartment" class="form-control @error('apartment') is-invalid @enderror" name="apartment" value="{{ $user->apartment }}">

                            @error('apartment')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-success w-25">
                                Zapisz zmiany
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-header d-flex justify-content-between">
                <div></div>
                <div class="fs-4 text-center">Twoje zamówienia</div>
                <div>                    
                </div>
            </div>

            <div class="card-body">
            </div>
        </div>
    </div>
</div>
@endsection
@section('javascript')
  {{-- const url = "{{ url('items') }}/"; --}}
@endsection
@section('js-files')
  {{-- <script src="{{ asset('js/delete.js') }}"></script> --}}
@endsection
