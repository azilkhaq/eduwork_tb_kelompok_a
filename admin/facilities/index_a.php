<!DOCTYPE html>
<html>
<head>
    <title>Facilities</title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    
    
</head>
<body>
    <div class="container">
        
    <table  id="mytable" class="display" cellpadding="10" cellspacing="0" class="table table-striped">
     <a href="tambah_a.php" class="btn btn-primary mt-4 mb-4">Tambah data</a>
        <thead>
            <tr>
                <th widht="200px" class="text-center">ID</th>
                <th widht="200px" class="text-center">Facility Name</th>
                <th widht="200px" class="text-center">Tour id</th>
                <th widht="200px" class="text-center">Aksi</th>
                
            </tr>  
        </thead>

  
       
            
        
        <?php
            include ('koneksi_a.php');
            $query = mysqli_query($koneksi, "SELECT * FROM facilities");
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td class="text-center"><?php echo $data['id'] ?></td>
            <td class="text-center"><?php echo $data['facility_name'] ?></td>
            <td class="text-center"><?php echo $data['tour_id'] ?></td>
            <td class="text-center">
            <a  class="btn btn-warning" href="edit_a.php?id=<?= $data['id']; ?>">Edit</a>
            <a  class="btn btn-danger" href="proses_hapus_a.php?id=<?= $data['id']; ?> " onclick="return confirm('Yakin dihapus')">Delete</a>
        </tr>
        <?php 
            } 
        ?>
    </table>
    </div>
    </body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
        $('#mytable').DataTable();

    });
</script>
