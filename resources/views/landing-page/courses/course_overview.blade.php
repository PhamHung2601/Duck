@extends('layouts.landing')
@section('content-top')
    @include('banner-manager.banner')
@endsection
@section('content')
  @include('landing-page.courses.partials.course_list')
{{--  @include('landing-page.courses.partials.deal_section')--}}
@endsection
