@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4 sidebar">
            @yield('sidebar')
        </div>
        <div class="col-sm-12 col-md-8 col-lg-8 column-main">
            @yield('main.content')
        </div>
    </div>
@endsection
