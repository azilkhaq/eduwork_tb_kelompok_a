<?php
include "../../../config/database.php";

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$id = $_POST['id'];

$sql = mysqli_query($koneksi, "UPDATE users SET fullname='$fullname', email='$email', 
    password='$password' WHERE id='$id'");


header("Location:user.php");
