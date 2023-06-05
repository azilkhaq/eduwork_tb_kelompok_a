<?php
$facility_name=$_POST["facility_name"];
$tour=$_POST["tour"];

include ('connection.php');

$query= mysqli_query ($koneksi,"INSERT INTO `facilities` (`facility_name`,`tour_id`) 
VALUES ('$facility_name','$tour');");

header("Location:index.php")
?>
