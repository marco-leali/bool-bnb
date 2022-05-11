<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BoolBnB') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css'
        integrity='sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=='
        crossorigin='anonymous' />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- Materialize --}}

    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> --}}
    @yield('additional-scripts')

</head>

<body>
    <div id="app">
        <div class="area"></div>
        <nav class="main-menu">
            <ul>
                <li>
                    <a href="/" class="d-flex align-items-center">
                        {{-- <i class="fa fa-home fa-2x"></i> --}}
                        <img src="http://www.mattonsbnb.com/wp-content/uploads/2016/04/cropped-icon-1.png" width="46"
                            class="mx-2" alt="">
                        <span class="nav-text ">
                            <h2 class="fw-bold">BoolBnB</h2>
                        </span>
                    </a>
                </li>
                <li class="has-subnav py-3 mt-4">
                    <a href="{{ url('/admin') }}"><i class="fa-solid fa-house-user fa-2x mx-3"></i>
                        <h5 class="nav-text">La tua dashboard</h5>
                    </a>
                </li>
            </ul>
            <ul>
                @if (Auth::user() && Auth::user())
                    {{-- Benvenuto {{ Auth::user()->name }} {{ Auth::user()->surname }} --}}
                    <li class="has-subnav py-3">
                        <a href="{{ route('admin.apartments.index') }}">
                            <i class="fa fa-list fa-2x"></i>
                            <h5 class="nav-text ">
                                I tuoi appartamenti
                            </h5>
                        </a>
                    </li>
                    <li class="has-subnav py-3">
                        <a href="{{ route('admin.packs.index') }}">
                            <i class="fa-solid fa-medal fa-2x mx-3"></i>
                            <h5 class="nav-text">
                                Sponsorizzazioni
                            </h5>
                        </a>
                    </li>
                    <li class="has-subnav py-3">
                        <a href="{{ route('admin.apartments.statistics') }}">
                            <i class="fa-solid fa-chart-column fa-2x mx-3"></i>
                            <h5 class="nav-text">
                                Statistiche
                            </h5>
                        </a>
                    </li>
                @else
                    {{ Auth::user() }}
                @endif
            </ul>
            <ul class="logout">
                @guest
                    <li class="d-none">
                        <a href="/login"><i class="fa-solid fa-arrow-right-to-bracket fa-2x ms-3"></i></a>
                    </li>
                @else
                    <li class="text-secondary">
                        <a class="ms-3 d-flex" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                                                 document.getElementById('logout-form').submit();">
                            <i class="fa-solid fa-power-off fa-2x pe-3"></i>
                            <h5>Esci</h5>

                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                @endguest
            </ul>
        </nav>


        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name ?? Auth::user()->email }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}

        <main>
            @yield('content')
        </main>
    </div>
    @yield('scripts')
</body>

</html>
