@extends('layouts.master')
@section('content-top')
  @include('banner-manager.banner')
  @include('static-block.content-top')
@endsection
@section('content')
  <div class="row">
    <div class="col-sm-12 col-md-8 col-lg-8 column-main">
      @include('home-page.partials.events')
      @include('home-page.partials.news')
      @include('home-page.partials.books')
    </div>
    <div class="col-sm-12 col-md-4 col-lg-4 sidebar">
      @include('home-page.partials.sidebar-info')
      {{--@include('home-page.partials.chart',['month' => $month])--}}
      {{--@include('home-page.partials.chart-major',['course' => $course])--}}
    </div>
  </div>
@endsection
@section('content-bottom')
    @include('static-block.content-bottom')
@endsection
