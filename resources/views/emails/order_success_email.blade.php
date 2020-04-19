@extends('emails.mail')
@section('before')
    <div>
        {!!\Helper::getStaticBlockContentById("email_order_success_before")!!}
    </div>
@endsection
@section ('main')

@endsection
@section ('after')
    <div>
        {!!\Helper::getStaticBlockContentById("email_order_success_after")!!}
    </div>
@endsection
