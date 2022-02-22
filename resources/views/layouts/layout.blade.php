<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'فروشگاه') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="{{ asset('js/dropzone.js') }}" ></script>
    <link href="{{ asset('css/dropzone.css') }}" rel="stylesheet">
    
    <link href="{{ asset('css/light-bootstrap-dashboard2.css') }}" rel="stylesheet">
    
    <style>
        body {
            background-image: url("/img/full-screen-image-3.jpg");
            background-repeat: no-repeat, repeat;
            background-size: cover; 
            background-attachment: fixed;
            box-shadow: 0 0 5px 0 ;
        }
    </style>
       
</head>
<body>
    <div class="wrapper" style="min-width: 100%">
        <div class="sidebar" data-color="blue" data-image="/img/full-screen-image-3.jpg" style="min-width: 100%;">
            <div class="sidebar-wrapper" style="min-width: 100%">
                @include('shared.errors')
                <div id="main" class="m-4" >
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</body>
</html>


