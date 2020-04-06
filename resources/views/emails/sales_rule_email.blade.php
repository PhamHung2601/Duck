@extends('emails.mail')
@section('before')
    <div>
        {!!\Helper::getStaticBlockContentById("email_sale_rule_before")!!}
    </div>
@endsection
@section ('main')
    @if($coupon)
        <div>
            Coupon code is {{ $coupon }}
        </div>
    @endif
@endsection
@section ('after')
    <div>
        {!!\Helper::getStaticBlockContentById("email_sale_rule_after")!!}
    </div>
@endsection
