<div class="list-courses">
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-list" aria-hidden="true"></i> Pro S - Luyện thi THPT Quốc Gia 2020
        </div>
        <div class="panel-body">
            <div class="courses">
{{--                @foreach($news as $new)--}}
{{--                    <div class="course-item">--}}
{{--                        <a href="#">--}}
{{--                            <img src="{{ Voyager::image( $new->media ) }}"--}}
{{--                                 style="border-radius:5px">--}}
{{--                            <div class="course-info">--}}
{{--                                <strong> {{ $new->title }}</strong>--}}
{{--                                <span class="description">{{ $new->description }} </span>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    $(document).ready(function(){

        $('.courses').slick({
            dots: true,
            slidesToShow: 2,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 640,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });

    });
</script>
