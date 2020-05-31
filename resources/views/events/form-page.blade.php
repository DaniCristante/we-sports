@extends('layouts.app')
@section('title', 'Crear evento')

@section('content')
    <div class="my-5">
        @if(Request::path() === 'events/create')
            @include('events.forms.create-form')
        @else
            @include('events.forms.update-form')
        @endif
        <input type="text" id="address" value="Pau claris">
        <input type="button" id="geocode" value="Geocode">
        <div id="googleMap" class="mr-auto ml-auto">

        </div>
    </div>
@endsection

<script>
    let map;
    let geocoder;

    // function initMap() {
    //     map = new google.maps.Map(document.getElementById('googleMap'), {
    //         center: {lat: 41.390205, lng: 2.154007},
    //         zoom: 12
    //     });
    //     map.addListener('click', function(e) {
    //         console.log(e);
    //         addMarker(e.latLng);
    //     });
    // }
    //
    // function addMarker(latLng) {
    //     let marker = new google.maps.Marker({
    //         map: map,
    //         position: latLng,
    //         draggable: true
    //     });
    //
    //     //store the marker object drawn on map in global array
    //     markersArray.push(marker);
    // }

    function initMap() {
        var map = new google.maps.Map(document.getElementById('googleMap'), {
            zoom: 12,
            center: {lat: 41.390205, lng: 2.154007}
        });
        var geocoder = new google.maps.Geocoder();

        document.getElementById('geocode').addEventListener('click', function() {
            geocodeAddress(geocoder, map);
        });
    }

    function geocodeAddress(geocoder, resultsMap) {
        var address = document.getElementById('address').value;
        geocoder.geocode({'address': address}, function(results, status) {
            if (status === 'OK') {
                resultsMap.setCenter(results[0].geometry.location);
                var marker = new google.maps.Marker({
                    map: resultsMap,
                    position: results[0].geometry.location
                });
            } else {
                alert('Geocode was not successful for the following reason: ' + status);
            }
        });
    }




</script>
