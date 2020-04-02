@include('static-block.content-top')
<article id="news-{{$new->id}}" class="news-post clearfix news-{{$new->id}} ">
    <div class="et_pb_image_container">
        <a href="https://stepup.edu.vn/blog/cau-truc-spend/" class="entry-featured-image-url">
            <img src="https://cdnstepup.r.worldssl.net/wp-content/uploads/2020/03/Cấu-trúc-spend-trong-tiếng-Anh-400x250.png" data-lazy-src="https://cdnstepup.r.worldssl.net/wp-content/uploads/2020/03/Cấu-trúc-spend-trong-tiếng-Anh-400x250.png" alt="{{$new->title}}" width="400" height="250" class="lazyloaded" data-was-processed="true"><noscript>
            <img src="https://cdnstepup.r.worldssl.net/wp-content/uploads/2020/03/Cấu-trúc-spend-trong-tiếng-Anh-400x250.png" alt='Hướng dẫn phân biệt cấu trúc spend và take trong tiếng Anh đơn giản nhất' width='400' height='250' />
            </noscript>															</a>
    </div>
    <div class="news-title">{{$new->title}}</div>
    <p><span class="time-news">Mar 18, 2020</span></p>
    <div class="post-content">
        <p>{{$new->description}}</p>
        <a href="{{ $new->getUrlDetail() }}" class="more-link">Xem thêm</a>
    </div>
</article>
@include('static-block.content-bottom')
