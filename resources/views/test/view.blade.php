@extends('layouts.master')
@section('pageTitle', $test->title)
@section('content-top')
    @include('static-block.content-top')
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12 col-md-9 col-lg-9 column-main">
            <div id="news-{{$test->id}}" class="news-{{$test->id}} ">
                <div class="row">
                    <div class="detail-test-container col-sm-12 col-md-12 col-lg-12">
                        <div class="test-title">
                            <span class="entry-title">{{$test->title}}</span>
                        </div>
                        <div class="test-detail-content">
                            <p class="post-meta"><span class="published">{{\Helper::formatDate($test->updated_at)}}</span></p>
                            <div>
                                {!!$test->description!!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <button class="button btn btn-primary text-light" id="share-button" ><i class="fa fa-share-alt" aria-hidden="true"></i>  Chia sẻ</button>
                    <div id="test-link" style="display: none" class="mt-2">
                        <a href="{{$test->link}}" target="_blank" class="more-link">{{$test->link}}</a>
                    </div>
                </div>
            </div>
            @include('book.partials.fb')
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 sidebar">
            @include('test.sidebar-info')
        </div>
    </div>
@endsection
@section('content-bottom')
    @include('static-block.content-bottom')
@endsection
@section('content-js')
    <script type="text/javascript">
        window.fbAsyncInit = function () {
            window.facebookShare = function( callback ) {
                var options = ({
                        method : 'share',
                        href   : 'https://dialithaytung.com'
                    }),
                    status = '';
                FB.ui(options, function( response ){
                    if (response && !response.error_code) {
                        status = 'success';
                        $.event.trigger('fb-share.success');
                    } else {
                        status = 'error';
                        $.event.trigger('fb-share.error');
                    }
                    if(callback && typeof callback === "function") {
                        callback.call(this, status);
                    } else {
                        return response;
                    }
                });
            }
        };
        $('#share-button').on('click', function( e ) {
            e.preventDefault();
            facebookShare(function( response ) {
                // simple function callback
                console.log(response);
            });
        });
        // custom jQuery events
        $(document)
            .on('fb-share.success', function( e ) {
                $('#test-link').show();
            })
    </script>
@endsection
