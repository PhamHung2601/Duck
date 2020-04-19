@extends('emails.mail')
@section('before')
    <div>
        {!!\Helper::getStaticBlockContentById("email_order_updated_before")!!}
    </div>
@endsection
@section ('main')

@endsection
@section ('after')
    <div>
        {!!\Helper::getStaticBlockContentById("email_order_updated_after")!!}
    </div>
@endsection
