<div class="list-document">
    <div class="panel panel-default">
        <div class="panel-heading">
            <strong>Tài Liệu Liên Quan</strong>
        </div>
        <div class="panel-body">
            <div class="courses">
                <ul>
                    <?php $count = 0; ?>
                    @foreach($documents as $relateDocument)
                        <?php $count++ ?>
                        @if($count <= 5)
                            <li>
                                <h1 class="entry-title text-center">{{$relateDocument->title}}</h1>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

