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
<script>
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
		  background:#4286f4;
		}
</style>
</head>


<body onload="ajax();">
<h3>Welcome to MICROPACK's Live Chat Area</h3>
<div id="container">
	<div id="chat_box">
	<div id="chat"></div>
	</div>
	<form method="post" action="index.php">
	<input type="text" name="name" placeholder="Enter name"/>
	<textarea name="msg" placeholder="Enter message"></textarea>
	<button class="btn btn-success btn-lg" name="submit">Send Message</button>
	<!-- <input type="submit" name="submit" value="Send it"/> -->

	</form>
	<?php
	if(isset($_POST['submit'])){

	$name = $_POST['name'];
	$msg = $_POST['msg'];

	$query = "INSERT INTO chat (name,msg) values ('$name','$msg')";

	$run = $con->query($query);

	if($run){
		echo "<embed loop='false' src='chat.wav' hidden='true' autoplay='true'/>";
	}


	}
	?>

</div>
</body>
</html>
