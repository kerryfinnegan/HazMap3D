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
  <a class="navbar-brand" href="#"><img src="images/logoMicropack.jpg" alt="Logo of Company"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="home1.php">Home</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Software</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Live Chat</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
				<li class="nav-item active">
          <a class="nav-link" href="login.php" style="color: red;">Logout</a>
        </li>
      </ul>
  </div>
</div>
</nav>

<!--- Main section details.php -->
<div class="container-fluid padding" >
  <div class="row welcome text-center">
    <div class="col-12">
      <h1 class="display-4">Below we will show some YouTube videos of the software being utilised</h1>
		</div>
    <hr>
    <div class="row jumbotron">
    <div class="col-12">
      <p>This video shows the HazMap3D Flame Detection being demonstrated.</p>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/T7MV-ezHPiI" frameborder="0" allow="accelerometer; autoplay;
      encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <hr class="my-4">
    <div class="col-12">
      <p>This video shows the HazMap3D Gas Detection being demonstrated.</p>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/an9lnTAi-Lo" frameborder="0" allow="accelerometer; autoplay;
      encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
	</div>
</div>
 </div>
<hr class="my-4">
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

<!-- Footer -->
<footer class="page-footer font-small teal pt-4">

    <!-- Footer Text -->
    <div class="container-fluid text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">

          <!-- Content -->
					<img src="images/logoMicropack.jpg" alt="Logo of Company">
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
