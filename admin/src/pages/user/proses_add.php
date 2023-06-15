<?php
include "../../../config/database.php";

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = md5($_POST['password']);

$sql = mysqli_query($koneksi, "INSERT INTO users (fullname, email, password) 
    VALUES ('$fullname','$email', '$password')");

header("Location:user.php");
