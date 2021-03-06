@extends('layouts.master')
@section('pageTitle', 'Shopping Cart')
@section('content')
    <section id="cart_items">
        @if(!empty(session('cart-error')))
            <div class="alert alert-danger error-message">
                {{ session('cart-error') }}
            </div>
        @endif
        @if(!empty(session('cart-success')))
            <div class="alert alert-success success-message">
                {{ session('cart-success') }}
            </div>
        @endif
        <script>
            $(document).ready(function(){
                $(".success-message").delay(5000).slideUp(300);
                $(".error-message").delay(5000).slideUp(300);
            });
        </script>
        <div class="table-responsive cart_info">
                <div class="page-title">
                    <h2>Giỏ hàng</h2>
                </div>
                @if(count($products))
                    <table class="table table-condensed cart-table">
                        <thead>
                        <tr class="cart_menu">
                            <td class="image">Sản Phẩm</td>
                            <td class="price">Gía</td>
                            <td class="quantity">Số Lượng</td>
                            <td class="total">Tổng</td>
                            <td></td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $item)
                            <?php $canUpdate = empty($item->options['is_gift']) ?>
                            <tr>
                                <td class="cart_description" data-title="Tên sản phẩm">
                                    <span><a href="">{{ $item->name }}</a></span>
                                </td>
                                <td class="cart_price" data-title="Giá">
                                    <p>{{ number_format($item->price)}} VNĐ</p>
                                </td>
                                <td class="cart_quantity" data-title="Số lượng">
                                    @if ($canUpdate)
                                    <div class="cart_quantity_button">
                                        <a class="cart_quantity_down qty-control minus"
                                           href="{{url("cart/updateCartItem/$item->rowId?increment=0")}}"> - </a>
                                        <input class="cart_quantity_input" type="text" name="quantity"
                                               value="{{$item->qty}}" autocomplete="off" size="2">
                                        <a class="cart_quantity_down qty-control plus"
                                           href="{{url("cart/updateCartItem/$item->rowId?increment=1")}}"> + </a>
                                    </div>
                                    @endif
                                </td>
                                <td class="cart_total" data-title="Thành tiền">
                                    <p class="cart_total_price">{{ number_format($item->subtotal)}} VNĐ</p>
                                </td>
                                <td class="cart_delete" data-title="Xóa sản phẩm">
                                    @if ($canUpdate)
                                    <a class="cart_quantity_delete" href="{{ url("cart/removeItem/$item->rowId") }}"
                                       title="remove item">
                                        <i class="fa fa-times"></i>
                                    </a>
                                    @endif
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

                                    @if(isset($cart['couponCode']) && $cart['couponCode'])
                                        <div class="form-group">
                                            <input type="hidden" name="remove" value="1"/>
                                            <input type="text" value="{{$cart['couponCode']}}" name="coupon_code"
                                                   class="form-control">
                                            <div class="cart-discount-action" style="display: block">
                                                <button disabled type="sumit" class="btn btn-danger btn-submit">
                                                    <span class="submit-discount">Áp dụng</span>
                                                </button>
                                            </div>
                                        </div>
                                        <button type="sumit" class="btn btn-general btn-cancel">
                                            <span class="submit-discount">gỡ mã giảm giá</span>
                                        </button>
                                    @else
                                        <div class="form-group">
                                            <input type="text" name="coupon_code" class="form-control">
                                            <div class="cart-discount-action" style="display: block">
                                                <button type="sumit" class="btn btn-danger btn-submit">
                                                    <span class="submit-discount">Áp dụng</span>
                                                </button>
                                            </div>
                                        </div>
                                        <button type="sumit" disabled class="btn btn-general btn-cancel">
                                            <span class="submit-discount">gỡ mã giảm giá</span>
                                        </button>
                                    @endif
                                </form>
                            </div>

                            <div class="cart-total-infomation">
                                @if(isset($cart['discount']) && $cart['discount'])
                                    <table class="cart-table-data">
                                        <tbody>
                                        <tr>
                                            <th>Tiền hàng:</th>
                                            <td>{{$cart['totalBefore']}} VND</td>
                                        </tr>
                                        @if(isset($cart['couponCode']) && $cart['couponCode'])
                                            <tr>
                                                <th>Giảm giá( {{$cart['couponCode']}} ):</th>
                                                <td class="price-discount">- {{$cart['discount']}} VND</td>
                                            </tr>
                                        @else
                                            <tr>
                                                <th>Giảm giá( {{$cart['discount_title']}} ):</th>
                                                <td class="price-discount">- {{$cart['discount']}} VND</td>
                                            </tr>
                                        @endif
                                        <tr>
                                            <th>Giá vận chuyển:</th>
                                            <td>{{$cart['shippingFee']}} VND</td>
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
                                        <tr>
                                            <th>Giá vận chuyển:</th>
                                            <td>{{$cart['shippingFee']}} VND</td>
                                        </tr>
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
