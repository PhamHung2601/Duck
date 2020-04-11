@include('static-block.content-top')
<article id="news-{{$document->id}}" class="news-post clearfix news-{{$document->id}} ">
    <div class="et_pb_image_container">
        <a href="{{ $document->getUrlDetail() }}" class="entry-featured-image-url">
            <img src="{{Voyager::image($document->media)}}" width="100%" alt="{{$document->title}}">
        </a>
    </div>
    <div class="news-title">{{$document->title}}</div>
    <p><span class="time-news">{{\Helper::formatDate($document->updated_at)}}</span></p>
    <div class="post-content">
        <p>{!!$document->short_description!!}</p>
        <a href="{{ $document->getUrlDetail() }}" class="more-link">Xem thêm</a>
    </div>
</article>
@include('static-block.content-bottom')
