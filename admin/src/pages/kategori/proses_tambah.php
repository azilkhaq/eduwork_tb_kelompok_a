<?php
include_once("koneksi.php");

$category_name = $_POST['category_name'];

$result = mysqli_query($conn, "INSERT INTO `categories` (`category_name`) VALUES ('$category_name')");

error_reporting(E_ALL);
ini_set('display_errors', 1);

header("Location:index.php");
?>