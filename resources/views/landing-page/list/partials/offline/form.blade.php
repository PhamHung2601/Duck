<section class="landing-page-section" id="register-form" style="background-color: #4f99d8">
    <h1 class="section-title" style="padding-top: 5%;padding-bottom: 5%;color: white">Đăng Ký Khóa Học </h1>
    <div class="join-course col-sm-12 col-md-12 col-lg-12">
        <form class="form-register-course" action="{{ route('course.register') }}" method="POST">
            {{ csrf_field() }}
            <input type="text" id="name" name="name" placeholder="Họ tên *">
            @error('name')
            <small class="form-text text-muted">{{ $message }}</small>
            @enderror
            <input type="text" id="email" name="email" placeholder="Email của bạn *">
            @error('email')
            <small class="form-text text-muted">{{ $message }}</small>
            @enderror
            <input type="text" id="phone" name="phone" placeholder="Số điện thoại *">
            @error('phone')
            <small class="form-text text-muted">{{ $message }}</small>
            @enderror
            <textarea id="address" name="address" placeholder="Địa chỉ *"></textarea>
            @error('address')
            <small class="form-text text-muted">{{ $message }}</small>
            @enderror
            <div class="box-action" style="padding-bottom: 5%"><button id="register-course-button" class="btn btn-success register-course-button landing-button" type="submit">Đăng Ký </button></div>
        </form>
    </div>
</section>
