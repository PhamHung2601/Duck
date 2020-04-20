@extends('layouts.master')
@section('pageTitle', 'Đề Thi')
@section('content-top')
    @include('static-block.content-top')
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12 col-md-9 col-lg-9 column-main">
            @foreach ($testList as $year => $tests)
                <div class="list-document">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong><b><i class="fa fa-bars"></i> Danh sách đề thi
                                    năm {{$year}}</b></strong>
                        </div>
                        <div class="panel-body">
                            <ul>
                                @foreach ($tests as $key => $test)
                                    <li>
                                        <span style="color:#666666;padding-right:5px"> {{$key + 1}}. </span>
                                        <a href="{{ $test->getUrlDetail() }}"
                                           title="{{$test->title}}" style="margin-right:15px; color:#007bff">
                                            <strong>{{$test->title}}</strong></a>
                                        <span style="color:#666666; font-size:12px"><img src="{{url('/img/iconword.png')}}" height="18px" style="margin-right: 5px">{{$test->created_at}}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 sidebar">
            @include('test.sidebar-info')
        </div>
    </div>

@endsection
@section('content-bottom')
    @include('static-block.content-bottom')
@endsection

