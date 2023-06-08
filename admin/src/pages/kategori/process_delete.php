<?php
include "../../../config/database.php";
 
$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM categories WHERE id = $id");

if ($query) {
    echo "<script>
    alert('Berhasil hapus kategori...');
    window.location.href='./index.php';
    </script>";
} else {
    echo "<script>
    alert('Maaf, ada kesalahan hapus kategori...');
    window.location.href='./index.php';
    </script>";
}