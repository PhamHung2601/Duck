<ul>
    @foreach(\Helper::getDocumentsCategory() as $key => $cat)
        <li @if(!empty($category) && $key == $category) class="active" @endif class="item">
            <a class="document-cate-name" href="{{route('document.by.category',[$key])}}">{{$cat}}</a>
        </li>
    @endforeach
</ul>
