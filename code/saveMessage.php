<?php
session_start();

$message= $_POST['message'];
$user= $_SESSION['user'];
$room= $_SESSION['room'];


$con= new mysqli("localhost","root","","chatroom");
if(mysqli_connect_errno($con)!=0)
      die();

      $query="INSERT INTO message (message,user,room) VALUES('$message', '$user', '$room')";

$result=mysqli_query($con,$query);

mysqli_close($con); 

?>
