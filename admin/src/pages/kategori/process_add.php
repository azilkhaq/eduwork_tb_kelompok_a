<?php
include_once("koneksi.php");

$name = $_POST['name'];
$image = "";

if (isset($_FILES["image"]) && $_FILES["image"]["error"] === UPLOAD_ERR_OK) {
    $targetDirectory = "../../../../uploads/";
    $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
        $image = basename($_FILES["image"]["name"]);
    } else {
        echo "<script>
        alert('Maaf, terjadi kesalahan saat mengunggah file Anda.');
        window.location.href='./add.php';
        </script>";
    }
} else {
    echo "<script>
    alert('Tidak ada file yang dipilih atau terjadi kesalahan.');
    window.location.href='./add.php';
    </script>";
}

$query = mysqli_query($conn, "INSERT INTO categories (category_name, image) 
                                    VALUES ('$name', '$image')");

if ($query) {
    echo "<script>
    alert('Berhasil tambah kategori...');
    window.location.href='./index.php';
    </script>";
} else {
    echo "<script>
    alert('Maaf, ada kesalahan menambahkan kategori...');
    window.location.href='./add.php';
    </script>";
}
