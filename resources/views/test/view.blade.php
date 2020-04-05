@extends('layouts.master')
@section('pageTitle', $test->title)
@section('content-top')
    @include('static-block.content-top')
@endsection
@section('content')
    <div id="news-{{$test->id}}" class="news-{{$test->id}} ">
        <div class="row">
            <div class="col-8">
                <div class="detail-test-container">
                    <div class="test-title">
                        <span class="entry-title">{{$test->title}}</span>
                    </div>
                    <p class="post-meta"><span class="published">{{\Helper::formatDate($test->updated_at)}}</span></p>
                    <div>
                        <p>{{$test->description}}</p>
                    </div>
                </div>
            </div>
        </div>
        <button id="share-button" >Chia sẻ</button>
        <div id="test-link" style="display: none">
            <a href="{{$test->link}}">{{$test->link}}</a>
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
