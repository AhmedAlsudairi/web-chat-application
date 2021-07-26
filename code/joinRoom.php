<?php
session_start();
$_SESSION['room']= mysqli_real_escape_string($con, $_POST['room']);
$_SESSION['user']= mysqli_real_escape_string($con, $_POST['user']);

?>
<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"> </script>
<script>
         $(document).ready(function(){
    $("#sendButton").on("click",function(){
if($("#message").val()!=""){
var message=$("#message").val();

$.post("saveMessage.php", {
     message: message
    
  } ,
function(){
		$("#message").val("");
}
);
}
});
});

     $(document).ready(function(){
setInterval(function() {
     $("#divmessages").load("getRoomMessages.php");
}, 3000);
     });

     </script>

     <style>
                .divmessages{
               position: absolute;
               top: 30px;
               left: 150px;
               border-style: solid;
               border-color: black;
               border-width: 2px;
               width: 400px;
               height: 500px;
               overflow: scroll;
          }

     </style>
    
<title>index</title>
</head>
<body>

   
   <div class="divmessages" id="divmessages">
</div>

   <form action="" method="">
   <input type="text" id="message" name="message" placeholder="message"> 
   </form> <button id="sendButton">send</button>
</body>
</html>
