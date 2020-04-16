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

    <!-- Custom fonts for this template -->
    <link href="{{ asset('vendor/landing-page/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendor/landing-page/css/simple-line-icons.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="{{ asset('vendor/landing-page/css/landing-page.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/slick-theme.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/master-navigation.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet" type="text/css" >

    <script src="{{ asset('vendor/landing-page/js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>

</head>

<body>

@include('home-page.partials.header')
@yield('content-top')
<div class="main-content">
    <div class="container">
        @include('layouts.breadcrumb')
        @include('layouts.message')
        @yield('content')
    </div>
</div>
@yield('content-bottom')
@yield('content-js')
@include('home-page.partials.footer')

@include('home-page.partials.scripts')
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v6.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
     attribution=setup_tool
     page_id="110310680466394"
     theme_color="#0c958f">
</div>
</body>

</html>
