<div class="list-testimonial">
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-list" aria-hidden="true"></i> Cảm nhận học sinh
        </div>
        <div class="panel-body">
            <div class="row">
                    <div class="col-md-12">
                        <div id="testimonial-slider">
                            {!!Helper::getStaticBlockContentById("home-student-feeling")!!}
{{--                                <div class="testimonial">--}}
{{--                                    <p class="description">--}}
{{--                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec velit dui. Pellentesque volutpat faucibus risus, ac accumsan purus.--}}
{{--                                    </p>--}}

{{--                                    <div class="testimonial-review">--}}
{{--                                        <div class="pic">--}}
{{--                                            <img src="{{ asset('img/img-3.jpg')}}" alt=""/>--}}
{{--                                        </div>--}}
{{--                                        <h4 class="testimonial-title">--}}
{{--                                            williamson--}}
{{--                                            <small>Web Developer</small>--}}
{{--                                        </h4>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="testimonial">--}}
{{--                                    <p class="description">--}}
{{--                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec velit dui. Pellentesque volutpat faucibus risus, ac accumsan purus.--}}
{{--                                    </p>--}}

{{--                                    <div class="testimonial-review">--}}
{{--                                        <div class="pic">--}}
{{--                                            <img src="{{ asset('img/img-3.jpg')}}" alt=""/>--}}
{{--                                        </div>--}}
{{--                                        <h4 class="testimonial-title">--}}
{{--                                            kristiana--}}
{{--                                            <small>Web Desginer</small>--}}
{{--                                        </h4>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                    </div>
                </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    $(document).ready(function(){

        $('#testimonial-slider').slick({
            dots: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 6000,
        });

    });
</script>
