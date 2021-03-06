@extends('layouts.master')
@section('pageTitle', 'Tất cả sách')
@section('content-top')
    @include('static-block.content-top')
@endsection
@section('content')
    <div class="product-list">
        <div class="toolbar clearfix">
            <div class="sort-by form-group">
                <label for="SortBy">Sắp xếp</label>
                <select class="form-control" name="SortBy" id="sort-by">
                    @foreach($options as $key => $label)
                        <option value="{{$key}}" {{$sortBy == $key ? 'selected' : ''}}>{{$label}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="products">
            @foreach($products as $product)
                @foreach($product->category as $cate)
                    @if($cate->id != 4)
                @include('book.partials.list',['product' => $product])
                @endif
                @endforeach
            @endforeach
        </div>
        {{ $products->links() }}
    </div>
@endsection
@section('content-bottom')
    @include('static-block.content-bottom')
@endsection
@section('content-js')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sort-by').change(function (e) {
                var urlParams = new URLSearchParams(window.location.search);
                var current = urlParams.get('sortBy');
                urlParams.set('sortBy',this.value);
                location.href = location.origin + location.pathname + '?' + urlParams.toString();
            });
        });
    </script>
@endsection

