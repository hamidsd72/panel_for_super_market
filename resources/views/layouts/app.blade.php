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
    
    {{-- <link href="{{ asset('css/documentation.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/light-bootstrap-dashboard.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/demo.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/pe-icon-7-stroke.css') }}" rel="stylesheet">
    
    {{-- <script src="{{ asset('js/chartist.min.js') }}" ></script>
    <script src="{{ asset('js/demo.js') }}" ></script> --}}
    <script src="{{ asset('js/light-bootstrap-dashboard.js') }}" ></script>
    <script src="{{ asset('js/dropzone.js') }}" ></script>
    <link href="{{ asset('css/dropzone.css') }}" rel="stylesheet">
    <style>
        .card {
            border-radius: 5px;
            padding: 1%;
        }
        @font-face {
            font-family: Vazir;
            font-style: normal;
            font-weight: normal;
            src: url('fonts/Vazir-FD.eot');
            src: url('fonts/Vazir-FD.eot?#iefix') format('embedded-opentype'), 
            url('fonts/Vazir-FD.woff2') format('woff2'), 
            url('fonts/Vazir-FD.woff') format('woff'), 
            url('fonts/Vazir-FD.ttf') format('truetype');
        }
        @font-face {
            font-family: Vazir;
            font-style: normal;
            font-weight: bold;
            src: url('fonts/Vazir-Bold-FD.eot');
            src: url('fonts/Vazir-Bold-FD.eot?#iefix') format('embedded-opentype'), 
            url('fonts/Vazir-Bold-FD.woff2') format('woff2'), 
            url('fonts/Vazir-Bold-FD.woff') format('woff'), 
            url('fonts/Vazir-Bold-FD.ttf') format('truetype');
        }
        body{
            font-family: 'Vazir', Arial, sans-serif;
            font-weight:normal;
        }
        .img-20 {
            width: 20px;
            height: 20px;
        }
        .img-50 {
            width: 40px;
            height: 40px;
        }
        .img-border-glass {
            border-radius:50%;
            box-shadow: 0 0 0 2px #fff, 1px 1px 5px rgb(0 0 0 / 32%);
            object-fit: cover;
        }
        .img {
            width: 100%;
        }
        .img-avatar {
            width: 125px;
            height: 125px;
        }
        .height-100px {
            height: 100px;
        }
        .max-height-50px {
            max-height: 50px;
        }
        .max-weight-50px {
            max-width: 50px;
        }
        .redu20 {
            border-radius: 20px;
        }
        .redu10 {
            border-radius: 10px;
        }
        .redu5 {
            border-radius: 5px;
        }
        a {
            color: aliceblue;
        }
        a:hover {
            color: aliceblue;
            font-weight: bold;
        }
        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            right: 0;
            background-image: url("/img/full-screen-image-3.jpg");
            background-repeat: no-repeat, repeat;
            background-size: cover;
            background-attachment: fixed;
            /* background-color: #111; */
            overflow-x: hidden;
            transition: 0.5s;
            }

            .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            /* font-size: 25px; */
            color: #818181;
            display: block;
            transition: 0.3s;
            }

            .sidenav a:hover {
            color: #f1f1f1;
            }

            .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
            }

            @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }
        .sidebar {
            background-image: url("/img/full-screen-image-3.jpg");
            background-repeat: no-repeat, repeat;
            background-size: cover;
            background-attachment: fixed;
        }
        li {
            min-width: 100%;
        }
        li a {
            padding: 5%;
        }
    </style>

    <script>
        function openNav() {
        document.getElementById("mySidenav").style.width = "260px";
        }
        
        function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        }

        function openNewNav() {
        document.getElementById("sidebar").style.width = "260px";
        document.getElementById("wrapper").style.width = "260px";
        }
        
        function openNewNav() {
        document.getElementById("sidebar").style.width = "0";
        }
    </script>
       
</head>
<body>
    <div id="app">
        {{-- <nav class="navbar navbar-expand-lg bg-light shadow " style="max-height: 60px;padding-top: 0px;">
            <div class="container">
                
                <button class="navbar-toggler bg-light" type="button"  onclick="openNewNav()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                </button>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <ul class="navbar-nav ml-auto">
                        @guest
                            @if (Route::is('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-secondary" href="{{ route('login') }}">{{ __('ورود') }}</a>
                                </li>
                            @elseif (Route::is('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-secondary" href="{{ route('register') }}">{{ __('ثبت نام') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-secondary" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->email }}
                                </a>
                                
                                <div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('خروج از حساب کاربری') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}
        <div class="d-none d-lg-block">
            <div class="fixed-top bg-light shadow" style="margin-right: 260px;">
                <div class="text-left p-3 pl-4" style="margin: 2px;">
                    @if (Auth::user())
                        <a class="text-secondary" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('خروج از حساب کاربری') }}
                        </a>
    
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @endif
                </div>
            </div>
        </div>
        <div class="d-lg-none">
            <div class="fixed-top bg-light shadow" >
                <div class="text-left  p-2" >
                    @if (Auth::user())
                        <a class="text-secondary" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('خروج از حساب کاربری') }}
                        </a>
    
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @endif
                </div>
            </div>
            <br>
        </div>
        <div class="col-12">
            <div class="d-none d-lg-block mt-lg-5">.</div>
        </div>
        @include('shared.errors')
        @include('shared.session')
        
        <div id="main" class="mr-1 ml-1 mt-lg-3 mr-lg-4 ml-lg-4" >
            <div class="d-none d-lg-block" style="margin-right: 260px;" >
                @yield('content')
            </div>
            <div class="d-lg-none">
                @yield('content')
            </div>
        </div>

        {{-- @if (Auth::user()) --}}
            
        <div class="">
            <div class="sidebar" data-color="blue" data-image="/img/full-screen-image-3.jpg">
                <div class="sidebar-wrapper">
                    <div class="logo">
                        <a href="#" class="simple-text">
                            پنل فروشگاه
                        </a>
                    </div>
        
                    <ul class="nav text-right">
                        <li class="@if (Route::is('home')) active @endif" >
                            <a  href="{{ route('home') }}" @if (Route::is('home')) onclick="return false;" @endif>
                                <i class="pe-7s-graph"></i>
                                <p>داشیورد مدیریت</p>
                            </a>
                        </li>
                        <li class="@if (Route::is('shops.index')) active @endif">
                            <a href="{{ route('shops.index') }}" @if (Route::is('shops.index')) onclick="return false;" @endif>
                                <i class="pe-7s-user"></i>
                                <p>مشخصات فروشگاه</p>
                            </a>
                        </li>
                        <li class="@if (Route::is('factors.index')) active @endif">
                            <a href="{{ route('factors.index') }}" @if (Route::is('factors.index')) onclick="return false;" @endif>
                                <i class="pe-7s-note2"></i>
                                <p>لیست سفارشات</p>
                            </a>
                        </li>
                        <li class="@if (Route::is('products.index')) active @endif">
                            <a href="{{ route('products.index') }}" @if (Route::is('products.index')) onclick="return false;" @endif>
                                <i class="pe-7s-news-paper"></i>
                                <p>لیست اجناس</p>
                            </a>
                        </li>
                    </ul>
                </div>


                
            </div>
        </div>

        {{-- @endif --}}

    </div>
</body>
</html>


