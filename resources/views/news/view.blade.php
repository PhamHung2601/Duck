@extends('layouts.master')
@section('pageTitle', $news->title)
@section('content-top')
    @include('static-block.content-top')
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12 col-md-8 col-lg-8 column-main">
            <div id="news-{{$news->id}}" class="et_pb_post clearfix news-{{$news->id}}">
                <div class="image-container-blog pd-10">
                    <h1 class="entry-title text-center">{{$news->title}}</h1>
                    <div class="text-left pd-10">
                        <div>
                            @foreach($news->tags as $tag)
                                <a href="{{$news->getListUrlByTag($tag->name)}}" class="tag-item">{{$tag->name}}</a>
                            @endforeach
                        </div>
                        <div>
                            <img src="{{Voyager::image($news->media)}}" width="100%" alt="{{$news->title}}">
                        </div>
                        <p class="post-meta mt-1"><span class="published-time">{{\Helper::formatDate($news->updated_at)}}</span>
                        </p>
                    </div>
                    <div>
                        <p>{!!$news->description!!}</p>
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
