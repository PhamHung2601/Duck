@extends('layouts.master')
@section('content-top')
    @include('static-block.content-top')
@endsection
@section('content')
    <div class="breadcrumbs">
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}">Home</a></li>
            <li class="active">/ books list</li>
        </ol>
    </div>
    <div class="product-list">
        <div class="page-title">
            <h2>BOOKS LIST</h2>
        </div>
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
                @include('book.partials.list',['product' => $product])
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

