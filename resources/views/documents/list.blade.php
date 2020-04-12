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
            <div class="side-bar document-cate-sidebar col-12 col-sm-12 col-md-10 col-lg-10 col-xl-3">
                @include('documents.side-bar-category')
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-9">
                <div class="row">
                    @foreach($documents as $document)
                        <div class="col-sm-6 col-md-6 col-lg-4 col-lg-4">
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
