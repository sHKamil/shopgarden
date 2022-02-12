<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ShopGarden') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <div class="row justify-content-around">
                    <a class="navbar-brand pt-4 col-2 text-center align-items-center" href="{{ url('/') }}">
                        {{ config('app.name', 'ShopGarden') }}
                    </a>
                    <div class="col-9 row justify-content-end">
                        <div class="card-body mt-2 col-6">
                            <form method="GET" action="{{ route('welcome') }}">
                                <div class="input-group">
                                    <input class="form-control rounded-pill-left" placeholder="Szukaj" type="text" name="name">
                                    <div class="input-group-append">
                                        <button style="width: 10vw;" class="btn btn-primary rounded-pill-right" type="submit">
                                            <i class="bi bi-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <button class="navbar-toggler col-2 my-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </div>
                <div class="collapse navbar-collapse row" id="navbarSupportedContent">
                    {{-- <div class="col-6">

                    </div> --}}

                    <!-- Right Side Of Navbar -->
                    <hr class="my-0">
                    <ul class="navbar-nav ms-auto col-12 justify-content-around">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">O nas</i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('statute') }}">Regulamin</i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">Kontakt</i></a>
                        </li>
                        <li class="nav-item">

                        </li>
                        <li class="nav-item">

                        </li>
                        <li class="nav-item">

                        </li>
                        <li class="nav-item">

                        </li>
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">Logowanie</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Rejestracja</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="bi bi-person-fill"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <div class="text-center fs-5">
                                        Witaj {{ Auth::user()->name }}
                                        <hr/>
                                    </div>
                                    <a class="dropdown-item" href="{{ route('products.index') }}">
                                        List produktów
                                    </a>
                                    <a class="dropdown-item" href="{{ route('user') }}">
                                        Dane do dostawy
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Wyloguj się
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('cart.index') }}"><i class="bi bi-cart4"></i></a>
                        </li>
                    </ul>
                    <hr class="my-0">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto col-12 justify-content-around my-1">
                        @foreach($categories as $category)
                        <li class="nav-item">
                            <a class="nav-link border m-1 btn text-uppercase" href="?category={{ $category->id }}">
                                {{ $category->name }}
                            </a>
                        </li>
                        @endforeach 
                    </ul>
                </div>
            </div>
        </nav>

        <main class="pb-4 mt-2">
            @yield('content')
        </main>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript">
        @yield('javascript')
    </script>
    @yield('js-files')
</body>
</html>
