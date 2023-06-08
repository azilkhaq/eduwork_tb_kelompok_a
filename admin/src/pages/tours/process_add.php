<?php
include "../../../config/database.php";

$name = $_POST['name'];
$category = $_POST['category'];
$description = $_POST['description'];
$address = $_POST['address'];
$urlMap = $_POST['urlMap'];

$query = mysqli_query($koneksi, "INSERT INTO tours (name, category_id, description, address, url_map) VALUES ('$name', '$category', '$description', '$address', '$urlMap')");

$lastInsertId = mysqli_insert_id($koneksi);

$queryTourImage = "INSERT INTO tour_images (tour_id, image) VALUES (?,?)";
$stmt = $koneksi->prepare($queryTourImage);

$stmt->bind_param("ss", $tour_id, $image);

foreach ($_POST['image_files'] as $value) {

    $tour_id = $lastInsertId;
    $image = $value;
    $stmt->execute();
}

$stmt->close();

if ($query) {
    echo "<script>
    alert('Berhasil tambah wisata...');
    window.location.href='./index.php';
    </script>";
} else {
    echo "<script>
    alert('Maaf, ada kesalahan menambahkan wisata...');
    window.location.href='./add.php';
    </script>";
}
