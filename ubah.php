<?php
include_once("koneksi.php");
$id = $_GET["id"];

$query = mysqli_query($conn, "SELECT * FROM categories WHERE id='$id'");

while ($categories = mysqli_fetch_array($query)) {
    $category_name = $_POST['category_name'];
}
?>
<form action="proses_ubah.php?id=<?php echo $id ?>" method="post">
    <table>
        <tr>
            <td>Category Name</td>
            <td><input type="text" name="category_name" value="<?php echo $category_name ?>"></td>
        </tr>
        <tr>
            <td colspan=2><input type="submit" name="submit" value="Ubah"></td>
        </tr>
    </table>
</form>