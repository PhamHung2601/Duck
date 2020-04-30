<section class="landing-page-section">
    <div class="online-course">
        <div class="landing-page-section-wrapper">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    {!!Helper::getStaticBlockContentById("online-block-1")!!}
                    {{--                    <h2 class="section-title"><span style="display: block">KHÓA LIVESTREAM:</span> TỔNG ÔN TOÀN DIỆN BEE2020</h2>--}}
                    {{--                    <div class="section-content">--}}
                    {{--                    <ul>--}}
                    {{--                    <li><p><i class="fa fa-arrow-right"></i> Tất cả các bạn có ý định dự thi THPT Quốc gia năm 2020</p></li>--}}
                    {{--                    <li><p><i class="fa fa-arrow-right"></i> Được thiết kế phù hợp với cả những bạn đã mất gốc, chán ghét môn Địa lí; những học sinh thi lại cần hiểu sâu, hiểu chắc vấn đề</p></li>--}}
                    {{--                    <li><p><i class="fa fa-arrow-right"></i> Mục tiêu từ 8 - 10 điểm</p></li>--}}
                    {{--                    <h3 style="color: #ffd623">Học phí: 1.000.000đ</h3>--}}
                    {{--                    <div class="box-action">--}}
                    {{--                    <a class="landing-button" style="margin-right: 10px" href="{{url("courses/list/online/live-stream-overview")}}">Xem Them</a>--}}
                    {{--                    <a class="landing-button" href="#">Dang Ky Ngay</a>--}}
                    {{--                    </div>--}}
                    {{--                    </ul>--}}
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <form class="form-register-course" action="{{ route('cart.add') }}" method="POST" id="add-to-cart">
                        {{ csrf_field() }}
                        <input type="text" id="name" name="name" placeholder="Họ tên *">
                        @error('name')
                        <small class="form-text text-muted">{{ $message }}</small>
                        @enderror
                        <input type="text" id="email" name="email" placeholder="Email của bạn *">
                        @error('email')
                        <small class="form-text text-muted">{{ $message }}</small>
                        @enderror
                        <input type="text" id="phone" name="phone" placeholder="Số điện thoại *">
                        @error('phone')
                        <small class="form-text text-muted">{{ $message }}</small>
                        @enderror
                        <input type="text" id="phone" name="fb" placeholder="Link Facebook cá nhân *">
                        @error('phone')
                        <small class="form-text text-muted">{{ $message }}</small>
                        @enderror
                        <input type="text" id="phone" name="fb" placeholder="Trường THPT đang theo học *">
                        @error('phone')
                        <small class="form-text text-muted">{{ $message }}</small>
                        @enderror
                        <input type="text" id="phone" name="fb" placeholder="Tỉnh/Thành phố *">
                        @error('phone')
                        <small class="form-text text-muted">{{ $message }}</small>
                        @enderror
                        <textarea id="address" name="address" placeholder="Địa chỉ *"></textarea>
                        @error('address')
                        <small class="form-text text-muted">{{ $message }}</small>
                        @enderror
                        <input type="text" name="product_id" value="14" hidden>
                        <div id="add-cart-action">
                            <div class="add-cart-action" style="display: block">
                                <div class="cta-box">
                                    <button type="sumit" class="btn landing-button">
                                        <span
                                            class="glyphicon glyphicon-shopping-cart">
                                            Đăng ký ngay
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="landing-page-section course-register">
    <div class="landing-page-section-wrapper">
        {!!\Helper::getStaticBlockContentById("online-block-2")!!}
{{--        <h2 class="section-title">KHOÁ LIVESTREAM: LUYỆN ĐỀ CHUYÊN SÂU</h2>--}}
{{--        <div class="section-content row">--}}
{{--            <ul class="col-sm-12 col-md-7 col-lg-7">--}}
{{--                <li>--}}
{{--                    <p><em class="fa fa-thumbs-up"> Supper fast overview</em></p>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <p><em class="fa fa-thumbs-up"> Dam Bao dau ra 9 diem :v</em></p>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--            <div class="join-course col-sm-12 col-md-5 col-lg-5">--}}
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
{{--                                class="btn btn-success register-course-button landing-button" type="submit">--}}
{{--                            Dang Ky Ngay--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
    {{--<div class="landing-page-section-wrapper">--}}
    {{--<h2 class="section-title">KHOÁ LIVESTREAM: LUYỆN ĐỀ CHUYÊN SAU </h2>--}}
    {{--<div class="section-content row">--}}
    {{--<ul class="col-sm-12 col-md-7 col-lg-7">--}}
    {{--<li><p><i class="fa fa-thumbs-up"> Supperrrr fast overview</i></p></li>--}}
    {{--<li><p><i class="fa fa-thumbs-up"> Dam Bao dau ra 9 diem :v</i></p></li>--}}
    {{--</ul>--}}
    {{--<div class="join-course col-sm-12 col-md-5 col-lg-5">--}}
    {{--<form class="form-register-course">--}}
    {{--<input type="text" placeholder="Your Name">--}}
    {{--<input type="text" placeholder="Your Email">--}}
    {{--<input type="text" placeholder="Your Phone">--}}
    {{--<textarea placeholder="Your Address"></textarea>--}}
    {{--<div class="box-action">--}}
    {{--<button type="button" class="btn btn-default register-course-button landing-button  "><a href="#">Dang Ky Ngay</a></button>--}}
    {{--</div>--}}
    {{--</form>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
</section>
