@extends('layouts.landing')
@section('pageTitle', 'Khóa Học Offline')
@section('content-top')
    @include('banner-manager.banner')
    @include('static-block.content-top')
@endsection
@section('content')
    @include('landing-page.list.partials.offline.course_list')
    @include('landing-page.list.partials.offline.about_me')
    @include('landing-page.list.partials.offline.scholarship_section')
    @include('landing-page.list.partials.offline.faq')
@endsection
@section('content-bottom')
    @include('landing-page.list.partials.offline.offline-content-bottom')
@endsection
