<?php
include "./config/database.php";

$tour_id = $_POST['tour_id'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$note = $_POST['note'];
$rate = $_POST['rate'];

$query = mysqli_query($koneksi, "INSERT INTO comments (fullname, email, tour_id, note, rating) VALUES ('$fullname', '$email', '$tour_id ', '$note', '$rate')");

if ($query) {
    echo "<script>
    alert('Berhasil menambahkan review...');
    window.location.href='./destination_detail.php?id=" . $tour_id . "';
    </script>";
} else {
    echo "<script>
    alert('Maaf, ada kesalahan menambahkan review...');
    window.location.href='./destination_detail.php?id=" . $tour_id . "';
    </script>";
}
