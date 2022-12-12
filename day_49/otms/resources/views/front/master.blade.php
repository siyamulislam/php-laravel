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
@include('front.include.nav')
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
