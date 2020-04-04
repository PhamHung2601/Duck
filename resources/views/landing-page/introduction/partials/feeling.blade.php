<section class="landing-page-section feeling" id="feeling_section">
    <div class="landing-page-section-wrapper">
        <h1 class="section-title" style="color: #fff">Feeling</h1>
        <div class="section-content">
            <div id="testimonial-slider" class="landing-testimonials">
                <div class="testimonial">
                    <div class="testimonial-content">
                        <div class="pic">
                            <img src="{{ asset('img/img-3.jpg')}}" alt="">
                        </div>
                        <h3 class="title">Williamson</h3>
                        <span class="post">Web Developer</span>
                    </div>
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dolor tellus, efficitur ut tortor id, molestie egestas nibh. In blandit ex at erat vehicula molestie. Mauris vel volutpat nulla. Suspendisse lorem ex, congue at elit id, tincidunt tempor orci. Nullam nec augue ac tellus rhoncus tincidunt nec ut ligula. Praesent.
                    </p>
                </div>

                <div class="testimonial">
                    <div class="testimonial-content">
                        <div class="pic">
                            <img src="{{ asset('img/img-3.jpg')}}" alt="">
                        </div>
                        <h3 class="title">Williamson</h3>
                        <span class="post">Web Developer</span>
                    </div>
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dolor tellus, efficitur ut tortor id, molestie egestas nibh. In blandit ex at erat vehicula molestie. Mauris vel volutpat nulla. Suspendisse lorem ex, congue at elit id, tincidunt tempor orci. Nullam nec augue ac tellus rhoncus tincidunt nec ut ligula. Praesent.
                    </p>
                </div>

            </div>
        </div>
    </div>
</section>


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

