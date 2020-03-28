@extends('layouts.master')
@section('content-top')
    @include('static-block.content-top')
@endsection
@section('content')
<div id="news-{{$test->id}}" class="et_pb_post clearfix news-{{$test->id}} ">
    <h2 class="entry-title">{{$test->title}}</h2>
    <p class="post-meta">  <span class="published">Mar 18, 2020</span></p>
    <div>
        <p>{{$test->description}}</p>
    </div>
</div>
@endsection
@section('content-bottom')
    @include('static-block.content-bottom')
@endsection
