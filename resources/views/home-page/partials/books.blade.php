<div class="list-books">
    <div class="panel panel-default">
        <div class="panel-heading">
            {!!Helper::getStaticBlockContentById("home-book-section-title")!!}
        </div>
        <div class="panel-body">
            <div class="books">
                @foreach($products as $product)
                    @foreach($product->category as $cate)
                        @if($cate->id !=4)
                            <div class="book-item">
                                <div class="book-item-inner">
                                    <div class="book-image">
                                        <img class="" style="width: 150px;border: solid 1px #f2f2f2"
                                             src="{{ Voyager::image( $product->media ) }}">
                                    </div>
                                    <div class="book-info">
                                        <a href="{{$product->getUrlDetail()}}"
                                           class="name"><span> {{ $product->name }}</span></a>
                                        @foreach($product->category as $cate)
                                            <div class="type">
                                                <span>Loại: <strong> {{ $cate->name }}</strong></span>
                                            </div>
                                        @endforeach
                                        <div class="stock">
                                            <span>Kho hàng:</span>
                                            @if((int)$product->stock > 0)
                                                <span class="status instock">Còn Sách</span>
                                            @else
                                                <span class="status outstock">Hết Sách</span>
                                            @endif
                                        </div>
                                        <div class="price-box">
                            <span class="price-wrapper">
                                @if($product->special_price)
                                    <span class="special-price">
                                    <span class="price">{{ number_format($product->special_price)}} d</span>
                                </span>
                                    <span class="old-price">
                                    <span class="price">{{ number_format($product->price) }} d</span>
                                </span>
                                @else
                                    <span class="product-price">
                                    <span class="price">{{ number_format($product->price) }} d</span>
                                </span>
                                @endif
                            </span>
                                            <form role="form" id="add-to-cart" method="POST"
                                                  action="{{ route('cart.add') }}">
                                                {{ csrf_field() }}
                                                <input type="text" name="product_id" value="{{$product->id}}" hidden>
                                                <!-- Only for js checking baby milk product -->
                                                <div class="item-product-options" style="margin-top: 20px;">
                                                    <!-- BEGIN ADD TO CART -->
                                                    <div id="add-cart-action">
                                                        <div class="add-cart-action" style="display: block">
                                                            <div class="cta-box">
                                                                <button type="sumit" class="btn" style="border-radius: 100px;color:white;background-image: linear-gradient(to right top, #fd8503, #fa9400, #f5a200, #f0af00, #ebbc12);height: 30px; padding: 0.1rem .75rem !important;">
                                                                    <span
                                                                        class="glyphicon glyphicon-shopping-cart" style="font-weight: 700"><b>Mua sách</b></span>

                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endforeach
            </div>
            <div class="clearfix">
                <button style="float: right;margin-top: 5%;" class="btn btn-info"><a class="text-light" href="{{url('tat-ca-sach')}}">Xem
                        thêm</a></button>
            </div>
        </div>
    </div>
    <div class="landing-page-section-wrapper ">
        <div class=""row>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <h2 class="section-title">CAM KẾT&nbsp;<img src="https://dialithaytung.com/storage/cms-blocks/April2020/Accept-icon.png" alt="" width="70" height="70" /></h2>
                <ul>
                    <li>
                        <p style="text-align: left; padding-left: 20%;"><img src="https://dialithaytung.com/storage/cms-blocks/April2020/yTk6nBzqc.png" alt="" width="29" height="38" /> Giảng dạy nhiệt t&igrave;nh</p>
                    </li>
                    <li style="text-align: left; padding-left: 20%;">
                        <p><img src="https://dialithaytung.com/storage/cms-blocks/April2020/red-up-arrow-png-261.png" alt="" width="30" height="30" /> Chắc chắn hiểu b&agrave;i, tiến bộ r&otilde; rệt</p>
                    </li>
                    <li style="text-align: left; padding-left: 20%;">
                        <p><img src="https://dialithaytung.com/storage/cms-blocks/April2020/globe-279988.png" alt="" width="30" height="30" /> Y&ecirc;u th&iacute;ch học m&ocirc;n Địa l&iacute; hơn</p>
                    </li>
                    <li style="text-align: left; padding-left: 20%;">
                        <p><img src="https://dialithaytung.com/storage/cms-blocks/April2020/in_progress1600.png" alt="" width="30" height="30" /> Hơn 90% học sinh theo học c&oacute; điểm số cao hơn mong muốn</p>
                    </li>
                    <li>
                        <p style="text-align: left; padding-left: 20%;"><img src="https://dialithaytung.com/storage/cms-blocks/April2020/high-score-png-icon-16.png" alt="" width="30" height="30" /> Được nhận sự hỗ trợ học tập chưa nơi học th&ecirc;m n&agrave;o c&oacute;</p>
                    </li>
                </ul>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
                <p style="font-size: 25px;"><img src="https://dialithaytung.com/storage/cms-blocks/April2020/wallet-with-money-icon-10.png" alt="" width="30" height="30" /> <strong>Học ph&iacute; kho&aacute; học:</strong></p>
                <p style="padding-left: 10%;">80.000 VNĐ/buổi</p>
                <p style="padding-left: 10%;">Thời gian: 2 tiếng</p>
                <p style="font-size: 25px;"><img src="https://dialithaytung.com/storage/cms-blocks/April2020/location-marker-outline-filled1.png" alt="" width="30" height="30" /> <strong>Địa Điểm</strong></p>
                <p style="padding-left: 10%;">Cơ sở 1: 120 Ho&agrave;ng Quốc Việt, Cầu Giấy, H&agrave; Nội</p>
                <p style="padding-left: 10%;">Cơ sở 2: Tổ 8, Quang Minh, M&ecirc; Linh, H&agrave; Nội</p>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">

    $(document).ready(function () {

        $('.books').slick({
            dots: false,
            slidesPerRow: 2,
            rows: 2,
            autoplay: true,
            autoplaySpeed: 6000,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesPerRow: 2,
                        rows: 1,
                    }
                },
                {
                    breakpoint: 640,
                    settings: {
                        slidesPerRow: 1,
                        rows: 1,
                    }
                }
            ]
        });

    });
</script>
