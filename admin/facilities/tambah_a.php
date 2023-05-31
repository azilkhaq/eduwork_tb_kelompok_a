<?php
include "koneksi_a.php";
$query = mysqli_query($koneksi,"SELECT*FROM tours");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">

      <title>Tambah Data</title>
</head>
<body>
<form action="proses_a.php" method="post" name="formValidation" id="formValidation">
    <div class="container">
        <tr>
            
            <td><input type="text" name ="facility_name" id="facility_name" placeholder="Facility Name" required></td>
            
        </tr> 
        <tr>
            
            
            <td>
                <label for="">Tours :</label><select name="tour_id">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="opel">Opel</option>
  <option value="audi">Audi</option>
</select></td>
            <td>
                <input type="submit" name="submit" value ="Submit" id="submit">
            </td>
          </tr>
          </div>
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>

</body>
</html>



