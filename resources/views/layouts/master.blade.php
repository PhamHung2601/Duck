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
<!-- Start of LiveChat (www.livechatinc.com) code -->
<script type="text/javascript">
    window.__lc = window.__lc || {};
    window.__lc.license = 11837022;
    (function() {
        var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
        lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
    })();
</script>
<noscript>
    <a href="https://www.livechatinc.com/chat-with/11837022/" rel="nofollow">Chat with us</a>,
    powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a>
</noscript>
<!-- End of LiveChat code -->

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
</body>

</html>
