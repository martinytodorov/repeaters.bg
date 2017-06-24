google.maps.event.addDomListener(window, 'load', function() {
    var canvas = document.getElementById("map-canvas");
    var lat = googleMapsLat;
    var long = googleMapsLong;
    var repeaterLatlng = new google.maps.LatLng(lat, long);
    var mapOptions = {
    center: repeaterLatlng,
    zoom:   8
    };

    var map = new google.maps.Map(canvas, mapOptions);

    var marker = new google.maps.Marker({
        position: repeaterLatlng,
        map: map
    });
});