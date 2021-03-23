<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemrograman Web</title>
    <style>
    .merah{color:red}
    </style>
</head>
<body>
    <?php
        $heading = 1;
        while ($heading <= 6){
            if ($heading % 2 != 0) {
                echo "<h".$heading.">Heading ".$heading."</h".$heading.">";
            }
            else {
                echo "<h".$heading.' class="merah">Heading '.$heading."</h".$heading.">";
            }
            $heading ++;
        }
    ?>
</body>
</html>