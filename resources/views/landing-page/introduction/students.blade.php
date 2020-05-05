@extends('layouts.landing')
@section('pageTitle', 'Thành Tích')
<?php
$month = \Helper::getStudentWithRankingByMonth();
$course = \Helper::getStudentWithRankingByCourse();
?>
@section('content-top')
    {{--    @include('banner-manager.banner')--}}
@endsection
@section('content')
    @include('landing-page.introduction.partials.student-banner')
    @include('landing-page.introduction.partials.feeling')
    @include('landing-page.introduction.partials.hall_of_flame')
{{--    @include('landing-page.introduction.partials.chart')--}}
    {{--    @include('landing-page.introduction.partials.hiring')--}}
    {{--  @include('landing-page.courses.partials.deal_section')--}}
@endsection
@section('content-bottom')
    @include('landing-page.introduction.partials.students-content-bottom')
@endsection
