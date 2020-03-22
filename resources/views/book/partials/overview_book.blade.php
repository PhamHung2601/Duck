<div style="background-color:#f8f8f8; padding:20px; border:solid 1px #f2f2f2 ">

    <h1 style="font-size:23px; font-weight:bold; margin-bottom:20px">{{$product->name}}</h1>
    <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-3">
            <a class="thumbnail" href="#" data-image-id="1" data-toggle="modal"
               data-title="{{$product->name}}"
               data-image="{{Voyager::image($product->media)}}" data-target="#image-gallery">
                <img id="myImg" width="100%" src="{{Voyager::image($product->media)}}" class="responsive"
                     style="width:100%; border:solid 1px #f2f2f2; "
                     alt="{{$product->name}}"
                     title="{{$product->name}}">
            </a>
        </div>
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-9">
            <p>ID: [1500] </p>
            <p>Tác giả: <strong> </strong></p>
            <p class="hidden-sm hidden-xs ">Số Trang:<strong> </strong></p>
            <p class="hidden-sm hidden-xs ">Kích thước:<strong> 19x37cm</strong></p>
            <p class="hidden-sm hidden-xs ">Số lần tra cứu:<strong> Không giới hạn </strong></p>
            @if($product->special_price && $product->special_price < $product->price)
                <p>Giá: <strong style="color:red"> {{$product->special_price}}đ</strong>
                    <span style="text-decoration:line-through;padding-left:10px"> {{$product->price}}đ</span>
                </p>
            @else
                <p>Giá: <strong style="color:red"> {{$product->price}}đ</strong>
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
    <div style="font-size:13px">
        {!!html_entity_decode($product->description)!!}
    </div>
</div>
