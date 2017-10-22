<?php 
	// ADDS THE HEADER AND NAVIGATION
	$pageTitle = 'Library';
	include('header.php');
?>

			

		<!-- Content here -->
		<div class="container-fluid frame">


			<!-- Google Maps API guide -->

        	<div id="map"></div>
		    


		    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
	    	</script>
		    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7dEW6bi2LiQpzLSHBMbuaAnx8F8S29pQ&callback=initMap"
		    async defer></script>


		</div> 

		<script>
        	$( document ).ready(function() {
		        indexPageInit();
		    });
    	</script>
<?php
	// ADD THE FOOTER
	include('footer.php');
?>