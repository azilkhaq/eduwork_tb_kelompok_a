<?php
include_once("koneksi.php");

$id = $_POST['id'];
$name = $_POST['name'];
$defaultImage = $_POST['defaultImage'];
$image = "";

if (isset($_FILES["image"]) && $_FILES["image"]["error"] === UPLOAD_ERR_OK) {
    $targetDirectory = "../../../../uploads/";
    $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
        $image = basename($_FILES["image"]["name"]);
    } else {
        echo "<script>
        alert('Maaf, terjadi kesalahan saat mengunggah file Anda.');
        window.location.href='./index.php';
        </script>";
    }
} else {
    $image = $defaultImage;
}


$query = mysqli_query($conn, "UPDATE categories SET 
                                     category_name = '$name', 
                                     image = '$image'
                              WHERE id = $id");

if ($query) {
    echo "<script>
    alert('Berhasil ubah kategori...');
    window.location.href='./index.php';
    </script>";
} else {
    echo "<script>
    alert('Maaf, ada kesalahan ubah kategori...');
    window.location.href='./index.php';
    </script>";
}
