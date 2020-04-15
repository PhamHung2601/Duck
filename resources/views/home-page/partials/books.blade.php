<div class="list-books">
    <div class="panel panel-default">
        <div class="panel-heading">
            {!!\Helper::getStaticBlockContentById("home-book-section-title")!!}
        </div>
        <div class="panel-body">
            <div class="books">
                @foreach($products as $product)
                    <div class="book-item">
                        <div class="book-item-inner">
                            <div class="book-image">
                                <img class="" style="width:100px; border:solid 1px #f2f2f2"
                                     src="{{ Voyager::image( $product->media ) }}">
                            </div>
                            <div class="book-info">
                                <a href="{{$product->getUrlDetail()}}" class="name"><span> {{ $product->name }}</span></a>
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
                                    <form role="form" id="add-to-cart" method="POST" action="{{ route('cart.add') }}">
                                        {{ csrf_field() }}
                                        <input type="text" name="product_id" value="{{$product->id}}" hidden>
                                        <!-- Only for js checking baby milk product -->
                                        <div class="item-product-options" style="margin-top: 20px;">
                                            <!-- BEGIN ADD TO CART -->
                                            <div id="add-cart-action">
                                                <div class="add-cart-action" style="display: block">
                                                    <div class="cta-box">
                                                        <button type="sumit" class="btn btn-danger">
                                                            <span class="glyphicon glyphicon-shopping-cart"></span> Mua sách
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
                @endforeach
            </div>
            <div class="clearfix">
                <button style="float: right" class="btn btn-info"><a class="text-light" href="{{url('tat-ca-sach')}}">Xem Thêm</a></button>
            </div>
        </div>
    </div>
</div>



<script type="text/javascript">

    $(document).ready(function(){

        $('.books').slick({
            dots: false,
            slidesPerRow: 2,
            rows: 2,
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
