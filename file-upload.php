<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./_.css">
    <title>Upload</title>
  </head>
  <body>
<?php

if ($_POST["pass"] != "random-password") {
  echo "<p>Please enter a correct password!</p><br>";
  echo "<input class=\"upload\" type=\"button\" value=\"Try again\" onclick=\"history.back()\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"/\">Go to Home page</a>";
  exit(0);
}

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if (empty($target_file)) {
  echo "Nope";
  exit(0);
}

// Check if file already exists, update it
if (file_exists($target_file)) {
  move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
  echo "<p>Updated</p><p class=\"filename\">". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). "</p>";
  echo round((filesize("./uploads/".$_FILES["fileToUpload"]["name"])/(1000*1000)),4) . " MB";
  echo "<br><br><a href=\"/\">Go to Home page</a>";
  exit(0);
  $uploadOk = 0;
}



// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "<p>Sorry, your file was not uploaded.</p>";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "<p><p class=\"filename\">". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). "</p> has been uploaded.</p>";
    echo "<br>".round((filesize("./uploads/".$_FILES["fileToUpload"]["name"])/(1000*1000)),4) . " MB";
  } else {
    echo "<p>Sorry, there was an error uploading your file.</p>";
  }
}
?>
  </body>
  <br>
  <br>
  <a href="/">Go to Home page</a>
</html>
