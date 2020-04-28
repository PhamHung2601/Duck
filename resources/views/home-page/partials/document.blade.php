<div class="list-document">
    <div class="panel panel-default">
        <div class="panel-heading">
            <strong>Tài Liệu</strong>
        </div>
        <div class="panel-body">
            <div class="courses">
                <ul>
                    <?php $count = 0; ?>
                    @foreach($documents as $document)
                        <?php $count++ ?>
                        @if($count <= 5)
                            <li>
                                <img src="{{asset("img/document.png")}}" style="width:19px">
                                <a href="{{ $document->getUrlDetail() }}"><span>{{ $document->title }}</span></a>
                            </li>
                        @endif
                    @endforeach

                </ul>

            </div>
            <div style="margin-top: 5%;"> <a href="{{url("tai-lieu")}}" style="color: #ff7700;font-weight: 700;margin-left: 37%"><span>Xem thêm</span></a></div>
        </div>
    </div>
</div>

