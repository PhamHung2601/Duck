@extends('layouts.master')
@section('content')
    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">/ Shopping Cart</li>
                </ol>
            </div>
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
                                        <a class="cart_quantity_down qty-control minus" href="{{url("cart/updateCartItem/$item->rowId?increment=0")}}"> - </a>
                                        <input class="cart_quantity_input" type="text" name="quantity" value="{{$item->qty}}" autocomplete="off" size="2">
                                        <a class="cart_quantity_down qty-control plus" href="{{url("cart/updateCartItem/$item->rowId?increment=1")}}"> + </a>
                                    </div>
                                </td>
                                <td class="cart_total">
                                    <p class="cart_total_price">{{ number_format($item->subtotal)}} VNĐ</p>
                                </td>
                                <td class="cart_delete">
                                    <a class="cart_quantity_delete" href="{{ url("cart/removeItem/$item->rowId") }}" title="remove item"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                <div class="box-actions">
                    <a  class="btn btn-danger" href="{{ url('checkout') }}">Thanh toán</a>
                </div>
                @else
                    <p>You have no items in the shopping cart</p>
                @endif
            </div>
        </div>
    </section> <!--/#cart_items-->

@endsection
