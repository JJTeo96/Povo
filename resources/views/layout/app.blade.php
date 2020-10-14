<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>

    <!-- Fonts -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Favicon -->
    {{-- <link href="{{ asset('img/favicon.png') }}" rel="icon" type="image/png"> --}}

    <style>
        .collapse-item{
            /*overflow:hidden;
            text-overflow: ellipsis;*/
            /*word-wrap: break-word;
            white-space: initial;*/
        }

        .sidebar .nav-item .collapse .collapse-inner .collapse-item, .sidebar .nav-item .collapsing .collapse-inner .collapse-item{
            white-space: initial;
            min-height: 880px;
        }
    </style>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>
<div class="container-fluid p-0" style="padding: 0">
    <div class="row no-gutters">
        @yield('content')
    </div>
</div>
</body>
</html>
