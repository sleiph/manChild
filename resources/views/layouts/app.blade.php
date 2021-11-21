<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'manChild') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/submit.css') }}" rel="stylesheet">
</head>
<body>
    <div class="flex-center position-ref full-height">

            <div class="top-left links">
                <a class="navbar-marca" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>

            <!-- Right Side Of Navbar -->
            <div class="top-right links">
                <!-- Authentication Links -->
                @guest
                        <a href="{{ route('login') }}">{{ __('Logar') }}</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">{{ __('Registrar') }}</a>
                    @endif
                    @else
                        <a href="/home" role="button">
                            {{ Auth::user()->name }}
                        </a>

                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            {{ __('Deslogar') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                @endguest
            </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
