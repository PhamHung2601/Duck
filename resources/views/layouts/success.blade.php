@extends('layouts.master')
@section('content')
    <div class="success-container">
        <div class="page-title">
            <i class="fa fa-check-circle-o checkout-success-icon"  aria-hidden="true"></i>
            <h2>Đặt hàng thành công</h2>
        </div>
        <div class="shipping-information">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <p><h6>Thông tin khách hàng</h6></p>
                    <p><span class="info-label">Họ Tên: </span><span class="info-value">{{$order->customer_name}}</span></p>
                    <p><span class="info-label">email: </span><span class="info-value">{{$order->customer_email}}</span></p>
                    <p><span class="info-label">Số điện thoại: </span><span class="info-value">{{$order->phone}}</span></p>
                </div>
                <div class="col-sm-12 col-md-6">
                    <p><h6>Địa chỉ giao hàng</h6></p>
                    <p><span class="info-value">{{$order->address}}</span></p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <p><h6>Phương thức thanh toán</h6></p>
                    <p><span class="info-value">{{$order->payment_method == 'cashondelivery'?'Thanh toán khi nhận hàng':'Chuyển khoản'}}</span></p>
                </div>
                <div class="col-sm-12 col-md-6">
                    <p><h6>Số tiền cần thanh toán</h6></p>
                    <p><span class="info-value">{{$order->total}} VND</span></p>
                </div>
            </div>
            @if($order->payment_method == 'banktransfer')
                <div class="bank-info">
                    <p><h6>Cách thức chuyển khoản</h6></p>
                    <p><span>Chủ tài khoản: Charlie Bui</span></p>
                    <p><span>Số tài khoản: 123456789012</span></p>
                    <p><span>Ngân hàng: Vietcombank</span></p>
                </div>
            @endif
        </div>
    </div>

@endsection
