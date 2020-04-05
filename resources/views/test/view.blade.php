@extends('layouts.master')
@section('pageTitle', $test->title)
@section('content-top')
    @include('static-block.content-top')
@endsection
@section('content')
    <div id="news-{{$test->id}}" class="news-{{$test->id}} ">
        <div class="row">
            <div class="col-8">
                <div class="detail-test-container">
                    <div class="test-title">
                        <span class="entry-title">{{$test->title}}</span>
                    </div>
                    <p class="post-meta"><span class="published">Mar 18, 2020</span></p>
                    <div>
                        <p>{{$test->description}}</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="panel panel-default" style="margin-bottom:40px; padding-bottom:20px">
                    <div class="panel-heading">
                        <b>
                            ĐỀ THI MỚI NHẤT</b>
                    </div>
                    <div class="1q" style="padding:10px">
                        <a href="/de-thi/de-thi-thu-thpt-quoc-gia-2020-mon-toan-hoc--trung-tam-thanh-long--tinh-nghe-an--l1-99369"
                           title="Đề thi thử THPT Quốc Gia 2020 môn Toán học - Trung tâm Thanh Long - Tỉnh Nghệ An - L1">
                            <img src="https://moon.vn/Icons/pdf_icon.gif" style=" margin-right:10px" align="left">
                            <strong>Đề thi thử THPT Quốc Gia 2020 môn Toán học - Trung tâm Thanh Long - Tỉnh Nghệ An -
                                L1</strong> </a>
                        <hr style="margin:10px">
                        <a href="/de-thi/de-thi-thu-thpt-quoc-gia-2020-mon-toan-hoc--truong-thpt-chuyen-khtn-ha-noi--lan-1-99360"
                           title="Đề thi thử THPT Quốc Gia 2020 môn Toán học - Trường THPT Chuyên KHTN Hà Nội - Lần 1">
                            <img src="https://moon.vn/Icons/pdf_icon.gif" style=" margin-right:10px" align="left">
                            <strong>Đề thi thử THPT Quốc Gia 2020 môn Toán học - Trường THPT Chuyên KHTN Hà Nội - Lần
                                1</strong> </a>
                        <hr style="margin:10px">
                        <a href="/de-thi/de-thi-thu-thpt-quoc-gia-2020-mon-toan-hoc--truong-thpt-phan-boi-chau--tinh-nghe-an-99355"
                           title="Đề thi thử THPT Quốc Gia 2020 môn Toán học - Trường THPT Phan Bội Châu - Tỉnh Nghệ An">
                            <img src="https://moon.vn/Icons/pdf_icon.gif" style=" margin-right:10px" align="left">
                            <strong>Đề thi thử THPT Quốc Gia 2020 môn Toán học - Trường THPT Phan Bội Châu - Tỉnh Nghệ
                                An</strong> </a>
                        <hr style="margin:10px">
                        <a href="/de-thi/de-thi-khao-sat-chat-luong-thpt-quoc-gia-nam-2020-mon-toan-hoc--truong-thpt-doi-can--98742"
                           title="Đề thi khảo sát chất lượng THPT Quốc Gia năm 2020 môn Toán học - Trường THPT Đội Cấn - Tỉnh Vĩnh Phúc - Lần 2">
                            <img src="https://moon.vn/Icons/pdf_icon.gif" style=" margin-right:10px" align="left">
                            <strong>Đề thi khảo sát chất lượng THPT Quốc Gia năm 2020 môn Toán học - Trường THPT Đội Cấn
                                - Tỉnh Vĩnh Phúc - Lần 2</strong> </a>
                        <hr style="margin:10px">
                        <a href="/de-thi/de-thi-thu-thpt-quoc-gia-2020-mon-toan--truong-thpt-hau-loc-2--tinh-thanh-hoa--lan-1-98718"
                           title="Đề thi thử THPT Quốc Gia 2020 môn Toán - Trường THPT Hậu Lộc 2 - Tỉnh Thanh Hóa - Lần 1">
                            <img src="https://moon.vn/Icons/pdf_icon.gif" style=" margin-right:10px" align="left">
                            <strong>Đề thi thử THPT Quốc Gia 2020 môn Toán - Trường THPT Hậu Lộc 2 - Tỉnh Thanh Hóa -
                                Lần 1</strong> </a>
                        <hr style="margin:10px">
                        <a href="/de-thi/de-thi-khao-sat-chat-luong-thpt-quoc-gia-nam-2020-mon-toan-hoc--truong-thpt-nguyen-v-98708"
                           title="Đề thi khảo sát chất lượng THPT Quốc Gia năm 2020 môn Toán học - Trường THPT Nguyễn Viết Xuân - Tỉnh Vĩnh Phúc - Lần 2">
                            <img src="https://moon.vn/Icons/pdf_icon.gif" style=" margin-right:10px" align="left">
                            <strong>Đề thi khảo sát chất lượng THPT Quốc Gia năm 2020 môn Toán học - Trường THPT Nguyễn
                                Viết Xuân - Tỉnh Vĩnh Phúc - Lần 2</strong> </a>
                        <hr style="margin:10px">
                        <a href="/de-thi/de-thi-thu-thpt-quoc-gia-2020-mon-toan--truong-thpt-le-quy-don--tinh-da-nang-98608"
                           title="Đề thi thử THPT Quốc Gia 2020 môn Toán - Trường THPT Lê Quý Đôn - Tỉnh Đà Nẵng">
                            <img src="https://moon.vn/Icons/pdf_icon.gif" style=" margin-right:10px" align="left">
                            <strong>Đề thi thử THPT Quốc Gia 2020 môn Toán - Trường THPT Lê Quý Đôn - Tỉnh Đà
                                Nẵng</strong> </a>
                        <hr style="margin:10px">
                        <a href="/de-thi/de-thi-khao-sat-chat-luong-thpt-quoc-gia-nam-2020-mon-toan-hoc--truong-thpt-ben-tre--98577"
                           title="Đề thi khảo sát chất lượng THPT Quốc Gia năm 2020 môn Toán học - Trường THPT Bến Tre - Tỉnh Vĩnh Phúc">
                            <img src="https://moon.vn/Icons/pdf_icon.gif" style=" margin-right:10px" align="left">
                            <strong>Đề thi khảo sát chất lượng THPT Quốc Gia năm 2020 môn Toán học - Trường THPT Bến Tre
                                - Tỉnh Vĩnh Phúc</strong> </a>
                        <hr style="margin:10px">
                    </div>
                </div>
            </div>
        </div>
        <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
    </div>
@endsection
@section('content-bottom')
    @include('static-block.content-bottom')
@endsection
