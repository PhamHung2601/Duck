@extends('layouts.landing')
@section('content-top')
{{--    @include('banner-manager.banner')--}}
@endsection
@section('content')
  @include('landing-page.introduction.partials.banner')
  @include('landing-page.introduction.partials.who_are_we')
{{--  @include('landing-page.courses.partials.deal_section')--}}
@endsection
