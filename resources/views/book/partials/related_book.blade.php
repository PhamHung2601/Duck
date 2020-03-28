<div class="list-books related-products">
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-list" aria-hidden="true"></i> Sản Phẩm Liên Quan
        </div>
        <div class="panel-body">
            <div class="books">
                @foreach([1,2,3,4,5,6] as $item)
                    <div class="book-item">
                        <div class="book-item-inner">
                            <img class="" style="width:100px; border:solid 1px #f2f2f2" src="http://duck.localhost.com/storage/products/March2020/LzoQhLQ5lCXa3a0bwEoY.png">
                            <div class="book-info">
                                <a href="http://dac.localhost.com/books/detail/2" class="name" tabindex="0"><span> landing-main</span></a>
                                <div class="stock">
                                    <span>Kho hàng:</span>
                                    <span class="status instock">Còn Sách</span>
                                </div>
                                <div class="price-box">
                            <span class="price-wrapper">
                                <span class="special-price">
                                    <span class="price"> d</span>
                                </span>
                                   <span class="old-price">
                                    <span class="price">250000 d</span>
                                </span>
                            </span>
                                    <a href="#" class="btn btn-danger addtocart" tabindex="0">Đặt mua</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>



<script type="text/javascript">

    $(document).ready(function(){

        $('.related-products .books').slick({
            dots: true,
            slidesPerRow: 2,
            rows: 2,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesPerRow: 2,
                        rows: 1,
                    }
                },
                {
                    breakpoint: 640,
                    settings: {
                        slidesPerRow: 1,
                        rows: 1,
                    }
                }
            ]
        });

    });
</script>