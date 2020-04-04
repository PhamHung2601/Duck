<div class="list-books">
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-list" aria-hidden="true"></i> Sách bộ đề minh họa Luyện thi 2020
        </div>
        <div class="panel-body">
            <div class="books">
                @foreach($products as $product)
                    <div class="book-item">
                        <div class="book-item-inner">
                            <img class="" style="width:100px; border:solid 1px #f2f2f2"
                                 src="{{ Voyager::image( $product->media ) }}">
                            <div class="book-info">
                                <a href="{{$product->getUrlDetail()}}" class="name"><span> {{ $product->name }}</span></a>
                                @foreach($product->category as $cate)
                                    <div class="type">
                                        <span>Môn: <strong> {{ $cate->name }}</strong></span>
                                        <span class="count-page">Số trang: <strong>300</strong></span>
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
                                <span class="special-price">
                                    <span class="price">{{ $product->special_price }} d</span>
                                </span>
                                   <span class="old-price">
                                    <span class="price">{{ $product->price }} d</span>
                                </span>
                            </span>
                                    <form role="form" id="add-to-cart" method="POST" action="{{ route('cart.add') }}">
                                        {{ csrf_field() }}
                                        <input type="text" name="product_id" value="{{$product->id}}" hidden>
                                        <!-- Only for js checking baby milk product -->
                                        <div class="item-product-options">
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
