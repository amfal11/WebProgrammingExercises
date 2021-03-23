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
        $baris = 4;
        $kolom = 5;
        echo "<table border='1'>";
        for($i = 0; $i < $baris; $i++){
            echo "<tr>";
            for ($j = 0; $j < $kolom; $j++){
                if ($i == 0) {
                    echo "<td>".($j + 1)."</td>";
                }
                elseif ($i == 1) {
                    echo "<td>".($j + 6)."</td>";
                }
                elseif ($i == 2) {
                    echo "<td>".($j + 11)."</td>";
                }
                
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>