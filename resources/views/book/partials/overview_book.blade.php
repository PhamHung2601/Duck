<div class="product-top">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-7 col-lg-7 product-media">
            <a class="thumbnail" href="#" data-image-id="1" data-toggle="modal"
               data-title="{{$product->name}}"
               data-image="{{Voyager::image($product->media)}}" data-target="#image-gallery">
                <img id="myImg" width="100%" src="{{Voyager::image($product->media)}}" class="responsive"
                     style="width:100%; border:solid 1px #f2f2f2; "
                     alt="{{$product->name}}"
                     title="{{$product->name}}">
            </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5 product-main-info">
            <div class="page-title">
                <h2 style="font-size:23px; font-weight:bold; margin-bottom:20px">{{$product->name}}</h2>
            </div>
            <p class="sku">ID: [1500] </p>
            <ul class="product-attr">
                <li> <p>- Tác giả: <strong> </strong></p></li>
                <li> <p>- Số Trang:<strong> </strong></p></li>
                <li> <p>- Kích thước:<strong> 19x37cm</strong></p></li>
                <li> <p>- Số lần tra cứu:<strong> Không giới hạn </strong></p></li>
            </ul>
            @if($product->special_price && $product->special_price < $product->price)
                <p><strong class="special-price" style="color:red"> {{$product->special_price}}đ</strong>
                    <span style="text-decoration:line-through;padding-left:10px"> {{$product->price}}đ</span>
                </p>
            @else
                <p><strong style="color:red"> {{$product->price}}đ</strong>
            @endif
            <div class="product-des">
                {!!html_entity_decode($product->description)!!}
            </div>
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
