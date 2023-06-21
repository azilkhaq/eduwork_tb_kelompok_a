<?php
session_start();

include "./config/database.php";

$tourId = $_POST['tourId'];
$userId = $_POST['userId'];

$data = mysqli_query($koneksi, "SELECT * FROM tour_favorites WHERE tour_id = '$tourId' and user_id = '$userId'");
$cek = mysqli_num_rows($data);

if ($cek > 0) {
    mysqli_query($koneksi, "DELETE FROM tour_favorites WHERE tour_id = '$tourId' and user_id = '$userId'");

    echo 1;
} else {
    mysqli_query($koneksi, "INSERT INTO tour_favorites (tour_id, user_id) VALUES ('$tourId', '$userId')");

    echo 2;
}
