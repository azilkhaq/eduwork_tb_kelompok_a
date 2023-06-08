<?php
include "../../../config/database.php";
 
$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM tours WHERE id = $id");

if ($query) {
    echo "<script>
    alert('Berhasil hapus wisata...');
    window.location.href='./index.php';
    </script>";
} else {
    echo "<script>
    alert('Maaf, ada kesalahan hapus wisata...');
    window.location.href='./index.php';
    </script>";
}