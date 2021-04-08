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
    function gandakanString($s, $n)
    {
        for($i = 0; $i < $n; $i++)
        {
            echo "$s";
        }
    }

    gandakanString("Hello", 3);
    ?>
</body>
</html>