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
            
            <td><input type="text" name ="id" id="id" placeholder="Id" required></td>
            
        </tr>
        <tr>
            
            <td><input type="text" name ="facility_name" id="facility_name" placeholder="Facility Name" required></td>
            
        </tr> 
        <tr>
            
            <td><input type="text" name ="tour_id" id="tour_id" placeholder="Tour Id" required></td>
            
        </tr>
        <tr>
            
            <td><input type="text" name ="created_at" id="created_at" placeholder="Created At" required></td>
           
        </tr>
        <tr>
            
            <td><input type="text" name ="updated_at" id="updated_at" placeholder="Updated_At" required></td>
            
        </tr>
        <tr>
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



