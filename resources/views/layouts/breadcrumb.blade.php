
<div id="breadcrumbs">
    <ol class="breadcrumb">
        <li><a href="{{ url('/') }}"><span id="home-breadcrumb"></span></a></li>
        <li class="active">
            <span id="current-breadcrumb"></span>
        </li>
    </ol>
</div>
<script>
    var path = location.pathname;
    if (path != '/') {
        document.getElementById("current-breadcrumb").innerHTML = '/ ' + document.title;
        document.getElementById("home-breadcrumb").innerHTML = 'Home';
    }
    else {
        $('#breadcrumbs').hide();
    }
</script>