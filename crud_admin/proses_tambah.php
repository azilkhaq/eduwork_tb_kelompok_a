<?php
include_once("koneksi.php");

$id = $_POST['id'];
$kategoriNama = $_POST['category_name'];
$dibuat = $_POST['created_at'];
$update = $_POST['update_at'];

$result = mysqli_query($conn, "INSERT INTO `category` (`id`,`category_name`,`created_at`,`update_at`) VALUES ('$id','$kategoriNama','$dibuat','$update')");

error_reporting(E_ALL);
ini_set('display_errors', 1);

header("Location:index.php");
?>