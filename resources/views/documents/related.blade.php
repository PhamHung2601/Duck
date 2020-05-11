<div class="list-courses">
    <div class="panel panel-default">
        <div class="panel-heading">
            <strong>Tài Liệu Liên Quan</strong>
        </div>
        <div class="panel-body">
            <div class="news">
                @foreach($document->related as $related)
                    <div class="new-item" style="top: 0 !important;">
                        <div class="content" style="width: 90%;margin-left: 5%">
                            <img src="{{ Voyager::image( $related->media ) }}" height="150px" width="85%">
                            <div class="new-info" style="width: 85%;">
                                <a href="{{ $related->getUrlDetail() }}"><strong> {{ $related->title }}</strong> </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

    $(document).ready(function () {

        $('.news').slick({
            dots: false,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesPerRow: 2,
                        rows: 1,
                    }
                },
                {
                    breakpoint: 640,
                    settings: {
                        slidesPerRow: 1,
                        rows: 1,
                    }
                }
            ]
        });

    });
</script>
