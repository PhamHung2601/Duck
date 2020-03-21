<div class="list-books">
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-list" aria-hidden="true"></i> Sách bộ đề minh họa Luyện thi 2020
        </div>
        <div class="panel-body">
            <div class="books">
                @foreach($products as $product)
                    <div class="book-item">
                        <img class="" style="width:100px; border:solid 1px #f2f2f2"
                             src="{{ Voyager::image( $product->media ) }}">
                        <div class="book-info">
                            <a href="#" class="name"><span> {{ $product->name }}</span></a>
                            @foreach($product->category as $cate)
                                <div class="type">
                                    <span>Môn: <strong> {{ $cate->name }}</strong></span>
                                    <span class="count-page">Số trang: <strong>300</strong></span>
                                </div>
                            @endforeach
                            <div class="stock">
                                <span>Kho hàng:</span>
                                @if((int)$product->stock > 0)
                                    <span class="status instock">Còn Sách</span>
                                @else
                                    <span class="status outstock">Hết Sách</span>
                                @endif
                            </div>
                            <div class="price-box">
                            <span class="price-wrapper">
                                <span class="special-price">
                                    <span class="price">{{ $product->special_price }} d</span>
                                </span>
                                   <span class="old-price">
                                    <span class="price">{{ $product->price }} d</span>
                                </span>
                            </span>
                                <a href="#" class="btn btn-danger addtocart">Đặt mua</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
