$(document).ready(function(){

	$("#search").submit(function(e){
		e.preventDefault();

		var search = $('input').val();
		var wifi = $('#wifi').val();
		//console.log(search);
		//console.log(wifi);
		 // Declare variables
		locations = new Array;
		libraryInfo = new Array;

		for (i = 0; i < alllibraryInfo.length; i++) { 
		    if(search!=''){
		    	//console.log(libraryInfo[i][0]);
		    	if(wifi==alllibraryInfo[i][1]){
		    		if (alllibraryInfo[i][0].indexOf(search) > -1){
		    			console.log(search);
		    			console.log(alllibraryInfo[i][0]);
		    			console.log(alllibraryInfo[i][2]);
		    			console.log(alllibraryInfo[i]);
		    			locations.push(alllibraryInfo[i][2]);
		    			libraryInfo.push(alllibraryInfo[i]);

		    		}
		    	}
		    }
		}

	//console.log(locations); 
	initMap();
	});


});