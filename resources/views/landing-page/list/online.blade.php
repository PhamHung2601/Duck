@extends('layouts.landing')
@section('content-top')
    @include('banner-manager.banner')
    @include('static-block.content-top')
@endsection
@section('content')
    @include('landing-page.list.partials.online.online_class')
@endsection
@section('content-bottom')
    @include('static-block.content-bottom')
@endsection


