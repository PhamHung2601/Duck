<div class="product-top">
    <div class="row">
        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
            <div class="page-title" style="margin-top:5%">
                <h2 style="font-size:23px; font-weight:bold; margin-bottom:20px;text-align: center">{{$product->name}}</h2>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4 col-lg-4 product-media-small" style="margin-top: 10%;">
                    <?php
                    function multiexplode($delimiters, $data)
                    {
                        $MakeReady = str_replace($delimiters, $delimiters[0], $data);
                        $Return = explode($delimiters[0], $MakeReady);
                        return $Return;
                    }
                    $small_medias = multiexplode(array('[', ']','"', ','), $product->small_media);
                    ?>
                    @foreach($small_medias as $small_media)
                        @if(!empty($small_media))
                            <a class="small-thumbnail" href="#" data-image-id="1" data-toggle="modal"
                               data-title="{{$product->name}}"
                               data-image="{{Voyager::image($small_media)}}" data-target="#image-gallery">
                                <img id="myImg" width="100%" src="{{Voyager::image($small_media)}}" class="responsive"
                                     style="width:100%; border:solid 1px #f2f2f2; "
                                     alt="{{$product->name}}"
                                     title="{{$product->name}}">
                            </a>
                        @endif
                    @endforeach
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 product-media" style="margin-top: 10%;">
                    <a class="thumbnail" href="#" data-image-id="1" data-toggle="modal"
                       data-title="{{$product->name}}"
                       data-image="{{Voyager::image($product->media)}}" data-target="#image-gallery">
                        <img id="myImg" width="100%" src="{{Voyager::image($product->media)}}" class="responsive"
                             style="width:100%; border:solid 1px #f2f2f2; "
                             alt="{{$product->name}}"
                             title="{{$product->name}}">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5 product-main-info">
            @include('book.partials.review')
            @if($product->review_book !="#")
                <button class="btn"
                        style="width:200px;border-radius: 100px;color:white;background-image: linear-gradient(to right top, #fd8503, #fa9400, #f5a200, #f0af00, #ebbc12);margin-top: 5%">
                    <a href="{!!html_entity_decode($product->review_book)!!}" target="_blank">
                        <span style="color: white; font-weight: 700">Đọc Thử Ngay</span>
                    </a>
                </button>
            @endif
            <hr>
            @if($product->special_price && $product->special_price < $product->price)
                <p><strong class="special-price" style="color:red"> {{number_format($product->special_price)}}đ</strong>
                    <span
                        style="text-decoration:line-through;padding-left:10px">{{number_format($product->price)}}đ</span>
                </p>
            @else
                <p class="product-price" style="font-size: 25px"><strong
                        style="color:red"> {{number_format($product->price)}}đ</strong>
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
                                <button type="sumit" class="btn"
                                        style="width:200px;border-radius: 100px;color:white;background-image: linear-gradient(to right top, #fd8503, #fa9400, #f5a200, #f0af00, #ebbc12);">
                                                                    <span
                                                                        class="glyphicon glyphicon-shopping-cart"
                                                                        style="font-weight: 700">Mua sách </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
