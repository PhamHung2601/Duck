@extends('layouts.master')
@section('pageTitle', $news->title)
@section('content-top')
    @include('static-block.content-top')
@endsection
@section('content')
    <div id="news-{{$news->id}}" class="et_pb_post clearfix news-{{$news->id}}">
        <div class="image-container-blog pd-10">
            <h1 class="entry-title text-center">{{$news->title}}</h1>
            <div class="text-left pd-10">
                <div>
                    @foreach($news->tags as $tag)
                        <a href="{{$news->getListUrlByTag($tag->name)}}" class="tag-item">{{$tag->name}}</a>
                    @endforeach
                </div>
                <div>
                    <img src="{{Voyager::image($news->media)}}" width="100%" alt="{{$news->title}}">
                </div>
                <p class="post-meta mt-1"><span class="published-time">{{\Helper::formatDate($news->updated_at)}}</span></p>
            </div>
            <div>
                <p>{{$news->description}}</p>
            </div>
        </div>
    </div>
</div>
    <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count"
         data-size="small"><a target="_blank"
                              href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse"
                              class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
    </div>
    <div id="warnings"></div>
    <div id="instructions"></div>
    <div id="map"></div>
    <script src="https://maps.googleapis.com/maps/api/js?signed_in=true&callback=initMap&key=AIzaSyAHWG8LpTxDNKS7yjrCziJkXAbYp9CjLAQ"
            async defer></script>
    <script>
        var map;
        var directionsDisplay;
        var directionsService;
        var stepDisplay;
        var markerArray = [];

        function initMap() {
            var lat_lng = {lat: 20.9769427, lng: 105.8921285};
            map = new google.maps.Map(document.getElementById('map'), {
                zoom: 16,
                center: lat_lng
            });
            directionsService = new google.maps.DirectionsService();
            directionsDisplay = new google.maps.DirectionsRenderer({map: map});

            var onChangeHandler = function() {
                calculateAndDisplayRoute(directionsService, directionsDisplay);
            };
            document.getElementById('source').addEventListener('change', onChangeHandler);
            document.getElementById('destination').addEventListener('change', onChangeHandler);
            document.getElementById('mode').addEventListener('change', onChangeHandler);
        }

        function calculateAndDisplayRoute(directionsService, directionsDisplay) {
            // console.log($("#destination").val())
            directionsService.route({
                origin: $("#source").val(),
                destination: $("#destination").val(),
                travelMode: document.getElementById('mode').value,
            }, function(response, status) {
                if (status === google.maps.DirectionsStatus.OK) {
                    directionsDisplay.setDirections(response);
                    showSteps(response);
                } else {
                    window.alert('Bạn phải nhập đủ cả điểm đầu và điểm đích!');
                }
            });
        }

        function showSteps(directionResult) {
            var myRoute = directionResult.routes[0].legs[0];
            var instructions = '<h3 class="distance">Quãng đường: ' + myRoute.distance.text + '</h3><br>';
            document.getElementById("instructions").innerHTML = instructions;
        }

        function attachInstructionText(marker, text) {
            google.maps.event.addListener(marker, 'click', function() {
                stepDisplay.setContent(text);
                stepDisplay.open(map, marker);
            });
        }
    </script>
    <div id="panel">
        <b>Xuất phát: </b>
        <input type="text" id="source">
        <b>Đích: </b>
        <input type="text" id="destination">
        <b>Phương tiện: </b>
        <select id="mode">
            <option value="DRIVING">Xe máy</option>
        </select>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endsection
@section('content-bottom')
    @include('static-block.content-bottom')
@endsection
