function iterateRecords(data){

	$.each(data.result.records, function (recordKey, recordValue){
		//console.log(recordValue);
		var dic = {}
		var recordLat = recordValue['Latitude(Decimal)'];
		var recordLng = recordValue['Longitude(Decimal)'];
		dic = {lat: parseFloat(recordLat), lng: parseFloat(recordLng)}

		if (recordLat && recordLng){
			locations.push(dic);
		}
	});
	//console.log(locations);
}

$(document).ready(function(){
    
// get locations from APIs
    var data = {
    resource_id: '9b58c2e0-e71f-494d-82eb-1b92e39120f4', // the resource id
  	};

  	$.ajax({
	    url: 'https://data.gov.au/api/action/datastore_search',
	    data: data,
	    dataType: 'jsonp',
	    cache: true,
	    success: function(data) {
	    	iterateRecords(data);
    		//console.log(data);
    		initMap();
	     // alert('Total results found: ' + data.result.limit)
	    }
    });
    	//console.log("hello world");

});





//Google Maps API guide
function initMap() {
	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 5,
		center: {lat: -20.9176, lng: 142.7028},
	});

	var contentString = '<div id="content">'+
		'<h1>test popup</h1>'+
		'<p>'+'<a href="detail.html">a link to the detail page</a>'+'</p></div>';

	var infowindow = new google.maps.InfoWindow({
		content: contentString,
		maxWidth: 200
	});

	for(i=0; i<locations.length; i++){
		var marker = new google.maps.Marker({
			position: locations[i],
			map: map,
			title: ''
		});
			
		marker.addListener('click', function() {
			infowindow.open(map, this);
		});
	}

}


var locations = new Array;
/* 	example: 
	var locations = [
		{lat: -31.563910, lng: 147.154312},
		{lat: -33.718234, lng: 150.363181},
	]
*/
