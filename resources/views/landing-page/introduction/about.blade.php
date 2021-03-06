@extends('layouts.landing')
@section('pageTitle', 'Giới Thiệu')
@section('content-top')
    {{--    @include('banner-manager.banner')--}}
    @include('landing-page.introduction.partials.about-banner')
@endsection
@section('content')
    @include('landing-page.introduction.partials.who_are_we')
    @include('landing-page.introduction.partials.who_I_am')
    @include('landing-page.introduction.partials.hiring_section')
    {{--  @include('landing-page.courses.partials.deal_section')--}}
@endsection
@section('content-bottom')
    @include('landing-page.introduction.partials.intro-content-bottom')
@endsection
