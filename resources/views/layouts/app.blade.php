<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Nunito:wght@200&family=Open+Sans:wght@300&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="navbar">
            {{-- <a class="navbar-brand">Brand</a> --}}
            <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="my-nav" class="collapse navbar-collapse justify-content-center">
                <ul class="navbar-nav">
                    <li class="nav-item{{ Route::currentRouteName() == 'home' ? ' active' : '' }}">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item{{ strpos(url()->current(), '/professional') ? ' active' : '' }}">
                        <a class="nav-link" href="{{ route('professional') }}">Professional</a>
                    </li>
                    <li class="nav-item{{ strpos(url()->current(), '/experience') ? ' active' : '' }}">
                        <a class="nav-link" href="{{ route('experience') }}">Experience</a>
                    </li>
                    <li class="nav-item{{ strpos(url()->current(), '/portfolio') ? ' active' : '' }}">
                        <a class="nav-link" href="{{ route('portfolio') }}">Portfolio</a>
                    </li>
                    <li class="nav-item{{ strpos(url()->current(), '/contact') ? ' active' : '' }}">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>
</body>

</html>
