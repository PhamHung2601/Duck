@extends('layouts.master')
@section('content')
<div id="news-{{$news->id}}" class="et_pb_post clearfix news-{{$news->id}}">
    <div class="image-container">
        <h1 class="entry-title text-center">{{$news->title}}</h1>
        <div class="text-left">
            <span>Thể thao</span>
        </div>
        <div class="text-center">
            <a href="https://stepup.edu.vn/blog/cau-truc-spend/" class="entry-featured-image-url">
                <img src="https://cdnstepup.r.worldssl.net/wp-content/uploads/2020/03/Cấu-trúc-spend-trong-tiếng-Anh-400x250.png" width="70%" alt="{{$news->title}}">
            </a>
        </div>
    </div>
    <p class="post-meta">  <span class="published">Mar 18, 2020</span></p>
    <div>
        <p>{{$news->description}}</p>
    </div>
    {{--<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="" data-layout="standard" data-action="like" data-size="small" data-share="true"></div>--}}
    {{--<div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="" data-numposts="5"></div>--}}
</div>
@endsection