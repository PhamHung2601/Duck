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
      <link rel="stylesheet" href="<?php echo asset('css/overview-course.css')?>" type="text/css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="{{ asset('js/jquery.countdown.js') }}"></script>

  </head>

  <body>

	@include('landing-page.partials.navigation')

	@include('landing-page.partials.banner')

	@include('landing-page.partials.course_list')

	@include('landing-page.partials.deal_section')

	@include('landing-page.partials.footer')
  </body>

</html>