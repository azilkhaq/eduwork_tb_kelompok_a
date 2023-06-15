<?php
include "../../../config/database.php";
 
$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM users WHERE id = $id");

header("Location:user.php");