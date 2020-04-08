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
                           class="form-control" required>
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