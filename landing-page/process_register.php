<?php 
session_start();
 
include "./config/database.php";
 
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = md5($_POST['password']);
 
$query = mysqli_query($koneksi, "INSERT INTO users (fullname, email, password, role) VALUES ('$fullname', '$email', '$password', 'USER')");
$user_id = mysqli_insert_id($koneksi);

if($query){

    $_SESSION['user_id'] = $user_id;
	$_SESSION['fullname'] = $fullname;
    $_SESSION['email'] = $email;
	$_SESSION['is_login'] = true;

    echo "<script>
    alert('Berhasil register...');
    window.location.href='./index.php';
    </script>";
}else{
    echo "<script>
    alert('Email atau password salah...');
    window.location.href='./index.php';
    </script>";
}