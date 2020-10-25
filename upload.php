<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./_.css">
    <title>Upload</title>
  </head>
  <body>    
    <h1>Upload</h1>
    <form action="/file-upload.php" method="post" enctype="multipart/form-data">
      <p>Select file : 
      <input class="file" type="file" name="fileToUpload" id="fileToUpload"></p>
      <input id="pass" type="password" name="pass" placeholder="Password" minlength=8 required>
      <br>
      <br>
      <input class="upload" type="submit" value="Upload" name="submit">
    </form>
    <br><br>
    <a href="/">Go to Home page</a>
  </body>
</html>