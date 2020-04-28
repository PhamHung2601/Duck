<div class="list-courses">
    <div class="panel panel-default">
        <div class="panel-heading">
            <strong>Tài Liệu Liên Quan</strong>
        </div>
        <div class="panel-body">
            <div class="news">
                @foreach($document->related as $related)
                    <div class="new-item">
                        <a href="{{ $related->getUrlDetail() }}">
                            <img src="{{ Voyager::image( $related->media ) }}">
                            <div class="new-info">
                                <strong> {{ $related->title }}</strong>
                            </div>
                        </a>
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
            slidesPerRow: 1,
            rows: 1,
            autoplay: true,
            autoplaySpeed: 4000,
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
