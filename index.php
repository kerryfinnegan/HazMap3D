<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Live Chat</title>
<link type="text/css" rel="stylesheet" href="styles.css" />
</head>
 
<?php// if user has not logged in the log in form will appear
if(!isset($_SESSION['_name'])){
    loginForm();
}
else{// user will be directed to the chat window
?>
<div id="container">
    <div id="menu">
        <p class="welcome">Welcome, <b><?php echo $_SESSION['_name']; ?></b></p>//adding the users name to the chat window
        <p class="logout"><a id="exit" href="#">Exit Chat</a></p>
        <div style="clear:both"></div>
    </div>    
    <div id="chatbox"></div>
    //Creating a form so user can submit message
    <form name="msg" action="">
        <input name="user_msg" type="text" id="user_msg" size="60" />
        <input name="submit_msg" type="submit"  id="submit_msg" value="Send" />
    </form>
</div>
//Ajax and jquery libraries 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<script type="text/javascript">
// jQuery Document
$(document).ready(function(){
    //If user wants to end there current session
    $("#exit").click(function(){// create a pop up window to ask if user would like to end the current session
        var exit = confirm("Would you like to end this session?");
        if(exit==true){window.location = 'index.php?logout=true';}      
    });
});

//user wants to log out of current session
<?php// isset function used to check is variable is set or not 
if(isset($_GET['logout'])){ 
     
    //exit 
    $fp = fopen("log.html", 'a');//opens current file for writing 
    fwrite($fp, "<div class='msgln'><i>User ". $_SESSION['_name'] ." has left the chat.</i><br></div>");//displays the current user who has left the chat
    fclose($fp);//closes the file
     
    session_destroy();
//User is redirected
    header("Location: index.php"); 

}




//If user submits the form
    $("#submitmsg").click(function(){   
        var clientmsg = $("#usermsg").val();//gets the value set in the text field and stores it in the clientmsg
        $.post("post.php", {text: clientmsg});// create a post request to the post.php file. Gets the user input and stores it into the clientmsg variable              
        $("#usermsg").attr("value", "");//clear the #usermsg by setting the attribute value to nothing
        return false;
    });

    ?>

//function to load the chat in the window
    function loadLog(){     

        $.ajax({
            url: "log.html",
            cache: false,//prevents from being cached and recieve updated chat window, once a request is sent
            success: function(html){ //attach a function that will pass the data that was requested
                $("#chat_box").html(html); //data requested placed into the #chatbox div               
            },
        });
    }

//Function to allow the window to scroll at a certain height
    function loadLog(){     
        var oldscrollHeight = $("#chat_box").attr("scrollHeight") - 20; 
        $.ajax({
            url: "log.html",
            cache: false,
            success: function(html){ 
//inserting the current chat into the #chatbox       
                $("#chat_box").html(html);    
                
                //Auto-scroll           
                var newscrollHeight = $("#chat_box").attr("scrollHeight") - 20; 
                if(newscrollHeight > oldscrollHeight){
                    $("#chat_box").animate({ scrollTop: newscrollHeight }, 'normal'); 
                }               
            },
        });
    }

    
    //reload the file every 2500 ms
    setInterval (loadLog, 2500);
</script>

</body>
</html>