<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemrograman Web</title>
</head>
<body>
    <?php
        $namaFile = "myfile.txt";
        $myfile = fopen($namaFile, "r") or die("Tidak bisa buka file!");
        while(!feof($myfile))
        {
            echo fgets($myfile);
        }
        fclose($myfile);
    ?>
</body>
</html>