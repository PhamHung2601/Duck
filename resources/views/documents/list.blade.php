@extends('layouts.master')
@section('pageTitle', 'Tài Liệu')
@section('content-top')
    @include('static-block.content-top')
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12 col-md-8 col-lg-8 column-main">
            <div id="main-content" class="content-introduce">
                {!!\Helper::getStaticBlockContentById("blog_header")!!}
            </div>
            <div class="row document-row">
                <div class="ducument-category col-sm-12 col-md-12">
                    @include('documents.side-bar-category')
                </div>
                <div class="document-list col-sm-12 col-md-12">
                    <div class="row">
                        @foreach($documents as $document)
                            <div class="col-sm-12 col-md-4 col-lg-4 document-item">
                                @include('documents.detail',['document' => $document])
                            </div>
                        @endforeach
                    </div>
                </div>
                @if(count($documents))
                    {{ $documents->links() }}
                @endif
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 sidebar">
            @include('documents.sidebar-info')
        </div>
    </div>
@endsection
@section('content-bottom')
    @include('static-block.content-bottom')
@endsection
