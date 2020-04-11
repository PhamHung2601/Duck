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
                    <div class="title"><span>Sách</span></div>
                    @foreach($products as $product)
                        @include('book.partials.book_component')
                    @endforeach
                @endif
                @if(count($news) > 0)
                    <div class="title"><span>Tin tức</span></div>
                    <div class="news-list">
                        @foreach($news as $new)
                            <div class="col-md-4 col-lg-4">
                                @include('news.detail',['new' => $new])
                            </div>
                        @endforeach
                    </div>
                @endif
            @endif
        </div>
    </div>
@endsection
