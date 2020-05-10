@include('static-block.content-top')
<article id="news-{{$new->id}}" class="news-post clearfix news-{{$new->id}}" style="height: 100%;">
    <div class="et_pb_image_container" style="height:200px">
        <a href="{{ $new->getUrlDetail() }}" class="entry-featured-image-url">
            <img src="{{Voyager::image($new->media)}}" width="100%" height="200px" alt="{{$new->title}}">
        </a>
    </div>
    <div class="news-title"><b>{{$new->title}}</b></div>
    <p><span class="time-news">{{\Helper::formatDate($new->updated_at)}}</span></p>
    <div class="post-content"  style="max-height: 150px;display: -webkit-box;">
        <p style="overflow: hidden">{!!$new->short_description!!}</p>
    </div>
    <a href="{{ $new->getUrlDetail() }}" class="more-link" target="_blank" style="bottom: 0;">Xem thêm</a>
</article>
@include('static-block.content-bottom')
