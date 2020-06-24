<?php
session_start();

$room= $_SESSION['room'];

$con= new mysqli("localhost","root","","chatroom");

if(mysqli_connect_errno($con)!=0)
      die();

 $query="SELECT user, message FROM message WHERE room='$room'";

$result=mysqli_query($con,$query);

$response = "";
	while($row = mysqli_fetch_array($result)){
		$response .= $row['user'].": ".$row['message']."<br>";	
}

print($response);

mysqli_close($con); 

?>

