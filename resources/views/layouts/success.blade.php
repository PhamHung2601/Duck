@extends('layouts.master')
@section('content')
    <div class="success-container">
        <h2>Đặt hàng thành công</h2>
        <div class="shipping-information">
            <p><span class="info-label">Họ Tên: </span><span class="info-value">{{$order->customer_name}}</span></p>
            <p><span class="info-label">email: </span><span class="info-value">{{$order->customer_email}}</span></p>
            <p><span class="info-label">Số điện thoại: </span><span class="info-value">{{$order->phone}}</span></p>
            <p><span class="info-label">Địa chỉ giao hàng: </span><span class="info-value">{{$order->address}}</span></p>
            <p><span class="info-label">Số tiền cần thanh toán: </span><span class="info-value">{{$order->total}} VND</span>
            </p>
            <p><span class="info-label">Phương thức thanh toán: </span><span
                    class="info-value">{{$order->payment_method == 'cashondelivery'?'Thanh toán khi nhận hàng':'Chuyển khoản'}}</span>
            </p>
        </div>
        @if($order->payment_method == 'banktransfer')
            <div class="bank-info">
                <h3>Cách thức chuyển khoản</h3>
                <p><span>Chủ tài khoản: Charlie Bui</span></p>
                <p><span>Số tài khoản: 123456789012</span></p>
                <p><span>Ngân hàng: Vietcombank</span></p>
            </div>
        @endif
    </div>


@endsection
