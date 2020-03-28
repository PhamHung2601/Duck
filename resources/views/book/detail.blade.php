<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Landing Page - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/landing-page/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{ asset('vendor/landing-page/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendor/landing-page/css/simple-line-icons.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="{{ asset('vendor/landing-page/css/landing-page.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/master-navigation.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/book_list.css') }}" rel="stylesheet" type="text/css" >
    <script src="{{asset('js/book.js')}}"></script>
</head>

<body>

@include('home-page.partials.header')
<div class="main-content">
    <div class="container">
        <div>
            @include('book.partials.top_nav')
        </div>
        <div class="row">
            <div class="col-md-8 col-lg-8">
                @include('book.partials.overview_book')
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="row">
                    @foreach([1,2,3,4,5,6] as $item)
                        <div class="col-md-12 col-log-12">
                            @include('book.partials.book_component')
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@include('book.partials.fb')
@include('home-page.partials.footer')

@include('home-page.partials.scripts')
</body>

</html>
