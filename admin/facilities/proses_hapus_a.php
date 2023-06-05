<?php
include_once("koneksi_a.php");

$id = $_GET["id"];

$result = mysqli_query($koneksi, "DELETE FROM facilities WHERE id='$id';");

error_reporting(E_ALL);
ini_set('display_errors', 1);

header("Location:index_a.php");
?>