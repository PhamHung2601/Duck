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
                <select class="form-control" name="SortBy" id="SortBy">
                    <option value="manual">Tùy chọn</option>
                    <option value="best-selling">Sản phẩm bán chạy</option>
                    <option value="title-ascending">Theo bảng chữ cái từ A-Z</option>
                    <option value="title-descending">Theo bảng chữ cái từ Z-A</option>
                    <option value="price-ascending">Giá từ thấp tới cao</option>
                    <option value="price-descending">Giá từ cao tới thấp</option>
                    <option value="created-descending">Mới nhất</option>
                    <option value="created-ascending">Cũ nhất</option>
                </select>
            </div>
        </div>
        <div class="products">
            @foreach($products as $product)
                @include('book.partials.list',['product' => $product])
            @endforeach
        </div>
        <div class="pager">
            <nav aria-label="Page navigation ">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
                    <li class="page-item"><span class="page-link current">1</span> </li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
                </ul>
            </nav>
        </div>
    </div>
@endsection
@section('content-bottom')
    @include('static-block.content-bottom')
@endsection

