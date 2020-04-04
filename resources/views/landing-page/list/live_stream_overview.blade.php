@extends('layouts.landing')
@section('content-top')
    @include('banner-manager.banner')
    @include('static-block.content-top')
@endsection
@section('content')
    @include('landing-page.list.partials.online.live_stream_overview')
    @include('landing-page.list.partials.online.live_stream_notice')
    @include('landing-page.list.partials.online.student_feeling')
    @include('landing-page.list.partials.online.about_me')
    @include('landing-page.list.partials.online.scholarship_section')
@endsection
@section('content-bottom')
    @include('landing-page.list.partials.online.online-1-content-bottom')
@endsection


