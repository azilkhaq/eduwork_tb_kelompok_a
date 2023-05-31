<?php
include('koneksi_a.php');
$id=$_GET['id'];

$query = mysqli_query($koneksi, "SELECT*FROM facilities WHERE id='$id'");

while ($facilities = mysqli_fetch_array($query)){
    $facility_name = $facilities['facility_name'];
    $tour_id = $facilities['tour_id'];
    
}
?>
<form action="proses_edit_a.php?id=<?php echo $id ?>" method="post">
<table>
<tr>
    <td>Facility Name</td>
    <td><input type = "text" name= "facility_name" value="<?php echo $facility_name; ?> "></td>
</tr>
<tr>
    <td>Tour Id</td>
    <td><input type = "text" name= "tour_id" value="<?php echo $tour_id; ?> "></td>
</tr>
<tr>
    <td colspan=2><input type="submit" name ="submit" value="Ubah"></td>
</tr>
</table>
</form>

