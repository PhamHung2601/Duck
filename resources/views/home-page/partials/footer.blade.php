<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-sm-7 portfolio-item">
                {!!Helper::getStaticBlockContentById("footer-content")!!}
            </div>
            <div class="col-lg-5 col-sm-5 form-register-email">
                <div class="row form-register-email-wrapper">
                    <div class="grid__item large--one-half medium--one-half small--one-whole">
                        <div class="ft-subscribe">
                            {!!Helper::getStaticBlockContentById("sale-register")!!}
{{--                            <h3>Đăng ký nhận tin</h3>--}}
{{--                            <div class="ft-sub-desc">--}}
{{--                                Hãy nhập địa chỉ email của bạn vào ô dưới đây để có thể nhận được tất cả các tin tức mới nhất. Chúng tôi đảm--}}
{{--                                bảo sẽ không gửi mail spam tới bạn.--}}
{{--                            </div>--}}
                            <div class="form-wrapper">
                                <form role="form" id="register-form" method="POST" action="{{ route('home.addContactEmail') }}" >
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="input-group">
                                        <input required type="email" value="" placeholder="Nhập email của bạn..." name="email"
                                               class="form-control" aria-label="email@example.com">
                                        <button class="submit-email" name="subscribe" type="submit">Đăng ký</button>
                                    </div>
                                    <p class="alert"></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
