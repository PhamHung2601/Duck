@extends('layouts.landing')
@section('pageTitle', 'Các Khóa Học')
@section('content-top')
    @include('banner-manager.banner')
    @include('static-block.content-top')
@endsection
@section('content')
  @include('landing-page.courses.partials.course_list')
{{--  @include('landing-page.courses.partials.deal_section')--}}
@endsection
@section('content-bottom')
    @include('landing-page.courses.partials.course-content-bottom')
@endsection
