<?php
include "../../../config/database.php";

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$role = $_POST['role'];

$sql = mysqli_query($koneksi, "INSERT INTO users (fullname, email, password, role) 
    VALUES ('$fullname','$email', '$password', '$role')");

header("Location:user.php");
