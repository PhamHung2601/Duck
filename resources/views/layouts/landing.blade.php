<!DOCTYPE html>
<html lang="en">

<head>
    {!! SEOMeta::generate() !!}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="">
    <title>@yield('pageTitle')</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/landing-page/css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Custom fonts for this template -->
    <link href="{{ asset('vendor/landing-page/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendor/landing-page/css/simple-line-icons.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="{{ asset('vendor/landing-page/css/landing-page.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/slick-theme.css') }}" rel="stylesheet" type="text/css" >
    <link rel="stylesheet" href="<?php echo asset('css/styles.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/landing-navigation.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/master-navigation.css')?>" type="text/css">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" type="text/css" >

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
{{--    <script src="https://cdn.boomcdn.com/libs/animate-css/3.7.0/animate.css" crossorigin="anonymous"></script>--}}
    <script src="<?php echo asset('js/jquery.countdown.js')?>"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/students_slider.js') }}"></script>
</head>

<body>

@include('layouts.block.navigation')
@yield('content-top')
@yield('content')
@yield('content-bottom')
@include('layouts.block.footer')
@yield('content-js')
@include('home-page.partials.scripts')

</body>

</html>
