<?php 
	// ADDS THE HEADER AND NAVIGATION
	$pageTitle = 'Library';
	include('header.php');
?> 
		
		<!-- Content here -->
		<div class="container-fluid frame">
			<div class="route-selection">
				<a href="https://deco1800-p1d.uqcloud.net/detail.php"><img class="route-icon" src="/icons/back.png"></a>
				<form action="">
					  <div class="transport">
						  <a href=""><img class="transport-icon" src="/icons/bus.png"></a>
						  <a href=""><img class="transport-icon" src="/icons/taxi.png"></a>
						  <a href=""><img class="transport-icon" src="/icons/walking.png"></a>
						  <a href=""><img class="transport-icon" src="/icons/riding.png"></a>
					  </div>
					  <img class="route-icon" src="/icons/from.png">
					  <input class="form-input" type="text" name="from" id="from" value="...">

					  <br>
					  <br>
					  <img class="route-icon" src="/icons/location-white.png">
					  <input class="form-input" type="text" name="to" value="Stanley Pl, South Brisbane QLD 4101">
					  <br>
				</form> 
			</div>

			<!-- GOOGLE MAP API -->
		
		    <div id="routemap" class="routemap"></div>

		    <script>
            	$( document ).ready(function() {
            		getLocation();
			        initRouteMap();
			    });
        	</script>

		    <script async defer
		    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJLjFF-6Qdi7mtPJFoyPb36e6HrPgKgRA&callback=initRouteMap">
		    </script>



		</div> 

<?php
	// ADD THE FOOTER
	include('footer.php');
?>