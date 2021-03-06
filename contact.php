<?php
	if(isset($_POST['submit'])){
		$nameErr = $messageErr = $subjectErr = $emailErr = "";
		$name = $message = $subject = $email = "";

	$name = $_POST['name'];
	$message = $_POST['message'];
	$subject = $_POST['subject'];
	$email = $_POST['email'];

	function test_input($data) {
							$data = trim($data);
							$data = stripslashes($data);
							$data = htmlspecialchars($data);
							return $data;
					 }

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
						if (empty($_POST["name"])) {
							 $nameErr = "Name is required";
						}else {
							 $name = test_input($_POST["name"]);
						}
						if (empty($_POST["message"])) {
							 $messageErr = "Message is required";
						}else {
							 $name = test_input($_POST["message"]);
						}
						if (empty($_POST["subject"])) {
							 $subjectErr = "Subject is required";
						}else {
							 $name = test_input($_POST["subject"]);
						}if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
							$emailErr = "Email is required";
					 }else {
							$name = test_input($_POST["email"]);
}
							$content="From: $name \n Email: $email \n Message: $message";
							$recipient = "kerryfinnegan@hotmail.co.uk";
							$mailheader = "From: $email \r\n";
							mail($recipient, $subject, $content, $mailheader) or die("Error!");
							echo "Email successfully sent!";
}
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
	<style>
.error {color: #FF0000;}

	</style>
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
          <a class="nav-link" href="software.php">Software</a>
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

<!--- Jumbotron -->
<div class="container-fluid">
<div class="row jumbotron">
	<!--Section: Contact v.2-->
<section class="mb-4">

<!--Section heading-->
<h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
<!--Section description-->
<p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
		a matter of hours to help you.</p>
<p><span class = "error">* required field.</span></p>
<div class="row">

		<!--Grid column-->
		<div class="col-md-9 mb-md-0 mb-5">
				<form id="contact-form" name="contact-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

						<!--Grid row-->
						<div class="row">

								<!--Grid column-->
								<div class="col-md-6">
										<div class="md-form mb-0">
												<input type="text" id="name" name="name" class="form-control">
												<label for="name" class="">Your name</label>
												<span class = "error">* <?php echo $nameErr;?></span>
										</div>
								</div>
								<!--Grid column-->

								<!--Grid column-->
								<div class="col-md-6">
										<div class="md-form mb-0">
												<input type="text" id="email" name="email" class="form-control">
												<label for="email" class="">Your email</label>
												<span class = "error">* <?php echo $emailErr;?></span>
										</div>
								</div>
								<!--Grid column-->

						</div>
						<!--Grid row-->

						<!--Grid row-->
						<div class="row">
								<div class="col-md-12">
										<div class="md-form mb-0">
												<input type="text" id="subject" name="subject" class="form-control">
												<label for="subject" class="">Subject</label>
												<span class = "error">* <?php echo $subjectErr;?></span>
										</div>
								</div>
						</div>
						<!--Grid row-->

						<!--Grid row-->
						<div class="row">

								<!--Grid column-->
								<div class="col-md-12">

										<div class="md-form">
												<textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
												<label for="message">Your message</label>
												<span class = "error">* <?php echo $messageErr;?></span>
										</div>

								</div>
						</div>
						<div class="text-center text-md-left">
								<input class="btn btn-primary" type="submit" name="submit" value="Send">
						</div>
						<div class="status"></div>
						<!--Grid row-->
				</form>


		</div>
		<!--Grid column-->

		<!--Grid column-->
		<div class="col-md-3 text-center">
				<ul class="list-unstyled mb-0">
						<li><i class="fas fa-map-marker-alt fa-2x"></i>
								<p>Micropack LTD, Fire Training Centre, Schoolhill, Portlethen, Aberdeen, AB12 4RR, Scotland</p>
						</li>

						<li><i class="fas fa-phone mt-4 fa-2x"></i>
								<p>+ 44 (0)1224 784055</p>
						</li>

						<li><i class="fas fa-envelope mt-4 fa-2x"></i><br>
								<a href = "mailto:SALES@MICROPACK.CO.UK">sales@micropack.co.uk</a>
						</li>
				</ul>
		</div>
		<!--Grid column-->

</div>

</section>
<!--Section: Contact v.2-->
</div>
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
