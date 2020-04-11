@extends('layouts.landing')
@section('pageTitle', 'Khóa Học Live Stream Overview')
@section('content-top')
    @include('banner-manager.banner')
    @include('static-block.content-top')
@endsection
@section('content')
    @include('landing-page.list.partials.online.live_stream_overview')
    @include('landing-page.list.partials.popup.popup-live-stream-overview')
    @include('landing-page.list.partials.online.live_stream_notice')
    @include('landing-page.list.partials.online.student_feeling')
    @include('landing-page.list.partials.online.about_me')
    @include('landing-page.list.partials.online.scholarship_section')
@endsection
@section('content-bottom')
    @include('landing-page.list.partials.online.online-1-content-bottom')
@endsection
@section('content-js')
    <script type="text/javascript">
        $(document).ready(function () {
            @if((string)Session::get('register-success'))
            $('#popup-register-live-stream-overview-success').modal('show');
            @php Session::forget('register-success'); @endphp
            @endif
        });
    </script>
@endsection

