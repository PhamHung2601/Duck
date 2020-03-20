<section class="deal bg-warning">
    <div class="deal-countdown">
        <div id="sale-title" class="col-5">
            <h3>NHẬN ƯU ĐÃI MUA SÁCH ABCDXYZ NGAY HOM NAY</h3>
        </div>
        <div class="col-2"></div>
        <div id="sale-count-down" class="col-5">
            <div class="countdown">
                <div class="hours count-number">
                    <span class="hour-count-number"></span>
                    <p class="count-title">Hours</p>
                </div>
                <div class="min count-number">
                    <span class="min-count-number"></span>
                    <p class="count-title">Minutes</p>
                </div>
                <div class="sec count-number">
                    <span class="sec-count-number"></span>
                    <p class="count-title">Seconds</p>
                </div>
            </div>
        </div>
    </div>
    <div id="deal-detail">
        <div class="col-1"></div>
        <div class="deal-info col-6">
            <ul>
                <li><i class="fa fa-gift"> Qua trị giá 800.000đ với phần sửa lỗi hay gặp ở người Việt Nam</i></li>
                <li><i class="fa fa-gift"> Qua trị giá 800.000đ với phần sửa lỗi hay gặp ở người Việt Nam</i></li>
                <li><i class="fa fa-gift"> Qua trị giá 800.000đ với phần sửa lỗi hay gặp ở người Việt Nam</i></li>
                <li><i class="fa fa-gift"> Qua trị giá 800.000đ với phần sửa lỗi hay gặp ở người Việt Nam</i></li>
            </ul>
        </div>
        <div class="deal-form col-5">
            <div class="form-info">
                <img src="https://cdnstepup.r.worldssl.net/wp-content/uploads/2020/03/saleform.png">
                <form class="deal-info-form">
                    <div><input type="text" placeholder="Your Name"></div>
                    <div><input type="text" placeholder="Your Email"></div>
                    <div><input type="text" placeholder="Your Phone"></div>
                    <div><input type="textarea" placeholder="Your Address"></div>
                    <div class="add-to-cart">
                        <button type="button" class="btn btn-success"><a href="#">Dang Ky Ngay</a></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    $('.countdown').countdown('2021/01/01 12:30:00', function (event) {
        $('.hour-count-number').html(event.strftime('%H'));
        $('.min-count-number').html(event.strftime('%M'));
        $('.sec-count-number').html(event.strftime('%S'));
    }).on('finish.countdown', function (event) {

    });
    $('.countdown').countdown('pause');
    $('.countdown').countdown('resume');
</script>
