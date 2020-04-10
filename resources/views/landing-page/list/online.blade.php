@extends('layouts.landing')
@section('pageTitle', 'Khóa Học Online')
@section('content-top')
    @include('banner-manager.banner')
    @include('static-block.content-top')
@endsection
@section('content')
    @include('landing-page.list.partials.online.online_class')
    @include('landing-page.list.partials.online.popup-online')
@endsection
@section('content-bottom')
    @include('landing-page.list.partials.online.online-content-bottom')
@endsection
@section('content-js')
    <script type="text/javascript">
        $(document).ready(function () {
            @if((string)Session::get('register-success'))
            $('#popup-register-online-success').modal('show');
            @php Session::forget('register-success'); @endphp
            @endif
        });
    </script>
@endsection

