@extends('layouts.landing')
@section('content-top')
{{--    @include('banner-manager.banner')--}}
@endsection
@section('content')
  @include('landing-page.introduction.partials.me_banner')
  @include('landing-page.introduction.partials.who_I_am')
{{--  @include('landing-page.courses.partials.deal_section')--}}
@endsection
