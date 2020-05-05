<footer class="footer" style="background-color: #0c958f;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-8 portfolio-item">
                {!!Helper::getStaticBlockContentById("footer-content")!!}
            </div>
            <div class="col-lg-3 col-sm-3">
                <div class="row form-register-email form-register-email-wrapper">
                    <div class="grid__item large--one-half medium--one-half small--one-whole">
                        <div class="ft-subscribe">
{{--                            {!!Helper::getStaticBlockContentById("sale-register")!!}--}}
                            <h5>Đăng ký nhận tin</h5>
                            <div class="ft-sub-desc" style="font-size: 13px">
                                Hãy nhập địa chỉ email của bạn vào ô dưới đây để có thể nhận được tất cả các tin tức mới nhất
                            </div>
                            <div class="form-wrapper">
                                <form role="form" id="register-form" method="POST" action="{{ route('home.addContactEmail') }}" >
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="input-group">
                                        <input required type="email" value="" placeholder="Email của bạn..." name="email"
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
            <div class="col-lg-1 col-sm-1"></div>
        </div>
    </div>
</footer>
