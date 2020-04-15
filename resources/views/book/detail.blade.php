@extends('layouts.master')
@section('pageTitle', $product->name)
@section('content-top')
    @include('static-block.content-top')
@endsection
@section('content')
    @include('book.partials.overview_book')
    <div class="row product-bottom">
        <div class="col-md-8 col-lg-7">
            @include('book.partials.fb')
        </div>
        <div class="col-md-5 col-lg-5">
            @include('book.partials.related_book')
        </div>
    </div>
    @include('book.partials.review')
@endsection
@section('content-bottom')
    @include('static-block.content-bottom')
@endsection
