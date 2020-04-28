<div class="list-document">
    <div class="panel panel-default">
        <div class="panel-heading">
            <strong>Đề Thi thử</strong>
        </div>
        <div class="panel-body">
            <div class="courses">
                <ul>
                    <?php $count = 0; ?>
                    @foreach($tests as $test)
                        <?php $count++ ?>
                        @if($count <= 5)
                            <li>
                                <img src="{{asset("img/document.png")}}" style="width:19px">
                                <a href="{{ $test->getUrlDetail() }}"><span>{{ $test->title }}</span></a>
                            </li>
                        @endif
                    @endforeach

                </ul>
            </div>
            <div style="margin-top: 5%;"> <a href="{{url("de-thi")}}" style="color: #ff7700;font-weight: 700;margin-left: 40%"><span>Xem Thêm</span></a></div>
        </div>
    </div>
</div>

