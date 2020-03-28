@extends('layouts.master')
@section('content-top')
    @include('static-block.content-top')
@endsection
@section('content')
    <div class="breadcrumbs">
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}">Home</a></li>
            <li class="active">/ {{$product->name}}</li>
        </ol>
    </div>
    @include('book.partials.overview_book')
    <div class="row product-bottom">
        <div class="col-md-8 col-lg-7">
            @include('book.partials.fb')
            @include('book.partials.related_book')
        </div>
        <div class="col-md-5 col-lg-5"></div>
    </div>
@endsection
@section('content-bottom')
    @include('static-block.content-bottom')
@endsection
