@extends('layouts.landing')
@section('content-top')
    @include('banner-manager.banner')
@endsection
@section('content')
    @include('landing-page.list.partials.online.online_class')
@endsection


