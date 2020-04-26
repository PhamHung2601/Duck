@extends('layouts.master')
@section('pageTitle', $product->name)
@section('content-top')
    @include('static-block.content-top')
@endsection
@section('content')
    @include('book.partials.overview_book')
    <div class="row product-bottom">
        <div class="col-md-9 col-lg-9">
            @include('book.partials.related_book')
        </div>
        <div class="col-md-3 col-lg-3">
            @include('book.partials.fb')
        </div>
    </div>
@endsection
@section('content-bottom')
    @include('static-block.content-bottom')
@endsection
