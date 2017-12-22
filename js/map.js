function myMap() {
    var mapCanvas = document.getElementById("map");
    var mapOptions = {
        center: new google.maps.LatLng(37.6735925,-1.6968357000000651 ),
        zoom: 10
    };
    var map = new google.maps.Map(mapCanvas, mapOptions);
}