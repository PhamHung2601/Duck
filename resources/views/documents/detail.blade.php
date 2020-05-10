@include('static-block.content-top')
<article id="news-{{$document->id}}" class="news-post clearfix news-{{$document->id}} ">
    <div class="et_pb_image_container">
        <a href="{{ $document->getUrlDetail() }}" class="entry-featured-image-url">
            <img src="{{Voyager::image($document->media)}}" width="100%" height="200px" alt="{{$document->title}}">
        </a>
    </div>
    <div class="news-title"><b>{{$document->title}}</b></div>
    <p><span class="time-news">{{\Helper::formatDate($document->updated_at)}}</span></p>
    <div class="post-content" style="max-height: 150px;">
        <p>{!!$document->short_description!!}</p>
    </div>
    <a href="{{ $document->getUrlDetail() }}" class="more-link" target="_blank"  style="bottom: 0;">Xem thêm</a>
</article>
@include('static-block.content-bottom')
