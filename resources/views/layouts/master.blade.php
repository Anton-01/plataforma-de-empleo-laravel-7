<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="csrf-token" id="token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('assets/media/favicons/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/media/favicons/apple-touch-icon-180x180.png') }}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

    <script src="{{ asset('js/jquery-3.5.1.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('assets/css/oneui.css') }}">
    <script src="{{ asset('assets/js/oneui.core.min.js')}}"></script>

    <script src="{{ asset('js/app.js')}}" defer></script>

    <link rel="stylesheet" href="{{ asset('assets/css/plugins/summernote.min.css') }}">

    @yield('styles')

</head>

<body>
    <div id="app">
        <div id="page-container" class="page-header-dark main-content-boxed">
            @include('partials.header')
            <main id="main-container">
                <div class="content">
                    @yield('main')
                </div>
            </main>
        </div>
    </div>
    <script src="{{ asset('assets/js/plugins/summernote.js') }}"></script>
    @yield('scripts')
</body>

</html>
