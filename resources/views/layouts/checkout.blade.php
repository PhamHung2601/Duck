@extends('layouts.master')
@section('pageTitle', 'Checkout')
@section('content')
    <section>
        <div class="page-checkout">
                <form action="{{ url('/checkout/submit') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="row">
                        <div class="bill-to col-sm-12 clearfix">
                                <p><h4>Thông tin khách hàng</h4></p>
                                @if(count($errors) >0)
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li class="text-danger">{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                                <div class="form-one">
                                    <div class="input-field form-group">
                                        <label for="full_name">Họ và Tên <span style="color:red">*</span></label>
                                        <input id="full_name" class="form-control" name="fullName" type="text" value="{{ old('fullName') }}"
                                               placeholder="Họ và Tên">
                                        <small><i>VD: Nguyễn Văn A</i></small>
                                    </div>
                                    <div class="input-field form-group">
                                        <label for="email">Email <span style="color:red">*</span></label>
                                        <input id="email" class="form-control" name="email" type="text" value="{{ old('email') }}"
                                               placeholder="Email">
                                        <small><i>VD: nguyenvana@gmail.com</i></small>
                                    </div>
                                    <div class="input-field form-group">
                                        <label for="phone">Số điện thoại <span style="color:red">*</span></label>
                                        <input id="phone" class="form-control" name="phoneNumber" type="text"
                                               value="{{ old('phoneNumber') }}" placeholder="Số điện thoại">
                                        <small><i>VD: 01123487456</i></small>
                                    </div>
                                    <div class="input-field form-group">
                                        <label for="address">Địa chỉ <span style="color:red">*</span></label>
                                        <input id="address" class="form-control" name="address" type="text" value="{{ old('address') }}"
                                               placeholder="Địa Chỉ">
                                        <small><i>VD: Số nhà 123, đường Abc, tỉnh Xyz</i></small>
                                    </div>
                                    <div class="input-field form-group">
                                        <label for="address">Link Facebook cá nhân <span style="color:red">*</span></label>
                                        <input id="address" class="form-control" name="fb" type="text" value="{{ old('address') }}"
                                               placeholder="Link Facebook cá nhân">
                                        <small><i>VD: https://www.facebook.com/abcd.xyz</i></small>
                                    </div>
                                    <p style="color: red; font-size: 14px">(*) Thông tin quý khách phải nhập đầy đủ</p>
                                </div>
                                <div class="form-two">
                                    <textarea name="note" class="form-control" value="{{ old('message') }}" placeholder="Ghi chú"
                                              rows="7"></textarea>
                                </div>
                            </div>
                        <div class="payment-method col-sm-12 clearfix">
                                <p><h4>Phương thức thanh toán</h4></p>
                                <div class="input-field">
                                    <input id="cod" name="payment_method" value="cashondelivery" type="radio">
                                    <label for="cod">Thanh toán khi nhận hàng</label>
                                </div>
                                <div class="input-field">
                                    <input id="banktransfer" name="payment_method" value="banktransfer" type="radio">
                                    <label for="banktransfer">Chuyển khoản</label>
                                </div>
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <section id="cart_items">
                                <div class="table-responsive cart_info">
                                        <table class="table table-condensed">
                                            <thead class="thead-light">
                                            <tr class="cart_menu">
                                                <th class="description">Sản phẩm</th>
                                                <th class="price">Giá</th>
                                                <th class="quantity">Số lượng</th>
                                                <th class="total">Tổng</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(count($cart))
                                                @foreach($cart as $item)
                                                    <tr>
                                                        <td class="cart_description" data-title="Tên sản phẩm">
                                                            <h6><a href="">{{ $item->name }}</a></h6>
                                                        </td>
                                                        <td class="cart_price" data-title="Giá">
                                                            <p>{{ number_format($item->price)}} VNĐ</p>
                                                        </td>
                                                        <td class="cart_quantity" data-title="Số lượng">
                                                            {{ $item->qty }}
                                                        </td>
                                                        <td class="cart_total" data-title="Tổng">
                                                            <p class="cart_total_price">{{ number_format($item->subtotal)}}
                                                                VNĐ</p>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                <tr class="summary">
                                                    <td colspan="2">&nbsp;
                                                        <span>
                                            <a class="btn btn-default update" href="{{ url('cart')}}">Quay về giỏ
                                                hàng</a>
                                            </span>

                                                    </td>
                                                    <td colspan="2" class="grand-total">
                                                        @if ($shippingFee > 0)
                                                            <p style="text-align: center">
                                                                <span>Giá vận chuyển : </span><span class="price">{{ $shippingFee }} VNĐ</span>
                                                            </p>
                                                        @endIf
                                                        <p style="text-align: center">
                                                            <span>Tổng : </span><span class="price">{{ $total }} VNĐ</span>
                                                        </p>
                                                        <button type="submit" class="btn btn-danger check_out">
                                                            Gửi đơn hàng
                                                        </button>
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
                            </section>
                            <!--/#cart_items-->
                        </div>
                    </div>
                </form>
            </div>
    </section>
@endsection
