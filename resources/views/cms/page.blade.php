@extends('layouts.master')
@section('content')
    <div class="title">
        <h3>{{ $cmsPageModel->title }}</h3>
    </div>
    <div class="content">
        {!! $cmsPageContent !!}
    </div>
@endsection
