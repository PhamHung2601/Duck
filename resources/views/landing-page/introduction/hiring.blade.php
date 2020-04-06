@extends('layouts.landing')
@section('pageTitle', 'Tuyển Dụng')
@section('content-top')
    @include('static-block.content-top')
@endsection
@section('content')
    @include("landing-page.introduction.partials.hiring")
@endsection
@section('content-bottom')
    @include('landing-page.introduction.partials.hiring-content-bottom')
@endsection
