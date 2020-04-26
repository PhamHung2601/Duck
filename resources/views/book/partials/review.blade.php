<div class="product-tabs" style="margin-top: 40px">
    <ul class="nav nav-tabs">
        <li><a class="active"  href="#short_description" data-toggle="tab">Thông Tin Sản Phẩm</a></li>
        <li><a href="#description" data-toggle="tab">Chi Tiết</a></li>
        <li><a href="#review" data-toggle="tab">Nhận Xét</a></li>
    </ul>

    <div class="tab-content ">
        <div class="tab-pane active" id="short_description">
            <div class="product-des">
                {!!html_entity_decode($product->short_des)!!}
            </div>
        </div>
        <div class="tab-pane" id="description">
            <div class="product-des" style="font-size: 15px !important;">
                {!!html_entity_decode($product->description)!!}
            </div>
        </div>
        <div class="tab-pane" id="review">
            <div class="review-section">
                <h4 class="title">Nhận xét về sản phẩm</h4>
                <div class="review-form">
                    <div class="review-list">
                        @if($reviews->count() > 0)
                            <ul>
                                @foreach($reviews as $review)
                                    <li>
                                        <span class="review-name"><strong>{{$review->nickname}}</strong></span>
                                        <span class="review-summary">- {{$review->summary}}</span>
                                        <span class="review-content" style="display: block">{{$review->content}}</span>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p>Chưa có nhận xét nào. Hãy là người đầu tiên.</p>
                        @endif
                    </div>
                    <div class="form-wrapper">
                        <h5><strong>Thêm nhận xét</strong></h5>
                        <form role="form" id="submit-review" method="POST" action="{{ route('review.submit') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="productId" value="{{$product->id}}">
                            <div class="input-group">
                                <input type="text" value="" name="nickname" placeholder="Tên"
                                       class="form-control" required>
                            </div>
                            <div class="input-group">
                                <input type="text" value="" name="summary" placeholder="Tiêu đề"
                                       class="form-control" hidden>
                            </div>
                            <div class="input-group">
                    <textarea type="text" value="" name="content" placeholder="Nội dung"
                              class="form-control" required></textarea>
                            </div>
                            <button type="submit" class="btn-submit btn btn-primary">Gửi</button>
                            <p class="alert"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
