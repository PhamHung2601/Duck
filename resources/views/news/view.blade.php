@extends('layouts.master')
@section('pageTitle', $news->title)
@section('content-top')
    @include('static-block.content-top')
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12 col-md-9 col-lg-9 column-main">
            <div class="text-left">
                <div>
                    @foreach($news->tags as $tag)
                        <a href="{{$news->getListUrlByTag($tag->name)}}" class="tag-item">{{$tag->name}}</a>
                    @endforeach
                </div>
            </div>
            <div id="news-{{$news->id}}" class="et_pb_post clearfix news-{{$news->id}}">
                <p class="entry-title text-center"><b>{{$news->title}}</b></p>
                <p class="post-meta mt-1" style="color: black !important; font-size: 15px;font-weight: 700 !important;">{{\Helper::formatDate($news->updated_at)}}
                </p>
                <div class="image-container-blog">
                    <div  style="background-image: url('{{Voyager::image($news->media)}}');background-repeat: no-repeat;background-size: cover;
                        height: 500px;">
                    </div>
                    <blockquote class="article-quote" style="padding: .2rem .6rem; margin-left:5%;margin-top:5%;border-left: .15rem solid orange;font-size: .9rem;">
                        <p><i>{!!$news->short_description!!}</i></p>
                    </blockquote>
                    <div>
                        <p>{!!$news->description!!}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 sidebar">
            @include('news.sidebar-info')
        </div>
    </div>
@endsection
@section('content-bottom')
    @include('static-block.content-bottom')
@endsection
