<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./_.css">
        <title>Download</title>
    </head>
    <body>
        <h1>Download</h1>
        <?php
        if ($_POST["pass"] != "hello") {
            echo "<p>Please enter a correct password!</p><br>";
            echo "<input class=\"upload\" type=\"button\" value=\"Try again\" onclick=\"history.back()\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"/\">Go to Home page</a>";
            exit(0);
        } else {
            foreach (new DirectoryIterator("./uploads") as $fileinfo) {
                if (!$fileinfo->isDot()) {
                    echo "<a href=\"./uploads/".$fileinfo->getFilename() . "\" download>".$fileinfo->getFilename() ."</a><br><br><br>";
                }
            }
            echo "<br><br><a href=\"/\">Go to Home page</a>";
        }
    ?>
    </body>
</html>