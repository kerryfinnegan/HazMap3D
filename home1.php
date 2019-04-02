<?php
  session_start();

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HazMap3D</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="styles.css" rel="stylesheet">
</head>
<body>

<!-- Navigation -->
<nav class ="navbar navbar-expand-md navbar-light bg-light sticky-top">
<div class="container-fluid">
  <a class="navbar-brand" href="#"><img src="images/logoMicropack.jpg"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="home1.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Software</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Live Chat</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
				<li class="nav-item">
          <a class="nav-link" href="login.php" style="color: red;">Logout</a>
        </li>
      </ul>
  </div>
</div>
</nav>
<!--- Image Slider -->
<!-- <div id="slides" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#slides" data-slide-to="0" class="active"></li>
    <li data-target="#slides" data-slide-to="1"></li>
    <li data-target="#slides" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/slide1.jpg">
      <div class="carousel-caption">
        <h1 class="display-2">Welcome to the HazMap3D Portal</h1>
       <h3>Complete Website Layout</h3>
        <button type="button" class="btn btn-outline-light btn-lg">View Demo</button>
        <button type="button" class="btn btn-primary btn-lg">Get Started</button> -->
      <!-- </div>
    </div>
    <div class="carousel-item">
      <img src="images/slide2.jpg">
    </div>
    <div class="carousel-item">
      <img src="images/slide3.jpg">
    </div>
  </div>
</div> -->

<!--- Jumbotron -->
<!-- <div class="container-fluid">
<div class="row jumbotron">
      <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
        <p class="lead">Kerry</p>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
        <a href="#"><button type="button" class="btn btn-outline-secondary btn-lg">Web Hosting</button></a>
      </div>
</div>
</div> -->
<!--- Welcome Section -->
<div class="container-fluid padding" >
  <div class="row welcome text-center">
    <div class="col-12">
      <h1 class="display-4">Welcome <strong><i><?php echo $_SESSION['username']; ?></i></strong> to the HazMap3D Software Portal</h1>
		</div>
    <hr>
    <div class="col-12">
      <p class="lead">HazMap3D software consits of their 3D Fire and Gas mapping software. Below is some Information about each of the software. </p>
    </div>
	</div>
 </div>
<hr class="my-4">
<!--- Three Column Section -->
<!-- <div class="container-fluid padding">
  <div class="row text-center padding">
    <div class="col-xs-12 col-sm-6 col-md-4">
      <i class="fas fa-code"></i>
      <h3>HTML5</h3>
      <p>Welcome</p>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4">
      <i class="fas fa-bold"></i>
      <h3>BOOTSTRAP</h3>
      <p>Welcome</p>
    </div>
    <div class="col-sm-12 col-md-4">
      <i class="fas fa-css3"></i>
      <h3>CSS3</h3>
      <p>Welcome</p>
    </div>
  </div>
  <hr class="my-4">
</div> -->
<!--- Two Column Section -->
<div class="container-fluid padding">
  <div class="row padding">
    <div class="col-md-12 col-lg-6">
      <h2>3D Flame Detection Mapping</h2>
      <p>Operator specific requirements on how to map flame detector coverage can range significantly.
				As Micropack have been involved in the generation of most of these methodologies,
				HazMap3D is the only F&G Mapping package which will give the user full peace of mind in design.
			</p>
			<p>Regardless of how complex or simplistic the client requirement for mapping is, HazMap3D is the tool to demonstrate compliance.
			Full detector library at your fingertips with no exceptions. Over the last 2 decades, when a new flame detector is brought to the market,
			this has been coded into our mapping software.
			Don’t just take the manufacturers word for it: Micropack applies independent verification of flame detector capabilities. HazMap3D provides the
			user real life data on the performance of each flame detection technology, as verified by completely independent 3rd parties. Manufacturers are
			trying to sell a detector so should we just apply data directly from them and assume it to be realistic to the environment we are applying it to? </p>
      <p>Hazard grading has never been easier: HazMap3D’s complex code allows the simple double click to select equipment, whether individual process units
				have been defined in the 3D model or not.
			 Placing flame detectors exactly where you want, with no limitation from the model: a simple double click places detectors into the environment in the
			 most user-friendly manner available. </p>
      <br>

    </div>
    <div class="col-lg-6">
      <h2>3D Gas Detection Mapping</h2>
				<p>HazMap3D can be utilised to show gas detection coverage to target gas cloud sizes, perimeter/ boundary requirements, or local leak detection coverage.
					When used for volumetric detection, the target gas cloud size is proposed for each area based on the area’s volume, confinement and degree of congestion.
					</p>
					<p>Existing detectors can easily be placed into the model. These detectors are then analysed in HazMap3D against the predetermined performance target.
						This package objectively assesses the coverage of the existing gas detection quickly and reliably.
						Micropack understands that gas detection can be a contentious issue, and that there is more to just putting a detector at a nominal spacing, and that there
						is also far more to design than simply hitting a target percentage point.</p>
					<p>Fully 3D Gas Detection Mapping from the experts who understand there is more to gas detection than a detector every 5 metres.
					   Fully performance based target gas cloud methodology to allow fast and accurate analysis of the volumetric coverage.
					   Full detector library of all detection manufacturers and models for point and open path systems, whether laser based,
						 infrared or catalytic for the more specialised applications. </p>
    </div>
</div>
<a href=" https://www.micropackfireandgas.com/fire-gas-mapping/3d-fire-gas-mapping-software" class="btn btn-primary" style="align:center;">Click Here for more Info</a>
</div>

<hr class="my-4">
<!--- Fixed background -->
<figure>
  <div class="fixed-wrap">
    <div id="fixed">
    </div>
  </div>
</figure>

<!--- Emoji Section -->
<!-- <button class="fun" data-toggle="collapse" data-target="#emoji">click for function
</button>
<div id="emoji" class="collapse">
  <div class="container-fluid padding">
    <div class="row text-center">
      <div class="col-sm-6 col-md-3">
        <img class"gif" src="">
      </div>
      <div class="col-sm-6 col-md-3">
        <img class"gif" src="">
      </div>
      <div class="col-sm-6 col-md-3">
        <img class"gif" src="">
      </div>
      <div class="col-sm-6 col-md-3">
        <img class"gif" src="">
      </div>
      <div class="col-sm-6 col-md-3">
        <img class"gif" src="">
      </div>
</div>
<div>
</div> -->

<!--- Meet the team -->
<div class="container-fluid padding">
  <div class="row welcome text-center">
    <div class="col-12">
      <h1 class="display-4">Meet the team</h1>
    </div>
    <hr>
  </div>
</div>

<!--- Cards -->
<div class="container-fluid padding">
  <div class="row padding">
    <div class="col-md-4">
      <div class="card">
        <img class="card-imd-top" src="">
        <div class="card-body">
        </div>
      </div>
    </div>
</div>

<!--- Two Column Section -->
<div class="conatiner-fluid padding">
  <div class="row padding">
    <div class="col-lg-6">
      <h2>Our Philosophy</h2>
      <p></p>
      <p></p>
      <br>
    </div>
    <div class="col-lg-6">
      <img src="#" class="img-fluid">
    </div>
  </div>
  <hr class="my-4">
</div>

<!--- Connect -->
<div class="container-fluid padding">
  <div class="row text-center padding">
    <div class="col-12">
      <h2>Connect</h2>
    </div>
    <div class="col-12 social padding">
      <a href="https://www.facebook.com/MicropackFG"><i class="fab fa-facebook"></i></a>
      <a href="https://twitter.com/flamedetection"><i class="fab fa-twitter"></i></a>
      <a href="https://www.linkedin.com/company/micropack-engineering-ltd"><i class="fab fa-linkedin"></i></a>
      <a href="https://www.youtube.com/user/MicropackEng/feed"><i class="fab fa-youtube"></i></a>
    </div>
</div>
</div>

<!-- - Footer -->
<!-- <footer>
  <div class="container-fluid padding">
    <div class="row text-center">
      <div class="col-md-4">
        <img src="images/logoMicropack.jpg">
        <hr class="light">
				<! <i class="fas fa-phone-square" style="float:right;"></i> -->
				<!-- <i class="fas fa-mobile-alt">+44 (0)1224 784055</i> -->
        <!-- <span class="contact-icon-phone-yellow">+44 (0)1224 784055</span> -->
        <!-- <span class="contact-icon-email-yellow"><a href="mailto:SALES@MICROPACK.CO.UK"</a></span>
        <p>MICROPACK (ENGINEERING) LTD</p>
				<p>FIRE TRAINING CENTRE, SCHOOLHILL</p>
				<p>PORTLETHEN</p>
			 	<p>ABERDEEN</p>
			 	<p>AB12 4RR</p>
			 	<p>SCOTLAND</p>
      </div> -->
      <!-- <div class="col-md-4">
        <hr class="light">
        <h5>OFFICE LOCATION</h5>
				<hr class="light">
        <p>AMERICA</p>
        <p>FAR EAST</p>
        <p>MIDDLE EAST</p>
        <p>AFRICA</p>
        <p>EUROPE & FSU</p>
      </div> -->
			<!-- <div class ="col-md-4">
        <hr class ="light">
        <h5>OPENING HOURS</h5>
				<hr class ="light">
        <p>SUNDAY  CLOSED</p>
        <p>MONDAY-FRIDAY 8:30AM-5:30PM</p>
        <p>SATURDAY CLOSED</p>
      </div>
      <div class="col-12">
        <hr class="light-100">
        <h5>&copy; www.micropackfireandgas.com</h5>
      </div>
    </div>
  </div>
</footer> -->


<!-- Footer -->
<footer class="page-footer font-small teal pt-4">

    <!-- Footer Text -->
    <div class="container-fluid text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">

          <!-- Content -->
					<img src="images/logoMicropack.jpg">
          <!-- <h5 class="text-uppercase font-weight-bold">Footer text 1</h5> -->

	        <a href="+44 (0)1224 784055"></a>
	        <a href="mailto:SALES@MICROPACK.CO.UK"></a>
	        <p>MICROPACK (ENGINEERING) LTD,<br>FIRE TRAINING CENTRE, SCHOOLHILL
					PORTLETHEN,<br>ABERDEEN
				 	AB12 4RR,<br>SCOTLAND</p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Grid column -->
        <div class="col-md-6 mb-md-0 mb-3">

          <!-- Content -->
          <h5 class="text-uppercase font-weight-bold">Opening Hours</h5>
					<p>SUNDAY  CLOSED</p>
	        <p>MONDAY-FRIDAY 8:30AM-5:30PM</p>
	        <p>SATURDAY CLOSED</p>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Text -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href="https://www.micropackfireandgas.com"> micropackfireandgas.com</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->


</body>
</html>
