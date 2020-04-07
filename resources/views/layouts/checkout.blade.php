@extends('layouts.master')
@section('pageTitle', 'Checkout')
@section('content')
    <section>
        <div class="container">
            <div class="page-checkout">
                <form action="{{ url('/checkout/submit') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="col-sm-12 clearfix">
                        <div class="container">
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
                                        <label for="full_name">Họ và Tên</label>
                                        <input id="full_name" class="form-control" name="fullName" type="text"
                                               value="{{ old('fullName') }}"
                                               placeholder="Họ và Tên *">
                                    </div>
                                    <div class="input-field form-group">
                                        <label for="email">Email</label>
                                        <input id="email" class="form-control" name="email" type="text"
                                               value="{{ old('email') }}"
                                               placeholder="Email *">
                                    </div>
                                    <div class="input-field form-group">
                                        <label for="phone">Số điện thoại</label>
                                        <input id="phone" class="form-control" name="phoneNumber" type="text"
                                               value="{{ old('phoneNumber') }}" placeholder="Số điện thoại *">
                                    </div>
                                    <div class="input-field form-group">
                                        <label for="address">Địa chỉ</label>
                                        <input id="destination" class="form-control" name="address" type="text"
                                               value="{{ old('address') }}"
                                               placeholder="Địa Chỉ *">
                                    </div>

                                    <div class="input-field form-group">
                                        <label for="shippingFee">Phí ship (Tự động tính theo quãng đường)</label>
                                        <input id="shippingFee" class="form-control" name="shippingFee" type="number"
                                               value="" readonly
                                               placeholder="Phí ship">
                                    </div>

                                    <p style="color: red; font-size: 14px">(*) Thông tin quý khách phải nhập đầy đủ</p>
                                </div>
                                <div class="form-two">
                                    <textarea name="note" class="form-control" value="{{ old('message') }}"
                                              placeholder="Ghi chú"
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
                    </div>
                    <div class="col-sm-12">
                        <section id="cart_items">
                            <div class="container">
                                <div class="table-responsive cart_info">
                                    <table class="table table-condensed">
                                        <thead class="thead-light">
                                        <tr class="cart_menu">
                                            <th class="description">Tên sản phẩm</th>
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
                                                    <td class="cart_description">
                                                        <h6><a href="">{{ $item->name }}</a></h6>
                                                    </td>
                                                    <td class="cart_price">
                                                        <p>{{ number_format($item->price)}} VNĐ</p>
                                                    </td>
                                                    <td class="cart_quantity">
                                                        {{ $item->qty }}
                                                    </td>
                                                    <td class="cart_total">
                                                        <p class="cart_total_price">{{ number_format($item->subtotal)}} VNĐ</p>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            <tr>
                                                <td colspan="2">&nbsp;
                                                    <span>
                                                        <a class="btn btn-default update" href="{{ url('cart')}}">Quay về giỏ hàng</a>
                                                    </span>
                                                </td>
                                                <td colspan="2" class="grand-total">
                                                    <p class="text-center d-none" id="jsShippingFee">
                                                        <span>Phí Ship: <span class="price" id="jsShippingFeeTotal"></span> VNĐ</span>
                                                    </p>
                                                    <p class="text-center">
                                                        <span>Tổng : <span class="price" id="jsTotalPrice">{{ $total }} </span>VNĐ</span>
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
                            </div>
                        </section>
                        <!--/#cart_items-->
                    </div>
                </form>
            </div>
            <div id="instructions" class="d-none"></div>
            <div id="map"></div>
            <div id="panel">
                <b class="d-none">Xuất phát: </b>
                <select id="source" class="d-none">
                    <option value="Công viên thống nhất, vi">Công viên thống nhất</option>
                    // Value của các option là từ khóa để Google tìm kiếm địa điểm.
                </select>
                {{--<b>Đích: </b>--}}
                {{--<input type="text" id="destination">--}}
                <b class="d-none">Phương tiện: </b>
                <select id="mode" class="d-none">
                    <option value="DRIVING">Xe máy</option>
                </select>
            </div>
        </div>
    </section>
@endsection
@section('content-js')
    <script src="https://maps.googleapis.com/maps/api/js?signed_in=true&callback=initMap&key=AIzaSyAHWG8LpTxDNKS7yjrCziJkXAbYp9CjLAQ"
            async defer></script>
    <script>
        var map;
        var directionsDisplay;
        var directionsService;
        var stepDisplay;
        var markerArray = [];

        function initMap() {
            var lat_lng = {lat: 20.9769427, lng: 105.8921285};
            map = new google.maps.Map(document.getElementById('map'), {
                zoom: 16,
                center: lat_lng
            });
            directionsService = new google.maps.DirectionsService();
            directionsDisplay = new google.maps.DirectionsRenderer({map: map});

            var onChangeHandler = function () {
                calculateAndDisplayRoute(directionsService, directionsDisplay);
            };
            document.getElementById('source').addEventListener('change', onChangeHandler);
            document.getElementById('destination').addEventListener('change', onChangeHandler);
            document.getElementById('mode').addEventListener('change', onChangeHandler);
        }

        function calculateAndDisplayRoute(directionsService, directionsDisplay) {
            // console.log($("#destination").val())
            directionsService.route({
                origin: $("#source").val(),
                destination: $("#destination").val(),
                travelMode: document.getElementById('mode').value,
            }, function (response, status) {
                if (status === google.maps.DirectionsStatus.OK) {
                    directionsDisplay.setDirections(response);
                    showSteps(response);
                } else {
                    window.alert('Bạn phải nhập đủ cả điểm đầu và điểm đích!');
                }
            });
        }

        function showSteps(directionResult) {
            var myRoute = directionResult.routes[0].legs[0];
            var instructions = '<h3 class="distance">Quãng đường: ' + myRoute.distance.text + '</h3><br>';

            var distance = parseFloat(myRoute.distance.text);
            var shippingFee = calculateShippingFee(distance);
            $('#shippingFee').val(shippingFee);
            $('#jsShippingFee').removeClass('d-none');
            $('#jsShippingFee').css('display','block');
            $('#jsShippingFeeTotal').append(shippingFee);
            var priceProduct = $('#jsTotalPrice').text();
            var total = parseInt(priceProduct) + parseInt(shippingFee);
            $('#jsTotalPrice').text(total)
            document.getElementById("instructions").innerHTML = instructions;
        }

        function calculateShippingFee(distance) {
            const openPrice = 10000;
            var shippingFee;
            distance = Math.ceil(distance);
            if (distance <= 5) {
                shippingFee = openPrice + distance * 1000;
            } else if (distance > 5 && distance <= 10) {
                shippingFee = openPrice + (distance - 5) * 2000 + 5000;
            } else {
                shippingFee = openPrice + (distance - 10) * 3000 + 15000;
            }
            return shippingFee;
        }

        function attachInstructionText(marker, text) {
            google.maps.event.addListener(marker, 'click', function () {
                stepDisplay.setContent(text);
                stepDisplay.open(map, marker);
            });
        }
    </script>
@endsection
