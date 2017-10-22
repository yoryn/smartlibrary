$(document).ready(function(){

		var search = $('input').val();
		var wifi = $('#wifi').val();
	$("#search").submit(function(e){
		e.preventDefault();

		var search = $('input').val();
		var wifi = $('#wifi').val();
		console.log(search);
		console.log(wifi);
		 // Declare variables
		locations = new Array;

		for (i = 0; i < libraryInfo.length; i++) { 
		    if(search!=''){
		    	//console.log(libraryInfo[i][0]);
		    	if(wifi==libraryInfo[i][1]){
		    		if (libraryInfo[i][0].includes(search)){
		    			locations.push(libraryInfo[i][2])
		    		}
		    	}
		    }
		}

	//console.log(locations); 
	initMap();
	});


});