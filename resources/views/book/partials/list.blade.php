<?php
$specialPrice = $product->special_price;
$nomalPrice = $product->price;
$discount = $specialPrice && $specialPrice < $nomalPrice ? ($nomalPrice - $specialPrice) * 100 : null;
?>
<div class="product-item">
    <div class="product-item-inner">
        <div class="product-img">
            <a href="{{ $product->getUrlDetail() }}" class="text-center">
                <img
                    src="{{ Voyager::image( $product->media ) }}"
                    alt="{{ $product->name }}"
                >
            </a>
        </div>
        <div class="product-info">
            <div class="product-title">
                <a href="{{ $product->getUrlDetail() }}">{{$product->name}}</a>
            </div>
            <div class="price-box clearfix">
                <span class="price-wrapper">
                   @if($discount)
                        <span class="special-price">
                            <span class="price">{{number_format($product->special_price)}}₫</span>
                        </span>
                        <span class="old-price"><span class="price">{{number_format($product->price)}}₫</span></span>
                    @else
                        <span class="price"><span class="price">{{number_format($product->price)}}₫</span></span>
                    @endif
                </span>
            </div>
            <form role="form" method="POST" action="{{ route('cart.add') }}">
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
