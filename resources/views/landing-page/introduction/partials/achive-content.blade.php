<section class="landing-page-section achive" id="achive_section">
    {!!Helper::getStaticBlockContentById("students-achive")!!}
    {{--    <div class="landing-page-section-wrapper">--}}
    {{--        <div class="section-content row">--}}
    {{--            <div class="col-sm-4 col-md-4 col-lg-4">--}}
    {{--                <img src="">--}}
    {{--            </div>--}}
    {{--            <div class="col-sm-8 col-md-8 col-lg-8">--}}
    {{--                <p style="">Xin chào tất cả các bạn! </p>--}}
    {{--                <ul>--}}
    {{--                    <li>Cộng Đồng Học Sinh Thầy Tùng ra đời với mục đích kết nối các thế hệ học sinh thầy Tùng nói riêng--}}
    {{--                        và học sinh cả nước nói chung--}}
    {{--                    </li>--}}
    {{--                    <li>Có thể nói đây là diễn đàn nhằm giao lưu những kiến thức, kinh nghiệm--}}
    {{--                        trong học tập cũng như chia sẻ kĩ năng sống hay các vấn đề mà học sinh, sinh viên hay gặp phải--}}
    {{--                    </li>--}}
    {{--                    <li>Với sự cố vấn của thầy Tùng cùng đội ngũ admin tâm huyết, nhiệt tình, CĐHSTT chắc chắn sẽ trở thành--}}
    {{--                        sự lựa chọn số 1 dành cho các bạn--}}
    {{--                    </li>--}}
    {{--                </ul>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
</section>
<section class="landing-page-section achive2" id="achive2_section" style="background-color: #2e8893">
    {!!Helper::getStaticBlockContentById("students-achive2")!!}
</section>
<script type="text/javascript">

    $(document).ready(function () {

        $('#student-achive-slider').slick({
            dots: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 6000,
        });

    });
</script>
