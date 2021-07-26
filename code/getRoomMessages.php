<?php
session_start();
$con= new mysqli("localhost","root","","chatroom");
$room= mysqli_real_escape_string($con, $_SESSION['room']);
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

