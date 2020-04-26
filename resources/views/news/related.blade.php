<div class="list-courses">
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-list" aria-hidden="true"></i> Tin Tức Liên Quan
        </div>
        <div class="panel-body">
            <div class="news">
                @foreach($news->related as $related)
                    <div class="new-item">
                        <a href="{{ $related->getUrlDetail() }}">
                            <img src="{{ Voyager::image( $related->media ) }}">
                            <div class="new-info">
                                <strong> {{ $related->title }}</strong>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
