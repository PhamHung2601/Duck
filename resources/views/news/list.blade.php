@extends('layouts.master')
@section('pageTitle', 'Tin Tức')
@section('content-top')
    @include('static-block.content-top')
@endsection
@section('content')
    <section>
        <div id="main-content" class="content-introduce">
            <div class="et_pb_module et_pb_text et_pb_text_0 et_pb_bg_layout_light  et_pb_text_align_left et_had_animation"
                 style="">
                <div class="et_pb_text_inner text-center">
                    <h1 style="font-size: 64px">Blog</h1>
                </div>
            </div>
            <div class="et_pb_module et_pb_text et_pb_text_1 et_pb_bg_layout_light  et_pb_text_align_left">
                <div class="et_pb_text_inner">
                    <p style="text-align: justify;"><span>Step Up tin rằng mỗi người đều có những tiềm năng vô hạn để trở nên giỏi giang. Vấn đề là họ không áp dụng đúng phương pháp để việc học hiệu quả hơn. Vì vậy Step Up mong muốn giúp cho những người gặp khó khăn trong việc học hành nói chung và học Tiếng Anh nói riêng được tiếp cận các phương pháp, kinh nghiệm học&nbsp; tiếng Anh thông minh để trở nên giỏi thực sự.</span>
                    </p>
                </div>
            </div>
        </div>

        <div class="mt-3">
            <div class="row">
                @foreach($news as $new)
                    <div class="col-md-4 col-lg-4">
                            @include('news.detail',['new' => $new])
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
@section('content-bottom')
    @include('static-block.content-bottom')
@endsection
