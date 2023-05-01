<?php
session_start();
if (isset($_POST['logout'])){
    session_unset();
    session_destroy();
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
    <title>YQ Explore</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
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
						<li class="nav-item active "><a class="nav-link" href="index.php">Home</a></li>
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
	
	<!-- Start slides -->
	<div id="slides" class="cover-slides">
		<ul class="slides-container">
			<li class="text-center">
				<img class="cimg" src="images/sunrise.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>YQ <br> Airlines </strong></h1>
                            <?php
                            if (isset($_SESSION['name'],$_SESSION['id'])){?>
                                <h2 style="font-size:30px; color: white;"> Hello <?php echo $_SESSION['name'];?> </h2>
                                <form action="index.php" method="post">
                                    <input type="submit" name="logout" value="logout" class="btn btn-lg btn-danger">
                                </form>
                                <a href="yourflights.php?id=<?php echo $_SESSION['id'];?>" class="btn btn-lg btn-circle btn-outline-new-white">Your Flights</a>
                                <a href="yourpackages.php?id=<?php echo $_SESSION['id'];?>" class="btn btn-lg btn-circle btn-outline-new-white">Your Packages</a>
                            <?php } else { ?>
                                <a class="btn btn-lg btn-circle btn-outline-new-white" href="signin.php">Log in</a>
                            <?php } ?>
						</div>
					</div>
				</div>
			</li>
			<li class="text-center">
				<img class="cimg" src="images/zooafrica.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Holiday Ideas <br> To match your needs</strong></h1>
							<p class="m-b-40">Explore Africa</p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-center">
				<img class="cimg" src="images/mountain.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Explore<br> Africa</strong></h1>
							<p class="m-b-40">Perfect holidays</p>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="slides-navigation">
			<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		</div>
	</div>
	<!-- End slides -->
	
	<!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img src= "images/airline.jpg" alt="" class="img-fluid">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">

					<div class="inner-column">
						<h1>Welcome To <span>YQ Airlines</span></h1>
						<p> At YQ airlines we specialise in creating holiday ideas to match your interests.</p>
						<p> Africa is a beautiful place and we are here to promote this through creating specialised holidays to encourage others to visit.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End About -->
	
	<!-- Start QT -->
	<div class="qt-box qt-background">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-left">
					<p class="lead ">
						" If I have ever seen magic it has been in Africa. "
					</p>
					<span class="lead">John Hemingway</span>
				</div>
			</div>
		</div>
	</div>
	<!-- End QT -->
	
	<!-- Start Menu -->
	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Destinations</h2>
						<p>Explore Africa</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="special-menu text-center">
						<div class="button-group filter-button-group">
							<button class="active" data-filter="*">All</button>
							<button data-filter=".drinks">North Africa</button>
							<button data-filter=".lunch">West Africa</button>
							<button data-filter=".dinner">East Africa</button>
							<button data-filter=".south">South Africa</button>
						</div>
					</div>
				</div>
			</div>
				
			<div class="row special-list">
				<div class="col-lg-4 col-md-6 special-grid drinks">
					<div class="gallery-single fix">
						<img src="images/egyptgiza.jpg" class="img-fluid image-resize" alt="Image">
						<div class="why-text">
							<h4>Egypt</h4>
							<p>North Africa</p>
							<h5> Pyramids of Giza</h5>
						</div>

					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid drinks">
					<div class="gallery-single fix">
						<img src="images/sahara022.jpg" class="img-fluid image-resize" alt="Image">
						<div class="why-text">
							<h4>Egypt, Libya and Algeria</h4>
							<p>North Africa</p>
							<h5> Sahara Desert</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid drinks">
					<div class="gallery-single fix">
						<img src="images/algeria.jpg" class="img-fluid image-resize" alt="Image">
						<div class="why-text">
							<h4>Algeria</h4>
							<p> North Africa</p>
							<h5> Tassili n'Ajjer National Park</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid lunch">
					<div class="gallery-single fix">
						<img src="images/lakev.jpg" class="img-fluid image-resize" alt="Image">
						<div class="why-text">
							<h4>Ghana</h4>
							<p>West Africa</p>
							<h5> Lake Volta </h5>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 special-grid lunch">
					<div class="gallery-single fix">
						<img src="images/park.jpg" class="img-fluid image-resize" alt="Image">
						<div class="why-text">
							<h4>Niger</h4>
							<p>West Africa</p>
							<h5>W National Park</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid lunch">
					<div class="gallery-single fix">
						<img src="images/popo.jpg" class="img-fluid image-resize" alt="Image">
						<div class="why-text">
							<h4>Benin</h4>
							<p>West Africa</p>
							<h5>Grand Popo beach</h5>
						</div>
					</div>
				</div>

				
				<div class="col-lg-4 col-md-6 special-grid dinner">
					<div class="gallery-single fix">
						<img src="images/mountk.jpg"class="img-fluid image-resize" alt="Image">
						<div class="why-text">
							<h4>Kenya</h4>
							<p> East Africa</p>
							<h5> Mount Kilimanjaro</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid dinner">
					<div class="gallery-single fix">
						<img src= "images/bwindi.jpg" class="img-fluid image-resize" alt="Image">
						<div class="why-text">
							<h4>Uganda</h4>
							<p>East Africa</p>
							<h5> Bwindi Impenetrable National Park</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid dinner">
					<div class="gallery-single fix">
						<img src="images/zanzibar.jpg"class="img-fluid image-resize" alt="Image">
						<div class="why-text">
							<h4>Tanzania</h4>
							<p>East Africa</p>
							<h5> Zanzibar </h5>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 special-grid south">
					<div class="gallery-single fix">
						<img src="images/spitzkoppe.jpg"class="img-fluid image-resize" alt="Image">
						<div class="why-text">
							<h4>Namibia</h4>
							<p>South Africa</p>
							<h5>Spitzkoppe</h5>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 special-grid south">
					<div class="gallery-single fix">
						<img src="images/cape.jpg"class="img-fluid image-resize" alt="Image">
						<div class="why-text">
							<h4>South Africa</h4>
							<p>South Africa</p>
							<h5> Cape Town</h5>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 special-grid south">
					<div class="gallery-single fix">
						<img src="images/vf.jpg"class="img-fluid image-resize" alt="Image">
						<div class="why-text">
							<h4>Zimbabwe</h4>
							<p>South Africa</p>
							<h5>Victoria Falls</h5>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- End Menu -->
	

	
	<!-- Start Customer Reviews -->
	<div class="customer-reviews-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Why travel with us?</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 mr-auto ml-auto text-center">
					<div id="reviews" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner mt-4">
							<div class="carousel-item text-center active">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/advice.jpg" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Expert Advice</strong></h5>
								<h6 class="text-dark m-0"></h6>
								<p class="m-0 pt-3">We provide you with insider information on a destination or activity. Provide assistance in planning your itinerary. Provide you with valuable advice. Help avoid common mistakes. All our specialists have travelled extensively or lived in their specialist regions</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/insight.jpg" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase"> Insight to culture</strong></h5>
								<h6 class="text-dark m-0"></h6>
								<p class="m-0 pt-3">We strive to offer a real insight into the Countries culture. Help travellers to better understand the customs of their destination. Help travellers to engage more with the people and places they encounter. Creates a meaningful experience. </p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/package.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase"> Packaged Holidays</strong></h5>
								<h6 class="text-dark m-0"></h6>
								<p class="m-0 pt-3">We offer pre-planned holidays which include flights, hotel accommodation and activities. Travellers benefit from discounted rates and bundled promotions. Gives a choice of the destination they want to visit. Allows travellers to save time and plan a trip within their budget. We offer additional support and assistance to travelers.  </p>
							</div>
						</div>
						<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
							<i class="fa fa-angle-left" aria-hidden="true"></i>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<span class="sr-only">Next</span>
						</a>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Customer Reviews -->

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
                    <p> <a href="myinfo.php"> My information</p></a>

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