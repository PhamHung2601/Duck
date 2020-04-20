@extends('layouts.master')
@section('pageTitle', 'Tin Tức')
@section('content-top')
    @include('static-block.content-top')
@endsection
@section('content')
    <div class="row">
    <div class="col-sm-12 col-md-9 col-lg-9 column-main">
        <div id="main-content" class="content-introduce">
            {!!\Helper::getStaticBlockContentById("blog_header")!!}
        </div>
        <div class="mt-3">
            <div class="row">
                @foreach($news as $new)
                    <div class="col-md-4 col-lg-4">
                            @include('news.detail',['new' => $new])
                    </div>
                @endforeach
            </div>
        </div>
        @if(count($news))
            {{ $news->links() }}
        @endif
    </div>
    <div class="col-sm-12 col-md-3 col-lg-3 sidebar">
        @include('news.sidebar-info')
    </div>
    </div>
@endsection
@section('content-bottom')
    @include('static-block.content-bottom')
@endsection
