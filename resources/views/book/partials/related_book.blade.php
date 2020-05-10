<div class="list-books related-products">
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-list" aria-hidden="true"></i> Sản Phẩm Liên Quan
        </div>
        <div class="panel-body">
            <div class="books">
                @foreach($product->related as $item)
                    <div class="book-item">
                        <div class="book-item-inner">
                            <div class="book-image">
                                <img class="" style="width:100px; border:solid 1px #f2f2f2"
                                     src="{{Voyager::image($item->media)}}">
                            </div>
                            <div class="book-info">
                                <a href="{{$item->getUrlDetail()}}" class="name"
                                   tabindex="0"><span>{{$item->name}}</span></a>
                                <div class="stock">
                                    @if($item->stock > 0)
                                        <span class="status instock">Còn Sách</span>
                                    @else
                                        <span class="status outstock">Hết Sách</span>
                                    @endif
                                </div>
                                <div class="price-box">
                            <span class="price-wrapper">
                                @if($item->special_price && $item->special_price < $item->price)
                                    <p><strong class="special-price"
                                               style="color:red"> {{number_format($item->special_price)}}đ</strong>
                    <span
                        style="text-decoration:line-through;padding-left:10px"> {{number_format($item->price)}}đ</span>
                </p>
                                @else
                                    <p><strong style="color:red"> {{number_format($item->price)}}đ</strong>
                                @endif
                            </span>
                                    <form role="form" id="add-to-cart" method="POST" action="{{ route('cart.add') }}">
                                        {{ csrf_field() }}
                                        <input type="text" name="product_id" value="{{$item->id}}" hidden>
                                        <!-- Only for js checking baby milk product -->
                                        <div class="item-product-options" style="margin-top: 20px">
                                            <!-- BEGIN ADD TO CART -->
                                            <div id="add-cart-action">
                                                <div class="add-cart-action" style="display: block">
                                                    <div class="cta-box">
                                                        <button type="sumit" class="btn" style="border-radius: 100px;color:white;background-image: linear-gradient(to right top, #fd8503, #fa9400, #f5a200, #f0af00, #ebbc12)">
                                                                    <span
                                                                        class="glyphicon glyphicon-shopping-cart" style="font-weight: 700"></span>
                                                            Mua sách
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
        </div>
    </div>
</div>

<script type="text/javascript">

    $(document).ready(function () {

        $('.related-products .books').slick({
            dots: true,
            slidesPerRow: 2,
            rows: 1,
            autoplay: true,
            autoplaySpeed: 3000,
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
