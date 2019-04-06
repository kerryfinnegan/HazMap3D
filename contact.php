<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'C:\composer\vendor\autoload.php';
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
if(isset($_POST['submit'])){
	// require 'phpmailer/PHPMailerAutoload.php';
	// require 'credential.php';
	// Instantiation and passing `true` enables exceptions
	$mail = new PHPMailer(true);
}

try {
    //Server settings
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = "kerryfinnegan1994@gmail.com";                     // SMTP username
    $mail->Password   = "";                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($_POST['email'], $_POST['name']);
    $mail->addAddress('kerryfinnegan25@gmail.com');     // Add a recipient
    $mail->addReplyTo("kerryfinnegan1994@gmail.com");

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $_POST['Subject'];
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = $_POST['message'];

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
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
        <li class="nav-item">
          <a class="nav-link" href="software.php">Software</a>
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

<div class="row">

		<!--Grid column-->
		<div class="col-md-9 mb-md-0 mb-5">
				<form id="contact-form" name="contact-form" action="mail.php" method="POST">

						<!--Grid row-->
						<div class="row">

								<!--Grid column-->
								<div class="col-md-6">
										<div class="md-form mb-0">
												<input type="text" id="name" name="name" class="form-control">
												<label for="name" class="">Your name</label>
										</div>
								</div>
								<!--Grid column-->

								<!--Grid column-->
								<div class="col-md-6">
										<div class="md-form mb-0">
												<input type="text" id="email" name="email" class="form-control">
												<label for="email" class="">Your email</label>
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
										</div>

								</div>
						</div>
						<!--Grid row-->

				</form>

				<div class="text-center text-md-left">
						<a class="btn btn-primary" type="submit">Send</a>
				</div>
				<div class="status"></div>
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
