@extends('layouts.landing')
@section('pageTitle', 'Cộng Đồng Học Sinh Thầy Tùng')
<?php
$month = \Helper::getStudentWithRankingByMonth();
$course = \Helper::getStudentWithRankingByCourse();
?>
@section('content-top')
    {{--    @include('banner-manager.banner')--}}
@endsection
@section('content')
    @include('landing-page.introduction.partials.achive-banner')
    @include('landing-page.introduction.partials.achive-content')
{{--    @include('landing-page.introduction.partials.chart')--}}
    {{--    @include('landing-page.introduction.partials.hiring')--}}
    {{--  @include('landing-page.courses.partials.deal_section')--}}
@endsection
@section('content-bottom')
    @include('landing-page.introduction.partials.achive-content-bottom')
@endsection
