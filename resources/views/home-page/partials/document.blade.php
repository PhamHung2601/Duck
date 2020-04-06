<div class="list-document">
    <div class="panel panel-default">
        <div class="panel-heading">
           <strong>Tài Liệu</strong>
        </div>
        <div class="panel-body">
            <div class="courses">
                <ul>
                    @foreach($documents as $document)
                        <li>
                            <a href="{{ $document->getUrlDetail() }}"><span>{{ $document->title }}</span></a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

