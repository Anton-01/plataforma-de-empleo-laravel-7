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

    @yield('styles')
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body class="bg-gray-200 min-h-screen leading-none">
    <div id="app">
        <nav class="bg-gray-800 py-2 shadow-md">
            <div class="container mx-auto md:px-0">
                <div class="flex items-center justify-around">
                    <a class="text-2xl text-white" href="{{ url('/') }}">
                        {{ config('app.name', 'Jobs') }}
                    </a>

                    <nav class="flex:1 text-right">
                        @guest
                        <a class="text-white no-underline hover:underline text-gray-300 p-3"
                            href="{{ route('login') }}">{{ __('Login') }}</a>

                        @if (Route::has('register'))
                        <a class="text-white no-underline hover:underline text-gray-300 p-3"
                            href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                        @else
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <span class="caret"></span>
                        </a>
                        <span class="text-gray-300 text-sm pr-4"> {{ Auth::user()->name }} </span>
                        <a class="text-gray-300 no-underline hover:underline hover:text-gray-300 p-3 "
                            href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        @endguest
                    </nav>
                </div>
            </div>
        </nav>

        <div class="py-4 bg-gray-700">
            <div class="container mx-auto flex space-x-1">
                @yield('navegacion')
            </div>
        </div>
        <main class="mt-10 container mx-auto">
            @yield('content')
        </main>
    </div>
    @yield('scripts')
</body>

</html>