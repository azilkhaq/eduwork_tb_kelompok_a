<?php
$id=$_POST["id"];
$facility_name=$_POST["facility_name"];
$tour_id=$_POST["tour_id"];
$created_at=$_POST["created_at"];
$updated_at=$_POST["updated_at"];

include ('koneksi_a.php');

$query= mysqli_query ($koneksi,"INSERT INTO `facilities` (`id`,`facility_name`,`tour_id`,`created_at`,`updated_at`) 
VALUES ('$id','$facility_name','$tour_id','$created_at','$updated_at');");

header("Location:index_a.php")
?>
