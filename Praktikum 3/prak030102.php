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
    function buatBintang($n){
        echo "<pre>";
        for($i=0; $i < $n; $i++){
            for($j=0; $j <= $i; $j++){
                echo "* ";
            }
            echo "\n";
        }
        echo "</pre>";
        }
    
    buatBintang(4);
    buatBintang(5);
    ?>
</body>
</html>