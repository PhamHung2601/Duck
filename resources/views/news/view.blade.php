@extends('layouts.master')
@section('content-top')
    @include('static-block.content-top')
@endsection
@section('content')
<div id="news-{{$news->id}}" class="et_pb_post clearfix news-{{$news->id}} ">
    <div class="et_pb_image_container">
        <a href="https://stepup.edu.vn/blog/cau-truc-spend/" class="entry-featured-image-url">
            <img src="https://cdnstepup.r.worldssl.net/wp-content/uploads/2020/03/Cấu-trúc-spend-trong-tiếng-Anh-400x250.png" data-lazy-src="https://cdnstepup.r.worldssl.net/wp-content/uploads/2020/03/Cấu-trúc-spend-trong-tiếng-Anh-400x250.png" alt="{{$news->title}}" width="400" height="250" class="lazyloaded" data-was-processed="true"><noscript>
            <img src="https://cdnstepup.r.worldssl.net/wp-content/uploads/2020/03/Cấu-trúc-spend-trong-tiếng-Anh-400x250.png" alt='Hướng dẫn phân biệt cấu trúc spend và take trong tiếng Anh đơn giản nhất' width='400' height='250' />
            </noscript>															</a>
    </div>
    <h2 class="entry-title">{{$news->title}}</h2>
    <p class="post-meta">  <span class="published">Mar 18, 2020</span></p>
    <div>
        <p>{{$news->description}}</p>
    </div>
</div>
@endsection
@section('content-bottom')
    @include('static-block.content-bottom')
@endsection
