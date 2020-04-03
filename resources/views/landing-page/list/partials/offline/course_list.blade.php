<section class="landing-page-section bg-success offline-course">
    <h2 class="section-title">KHOÁ HỌC DÀNH CHO AI?</h2>
    <div class="section-content">
        <ul>
            <li><p><i class="fa fa-2x fa-location-arrow"> Tất cả các bạn có ý định dự thi THPT Quốc gia năm 2020</i></p></li>
            <li><p><i class="fa fa-2x fa-location-arrow"> Được thiết kế phù hợp với cả những bạn đã mất gốc, chán ghét môn Địa lí; những học sinh thi lại cần hiểu sâu, hiểu chắc vấn đề</i></p></li>
            <li><p><i class="fa fa-2x fa-location-arrow">  Mục tiêu từ 8 - 10 điểm.</i></p></li>
        </ul>
    </div>
    <!--<div class="section-add-to-cart-button display-block-content">-->
    <!--    <a href="#">Tao muon mua luon</a>-->
    <!--</div>-->
</section>
<section class="landing-page-section bg-light">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <h2 class="section-title">TẠI SAO KHÔNG THỂ BỎ LỠ KHOÁ HỌC NÀY?</h2>
    <div class="section-content display-flex-content">
        <ul class="col-7">
            <h3>Với lộ trình:  Đào kiến thức - Thạo kĩ năng - Luyện đề chuyên sâu, các em sẽ được</h3>
            <li><p><i class="fa fa-play"> Học lại toàn bộ kiến thức lí thuyết 11 + 12, biểu đồ, atlat, bảng số liệu</i></p></li>
            <li><p><i class="fa fa-play"> Bài tập củng cố và  luyện đề chuyên sâu  nhằm giúp làm quen với các câu hỏi, dạng đề thường gặp</i></p></li>
            <li><p><i class="fa fa-play"> Hoàn thiện kĩ năng, phản xạ trong việc xử lí nhanh câu hỏi trắc nghiệm</i></p></li>
        </ul>
        <div class="col-5 join-course">
            <form class="form-register-course" action="{{ route('course.register') }}" method="POST">
                {{ csrf_field() }}
                <input type="text" id="name" name="name" placeholder="Your Name">
                @error('name')
                    <small class="form-text text-muted">{{ $message }}</small>
                @enderror
                <input type="text" id="email" name="email" placeholder="Your Email">
                @error('email')
                    <small class="form-text text-muted">{{ $message }}</small>
                @enderror
                <input type="text" id="phone" name="phone" placeholder="Your Phone">
                @error('phone')
                    <small class="form-text text-muted">{{ $message }}</small>
                @enderror
                <textarea id="address" name="address" placeholder="Your Address"></textarea>
                @error('address')
                    <small class="form-text text-muted">{{ $message }}</small>
                @enderror
                <h3>Học phí khoá học: 80.000 VNĐ/buổi. Thời gian: 2 tiếng</h3>
                <button type="submit" id="register-course-button" class="btn btn-success register-course-button">Dang Ky Ngay</button>
            </form>
        </div>
    </div>
</section>
<section class="landing-page-section">
    <h2 class="section-title">CAM KẾT</h2>
    <div class="section-content">
        <ul>
            <li><p><i class="fa fa-2x fa-location-arrow"> Giảng dạy nhiệt tình</i></p></li>
            <li><p><i class="fa fa-2x fa-location-arrow">  Chắc chắn hiểu bài, tiến bộ rõ rệt</i></p></li>
            <li><p><i class="fa fa-2x fa-location-arrow">  Yêu thích học môn Địa lí hơn</i></p></li>
            <li><p><i class="fa fa-2x fa-location-arrow">  Hơn 90% học sinh theo học có điểm số cao hơn mong muốn</i></p></li>
            <li><p><i class="fa fa-2x fa-location-arrow">  Được nhận sự hỗ trợ học tập chưa nơi học thêm nào có</i></p></li>
        </ul>
    </div>
</section>
