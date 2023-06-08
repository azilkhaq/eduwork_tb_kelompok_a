<?php
$targetDir = "../../uploads/"; 
$randomString = generateRandomString();
$fileExtension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);

$newFilename = $randomString . '.' . $fileExtension;

$targetFile = $targetDir . $newFilename; // Get the path to the new file

if (file_exists($targetFile)) {
  echo "File already exists.";
} else {
  if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
    $data = array(
      'id' => $randomString,
      'filename' => $newFilename,
      'success' => true,
    );

    $jsonData = json_encode($data);
  
    header('Content-Type: application/json');
    echo $jsonData;
  } else {
    echo "There was an error uploading the file.";
  }
}

function generateRandomString($length = 15) {
  $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
  $randomString = '';
  for ($i = 0; $i < $length; $i++) {
    $randomString .= $characters[rand(0, strlen($characters) - 1)];
  }
  return $randomString;
}
