<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OTMS-@yield('title')</title>

    <link rel="stylesheet" href="{{asset('/')}}front/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('/')}}front/css/fontawesome/css/all.css">
    <link rel="stylesheet" href="{{asset('/')}}front/css/style.css">
</head>
<body>
<nav>
    <div class="navbar navbar-expand-md bg-dark navbar-dark">
        <div class="container">
            <a href="{{route('front.home')}}" class="navbar-brand">Logo</a>
            <ul class="navbar-nav ms-auto ">
                <li><a href="{{route('front.home')}}" class="nav-link">Home</a></li>
                <li class="dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Course Category</a>
                    <ul class="dropdown-menu">
                        <li><a href="" class="dropdown-item">Category One</a></li>
                        <li><a href="" class="dropdown-item">Category Two</a></li>
                    </ul>
                </li>
                <li><a href="" class="nav-link">About</a></li>
                <li><a href="" class="nav-link">Contact</a></li>
                <li><a href="{{route('login')}}" class="nav-link">Login</a></li>
                <li><a href="{{route('register')}}" class="nav-link">Register</a></li>
            </ul>
        </div>
    </div>
</nav>
@yield('body')

<section class="py-2 bg-dark text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="text-center">@OTMS Batch-14 &copy; 1999-{{date('Y')}} copyright | All rights reserved</p>
            </div>
        </div>
    </div>

</section>

<script src="{{asset('/')}}front/js/bootstrap.bundle.js"></script>
<script src="{{asset('/')}}front/js/jquery-3.6.1.min.js"></script>
</body>
</html>
