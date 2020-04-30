<section class="landing-page-section" style="background-color: #ff862fbd">
    <div class="landing-page-section-wrapper">
        <div class="row">
            {!!Helper::getStaticBlockContentById("online-2-block-1")!!}
{{--                        <div class="col-sm-12 col-md-6 col-lg-6">--}}
{{--                            <div class="section-content">--}}
{{--                                <h2 class="section-title">KHOÁ HỌC DÀNH CHO AI?</h2>--}}
{{--                                <ul>--}}
{{--                                    <li><p><i class="fa fa-2x fa-location-arrow"></i> Tất cả các bạn có ý định dự thi THPT Quốc gia--}}
{{--                                            năm--}}
{{--                                            2020</p></li>--}}
{{--                                    <li><p><i class="fa fa-2x fa-location-arrow"></i> Được thiết kế phù hợp với cả những bạn đã mất--}}
{{--                                            gốc,--}}
{{--                                            chán ghét môn Địa lí; những học sinh thi lại cần hiểu sâu, hiểu chắc vấn đề</p></li>--}}
{{--                                    <li><p><i class="fa fa-2x fa-location-arrow"></i> Mục tiêu từ 8 - 10 điểm.</p></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
            <div class="col-sm-12 col-md-1 col-lg-1"></div>
            <div class="col-sm-12 col-md-5 col-lg-5">
                {!!Helper::getStaticBlockContentById("online-2-block-2")!!}
                <form class="form-register-course" action="{{ route('cart.add') }}" method="POST" id="add-to-cart">
                    {{ csrf_field() }}
{{--                    <input type="text" id="name" name="name" placeholder="Họ tên *">--}}
{{--                    @error('name')--}}
{{--                    <small class="form-text text-muted">{{ $message }}</small>--}}
{{--                    @enderror--}}
{{--                    <input type="text" id="email" name="email" placeholder="Email của bạn *">--}}
{{--                    @error('email')--}}
{{--                    <small class="form-text text-muted">{{ $message }}</small>--}}
{{--                    @enderror--}}
{{--                    <input type="text" id="phone" name="phone" placeholder="Số điện thoại">--}}
{{--                    @error('phone')--}}
{{--                    <small class="form-text text-muted">{{ $message }}</small>--}}
{{--                    @enderror--}}
{{--                    <textarea id="address" name="address" placeholder="Địa chỉ *"></textarea>--}}
{{--                    @error('address')--}}
{{--                    <input type="text" id="phone" name="fb" placeholder="Link Facebook cá nhân *">--}}
{{--                    @error('phone')--}}
{{--                    <small class="form-text text-muted">{{ $message }}</small>--}}
{{--                    @enderror--}}
{{--                    <input type="text" id="phone" name="fb" placeholder="Trường THPT đang theo học *">--}}
{{--                    @error('phone')--}}
{{--                    <small class="form-text text-muted">{{ $message }}</small>--}}
{{--                    @enderror--}}
{{--                    <input type="text" id="phone" name="fb" placeholder="Tỉnh/Thành phố *">--}}
{{--                    @error('phone')--}}
{{--                    <small class="form-text text-muted">{{ $message }}</small>--}}
{{--                    @enderror--}}
                    <input type="text" name="product_id" value="15" hidden>
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
</section>
<section class="landing-page-section bg-light">
    {!!Helper::getStaticBlockContentById("online-2-block-3")!!}
{{--    <div class="landing-page-section-wrapper">--}}
{{--    <h2 class="section-title">TẠI ĐAY, THẦY TÙNG SẼ: </h2>--}}
{{--    <div class="section-content">--}}
{{--    <div class="chart-content">--}}
{{--    <i class="fa fa-2x fa-question-circle"></i>--}}
{{--    <p>Day Live stream hoac dang video, day lai tu dau toan bo ly thuyet, atlat, bieu do,bang so lieu</p>--}}
{{--    </div>--}}
{{--    <i class="fa fa-2x fa-arrow-down"></i>--}}
{{--    <div class="chart-content">--}}
{{--    <i class="fa fa-2x fa-question-circle"></i>--}}
{{--    <p>Day Live stream hoac dang video, day lai tu dau toan bo ly thuyet, atlat, bieu do,bang so lieu</p>--}}
{{--    </div>--}}
{{--    <i class="fa fa-2x fa-arrow-down"></i>--}}
{{--    <div class="chart-content">--}}
{{--    <i class="fa fa-2x fa-question-circle"></i>--}}
{{--    <p>Day Live stream hoac dang video, day lai tu dau toan bo ly thuyet, atlat, bieu do,bang so lieu</p>--}}
{{--    </div>--}}
{{--    <i class="fa fa-2x fa-arrow-down"></i>--}}
{{--    <div class="chart-content">--}}
{{--    <i class="fa fa-2x fa-question-circle"></i>--}}
{{--    <p>Day Live stream hoac dang video, day lai tu dau toan bo ly thuyet, atlat, bieu do,bang so lieu</p>--}}
{{--    </div>--}}
{{--    </div>--}}
{{--    </div>--}}
</section>
