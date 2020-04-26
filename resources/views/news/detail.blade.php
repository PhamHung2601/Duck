@include('static-block.content-top')
<article id="news-{{$new->id}}" class="news-post clearfix news-{{$new->id}}" style="height: 100%;">
    <div class="et_pb_image_container">
        <a href="{{ $new->getUrlDetail() }}" class="entry-featured-image-url">
            <img src="{{Voyager::image($new->media)}}" width="100%" alt="{{$new->title}}">
        </a>
    </div>
    <div class="news-title">{{$new->title}}</div>
    <p><span class="time-news">{{\Helper::formatDate($new->updated_at)}}</span></p>
    <div class="post-content"  style="max-height: 150px;">
        <p>{!!$new->short_description!!}</p>
    </div>
    <a href="{{ $new->getUrlDetail() }}" class="more-link">Xem thêm</a>
</article>
@include('static-block.content-bottom')
