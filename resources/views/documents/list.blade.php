@extends('layouts.master')
@section('pageTitle', 'Tài Liệu')
@section('content-top')
    @include('static-block.content-top')
@endsection
@section('content')
    <section>
        <div id="main-content" class="content-introduce">
            {!!\Helper::getStaticBlockContentById("blog_header")!!}
        </div>
        <div class="row document-row">
            <div class="col-md-1 col-lg-1 col-xl-1"></div>
            <div class="side-bar document-cate-sidebar col-12 col-sm-12 col-md-10 col-lg-10 col-xl-3">
                @include('documents.side-bar-category')
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-8">
                <div class="row">
                    <div class="col-md-1 col-lg-1"></div>
                    @foreach($documents as $document)
                        <div class="col-md-5 col-lg-5">
                            @include('documents.detail',['document' => $document])
                        </div>
                    @endforeach
                </div>
            </div>
            @if(count($documents))
                {{ $documents->links() }}
            @endif
        </div>
    </section>
@endsection
@section('content-bottom')
    @include('static-block.content-bottom')
@endsection
