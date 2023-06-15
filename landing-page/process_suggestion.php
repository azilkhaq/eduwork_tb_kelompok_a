<?php
include "./config/database.php";

$email = $_POST['email'];
$suggestion = $_POST['suggestion'];

$query = mysqli_query($koneksi, "INSERT INTO suggestions (email, suggestion) VALUES ('$email', '$suggestion')");

if ($query) {
    echo "<script>
    alert('Berhasil menambahkan kritik dan saran...');
    window.location.href='./index.php';
    </script>";
} else {
    echo "<script>
    alert('Maaf, ada kesalahan kritik dan saran...');
    window.location.href='./index.php';
    </script>";
}
