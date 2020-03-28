@extends('layouts.landing')
@section('content-top')
    @include('banner-manager.banner')
@endsection
@section('content')
    @include('landing-page.list.partials.offline.course_list')
    @include('landing-page.list.partials.offline.course_feedback')
    @include('landing-page.list.partials.offline.faq')
@endsection

