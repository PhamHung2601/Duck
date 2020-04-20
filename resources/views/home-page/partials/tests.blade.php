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
                            <i class="fa fa-file" style="color: #86cee0c9"></i>
                            <a href="{{ $test->getUrlDetail() }}"><span>{{ $test->title }}</span></a>
                        </li>
                            @endif
                        @endforeach
                        <a href="{{url("de-thi")}}" style="color: #2e8893"><span>Xem Thêm</span></a>
                </ul>
            </div>
        </div>
    </div>
</div>

