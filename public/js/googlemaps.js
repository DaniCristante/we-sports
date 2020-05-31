let map;

function initMap() {
    console.log('holaaa');
    map = new google.maps.Map(document.getElementById('googleMap'), {
        center: {lat: 41.390205, lng: 2.154007},
        zoom: 12
    });
}

window.onload = () => {
    initMap()
}
