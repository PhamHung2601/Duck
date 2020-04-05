@extends('layouts.master')
@section('pageTitle', $document->title)
@section('content-top')
    @include('static-block.content-top')
@endsection
@section('content')
    <div class="title">
        {{ $document->title }}
    </div>
    <div class="document-content">
        {!! $document->content !!}
    </div>
@endsection
@section('content-bottom')
    @include('static-block.content-bottom')
@endsection
