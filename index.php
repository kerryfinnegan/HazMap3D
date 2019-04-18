<?php
include 'db.php';
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
<link rel="stylesheet" href="styles.css" media="all"/>
<script type="text/javascript">

	function ajax(){

	var req = new XMLHttpRequest();

	req.onreadystatechange = function(){

	if(req.readyState == 4 && req.status == 200){

	document.getElementById('chat').innerHTML = req.responseText;
	}
	}
	req.open('GET','chat.php',true);
	req.send();

	}
	setInterval(function(){ajax()},1000);


</script>
<style>
		/* body{
			background-color: #2f79ef;
		} */
		*{
		  padding:0;
		  margin:0;
		  border:0;
		}

		body {
		  /* background:#4286f4; */
		}
		.error {color: #FF0000;}
</style>
</head>


<body onload="ajax();">

<h3 align="center">Welcome to MICROPACK's Live Chat Area</h3>
<input class="btn btn-primary"  onClick="window.location='home1.php';" value="Exit">
<div id="container">

	<div class="card bg-light text-dark" id="chat_box">
	<div id="chat"></div>
	</div>
<p><span class = "error">* required field.</span></p>
<?php
$nameErr = $msgErr = "";
$name = $msg  = "";
//if($_POST['submit'] || $_POST['name'] || $_POST['msg']){
if(isset($_POST['submit'])){
$name = $_POST['name'];
$msg = $_POST['msg'];

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
					if (empty($_POST["msg"])) {
						 $msgErr = "Message is required";
					}else {
						 $name = test_input($_POST["msg"]);
					}



$query = "INSERT INTO chat (name,msg) values ('$name','$msg')";

$run = $con->query($query);
}

}
?>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

	<input type="text" name="name" placeholder="Enter Name" />
   <span class = "error">* <?php echo $nameErr;?></span>
	<textarea name="msg" placeholder="Enter Message" cols="30" rows="4" ></textarea>
   <span class = "error">* <?php echo $msgErr;?></span>
	<button type="submit" class="btn btn-success btn-block btn-lg" name="submit">Send Message</button>

	</form>


</div>
</body>
</html>
