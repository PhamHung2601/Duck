@extends('layouts.master')
@section('content')
    <div class="seach-result-container">
        <div class="page-title">
            <h2>Kết quả tìm kiếm</h2>
        </div>
        <div class="search-result">
            @if(count($products) == 0 && count($news) == 0)
                <div class="search-no-result">
                    <span>Không có kết quả nào được tìm thấy. Vui lòng tìm kiếm với từ khoá khác.</span>
                </div>
            @else
                @if(count($products) > 0)
                    @foreach($products as $product)
                        @include('book.partials.book_component')
                    @endforeach
                @endif
                @if(count($news) > 0)
                    <div class="title"><span>Tin tức</span></div>
                    @foreach($news as $new)
                            <div class="col-md-4 col-lg-4">
                                @include('news.detail',['new' => $new])
                            </div>
                    @endforeach
                @endif
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
            @endif
        </div>
    </div>
@endsection
