@extends('layouts.landing')
@section('content-top')
    @include('banner-manager.banner')
    @include('static-block.content-top')
@endsection
@section('content')
    @include('landing-page.list.partials.offline.course_list')
    @include('landing-page.list.partials.offline.course_feedback')
    @include('landing-page.list.partials.offline.faq')
@endsection
@section('content-bottom')
    @include('static-block.content-bottom')
@endsection

