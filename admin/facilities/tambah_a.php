<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
</head>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h3>Tambah Data Facility</h3>

<div>
<form action="proses_a.php" method="post" name="formValidation" id="formValidation">
    <label for="facility">Facility Name</label>
    <input type="text" id="facility" name="facility_name" placeholder="Facility name..">

    <label for="tour_id">Tour Id</label>
    <select id="Tour_id" name="tour_id">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>
  
    <input type="submit" value="Tambah">
  </form>
</div>

</body>
</html>



