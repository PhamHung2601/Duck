<div class="grid__item large--one-half medium--one-half small--one-whole">
    <div class="ft-subscribe">
        <h3>Đăng ký nhận tin</h3>
        <div class="ft-sub-desc">
            Hãy nhập địa chỉ email của bạn vào ô dưới đây để có thể nhận được tất cả các tin tức mới nhất. Chúng tôi đảm
            bảo sẽ không gửi mail spam tới bạn.
        </div>
        <div class="form-wrapper">
            <form accept-charset="UTF-8" enctype="multipart/form-data" class="contact-form">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="input-group">
                    <input type="email" value="" placeholder="Nhập email của bạn..." name="" id="Email"
                           class="form-control" aria-label="email@example.com">
                    <button class="submit-email" name="subscribe" id="submit-email">Đăng ký</button>
                </div>
                <p class="alert"></p>
            </form>

        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('#submit-email').click(function (e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ url('/account/contact') }}",
                method: 'post',
                data: {
                    "_token": "{{ csrf_token() }}",
                    email: $('#Email').val()
                },
                success: function (result) {
                    $('.alert').html(result.success);
                    setTimeout(() => {
                        $('.alert').remove();
                    }, 3000)
                }
            });
        });
    });
</script>