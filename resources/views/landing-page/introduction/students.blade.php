@extends('layouts.landing')
@section('content-top')
    {{--    @include('banner-manager.banner')--}}
@endsection
@section('content')
    @include('landing-page.introduction.partials.banner')
    @include('landing-page.introduction.partials.hall_of_flame')
    @include('landing-page.introduction.partials.feeling')
{{--    @include('landing-page.introduction.partials.hiring')--}}
    {{--  @include('landing-page.courses.partials.deal_section')--}}
@endsection
@section('content-bottom')
    @include('static-block.content-bottom')
@endsection
