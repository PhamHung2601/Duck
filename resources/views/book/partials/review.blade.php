<div class="grid__item large--one-half medium--one-half small--one-whole">
    <div class="ft-subscribe">
        @if($reviews->count() > 0)
            <h3>Review List</h3>
            <ul>
                @foreach($reviews as $review)
                    <div>
                        <span class="review-name">{{$review->nickname}}</span>
                        <span class="review-summary">{{$review->summary}}</span>
                        <span class="review-content">{{$review->content}}</span>
                    </div>
                @endforeach
            </ul>
        @endif
        <div class="form-wrapper">
            <form role="form" id="submit-review" method="POST" action="{{ route('review.submit') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="productId" value="{{$product->id}}">
                <div class="input-group">
                    Nick name :
                    <input type="text" value="" name="nickname"
                           class="form-control" required>
                    Summary :
                    <input type="text" value="" name="summary"
                           class="form-control" required>
                    Content :
                    <input type="text" value="" name="content"
                           class="form-control" required>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <p class="alert"></p>
            </form>
        </div>
    </div>
</div>