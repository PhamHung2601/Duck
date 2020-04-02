@extends('layouts.master')
@section('pageTitle', 'Đề Thi')
@section('content-top')
    @include('static-block.content-top')
@endsection
@section('content')
    @foreach ($testList as $year => $tests)
        <section>
            <div style="background-color:#f2f2f2;padding:10px"><b><i class="fa fa-bars"></i> Danh sách đề thi
                    năm {{$year}}</b></div>
            @foreach ($tests as $key => $test)
                <p style="padding:8px;margin-bottom: 0px">
                    <span style="color:#666666;padding-right:5px"> {{$key + 1}}. </span>
                    <a href="/test/view/{{$test->id}}"
                       title="{{$test->title}}" style="margin-right:15px; color:#007bff">
                        <strong>{{$test->title}}</strong></a>
                    <span style="color:#666666; font-size:12px"><img src="{{url('/img/iconword.png')}}" height="18px" style="margin-right: 5px">{{$test->created_at}}</span>
                </p>
            @endforeach
        </section>
    @endforeach
@endsection
@section('content-bottom')
    @include('static-block.content-bottom')
@endsection

