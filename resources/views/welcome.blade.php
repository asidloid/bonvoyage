
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 5.6 Vue JS Pagination</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
</head>
<body>




<div id="app">
    <data-component></data-component>
    <bloki></bloki>
</div>



{{--<div id="smana">--}}
 {{--<smena-component></smena-component>--}}
{{--</div>--}}



<div id="demo">
    {{--<demo></demo>--}}
    {{--<button v-on:click="show = !show">--}}
        {{--Переключить--}}
    {{--</button>--}}
    {{--<transition name="fade">--}}
        {{--<p v-if="show"><div class="blockp">привет<div></p>--}}
    {{--</transition>--}}
</div>



<script src="{{asset('js/app.js')}}" ></script>



</body>
</html>

{{--<!doctype html>--}}
{{--<html lang="{{ app()->getLocale() }}">--}}
    {{--<head>--}}
        {{--<meta charset="utf-8">--}}
        {{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
        {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
        {{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}
        {{--<title>Laravel</title>--}}

        {{--<!-- Fonts -->--}}
        {{--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">--}}
        {{--<link href="/css/app.css" rel="stylesheet" type="text/css">--}}
        {{--<link href="/css/style.css" rel="stylesheet" type="text/css">--}}

    {{--</head>--}}
    {{--<body>--}}

    {{--<nav class="navbar fixed-top  navbar-expand-lg navbar-light bg-light">--}}
        {{--<a class="navbar-brand" href="#">Navbar</a>--}}
        {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation">--}}
            {{--<span class="navbar-toggler-icon"></span>--}}
        {{--</button>--}}

        {{--<div class="collapse navbar-collapse" id="navbar1">--}}
            {{--<ul class="navbar-nav mr-auto">--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="#">Link</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item dropdown">--}}
                    {{--<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>--}}
                    {{--<div class="dropdown-menu" aria-labelledby="navbarDropdown1">--}}
                        {{--<a class="dropdown-item" href="#">Action</a>--}}
                        {{--<a class="dropdown-item" href="#">Another action</a>--}}
                        {{--<div class="dropdown-divider"></div>--}}
                        {{--<a class="dropdown-item" href="#">Something else here</a>--}}
                    {{--</div>--}}
                {{--</li>--}}
            {{--</ul>--}}
            {{--<form class="form-inline my-2 my-lg-0">--}}
                {{--<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">--}}
                {{--<button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>--}}
            {{--</form>--}}
        {{--</div>--}}
    {{--</nav>--}}

    {{--<div class="content">--}}

        {{--<div class="flex-center position-ref full-height">--}}
            {{--@if (Route::has('login'))--}}
                {{--<div class="top-right links">--}}
                    {{--@auth--}}
                        {{--<a href="{{ url('/home') }}">Home</a>--}}
                    {{--@else--}}
                        {{--<a href="{{ route('login') }}">Login</a>--}}
                        {{--<a href="{{ route('register') }}">Register</a>--}}
                    {{--@endauth--}}
                {{--</div>--}}
            {{--@endif--}}


                {{--<div class="title m-b-md">--}}
                    {{--Laravel--}}
                    {{--<div id="app"> <example-component></example-component>   </div>--}}

                {{--</div>--}}


        {{--</div>--}}
{{--1111111111--}}

{{--222222--}}
        {{--<script src="/js/app.js"></script>--}}
    {{--</body>--}}
{{--</html>--}}
