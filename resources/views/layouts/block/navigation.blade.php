<nav class="navbar navbar-light static-top">
    <div class="container-landing">
        <div class="logo_container">
            <a href="{{ url('') }}">
                {!! \Helper::getStaticBlockContentById("landing-logo") !!}
            </a>
        </div>
        <div id="et-top-navigation">
            <nav class="navbar navbar-expand-lg">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <?= Menu::display('landing-main', 'bootstrap');?>
                </div>
            </nav>
        </div>
    </div>
</nav>
