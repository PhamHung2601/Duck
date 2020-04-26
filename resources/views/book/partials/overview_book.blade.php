<div class="product-top">
    <div class="row">
        <div class="col-md-1 col-lg-1 product-media-small">
            <a class="small-thumbnail" href="#" data-image-id="1" data-toggle="modal"
               data-title="{{$product->name}}"
               data-image="{{Voyager::image($product->media)}}" data-target="#image-gallery">
                <img id="myImg" width="100%" src="{{Voyager::image($product->media)}}" class="responsive"
                     style="width:100%; border:solid 1px #f2f2f2; "
                     alt="{{$product->name}}"
                     title="{{$product->name}}">
            </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 product-media">
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
            <hr>
            @include('book.partials.review')
            @if($product->review_book !="#")
            <button class="btn" style="width:200px;border-radius: 100px;color:white;background-image: linear-gradient(to right top, #f64131, #f84a3f, #f9544d, #f95d5a, #f96666);margin-top: 5%">
                <a href="{!!html_entity_decode($product->review_book)!!}" target="_blank">
                    <span style="color: white; font-weight: 700">Đọc Thử Ngay</span>
                </a>
            </button>
            @endif
            <hr>
            @if($product->special_price && $product->special_price < $product->price)
                <p><strong class="special-price" style="color:red"> {{number_format($product->special_price)}}đ</strong>
                    <span style="text-decoration:line-through;padding-left:10px">{{number_format($product->price)}}đ</span>
                </p>
            @else
                <p class="product-price" style="font-size: 25px"><strong style="color:red"> {{number_format($product->price)}}đ</strong>
            @endif
            <form role="form" id="add-to-cart" method="POST" action="{{ route('cart.add') }}">
                {{ csrf_field() }}
                <input type="text" name="product_id" value="{{$product->id}}" hidden>
                <!-- Only for js checking baby milk product -->
                <div class="item-product-options">
                    <!-- BEGIN ADD TO CART -->
                    <div id="add-cart-action">
                        <div class="add-cart-action" style="display: block">
                            <div class="cta-box">
                                <button type="sumit" class="btn" style="width:200px;border-radius: 100px;color:white;background-image: linear-gradient(to right top, #f64131, #f84a3f, #f9544d, #f95d5a, #f96666);">
                                                                    <span
                                                                        class="glyphicon glyphicon-shopping-cart" style="font-weight: 700">Mua sách </span>
                                    <i class="fa fa-cart-arrow-down"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
