<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    
    
</head>
<body>
<?php
include "koneksi_a.php";
$query = mysqli_query($koneksi,"SELECT*FROM facilities");
?>
<div class="container" style="margin-bottom: 200px;">
<table  id="mytable" class="display" cellpadding="10" cellspacing="0" class="table table-striped">
<a href="tambah_a.php">Tambah data</a>
        <thead>
        <tr>
            
            <th>id</th>
            <th>Facility Name</th>
            <th>Tour Id</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Action</th>
        </tr>
        </thead>
        <?php if(mysqli_num_rows($query)>0) {?>
            <?php
               
                while ($data = mysqli_fetch_array($query)) {
                ?>
                <tr>
                   
                    <td><?php echo $data["id"];?></td>
                    <td><?php echo $data["facility_name"]?></td>
                    <td><?php echo $data["tour_id"]?></td>
                    <td><?php echo $data["created_at"]?></td>
                    <td><?php echo $data["updated_at"]?></td>
                    <td>
                        <a href="edit_a.php?id=<?php echo $data ["id"]; ?>">Edit</a>
                        <a href="proses_hapus_a.php?id=<?php echo $data["id"]; ?> ">Delete</a>
                    </td>
                </tr>
                <?php  }?>
        <?php }?>
    </table>
    </body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
        $('#mytable').DataTable();

    });
</script>
