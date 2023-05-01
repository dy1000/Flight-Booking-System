<?php
include 'config.php';

session_start();
if(isset($_POST['submit'])) {

    $package = $_POST['package'];
    $length = $_POST['length'];
    $people = $_POST['people'];
    $when = $_POST['when'];
    $fname = $_SESSION['name'];
    $number = $_POST['number'];
    $user_id = $_SESSION['id'];

    $sql = "INSERT INTO packages (package,user_id, nights, people, dates, fname, number) VALUES ('$package','$user_id', '$length', '$people', '$when','$fname','$number')";
    $rs = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $message = "You have successfully booked your $package!";
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
    <title> YQ airlines </title>
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
	<link rel="stylesheet" type="text/css" href="reservationstyle.php">
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
	
	<!-- Start Reservation -->

	   <section class="banner">
		<h2></h2>
		<div class="card-container">
		<div class="card-img">
			<! -- image here -->
		</div>

		<div class="card-content">
			<h3> Reservation </h3>
            <?php
            if (isset($message)) {?>
            <div class="alert alert-success">
                <h2><small><?php echo $message; ?> </small></h2>

            </div>

            <?php } ?>

			<form method="post" action="reservationn.php" >
				<div class="form-row">
					<select name = "package" required>
					<option value="package-select"> Select Package</option>
						<option value="package-Egypt"> Egypt</option>
						<option value="package-Morocco"> Morocco</option>
						<option value="package-Ghana"> Ghana</option>
						<option value="package-Nigeria"> Nigeria</option>
						<option value="package-Seychelles"> Seychelles</option>
						<option value="package-Kenya"> Kenya</option>
						<option value="package-South Africa"> South Africa</option>
                        <option value="package-Gambia"> Gambia</option>

					</select>

					<select name = "length" required>
						<option value="day-select"> Select Nights</option>
						<option value="2-nights"> 2 nights</option>
						<option value="3-nights"> 3 nights</option>
						<option value="4-nights"> 4 nights</option>
						<option value="5-nights"> 5 nights</option>
						<option value="6-nights"> 6 nights</option>
						<option value="7-nights"> 7 nights</option>
						<option value="8-nights"> 8 nights</option>

					</select>

					<select name = "people" required>
						<option value="day-select"> How many people</option>
                        <option value="1-nights"> 1 person</option>
						<option value="2-nights"> 2 person</option>
						<option value="3-nights"> 3 person</option>
						<option value="4-nights"> 4 person</option>
						<option value="5-nights"> 5 person</option>

						<fieldset name="date">
							<input type="date" name="when" required>
							<br/><br/>
						</fieldset>

					</select>


					<div class="form-row">
						<input type="text" name="number" placeholder="16-digit card number" required>
						<input type="submit" name="submit" value="Book Package">
					</div>




				</div>

			</form>

		</div>


		</div>
		</section>

	<!-- End Reservation -->


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