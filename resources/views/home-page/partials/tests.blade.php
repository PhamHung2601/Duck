<div class="list-document">
    <div class="panel panel-default">
        <div class="panel-heading">
            <strong>Đề Thi thử</strong>
        </div>
        <div class="panel-body">
            <div class="courses">
                <ul>
                    @foreach($tests as $test)
                        <li>
                            <a href="{{ $test->getUrlDetail() }}"><span>{{ $test->title }}</span></a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

