<div class="header">
    <div class="header-top">
        <div class="container">
            <nav class="row navbar static-top display-flex-content">
                <div class="logo col-sm-12 col-md-4 col-lg-4">
                    <a href="https://dialithaytung.com/">
{{--                        {!!\Helper::getStaticBlockContentById("header-logo")!!}--}}
                                            <h2>Địa Lí Thầy Tùng</h2><p>#Team thầy Tùng, chiến thắng đến cùng</p>
                    </a>
{{--                    {!!\Helper::getStaticBlockContentById("header-logo-side-img")!!}--}}
                </div>
                <div class="col-sm-12 col-md-5 col-lg-5 search">
                    <div class="input-group">
                        <form role="form" id="header-search" method="POST" action="{{ route('search.search') }}">
                            {{ csrf_field() }}
                            <input id="search-input" name="search_text" type="text" class="form-control input-search" placeholder="Tìm Kiếm ..." aria-label="Search">
                            <button id="button-search" disabled class="btn btn-light" type="submit">
                                <span style="cursor:pointer; "> <span class="fa fa-search" style="font-size:15px;font-weight:100"></span> </span>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="search col-sm-12 col-md-3 col-lg-3 register">
                    <a href="{{ url('cart') }}" class="cart-header" title="view cart">
                        <i class="fa fa-shopping-cart fa-4" aria-hidden="true" style=" font-size: 20px"></i>
                        <span class="count">({{Cart::count()}})</span>
                    </a>
                </div>
            </nav>
        </div>
    </div>
    <div class="main-menu">
        <div class="container">
            <nav class="navbar navbar-dark navbar-expand-lg main-menu">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <?= Menu::display('main', 'bootstrap');?>
                </div>
            </nav>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('#search-input').on('keyup',function(){
        var value = $(this).val();
        if(value && value != ''){
            $('#button-search').prop('disabled', false);
        }
    });
    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>
