<?php
$facility_name=$_POST["facility_name"];
$tour_id=$_POST["tour_id"];

include ('koneksi_a.php');

$query= mysqli_query ($koneksi,"INSERT INTO `facilities` (`facility_name`,`tour_id`) 
VALUES ('$facility_name','$tour_id');");

header("Location:index_a.php")
?>
