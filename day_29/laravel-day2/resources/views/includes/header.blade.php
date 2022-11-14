<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{asset('/')}}assets/css/bootstrap.css">
</head>
<body>


{{--<ul>--}}
{{--    <li><a href="{{ url('/') }}">Home</a></li>--}}
{{--    <li><a href="{{ url('/about') }}">About</a> </li>--}}
{{--    <li><a href="{{ url('/contact') }}">Contact</a></li>--}}
{{--</ul>--}}

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container">
        <a href="" class="navbar-brand">LOGO</a>
        <ul  class="navbar-nav">
            <li><a class="nav-link" href="{{ route('home') }}">         Home</a></li>
            <li><a class="nav-link" href="{{ route('about') }}">        About</a> </li>
            <li><a class="nav-link" href="{{ route('contact') }}">      Contact</a></li>
            <li><a class="nav-link" href="{{ route('calculator') }}">   Calculator</a></li>
            <li><a class="nav-link" href="{{ route('series') }}">       Series</a></li>
        </ul>
    </div>

</nav>
