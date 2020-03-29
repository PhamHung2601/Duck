<div class="product-list">
    <div class="toolbar clearfix">
        <div class="sort-by form-group">
            <label for="SortBy">Sắp xếp</label>
            <select class="form-control" name="SortBy" id="SortBy">
                <option value="manual">Tùy chọn</option>
                <option value="best-selling">Sản phẩm bán chạy</option>
                <option value="title-ascending">Theo bảng chữ cái từ A-Z</option>
                <option value="title-descending">Theo bảng chữ cái từ Z-A</option>
                <option value="price-ascending">Giá từ thấp tới cao</option>
                <option value="price-descending">Giá từ cao tới thấp</option>
                <option value="created-descending">Mới nhất</option>
                <option value="created-ascending">Cũ nhất</option>
            </select>
        </div>
    </div>
    <div class="products">
        <div class="product-item">
            <div class="product-item-inner">
                <div class="product-img">
                    <a class="thumbnail" href="{{ url('books/detail', [$product->id]) }}" data-image-id="1" data-toggle="modal"
                       data-title="{{$product->name}}"
                       data-image="{{Voyager::image($product->media)}}"
                       data-target="#image-gallery">
                        <img class="" data-src="{{Voyager::image($product->media)}}"
                             style="width:100%; border:solid 1px #f2f2f2"
                             src="{{Voyager::image($product->media)}}">
                    </a>
                </div>
                <div class="product-info">
                    <div class="product-title">
                        <a href="{{ url('books/detail', [$product->id]) }}">
                            <strong>{{$product->name}}</strong>
                        </a>
                    </div>
                    <p style="display: none">
                        Kho hàng:
                        @if($product->stock > 0)
                            <i style="color:green">Còn sách</i>
                        @else
                            <i style="color:red">Hết sách</i>
                        @endif
                    </p>
                    <p style="display: none">
                        Môn: <strong style="padding-right:20px"> Toán học</strong>
                        Số trang:<strong> </strong>
                    </p>
                    @if($product->special_price && $product->special_price < $product->price)
                        <p><strong style="color:red"> {{$product->special_price}}đ</strong>
                            <span style="text-decoration:line-through;padding-left:10px"> {{$product->price}}đ</span>
                        </p>
                    @else
                        <p><strong style="color:red"> {{$product->price}}đ</strong>
                    @endif
                    <form role="form" method="POST" action="{{ route('cart.add') }}">
                        {{ csrf_field() }}
                        <input type="text" name="product_id" value="{{$product->id}}" hidden>
                        <!-- Only for js checking baby milk product -->
                        <div class="item-product-options">
                            <!-- BEGIN ADD TO CART -->
                            <div id="add-cart-action">
                                <div class="add-cart-action" style="display: block">
                                    <div class="cta-box">
                                        <button type="sumit" class="btn btn-danger">
                                            <span class="glyphicon glyphicon-shopping-cart"></span> Mua sách
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
