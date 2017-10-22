var apiKey = "AIzaSyBJLjFF-6Qdi7mtPJFoyPb36e6HrPgKgRA";
var currentLat;
var currentLong;
var latlngStr = [];
 
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        console.log("Geolocation is not supported by this browser.");
    }
}

function showPosition(position) {
    console.log(position.coords.latitude + 
    "," + position.coords.longitude);
    latlngStr.push(position.coords.latitude);
    latlngStr.push(position.coords.longitude);
    currentLat = parseFloat(position.coords.latitude);
    currentLong = parseFloat(position.coords.longitude);
}


function initRouteMap() {
  console.log("route working");
		var routemap = new google.maps.Map(document.getElementById('routemap'), {
    zoom: 8,
    center: {lat: -27.4983862, lng: 153.0086757},
    });
		var geocoder = new google.maps.Geocoder;
    var infowindow = new google.maps.InfoWindow;
    geocodeLatLng(geocoder, routemap, infowindow);
}

function geocodeLatLng(geocoder, routemap, infowindow) {
        var latlng = {lat: parseFloat(latlngStr[0]), lng: parseFloat(latlngStr[1])};
        geocoder.geocode({'location': latlng}, function(results, status) {
          if (status === 'OK') {
            if (results[0]) {
              routemap.setZoom(18);
              var marker = new google.maps.Marker({
                position: latlng,
                routemap: routemap
              });
              infowindow.setContent(results[0].formatted_address);
              infowindow.open(routemap, marker);
            } else {
              window.alert('No results found');
            }
          } else {
            window.alert('Geocoder failed due to: ' + status);
          }
        });
      }

$(document).ready(function(){
	console.log("before");
	//initRouteMap();
	console.log("route suggestion on");
	
});