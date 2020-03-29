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
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="/">{{ config('app.name', 'Laravel') }}</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('/*')) ? 'active' : '' }}" href="/">Dashboard</a>
                    </li>
                    @if(Gate::allows('deadline', Auth::user()))
                        <li class="nav-item {{ (request()->is('deadline*')) ? 'active' : '' }}">
                            <a class="nav-link" href="/deadline/index">Deadline Manager</a>
                        </li>
                    @endif
                    @if(Gate::allows('admin', Auth::user()))
                        <li class="nav-item {{ (request()->is('admin*')) ? 'active' : '' }}">
                            <a class="nav-link" href="/admin/teachers">Admin</a>
                        </li>
                    @endif
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        @guest
                           <a class="nav-link" href="{{ route('login') }}">Login</a>
                        @else
                            <a class="nav-link" href="{{ route('logout') }}" id="logout">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                        @endguest
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
