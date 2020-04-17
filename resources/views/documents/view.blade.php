@extends('layouts.master')
@section('pageTitle', $document->title)
@section('content-top')
    @include('static-block.content-top')
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12 col-md-8 col-lg-8 column-main">
    <div id="news-{{$document->id}}" class="et_pb_post clearfix news-{{$document->id}}">
        <div class="image-container-blog pd-10">
            <h1 class="entry-title text-center">{{$document->title}}</h1>
            <div>
                {!! $document->content !!}
            </div>
        </div>
    </div>
    </div>
        <div class="col-sm-12 col-md-4 col-lg-4 sidebar">
            @include('news.sidebar-info')
            @include('book.partials.fb')
        </div>
    </div>
@endsection
@section('content-bottom')
    @include('static-block.content-bottom')
@endsection
