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
                            <i class="fa fa-file" style="color: #86cee0c9"></i>
                            <a href="{{ $document->getUrlDetail() }}"><span>{{ $document->title }}</span></a>
                        </li>
                            @endif
                        @endforeach
                        <a href="{{url("tai-lieu")}}" style="color: #2e8893"><span>Xem Thêm</span></a>
                </ul>
            </div>
        </div>
    </div>
</div>

