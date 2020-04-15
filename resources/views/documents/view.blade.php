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
            <div class="text-left pd-10">
                <div>
                    <a href="#" class="tag-item">Thể thao</a>
                    <a href="#" class="tag-item">Miền trung</a>
                    <a href="#" class="tag-item">Nam cực</a>
                </div>
                <div>
                    <a href="https://stepup.edu.vn/blog/cau-truc-spend/" class="entry-featured-image-url">
                        <img src="https://cdnstepup.r.worldssl.net/wp-content/uploads/2020/03/Cấu-trúc-spend-trong-tiếng-Anh-400x250.png" width="100%" alt="{{$document->title}}">
                    </a>
                </div>
                <p class="post-meta mt-1"><span class="published-time">Mar 18, 2020</span></p>
            </div>
            <div>
                {!! $document->content !!}
            </div>
        </div>
    </div>
    @include('book.partials.fb')
    </div>
        <div class="col-sm-12 col-md-4 col-lg-4 sidebar">
            @include('news.sidebar-info')
        </div>
    </div>
@endsection
@section('content-bottom')
    @include('static-block.content-bottom')
@endsection
