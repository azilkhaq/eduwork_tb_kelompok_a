<?php
$facility_name=$_POST["facility_name"];
$tour_id=$_POST["tour_id"];

include ('connection.php');

$query= mysqli_query ($koneksi,"INSERT INTO `facilities` (`facility_name`,`tour_id`) 
VALUES ('$facility_name','$tour_id');");

header("Location:index.php")
?>
