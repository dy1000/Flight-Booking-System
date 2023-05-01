<?php
include 'config.php';

if (isset($_GET['find_flights'])){
    $city_departure = $_GET['city_departure'];
    $city_arrival = $_GET['city_arrival'];
    $city_departuretwo = $_GET['city_departuretwo'];

    $sql = "SELECT * FROM flights WHERE city_departure = '$city_departure' and city_arrival = '$city_arrival'";
    $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
    $flights = $result->fetch_all();
    $sqltwo = "SELECT * FROM flights WHERE city_departure = '$city_departuretwo' and city_arrival = '$city_arrival'";
    $resulttwo = mysqli_query($conn,$sqltwo) or die(mysqli_error($conn));
    $flightstwo = $resulttwo->fetch_all();
    foreach ($flightstwo as $flighttwo){
        array_push($flights, $flighttwo);
   }
    //print_r($flights);

}


?>

<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>YQ Airlines</title>
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
                    <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
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
	
	<!-- Start header -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Flights</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End header -->
	

	
	<!-- Start Menu -->
	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Available Flights</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="special-menu text-center">
						<div class="button-group filter-button-group">
							<button class="active" data-filter="*">All</button>

						</div>
					</div>
				</div>
			</div>
				
			<div class="row special-list">

                <?php
                if (isset($flights)&& count($flights)>0){
                    foreach ($flights as $flight){?>
                <div class="col-lg-4 p-1 col-md-6 special-grid drinks">
                    <div class="gallery-single fix">
                        <img src="images/flights.jpeg" class="img-fluid" alt="Image">
                        <a href="form.php"> </a>
                        <div class="why-text ebooking-flights">
                            <h4>  <?php echo $flight[2]; ?> to <?php echo $flight[3]; ?> <?php echo "£$flight[6]"; ?></h4>
                            <p> Date Departure: <?php echo $flight[4]; ?>   -   Date Arrival: <?php echo $flight[5]; ?></p>
                            <a href="form.php?id=<?php echo $flight[0];?>">
                                <input type="submit"  value="Book Flight">
                            </a>
                        </div>
                    </div>
                </div>
                <?php } ?>
               <?php } else {?>
                <div class="col-lg-4 col-md-6" >
                <div class="alert alert-danger">
                    <h2><small>No Flights Available</small></h2>
                </div>
                </div>
                <?php } ?>



			</div>
		</div>
	</div>
	<!-- End Menu -->

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
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>