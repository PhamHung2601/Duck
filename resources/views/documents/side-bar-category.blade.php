<ul class="list-group">
    @foreach(\Helper::getDocumentsCategory() as $key => $cat)
        <li @if(!empty($category) && $key == $category) class="active" @endif class="document-sidebarlist-group-item btn btn-primary">
            <a class="document-cate-name text-white" href="{{route('document.by.category',[$key])}}"> {{$cat}}</a>
        </li>
    @endforeach
</ul>
