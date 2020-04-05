@extends('layouts.master')
@section('pageTitle', 'Tin Tức')
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
                @foreach($news as $new)
                    <div class="col-md-4 col-lg-4">
                            @include('news.detail',['new' => $new])
                    </div>
                @endforeach
            </div>
        </div>
        {{ $news->links() }}
    </section>
@endsection
@section('content-bottom')
    @include('static-block.content-bottom')
@endsection
