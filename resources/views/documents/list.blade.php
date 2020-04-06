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
        <div class="mt-3">
            <div class="row">
                @foreach($documents as $document)
                    <div class="col-md-4 col-lg-4">
                        @include('documents.detail',['document' => $document])
                    </div>
                @endforeach
            </div>
        </div>
        @if(count($documents))
            {{ $documents->links() }}
        @endif
    </section>
@endsection
@section('content-bottom')
    @include('static-block.content-bottom')
@endsection
