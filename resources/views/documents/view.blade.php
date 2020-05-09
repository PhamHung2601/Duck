@extends('layouts.master')
@section('pageTitle', $document->title)
@section('content-top')
    @include('static-block.content-top')
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12 col-md-9 col-lg-9 column-main">
            <div id="news-{{$document->id}}" class="et_pb_post clearfix news-{{$document->id}}">
                <p class="entry-title text-center"><b>{{$document->title}}</b></p>
                <div class="image-container-blog">
                    <div
                        style="background-image: url('{{Voyager::image($document->cover_media)}}');background-repeat: no-repeat;background-size: cover;
                            height: 500px;">
                    </div>
                    <blockquote class="article-quote"
                                style="padding: .2rem .6rem; margin-left:5%;margin-top:5%;border-left: .15rem solid orange;font-size: .9rem;">
                        <p><i>{!!$document->short_description!!}</i></p>
                    </blockquote>
                    <div>
                        <p> {!! $document->content !!}</p>
                    </div>
                </div>
            </div>
            @include('documents.related')
            <div class="text-left" style="margin-top: 5%">
                <div>
                    <?php
                    $tags = $document->tag;
                    $documentTags = explode(' ', $tags);
                    ?>
                    @foreach($documentTags as $tag)
                        @if($tag != 0)
                            <a href="" class="tag-item"><?= $tag?></a>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="mt-3">
                <button class="button btn btn-primary text-light" id="share-button"><i class="fa fa-share-alt"
                                                                                       aria-hidden="true"></i> Chia sẻ
                </button>
            </div>
            @include('book.partials.fb')
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 sidebar">
            @include('documents.sidebar-info')

        </div>
    </div>
@endsection
@section('content-bottom')
    @include('static-block.content-bottom')
@endsection
@section('content-js')
    <script type="text/javascript">
        $('#share-button').on('click', function (e) {
            e.preventDefault();
            facebookShare(function (response) {
                // simple function callback
                console.log(response);
            });
        });
    </script>
@endsection
