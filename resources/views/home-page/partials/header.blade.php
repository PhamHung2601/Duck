    <div class="header">
        <div class="header-top">
            <div class="container">
                <nav class="row navbar static-top display-flex-content">
                    <div class="logo col-sm-12 col-md-4 col-lg-4">
                        <a href="https://dialithaytung.com/" style="padding-bottom: 6%">
                            {{--                        {!!\Helper::getStaticBlockContentById("header-logo")!!}--}}
                            <p style="font-size: 30px; padding-top: 5%;margin-bottom:-0.2rem !important"><b>ĐỊA LÍ THẦY
                                    TÙNG</b></p>
                            <small>TEAM THẦY TÙNG, CHIẾN ĐẾN CÙNG</small>
                        </a>
                        {{--                    {!!Helper::getStaticBlockContentById("header-logo-side-img")!!}--}}
                    </div>

                    <div class="col-sm-12 col-md-5 col-lg-5 search">
                        <div class="input-group">
                            <form role="form" id="header-search" method="POST" action="{{ route('search.search') }}">
                                {{ csrf_field() }}
                                <input id="search-input" name="search_text" type="text" class="form-control input-search"
                                       placeholder="Tìm kiếm sản phẩm, danh mục,..." aria-label="Search">
                                <button id="button-search" disabled class="btn btn-light" type="submit">
                                        <span style="cursor:pointer; "> <span class="fa fa-search"
                                                                              style="font-size:15px;font-weight:100"></span> </span>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-1 col-lg-1">
                    </div>
                    <div class="search col-sm-12 col-md-2 col-lg-2 register"
                         style="height:40px;text-align:center; border-radius:0.25rem">
                        <a href="{{ url('cart') }}" class="cart-header" title="view cart">
                            <i class="fa fa-shopping-cart fa-2" aria-hidden="true"
                               style=" font-size: 27px;padding-top: 2%;"></i> <span style=" font-size: 17px">Giỏ hàng</span>
                            <div class="count noti-cart">
                                <span style="margin-top: -13%;position: absolute;padding-left: -10%;margin-left: -21%;">{{Cart::count()}}</span>
                            </div>
                        </a>
                    </div>
                </nav>
            </div>
        </div>
        <div class="main-menu">
            <div class="container">
                <nav class="navbar navbar-light navbar-expand-lg main-menu">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <?= Menu::display('main', 'bootstrap');?>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $('#search-input').on('keyup', function () {
            var value = $(this).val();
            if (value && value != '') {
                $('#button-search').prop('disabled', false);
            }
        });
        $.ajaxSetup({headers: {'csrftoken': '{{ csrf_token() }}'}});
    </script>
