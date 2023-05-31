<?php
include_once("koneksi.php");

$id = $_GET["id"];

$id = $_POST['id'];
$category_name = $_POST['category_name'];

$result = mysqli_query($conn, "UPDATE `categories` SET category_name='$category_name' WHERE id='$id';");

error_reporting(E_ALL);
ini_set('display_errors', 1);

header("Location:index.php");
?>