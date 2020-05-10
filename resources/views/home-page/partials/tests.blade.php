<div class="list-document">
    <div class="panel panel-default">
        <div class="panel-heading">
            <img src="{{asset("img/document.png")}}" style="width:19px">
            <span style="color:#ff8a00;font-weight: 700">ĐỀ THI THỬ</span>
        </div>
        <div class="panel-body">
            <div class="courses">
                <ul>
                    <?php $count = 0; ?>
                    @foreach($tests as $test)
                        <?php $count++ ?>
                        @if($count <= 3)
                            <li>
                                <a href="{{ $test->getUrlDetail() }}"><span>{{ $test->title }}</span></a>
                            </li>
                        @endif
                    @endforeach

                </ul>
            </div>
            <div style="margin-top: 5%;"> <a href="{{url("de-thi")}}" style="color: #757575;font-weight: 700;margin-left: 40%" target="_blank"><span>Xem thêm</span></a></div>
        </div>
    </div>
</div>

