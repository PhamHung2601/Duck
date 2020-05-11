@extends('layouts.master')
@section('pageTitle', 'Đề Thi')
@section('content-top')
    @include('static-block.content-top')
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12 col-md-8 col-lg-8 column-main">
            <div class="row">
                <div class="list-document col-sm-12 col-md-12 col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span style="color:#ff8a00;font-weight: 700"><b><i class="fa fa-bars"></i> Danh sách đề thi</b></span>
                        </div>
                        <div class="panel-body">
                            <ul>
                                @foreach ($testList as $key => $test)
                                    <li>
                                        <span style="color:#666666; font-size:12px"><img
                                                src="{{url('/img/iconword.png')}}" height="18px"
                                                style="margin-right: 5px"></span>
                                        <a href="{{ $test->getUrlDetail() }}"
                                           title="{{$test->title}}" style="margin-right:15px; color:#095598">
                                            <strong>{{$test->title}}</strong></a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                @if(count($testList))
                    {{ $testList->links() }}
                @endif
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 sidebar">
            @include('test.sidebar-info')
        </div>
    </div>

@endsection
@section('content-bottom')
    @include('static-block.content-bottom')
@endsection

