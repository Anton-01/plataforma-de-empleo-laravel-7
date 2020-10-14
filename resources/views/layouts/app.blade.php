<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="shortcut icon" href="{{ asset('assets/media/favicons/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/media/favicons/apple-touch-icon-180x180.png') }}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
    <link rel="stylesheet" id="css-main" href="{{ asset('assets/css/oneui.min.css') }}">

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>


</head>

<body>
    <div id="page-container">
        <main id="main-container">
            <div class="bg-image" style="background-image: url('{{ url('/') }}/assets/media/photos/photo6@2x.jpg');">
                <div class="hero-static bg-white-95">
                    <div class="content">
                        <div class="row justify-content-center">
                            @yield('content')
                        </div>
                    </div>
                    <div class="content content-full font-size-sm text-muted text-center">
                        <strong>Sefeco</strong> &copy; <span data-toggle="year-copy"></span>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="{{ asset('assets/js/oneui.core.min.js') }}"></script>
    <script src="{{ asset('assets/js/oneui.app.min.js') }}"></script>

</body>
</html>
