<?php 
session_start();
 
include "./config/database.php";
 
$email = $_POST['email'];
$password = md5($_POST['password']);
 
$data = mysqli_query($koneksi,"SELECT * FROM users WHERE email='$email' and password='$password'");
 
$cek = mysqli_num_rows($data);
 
if($cek > 0){
    $row = mysqli_fetch_assoc($data);

    $_SESSION['user_id'] = $row['id'];
	$_SESSION['fullname'] = $row['fullname'];
    $_SESSION['email'] = $row['email'];
	$_SESSION['is_login'] = true;

    if ($row['role'] == "ADMIN") {
        echo "<script>
        alert('Berhasil login...');
        window.location.href='../admin/src/pages/tours/';
        </script>";
    } else { 
        echo "<script>
        alert('Berhasil login...');
        window.location.href='./index.php';
        </script>";
    }
}else{
    echo "<script>
    alert('Email atau password salah...');
    window.location.href='./index.php';
    </script>";
}