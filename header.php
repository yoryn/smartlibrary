<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Smart Library</title>
		<meta charset="utf-8">

		<!-- CSS -->
		<!-- bootstrap css https://getbootstrap.com/ -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

		<!-- OPEN ICONIC https://useiconic.com/open/ -->
		<link rel="stylesheet" href="open-iconic/css/open-iconic-bootstrap.css">
		<!-- <i class="oi oi-name" title="name" aria-hidden="true"></i> -->	
		
		<!-- Material icons https://material.io/icons/ -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" type="text/css" href="css/material_icons.css">
		<!-- example: <i class="material-icons md-48">name</i> -->

		<link rel="stylesheet" type="text/css" href="css/googlemap.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">

		<!-- Javascript -->
		<!-- Jquery 3.2.1 -->
		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

		<!-- Popper -->
		<script type="text/javascript" src="js/Popper.js"></script>

		<!-- bootstrap https://getbootstrap.com/ -->
		<script type="text/javascript" src="js/bootstrap.min.js"></script>



		<script type="text/javascript" src="js/googlemap.js"></script>
		<script type="text/javascript" src="js/routesuggestion.js"></script>
		
		<script type="text/javascript" src="js/main.js"></script>
		
		<script type="text/javascript" src="js/search.js"></script>

		
	</head>
	<body> 
		<!-- Menu here -->
		<div class="pos-f-t fixed-top" id="menubar">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a class="navbar-brand" href="index.php">
				    <img src="images/logo.png" width="200px"  alt="logo">
				</a>  
				
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse " id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link dropdown-toggle" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">Search</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="favorites.php">Favourite</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Location</a>

							<!-- LIST OF CITY LOCATIONS -->
							<div class="dropdown-menu" id="city-select" aria-labelledby="navbarDropdownMenuLink">
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<div class="collapse" id="navbarToggleExternalContent">

					<div class="bg-dark p-4 col col-12">
						<div class="row">

							<form class="form-inline" id="search" method="post">

								<div class="input-group mb-2 col-7">
									<div class="input-group-addon"><i class="oi oi-magnifying-glass" title="magnifying-glass" aria-hidden="true"></i>&nbsp;Search</div>
									<input type="text" class="form-control" id="inputtext" placeholder="key word">
								</div>

								<div class="input-group mb-2 col-3">
									<div class="input-group-addon"><i class="oi oi-wifi" title="wifi" aria-hidden="true"></i>&nbsp;Wi-Fi</div>
									<select class="custom-select" id="wifi">
										<option value="Yes">Yes</option>
										<option value="No">No</option>
									</select>
								</div>
								
								<div class="input-group mb-2 col-2" >
									<input type="submit" id="submit" name="sumbit" value="submit" class="btn btn-outline-warning" style="width: 100%" />
								</div>
							</div>
						</form>

					
				</div>
			</div>

		</div>