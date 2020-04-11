@extends('layouts.master')
@section('pageTitle', 'Shopping Cart')
@section('content')
    <section id="cart_items">
        <div class="table-responsive cart_info">
            <div class="page-title">
                <h2>MY SHOPPING CART</h2>
            </div>
            @if(count($products))
                <table class="table table-condensed cart-table">
                    <thead>
                    <tr class="cart_menu">
                        <td class="image">Item</td>
                        <td class="price">Price</td>
                        <td class="quantity">Quantity</td>
                        <td class="total">Total</td>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $item)
                        <tr>
                            <td class="cart_description">
                                <span><a href="">{{ $item->name }}</a></span>
                            </td>
                            <td class="cart_price">
                                <p>{{ number_format($item->price)}} VNĐ</p>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <a class="cart_quantity_down qty-control minus"
                                       href="{{url("cart/updateCartItem/$item->rowId?increment=0")}}"> - </a>
                                    <input class="cart_quantity_input" type="text" name="quantity"
                                           value="{{$item->qty}}" autocomplete="off" size="2">
                                    <a class="cart_quantity_down qty-control plus"
                                       href="{{url("cart/updateCartItem/$item->rowId?increment=1")}}"> + </a>
                                </div>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price">{{ number_format($item->subtotal)}} VNĐ</p>
                            </td>
                            <td class="cart_delete">
                                <a class="cart_quantity_delete" href="{{ url("cart/removeItem/$item->rowId") }}"
                                   title="remove item"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <div class="cart-info-bottom clearfix">
                    <div class="cart-summary">
                        <div class="form-discount">
                            <form role="form" method="POST" action="{{ route('cart.discount') }}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input type="text" name="coupon_code" class="form-control">
                                    <div class="cart-discount-action" style="display: block">
                                        <button type="sumit" class="btn btn-danger btn-submit">
                                            <span class="submit-discount">Áp dụng</span>
                                        </button>
                                    </div>
                                </div>
                                <button type="sumit" class="btn btn-general btn-cancel">
                                    <span class="submit-discount">gỡ mã giảm giá</span>
                                </button>
                            </form>
                        </div>

                        <div class="cart-total-infomation">
                            @if(isset($cart['couponCode']) && $cart['couponCode'])
                                <table class="cart-table-data">
                                    <tbody>
                                    <tr>
                                        <th>Tiền hàng:</th>
                                        <td>{{$cart['totalBefore']}} VND</td>
                                    </tr>
                                    <tr>
                                        <th>Giảm giá( {{$cart['couponCode']}} ):</th>
                                        <td class="price-discount">- {{$cart['discount']}} VND</td>
                                    </tr>
                                    <tr class="grand-total">
                                        <th>Tổng:</th>
                                        <td>{{$cart['total']}} VND</td>
                                    </tr>
                                    </tbody>
                                </table>
                            @else
                                <table class="cart-table-data">
                                    <tbody>
                                    <tr class="grand-total">
                                        <th>Tổng:</th>
                                        <td>{{$cart['total']}} VND</td>
                                    </tr>
                                    </tbody>
                                </table>
                            @endif
                        </div>
                        <div class="box-actions">
                            <a class="btn btn-danger action-checkout" href="{{ url('checkout') }}">Thanh toán</a>
                        </div>
                    </div>
                </div>
            @else
                <p>You have no items in the shopping cart</p>
            @endif
        </div>
    </section> <!--/#cart_items-->

@endsection
