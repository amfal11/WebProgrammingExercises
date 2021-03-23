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
        for($i=1; $i <= 6; $i++){
            if ($i % 2 != 0) {
                echo "<h".$i.">Heading ".$i."</h".$i.">";
            }
            else {
                echo "<h".$i.' class="merah">Heading '.$i."</h".$i.">";
            }
            
        }
    ?>
</body>
</html>