@extends('layouts.landing')
@section('pageTitle', 'Học Bổng AT Foundation')
@section('content-top')
    @include('static-block.content-top')
@endsection
@section('content')
    @include("landing-page.introduction.partials.scholarship")
@endsection
@section('content-bottom')
    @include('landing-page.introduction.partials.scholarship-content-bottom')
@endsection
