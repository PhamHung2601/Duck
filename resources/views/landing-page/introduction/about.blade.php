@extends('layouts.landing')
@section('content-top')
    {{--    @include('banner-manager.banner')--}}
    @include('landing-page.introduction.partials.banner')
@endsection
@section('content')
    @include('landing-page.introduction.partials.who_are_we')
    @include('landing-page.introduction.partials.who_I_am')
    @include('landing-page.introduction.partials.hiring_section')
    {{--  @include('landing-page.courses.partials.deal_section')--}}
@endsection
@section('content-bottom')
    @include('static-block.content-bottom')
@endsection
