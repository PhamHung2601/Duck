@extends('layouts.master')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <form action="{{ url('/checkout/submit') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="col-sm-12 clearfix">
                        <div class="container">
                            <div class="breadcrumbs">
                                <ol class="breadcrumb">
                                    <li><a href="#">Home</a></li>
                                    <li class="active">/ Shopping Cart</li>
                                </ol>
                            </div>
                            <div class="bill-to col-sm-12 clearfix">
                                <p>Thông tin khách hàng</p>
                                @if(count($errors) >0)
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li class="text-danger">{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                                <div class="form-one">
                                    <div class="input-field">
                                        <label for="full_name">Họ và Tên</label>
                                        <input id="full_name" name="fullName" type="text" value="{{ old('fullName') }}"
                                               placeholder="Họ và Tên *">
                                    </div>
                                    <div class="input-field">
                                        <label for="email">Email</label>
                                        <input id="email" name="email" type="text" value="{{ old('email') }}"
                                               placeholder="Email *">
                                    </div>
                                    <div class="input-field">
                                        <label for="phone">Số điện thoại</label>
                                        <input id="phone" name="phoneNumber" type="text"
                                               value="{{ old('phoneNumber') }}" placeholder="Số điện thoại *">
                                    </div>
                                    <div class="input-field">
                                        <label for="address">Địa chỉ</label>
                                        <input id="address" name="address" type="text" value="{{ old('address') }}"
                                               placeholder="Địa Chỉ *">
                                    </div>
                                    <p style="color: red; font-size: 14px">(*) Thông tin quý khách phải nhập đầy đủ</p>
                                </div>
                                <div class="form-two">
                                    <textarea name="note" value="{{ old('message') }}" placeholder="Ghi chú"
                                              rows="7"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <section id="cart_items">
                            <div class="container">
                                <div class="table-responsive cart_info">
                                    <table class="table table-condensed">
                                        <thead>
                                        <tr class="cart_menu">
                                            <td class="description">Tên sản phẩm</td>
                                            <td class="price">Giá</td>
                                            <td class="quantity">Số lượng</td>
                                            <td class="total">Tổng</td>
                                            <td></td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(count($cart))
                                            @foreach($cart as $item)
                                                <tr>
                                                    <td class="cart_description">
                                                        <h4><a href="">{{ $item->name }}</a></h4>
                                                    </td>
                                                    <td class="cart_price">
                                                        <p>{{ number_format($item->price)}} VNĐ</p>
                                                    </td>
                                                    <td class="cart_quantity">
                                                        {{ $item->qty }}
                                                    </td>
                                                    <td class="cart_total">
                                                        <p class="cart_total_price">{{ number_format($item->subtotal)}}
                                                            VNĐ</p>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            <tr>
                                                <td colspan="2">&nbsp;
                                                    <span>
                                            <a class="btn btn-default update" href="{{ url('cart')}}">Quay về giỏ
                                                hàng</a>
                                            </span>

                                                </td>
                                                <td colspan="2">
                                                    <table class="table table-condensed total-result">
                                                        <tbody>
                                                        <tr>
                                                            <span>Tổng : </span><span>{{ $total }} VNĐ</span>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                            </td>
                                                            <td>
                                                                <button type="submit" class="btn btn-default check_out">
                                                                    Gửi đơn hàng
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        @else
                                            <tr>
                                                <td>You have no items in the shopping cart</td>
                                            </tr>
                                            <tr>
                                                <td colspan="4">&nbsp;
                                                    <a class="btn btn-default update" href="{{ url('/')}}">Mua hàng</a>
                                                </td>
                                            </tr>
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </section>
                        <!--/#cart_items-->
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
