<?php
session_start();
$con= new mysqli("localhost","root","","chatroom");
$message= mysqli_real_escape_string($con, $_POST['message']);
$user= mysqli_real_escape_string($con, $_SESSION['user']);
$room= mysqli_real_escape_string($con, $_SESSION['room']);
if(mysqli_connect_errno($con)!=0)
      die();

      $query="INSERT INTO message (message,user,room) VALUES('$message', '$user', '$room')";

$result=mysqli_query($con,$query);

mysqli_close($con); 

?>
