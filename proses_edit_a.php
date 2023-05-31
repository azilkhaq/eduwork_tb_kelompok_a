<?php

include_once("koneksi_a.php");
$id = $_GET["id"];

$id = $_POST['id'];
$facility_name = $_POST['facility_name'];
$tour_id = $_POST['tour_id'];
$created_at= $_POST['created_at'];
$updated_at = $_POST['updated_at'];

$result = mysqli_query($koneksi, "UPDATE `facilities` SET id = '$id', facility_name = '$facility_name', tour_id = '$tour_id', created_at = '$created_at', updated_at = '$updated_at' WHERE id ='$id';");

error_reporting(E_ALL);
ini_set('display_errors', 1);

header("Location:index_a.php");
?>