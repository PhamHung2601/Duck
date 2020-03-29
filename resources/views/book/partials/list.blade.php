<?php
$specialPrice = $product->special_price;
$nomalPrice = $product->price;
$discount = $specialPrice && $specialPrice < $nomalPrice ? ($nomalPrice - $specialPrice) * 100 : null;
?>
<div class="product-item">
    <div class="product-item-inner">
        <div class="product-img">
            <a href="/books/detail/{{$product->id}}" class="text-center">
                <img
                        src="{{ Voyager::image( $product->media ) }}"
                        alt="{{ $product->name }}"
                >
            </a>
        </div>
        <div class="product-info">
            <div class="product-title">
                <a href="/books/detail/{{$product->id}}">{{$product->name}}</a>
            </div>
            <div class="price-box clearfix">
                <span class="price-wrapper">
                   @if($discount)
                        <span class="special-price">
                            <span class="price">{{$product->special_price}}₫</span>
                        </span>
                        <span class="old-price"><span class="price">{{$product->price}}₫</span></span>
                    @else
                        <span class="price"><span class="price">{{$product->price}}₫</span></span>
                    @endif
                </span>
            </div>
        </div>
    </div>
</div>
