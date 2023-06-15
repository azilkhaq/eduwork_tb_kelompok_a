<?php
include "../../../config/database.php";

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'] ?? "";
$id = $_POST['id'];

if ($password != "") {
    
$password = md5($_POST['password']);

$sql = mysqli_query($koneksi, "UPDATE users SET fullname='$fullname', email='$email', 
password='$password' WHERE id='$id'");
} else {

$sql = mysqli_query($koneksi, "UPDATE users SET fullname='$fullname', email='$email' WHERE id='$id'");
}

if ($sql) {
    echo "<script>
    alert('Berhasil edit user...');
    window.location.href='./user.php';
    </script>";
} else {
    echo "<script>
    alert('Maaf, ada kesalahan edit user...');
    window.location.href='./user.php';
    </script>";
}