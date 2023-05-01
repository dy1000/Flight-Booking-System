<?php

?>
<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title></title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="style.php">
	<link rel="stylesheet" type="text/css" href="reservationnnstyle.php">

	<!-- Pickadate CSS -->
    <link rel="stylesheet" href="css/classic.css">    
	<link rel="stylesheet" href="css/classic.date.css">    
	<link rel="stylesheet" href="css/classic.time.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">



    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<!-- Start header -->
<header class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <a href="index.php"><img class="logoh" id="logo" src="images/logoo.jpg"></a>
                <!-- Put logo here im src -->
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbars-rs-food">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Destinations</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-a">
                            <a class="dropdown-item" href="ghana.php">Ghana</a>
                            <a class="dropdown-item" href="nigeria.php">Nigeria</a>
                            <a class="dropdown-item" href="gambia.php">Gambia</a>
                            <a class="dropdown-item" href="about.php">Egypt</a>
                            <a class="dropdown-item" href="morocco.php">Morocco</a>
                            <a class="dropdown-item" href="southafrica.php">South Africa</a>
                            <a class="dropdown-item" href="kenya.php">Kenya</a>
                            <a class="dropdown-item" href="seychelles.php">Seychelles</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Packages</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-a">
                            <a class="dropdown-item" href="gpackages.php">Ghana Package</a>
                            <a class="dropdown-item" href="npackages.php">Nigeria Package</a>
                            <a class="dropdown-item" href="gapackages.php">Gambia Package</a>
                            <a class="dropdown-item" href="epackages.php">Egypt Package</a>
                            <a class="dropdown-item" href="mpackages.php">Morocco Package</a>
                            <a class="dropdown-item" href="sapackages.php">South Africa Package</a>
                            <a class="dropdown-item" href="kpackages.php">Kenya Package</a>
                            <a class="dropdown-item" href="spackages.php">Seychelles Package</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Book</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-a">
                            <a class="dropdown-item" href="reservationnn.php">Book Flights</a>
                            <a class="dropdown-item" href="reservationn.php">Book Packages</a>

                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                </ul>
            </div
        </div>
    </nav>
</header>
	<!-- End header -->
	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Reservation</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->


	<!--Card-->
	<div class="card shadow mb-5 bg-white rounded">

		<!--Card-Body-->
		<div class="card-body">

			<!--Card-Title-->
			<p class="card-title text-center shadow mb-5 rounded">Travel Booking Form</p>

			<div class="icons text-center">

				<i class="fa fa-plane fa-2x" aria-hidden="true"></i>
				<i class="fa fa-taxi fa-2x" aria-hidden="true"></i>
				<i class="fa fa-train fa-2x" aria-hidden="true"></i>


			</div>

			<hr>

			<p class="searchText"><strong>Search For Cheap Flights</strong></p>

			<!--First Row-->
            <form action="ebooking.php" method="get">
                <div class="row mb-3 mt-3">

                    <label class="radiobtn"><input type="radio" name="flight_type" value="single" required>Single *</label>
                    <label class="radiobtn"><input type="radio" name="flight_type" value="double" required>Double *</label>

                </div>


                <!--Second Row-->
                <div class="row">

                    <div class="col-sm-4">
                        <select name="city_departure" class="browser-default custom-select mb-4" id="select" required>
                            <option value="" disabled="" selected="">Departure City/Airport *</option>
                            <option value="London">London (UK)</option>
                            <option value="Glasgow">Glasgow (UK)</option>
                            <option value="Manchester"> Manchester (UK)</option>
                            <option value="Birmingham"> Birmingham(UK)</option>
                            <option value="Marseille"> Marseille (France)</option>
                            <option value="Paris">Paris (France)</option>
                            <option value="Rome"> Rome (Italy)</option>
                            <option value="Milan">Milan (Italy)</option>
                            <option value="Berlin"> Berlin (Germany)</option>
                            <option value="Hannover"> Hannover (Germany)</option>
                            <option value="Madrid"> Madrid (Spain)</option>
                            <option value="Barcelona"> Barcelona (Spain)</option>
                        </select>
                    </div>
                    <div class="col-sm-4">
                    <select name="city_departuretwo" class="browser-default custom-select mb-4" id="select">
                        <option value="" disabled="" selected="">Departure City/Airport</option>
                        <option value="N/A">N/A</option>
                        <option value="London">London (UK)</option>
                        <option value="Glasgow">Glasgow (UK)</option>
                        <option value="Manchester"> Manchester (UK)</option>
                        <option value="Birmingham"> Birmingham(UK)</option>
                        <option value="Marseille"> Marseille (France)</option>
                        <option value="Paris">Paris (France)</option>
                        <option value="Rome"> Rome (Italy)</option>
                        <option value="Milan">Milan (Italy)</option>
                        <option value="Berlin"> Berlin (Germany)</option>
                        <option value="Hannover"> Hannover (Germany)</option>
                        <option value="Madrid"> Madrid (Spain)</option>
                        <option value="Barcelona"> Barcelona (Spain)</option>
                    </select>
                </div>


                    <div class="col-sm-4">
                        <select name="city_arrival" class="browser-default custom-select mb-4" id="select" required>
                            <option value="" disabled="" selected="">Arrival City/Airport *</option>
                            <option value="Accra">Ghana (Accra)</option>
                            <option value="Morocco"> Casablanca (Morocco)</option>
                            <option value="Lagos">Nigeria (Lagos)</option>
                            <option value="Nairobi"> Kenya (Nairobi)</option>
                            <option value="Cape Town">South Africa (Cape Town)</option>
                            <option value="Banjul ">Gambia (Banjul)</option>
                            <option value="Seychelles"> Seychelles (Victoria)</option>
                            <option value="Cairo">Egypt (Cairo)</option>
                        </select>
                    </div>

                </div>


                <!--Third Row-->
                <div class="row">

                    <div class="col-sm-6">
                        <input placeholder="&#xf073; Departing *" type="date" name="from" id="date-picker-example" class="form-control datepicker mb-4" required style="font-family:Arial, FontAwesome" >
                    </div>

                    <div class="col-sm-6">
                        <input placeholder="&#xf073; Returning *" type="date" name="to" id="date-picker-example" class="form-control datepicker" required style="font-family:Arial, FontAwesome" >
                    </div>

                </div>


                <!--Fourth Row-->


                <!--Fifth Row-->
                <div class="row">

                    <div class="col-sm-4">
                        <select name="passenger" class="browser-default custom-select mb-4" id="select" required>
                            <option value="" disabled="" selected="">Kids(0-14) *</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>

                    <div class="col-sm-4">
                        <select name="passenger" class="browser-default custom-select mb-4" id="select" required>
                            <option value="" disabled="" selected="">Adults(15-64) *</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>

                    <div class="col-sm-4">
                        <select name="passenger" class="browser-default custom-select mb-4" id="select" required>
                            <option value="" disabled="" selected="">Seniors(65+) *</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>



                </div>
                <input type="submit" name="find_flights" class="btn btn-primary float-right mt-5" value="Find Flights">
            </form>


		</div>
	</div>





	<!-- Start Footer -->

<footer class="footer-area bg-f">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <h3>About Us</h3>
                <p class="lead"> At YQ airlines we specialise in creating holiday ideas to match your interests. Africa is a beautiful place and we are here to promote this through creating specialised holidays to encourage others to visit.</p>

            </div>
            <div class="col-lg-3 col-md-6">
                <h3>Booking</h3>
                <p> <a href="reservationnn.php"> Book Flights</p></a>
                <p> <a href="reservationn.php"> Book Packages</p></a>


            </div>
            <div class="col-lg-3 col-md-6">
                <h3>Contact</h3>
                <p> <a href="contact.php"> Contacts us</p></a>

            </div>
            <div class="col-lg-3 col-md-6">
                <h3>Explore</h3>
                <p> <a href="ghana.php"> Ghana</p></a>
                <p> <a href="nigeria.php"> Nigeria</p></a>
                <p> <a href="gambia.php"> Gambia</p></a>
                <p> <a href="about.php"> Egypt</p></a>
                <p> <a href="morocco.php"> Morocco</p></a>
                <p> <a href="southafrica.php"> South Africa</p></a>
                <p> <a href="kenya.php"> Kenya</p></a>
                <p> <a href="seychelles.php"> Seychelles</p></a>
            </div>
        </div>
    </div>
    </div>

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="company-name"><a href="#">YQ Airlines </a>

                </div>
            </div>
        </div>
    </div>

</footer>
<!-- End Footer -->
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/picker.js"></script>
	<script src="js/picker.date.js"></script>
	<script src="js/picker.time.js"></script>
	<script src="js/legacy.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>