<?php
include "../../../config/database.php";

$id = $_POST['id'];
$name = $_POST['name'];
$category = $_POST['category'];
$description = $_POST['description'];
$address = $_POST['address'];
$urlMap = $_POST['urlMap'];

$query = mysqli_query($koneksi, "UPDATE tours SET name = '$name', 
                                                  category_id = '$category', 
                                                  description = '$description', 
                                                  address = '$address', 
                                                  url_map = '$urlMap' 
                                WHERE id = $id");

mysqli_query($koneksi, "DELETE FROM tour_images WHERE tour_id = $id");

$queryTourImage = "INSERT INTO tour_images (tour_id, image) VALUES (?,?)";
$stmt = $koneksi->prepare($queryTourImage);

$stmt->bind_param("ss", $tour_id, $image);

foreach ($_POST['image_files'] as $value) {
    $tour_id = $id;
    $image = $value;
    $stmt->execute();
}

$stmt->close();

if ($query) {
    echo "<script>
    alert('Berhasil ubah wisata...');
    window.location.href='./index.php';
    </script>";
} else {
    echo "<script>
    alert('Maaf, ada kesalahan ubah wisata...');
    window.location.href='./index.php';
    </script>";
}
