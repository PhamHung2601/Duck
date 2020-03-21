<div class="header">
    <div class="header-top">
        <div class="container">
            <nav class="navbar navbar-light static-top display-flex-content">
                    <div class="logo_container col-2">
                        <a href={{ url('/home') }}> <img src="https://moon.vn/Home1/Icons/logo.png" height="75px" border="0" title="Moon.vn - Học để khẳng định mình" alt="Moon.vn - Học để khẳng định mình"> </a>
                    </div>
                    <div id="et-top-navigation" class="col-6">
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarText">
                                <?= Menu::display('main', 'bootstrap');?>
                            </div>
                        </nav>
                    </div>
                    <div class="search col-3">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Tìm ID" aria-label="Search">
                            <span class="input-group-addon" style="cursor:pointer; "> <span class="fa fa-search" style="font-size:15px;font-weight:100"></span> </span>
                        </div>
                    </div>
            </nav>
        </div>
    </div>
</div>
