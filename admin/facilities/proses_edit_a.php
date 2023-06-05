<?php

include_once("koneksi_a.php");
$id = $_GET["id"];

$facility_name = $_POST['facility_name'];
$tour_id = $_POST['tour_id'];

$result = mysqli_query($koneksi, "UPDATE `facilities` SET facility_name = '$facility_name', tour_id = '$tour_id' WHERE id ='$id';");

error_reporting(E_ALL);
ini_set('display_errors', 1);

header("Location:index_a.php");
?>