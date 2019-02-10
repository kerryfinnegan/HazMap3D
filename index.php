<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Chat System in PHP</title>
	<link rel="stylesheet" href="style.css" media="all"/>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
	*{
		padding:0;
		margin:0;
		border:0;
	}

	body {
		background:black;
	}

	#container {
		width:40%;
		background:white;
		margin: 0 auto;
		padding:20px;

	}
	#chat_box {
		width:90%;
		height:400px;

	}
	#chat_data {
		width:100%;
		padding:5px;
		margin-bottom:5px;
		border-bottom:1px solid silver;
		font-weight:bold;
		overflow-y:scroll;
	}
	input[type='text']{
		width:100%;
		height:40px;
		border:1px solid gray;
		border-radius:5px;
	}
	input[type='submit']{
		width:100%;
		height:40px;
		border:1px solid gray;
		border-radius:5px;
	}
	textarea{
		width:100%;
		height:40px;
		border:1px solid gray;
		border-radius:5px;
	}

	</style>
	</head>

<body onload="ajax();">

<div id="container">
		<div id="chat_box">
		<div id="chat_data"></div>
		</div>
		<form method="post" action="index.php">
		<input type="text" name="name" placeholder="enter name"/>
		<textarea name="msg" placeholder="enter message"></textarea>
		<button type="button" class="btn">Send</button>

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
