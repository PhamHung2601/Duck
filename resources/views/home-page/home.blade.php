@extends('layouts.master')
@section('pageTitle', 'Địa lí Thầy Tùng')
@section('content-top')
    @include('static-block.content-top')
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12 col-md-8 col-lg-8 column-main">
            @include('home-page.partials.slider-banner')
            @include('home-page.partials.events')
            @include('home-page.partials.books')
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 sidebar">
            @include('home-page.partials.sidebar-info')
        </div>
    </div>
    <div class="row">
        <div class="home-banner col-sm-12 col-md-12 col-lg-12 column-main" style="border: 1px solid gainsboro;margin-left: 15px;">
            {!!Helper::getStaticBlockContentById("home-middle-banner")!!}
{{--            <div class="row">--}}
{{--                <div class="col-sm-12 col-md-4 col-lg-4">--}}
{{--                    <img src="ádsads"/>--}}
{{--                    <p></p>--}}
{{--                    <a href="https://dialithaytung.com/khoa-hoc/lop-online">--}}
{{--                        <button id="middle-banner-button" style="border-radius:25px;width: 100px;height: 35px;background-color: #0c958f"><span style="color: white;font-weight: 700">Xem thêm</span></button>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col-sm-12 col-md-4 col-lg-4">--}}
{{--                    <img src="ádsads"/>--}}
{{--                    <p>Các khóa học livestream tương tác không giới hạn</p>--}}
{{--                    <a href="https://dialithaytung.com/khoa-hoc/lop-offline">--}}
{{--                        <button id="middle-banner-button" style="border-radius:25px;width: 100px;height: 35px;background-color: #0c958f"><span style="color: white;font-weight: 700">Xem thêm</span></button>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col-sm-12 col-md-4 col-lg-4">--}}
{{--                    <img src="ádsads"/>--}}
{{--                    <p>Quỹ hỗ trợ học phí cho những khát khao học</p>--}}
{{--                    <a href="https://dialithaytung.com/hoc-bong-AT-foundation">--}}
{{--                        <button id="middle-banner-button" style="border-radius:25px;width: 100px;height: 35px;background-color: #0c958f"><span style="color: white;font-weight: 700">Xem thêm</span></button>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
        <div class="about-teacher col-sm-12 col-md-12 col-lg-12 column-main">
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
        <div class="about-teacher col-sm-12 col-md-12 col-lg-12 column-main">
            @include('home-page.partials.testimonial')
        </div>
    </div>
@endsection
@section('content-bottom')
    @include('static-block.content-bottom')
@endsection
