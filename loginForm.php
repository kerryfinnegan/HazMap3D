<?
session_start();


function loginForm(){
	echo'
	<div id="loginform">
	<form action = "index.html" method="post">
	<p>Please enter your name to continue:</p>
	<label for="name">Name:</label>
	<input type="text" name="name" id="name"/>
	<input type ="submit" name="enter" id="enter" value="Enter"/>
	</form>
	</div>
	';
}

if(isset($_POST['enter'])){
	if($_POST['name'] != ""){
		$_SESSION['name'] = striplashes(htmlspecialchars($_POST['name']));

	}else{
		echo'<span class="error">Please type in a name</span>';
	}
}

if(isset($_GET['logout'])){
	$fp = fopen("loginForm.html", 'a');
	fwrite($fp, "<div class='msgln'><i>User". $_SESSION['name']."has left the chat session.</i><br></div>");
	fclose($fp);

	session_destory();
	header("Location: index.html")
}
?>
