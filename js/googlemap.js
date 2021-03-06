function iterateRecords(data){

	$.each(data.result.records, function (recordKey, recordValue){
		//console.log(recordValue);
		var dic = {};
		var recordLat = recordValue['Latitude(Decimal)'];
		var recordLng = recordValue['Longitude(Decimal)'];
		var branchName = recordValue['BranchName'];
		var wifiAvailability = recordValue['WiFiAvailability'];
		
		dic = {lat: parseFloat(recordLat), lng: parseFloat(recordLng)};
		//console.log(website);
		info = [branchName, wifiAvailability, dic];
		//info = ['string','string',{float, float},'string']


		if (recordLat && recordLng && branchName && wifiAvailability){
			locations.push(dic);
			alllibraryInfo.push(info);
			libraryInfo.push(info);
		}
	});
	//console.log(locations);
	//console.log(libraryInfo);
}
 
function iterateCityLocations(data){
	var allCities = [];
	$.each(data.result.records, function (recordKey, recordValue){
		
		var recordCity = recordValue['NameofLibraryService'];
		var cityName = recordCity.split(" ", 2);
		if (allCities.includes(cityName.join(" ")) == false) {
			allCities.push(cityName.join(" "));
		}
	});

	$.each(allCities.sort(), function(i, city){
		$('#city-select').append(
			$('<a class="dropdown-item" href="#">').text(city)
			);
	});
}


function indexPageInit() {
	//console.log("hello");
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

	    	iterateCityLocations(data);
    		//console.log(data);
    		initMap();
	     // alert('Total results found: ' + data.result.limit)
	    }
    });

}

var map;
var alllibraryInfo = new Array;
// sets an array to store all the library information
var libraryInfo = new Array;
// sets an array to store the result of searching library information
// example: libraryInfo = [['name','yes/no',{lat: -31.563910, lng: 147.154312}]...]
var locations = new Array;
// sets an array to store the locations of the libraries
/* 	example: 
	var locations = [
		{lat: -31.563910, lng: 147.154312},
		{lat: -33.718234, lng: 150.363181},
	]
*/

//Google Maps API guide
function initMap() {
	map = new google.maps.Map(document.getElementById('map'), {
		zoom: 6,
		center: {lat: -20.9176, lng: 142.7028},
	});

	createMarker(locations);
	//console.log(locations);
}


function createMarker(locations) {

	for(i=0; i<locations.length; i++){
		var name = libraryInfo[i][0];
		
		var marker = new google.maps.Marker({
			position: locations[i],
			map: map,
			title: name,
			
		});
		//console.log(marker);
		addInfoWindow(marker, name);
	}

}

function addInfoWindow(marker, name) {

	var message ='<div class="content">'
				+'<form name="detail" id="detail" method="get" action="detail.php">'
				+'<div class="row">'
				+'<div class="col-12">'+'<h4>'+name+'</h4>'+'</div>'
				+'</div>'

				+'<div class="row">'
				+'<div class="col-12">'+'<button type="submit" value="'+name+'" name="name" class="btn btn-primary btn-sm" style="width:100%">Detail</button>'+'</div>'
				+'</div>'
				+'</form>'
				+'</div>'
				


    var infoWindow = new google.maps.InfoWindow({
        content: message
    });

    google.maps.event.addListener(marker, 'click', function () {
        infoWindow.open(map, marker);
    });
}



