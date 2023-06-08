<?php

include ('connection.php');
$id = $_GET["id"];

$facility_name = $_POST['facility_name'];
$tour_id = $_POST['tour'];

$result = mysqli_query($koneksi, "UPDATE `facilities` SET id = '$id', facility_name = '$facility_name', tour_id = '$tour_id' WHERE id ='$id';");

error_reporting(E_ALL);
ini_set('display_errors', 1);

header("Location:index.php");
?>