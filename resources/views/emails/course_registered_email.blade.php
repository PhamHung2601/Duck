@extends('emails.mail')
@section('before')
    <div>
        {!!\Helper::getStaticBlockContentById("email_course_before")!!}
    </div>
@endsection
@section ('main')
    @if($link)
        <div>
            The course link is <a href="{{ $link }}">{{ $link }}</a>
        </div>
    @endif
@endsection
@section ('after')
    <div>
        {!!\Helper::getStaticBlockContentById("email_course_after")!!}
    </div>
@endsection
