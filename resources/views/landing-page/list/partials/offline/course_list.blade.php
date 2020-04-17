<section class="landing-page-section offline-course">
    <div class="landing-page-section-wrapper">
        <div class="row">
{{--            <div class="col-sm-12 col-md-6 col-lg-6">--}}
{{--                <form class="form-register-course" action="{{ route('course.register') }}" method="POST">--}}
{{--                    {{ csrf_field() }}--}}
{{--                    <input type="text" id="name" name="name" placeholder="Your Name">--}}
{{--                    @error('name')--}}
{{--                    <small class="form-text text-muted">{{ $message }}</small>--}}
{{--                    @enderror--}}
{{--                    <input type="text" id="email" name="email" placeholder="Your Email">--}}
{{--                    @error('email')--}}
{{--                    <small class="form-text text-muted">{{ $message }}</small>--}}
{{--                    @enderror--}}
{{--                    <input type="text" id="phone" name="phone" placeholder="Your Phone">--}}
{{--                    @error('phone')--}}
{{--                    <small class="form-text text-muted">{{ $message }}</small>--}}
{{--                    @enderror--}}
{{--                    <textarea id="address" name="address" placeholder="Your Address"></textarea>--}}
{{--                    @error('address')--}}
{{--                    <small class="form-text text-muted">{{ $message }}</small>--}}
{{--                    @enderror--}}
{{--                    <div class="box-action">--}}
{{--                        <button id="register-course-button"--}}
{{--                                class="btn btn-success register-course-button landing-button" type="submit" style="margin-top: 15%; margin-left: 35%">--}}
{{--                            Dang Ky Ngay--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
    {!!Helper::getStaticBlockContentById("offline-block-1")!!}

    {{--            <div class="col-sm-12 col-md-6 col-lg-6">--}}
{{--                <h2 class="section-title">KHOÁ HỌC DÀNH CHO AI?</h2>--}}
{{--                <div class="section-content">--}}
{{--                    <ul>--}}
{{--                        <li><p><i class="fa fa-2x fa-location-arrow"></i>Tất cả các bạn có ý định dự thi THPT Quốc gia năm 2020</p></li>--}}
{{--                        <li><p><i class="fa fa-2x fa-location-arrow"></i>Được thiết kế phù hợp với cả những bạn đã mất gốc, chán ghét môn Địa lí; những học sinh thi lại cần hiểu sâu, hiểu chắc vấn đề</p></li>--}}
{{--                        <li><p><i class="fa fa-2x fa-location-arrow"></i> Mục tiêu từ 8 - 10 điểm.</p></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <div class="box-action">--}}
{{--                    <a class="landing-button" href="#">Tao muon mua luon</a>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</section>
<section class="landing-page-section course-register">
    <div class="landing-page-section-wrapper">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
            {!!Helper::getStaticBlockContentById("offline-block-2-title")!!}
        {{--<h2 class="section-title">TẠI SAO KHÔNG THỂ BỎ LỠ KHOÁ HỌC NÀY?</h2>--}}
        <div class="section-content">
            <div class="row">
                <div class="col-sm-12 col-md-7 col-lg-7">
                    {!!Helper::getStaticBlockContentById("offline-block-2-content")!!}
{{--                    <ul>--}}
{{--                        <h3>Với lộ trình:  Đào kiến thức - Thạo kĩ năng - Luyện đề chuyên sâu, các em sẽ được</h3>--}}
{{--                        <li><p><i class="fa fa-play"> Học lại toàn bộ kiến thức lí thuyết 11 + 12, biểu đồ, atlat, bảng số liệu</i></p></li>--}}
{{--                        <li><p><i class="fa fa-play"> Bài tập củng cố và  luyện đề chuyên sâu  nhằm giúp làm quen với các câu hỏi, dạng đề thường gặp</i></p></li>--}}
{{--                        <li><p><i class="fa fa-play"> Hoàn thiện kĩ năng, phản xạ trong việc xử lí nhanh câu hỏi trắc nghiệm</i></p></li>--}}
{{--                    </ul>--}}
                </div>
                <div class="join-course col-sm-12 col-md-5 col-lg-5">
                    <form class="form-register-course" action="{{ route('course.register') }}" method="POST">
                        {{ csrf_field() }}
                        <input type="text" id="name" name="name" placeholder="Your Name">
                        @error('name')
                        <small class="form-text text-muted">{{ $message }}</small>
                        @enderror
                        <input type="text" id="email" name="email" placeholder="Your Email">
                        @error('email')
                        <small class="form-text text-muted">{{ $message }}</small>
                        @enderror
                        <input type="text" id="phone" name="phone" placeholder="Your Phone">
                        @error('phone')
                        <small class="form-text text-muted">{{ $message }}</small>
                        @enderror
                        <textarea id="address" name="address" placeholder="Your Address"></textarea>
                        @error('address')
                        <small class="form-text text-muted">{{ $message }}</small>
                        @enderror
                        {{--<h3>Học phí khoá học: 80.000 VNĐ/buổi. Thời gian: 2 tiếng</h3>--}}
                        {{--<div class="box-action">--}}
                            {{--<button type="submit" id="register-course-button" class="btn btn-success register-course-button landing-button">Dang Ky--}}
                                {{--Ngay--}}
                            {{--</button>--}}
                        {{--</div>--}}
                                        {!!Helper::getStaticBlockContentById("offline-block-2-button")!!}
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="landing-page-section bg-yellow our-commit">
    {!!Helper::getStaticBlockContentById("offline-block-3")!!}
    {{--<div class="landing-page-section-wrapper">--}}
        {{--<h2 class="section-title">CAM KẾT</h2>--}}
        {{--<div class="section-content">--}}
            {{--<ul>--}}
                    {{--<li><p><i class="fa fa-2x fa-location-arrow"></i> Giảng dạy nhiệt tình</p></li>--}}
                {{--<li><p><i class="fa fa-2x fa-location-arrow"></i> Chắc chắn hiểu bài, tiến bộ rõ rệt</p></li>--}}
                {{--<li><p><i class="fa fa-2x fa-location-arrow"></i> Yêu thích học môn Địa lí hơn</p></li>--}}
                {{--<li><p><i class="fa fa-2x fa-location-arrow"></i> Hơn 90% học sinh theo học có điểm số cao hơn mong muốn</p></li>--}}
                {{--<li><p><i class="fa fa-2x fa-location-arrow"></i> Được nhận sự hỗ trợ học tập chưa nơi học thêm nào có</p></li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</div>--}}
</section>
