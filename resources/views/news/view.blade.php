@extends('layouts.master')
@section('pageTitle', $news->title)
@section('content-top')
    @include('static-block.content-top')
@endsection
@section('content')
    <div id="news-{{$news->id}}" class="et_pb_post clearfix news-{{$news->id}}">
        <div class="image-container-blog pd-10">
            <h1 class="entry-title text-center">{{$news->title}}</h1>
            <div class="text-left pd-10">
                <div>
                    <a href="#" class="tag-item">Thể thao</a>
                    <a href="#" class="tag-item">Miền trung</a>
                    <a href="#" class="tag-item">Nam cực</a>
                </div>
                <div>
                    <a href="https://stepup.edu.vn/blog/cau-truc-spend/" class="entry-featured-image-url">
                        <img src="https://cdnstepup.r.worldssl.net/wp-content/uploads/2020/03/Cấu-trúc-spend-trong-tiếng-Anh-400x250.png" width="100%" alt="{{$news->title}}">
                    </a>
                </div>
                <p class="post-meta mt-1"><span class="published-time">Mar 18, 2020</span></p>
            </div>
            <div>
                <p>{{$news->description}}</p>
            </div>
        </div>
    </div>
    <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
</div>
@endsection
@section('content-bottom')
    @include('static-block.content-bottom')
@endsection
