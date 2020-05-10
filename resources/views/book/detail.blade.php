@extends('layouts.master')
@section('pageTitle', $product->name)
@section('content-top')
    @include('static-block.content-top')
@endsection
@section('content')
    @include('book.partials.overview_book')
    <div class="row product-bottom">
        <div class="col-md-12 col-lg-12">
            @include('book.partials.related_book')
            @foreach($product->category as $cate)
                @if($cate->id ==3)
            <div>
                <p style="font-size: 23px"><b>Thông tin chung</b></p>
                <div style="font-size: 17px;background-color: #9cdce742;padding:5%;">
                    {!!$product->introduction!!}
                </div>
            </div>
            @endif
            @endforeach
        </div>
        <div class="col-md-12 col-lg-12">
            @include('book.partials.fb')
        </div>
    </div>
@endsection
@section('content-bottom')
    @include('static-block.content-bottom')
@endsection
