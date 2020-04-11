@extends('layouts.landing')
@section('pageTitle', 'Khóa Học Offline')
@section('content-top')
    @include('banner-manager.banner')
    @include('static-block.content-top')
@endsection
@section('content')
    @include('landing-page.list.partials.offline.course_list')
    @include('landing-page.list.partials.popup.popup-offline')
    @include('landing-page.list.partials.offline.about_me')
    @include('landing-page.list.partials.offline.scholarship_section')
    @include('landing-page.list.partials.offline.faq')
@endsection
@section('content-bottom')
    @include('landing-page.list.partials.offline.offline-content-bottom')
@endsection
@section('content-js')
    <script type="text/javascript">
        $(document).ready(function () {
            @if((string)Session::get('register-success'))
            $('#popup-register-offline-success').modal('show');
            @php Session::forget('register-success'); @endphp
            @endif
        });
    </script>
@endsection
