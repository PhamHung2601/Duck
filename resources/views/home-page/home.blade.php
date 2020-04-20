@extends('layouts.master')
@section('pageTitle', 'Địa lí Thầy Tùng')
@section('content-top')
  @include('static-block.content-top')
@endsection
@section('content')
  <div class="row">
    <div class="col-sm-12 col-md-9 col-lg-9 column-main">
      @include('home-page.partials.slider-banner')
      @include('home-page.partials.events')
      @include('home-page.partials.books')
      <div class="home-banner">
          {!!Helper::getStaticBlockContentById("home-middle-banner")!!}
{{--        <div class="row">--}}
{{--          <div class="col-sm-12 col-md-4 col-lg-4">--}}
{{--            <a href="#">--}}
{{--              <img src="{{ asset('img/1.png')}}" alt="1"/>--}}
{{--            </a>--}}
{{--          </div>--}}
{{--          <div class="col-sm-12 col-md-4 col-lg-4">--}}
{{--            <a href="#">--}}
{{--              <img src="{{ asset('img/2.png')}}" alt="2"/>--}}
{{--            </a>--}}
{{--          </div>--}}
{{--          <div class="col-sm-12 col-md-4 col-lg-4">--}}
{{--            <a href="#">--}}
{{--              <img src="{{ asset('img/1.png')}}" alt="1"/>--}}
{{--            </a>--}}
{{--          </div>--}}
{{--        </div>--}}
      </div>
      <div class="about-teacher">
        <div class="panel panel-default">
          <div class="panel-body">
              {!!Helper::getStaticBlockContentById("home-about-me")!!}
{{--            <div class="row">--}}
{{--              <div class="col-sm-12 col-md-4 col-lg-4 image-box">--}}
{{--                    <img src="http://demo.themexbd.com/wpv/extrat/wp-content/uploads/2020/03/2.jpg" alt="">--}}
{{--              </div>--}}
{{--              <div class="col-sm-12 col-md-8 col-lg-8">--}}
{{--                <h2>Về thầy Tùng</h2>--}}
{{--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod por incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo onsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat</p>--}}
{{--                <p>Pidatat non proident, sunt in culpa qui officia deserunt mollit anim id est erun laborum. Sed ut perspiciatis unde omnis</p>--}}
{{--              </div>--}}
{{--            </div>--}}
          </div>
        </div>
      </div>
      @include('home-page.partials.testimonial')
    </div>
    <div class="col-sm-12 col-md-3 col-lg-3 sidebar">
      @include('home-page.partials.sidebar-info')
    </div>
  </div>
@endsection
@section('content-bottom')
    @include('static-block.content-bottom')
@endsection
