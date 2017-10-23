<!DOCTYPE html>
<html>
	<head>
		<title>Library Details</title>
	</head>
	<body>
		<?php
			// ADDS THE HEADER AND NAVIGATION
			//$pageTitle = 'LibraryDetails';
			//include('header.php');
		?>

		<?php 
			session_start();
			echo $_SESSION['myValue'];

		?>
		<?php
		// Turn the PHP errors on
		ini_set('display_errors', 1);
		error_reporting(E_ALL ^ E_NOTICE);

		// concatenate and API URL including parameters inline
		$brName = 'State Library of Queensland';

		$api_url = 'http://data.gov.au/api/3/action/datastore_search?resource_id=9b58c2e0-e71f-494d-82eb-1b92e39120f4&limit=1000';

		/*$api_url = 'http://data.gov.au/api/3/action/datastore_search_sql?SELECTBranchName,WiFiAvailability,AddressLine1,AddressLine2,AddressLocality,AddressPostcode,Phone,OpeningHoursMonday,OpeningHoursTursday,OpeningHoursWednesday,OpeningHoursWednesday,OpeningHoursThursday,OpeningHoursFriday,OpeningHoursSaturday,OpeningHoursSunday from "9b58c2e0-e71f-494d-82eb-1b92e39120f4"'*/

		/*$sql sql='SELECT BranchName, WiFiAvailability, AddressLine1, AddressLine2, AddressLocality,
		AddressPostcode, Phone, OpeningHoursMonday, OpeningHoursTursday,
		OpeningHoursWednesday, OpeningHoursWednesday, OpeningHoursThursday,
		OpeningHoursFriday, OpeningHoursSaturday, OpeningHoursSunday,
		Latitude(Decimal), Longitude(Decimal)
		from "9b58c2e0-e71f-494d-82eb-1b92e39120f4"*/


		//Cache the output
		$cache_filename = 'cache/slq-cache.json';
//echo "heldsfdsfsdflowworld";
		if(file_exists($cache_filename)){
			//echo'<p>Cached: Yes</p>';
			$data = file_get_contents($cache_filename);
		}
		else{// Create a new file if Cache file doesn't exist
			//echo '<p>Cached: No</p>';
			$data = file_get_contents($api_url);
			file_put_contents($cache_filename, $data);
		}


		//Decode the JSON as an array
		$data = json_decode($data, true);
//echo "hellowworld";
//echo print_r($data);
//echo "hellowworld";
		//Check if $data is an arry that we cann iterate over
		if(is_array($data)){


		/*$sql sql='SELECT BranchName, WiFiAvailability, AddressLine1, AddressLine2, AddressLocality,
			//AddressPostcode, Phone, OpeningHoursMonday, OpeningHoursTursday,
			//OpeningHoursWednesday, OpeningHoursWednesday, OpeningHoursThursday,
			//OpeningHoursFriday, OpeningHoursSaturday, OpeningHoursSunday,
			//Latitude(Decimal), Longitude(Decimal)
			//from "9b58c2e0-e71f-494d-82eb-1b92e39120f4"
			//WHERE BranchName = '*/
//echo print_r($data);
		foreach ($data['result']['records']
				as $key => $value) {
			//echo print_r($value);
					$branchName = $value['BranchName'];
					$wifi = $value['WiFiAvailability'];
					$address1 = $value['AddressLine1'];
					$address2 = $value['AddressLine2'];
					$locality = $value['AddressLocality'];
					$postcode = $value['AddressPostcode'];
					$phone = $value['Phone'];
					$openMon = $value['OpeningHoursMonday'];
					$openTue = $value['OpeningHoursThursday'];
					$openWed = $value['OpeningHoursWednesday'];
					$openThur = $value['OpeningHoursThursday'];
					$openFri = $value['OpeningHoursFriday'];
					$openSat = $value['OpeningHoursSaturday'];
					$openSun = $value['OpeningHoursSunday'];
					$Latitude = $value['Latitude(Decimal)'];
					$Longitude = $value['Longitude(Decimal)'];
				
//echo $branchName." -1-1- ".$brName."<br />";
				if($branchName == $brName){
					echo $branchName." --- ".$brName;
					// Output HTML for a record with variables included

					echo'
					<ul class = "details">
						<li>Branch Name: '. $branchName . '</li>
						<li>WiFi: '. $wifi . '</li>
						<li>Address'. $address1 . ''. $address2 . ''. $locality . ''. $postcode . '</li>
						<li>Tel'. $phone . '</li>
						<ul>Opennig Hours</ul>
							<li>Monday'. $openMon . '</li>
							<li>Tuesday'. $openTue . '</li>
							<li>Wednesday'. $openWed . '</li>
							<li>Thursday'. $openThur . '</li>
							<li>Friday'. $openFri . '</li>
							<li>Saturday'. $openSat . '</li>
							<li>Sunday'. $openSun . '</li>
					</ul>';

					}

				}
			}
	 ?>

	<?php
		// ADD THE FOOTER
		include('footer.php');

	 ?>


	</body>
</html>
