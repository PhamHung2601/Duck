@extends('layouts.master')
@section('content')
    <section>
        <div id="main-content">
            <article id="post-688" class="post-688 page type-page status-publish hentry">


                <div class="entry-content">
                    <div id="et-boc" class="et-boc">

                        <div class="et_builder_inner_content et_pb_gutters3">
                            <div class="et_pb_section et_pb_section_0 et_pb_with_background et_section_regular">


                                <div class="et_pb_row et_pb_row_0">
                                    <div class="et_pb_column et_pb_column_4_4 et_pb_column_0    et_pb_css_mix_blend_mode_passthrough et-last-child">


                                        <div class="et_pb_module et_pb_text et_pb_text_0 et_pb_bg_layout_light  et_pb_text_align_left et_had_animation"
                                             style="">


                                            <div class="et_pb_text_inner">
                                                <h1>Blog</h1>
                                            </div>
                                        </div> <!-- .et_pb_text -->
                                        <div class="et_pb_module et_pb_text et_pb_text_1 et_pb_bg_layout_light  et_pb_text_align_left">


                                            <div class="et_pb_text_inner">
                                                <p style="text-align: justify;"><span>Step Up tin rằng mỗi người đều có những tiềm năng vô hạn để trở nên giỏi giang. Vấn đề là họ không áp dụng đúng phương pháp để việc học hiệu quả hơn. Vì vậy Step Up mong muốn giúp cho những người gặp khó khăn trong việc học hành nói chung và học Tiếng Anh nói riêng được tiếp cận các phương pháp, kinh nghiệm học&nbsp; tiếng Anh thông minh để trở nên giỏi thực sự.</span>
                                                </p>
                                            </div>
                                        </div> <!-- .et_pb_text -->
                                    </div> <!-- .et_pb_column -->


                                </div> <!-- .et_pb_row -->


                            </div> <!-- .et_pb_section -->
                            <div class="et_pb_section et_pb_section_1 et_section_regular">


                                <div class="et_pb_row et_pb_row_1">
                                    <div class="et_pb_column et_pb_column_4_4 et_pb_column_1    et_pb_css_mix_blend_mode_passthrough et-last-child">
                                        <div class="et_pb_module et_pb_blog_0 bloggrid et_pb_blog_grid_wrapper">
                                            <div class="et_pb_blog_grid clearfix et_pb_bg_layout_light  et_pb_text_align_justified">
                                                <div class="et_pb_ajax_pagination_container">
                                                    <div class="et_pb_salvattore_content" data-columns="3">
                                                        <div class="column size-1of3">
                                                            @foreach($news as $new)
                                                                @include('news.detail',['new' => $new])
                                                            @endforeach
                                                        </div>
                                                    </div><!-- .et_pb_salvattore_content -->
                                                    <div class="pagination clearfix">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>
    </div>
@endsection