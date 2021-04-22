<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemrograman Web</title>
</head>
<body>
<h2>Data Ukuran Tabung</h2>
    <table border="1">
        <tr style="font-weight:bold;">
            <td>NAMA TABUNG</td>
            <td>DIAMETER</td>
            <td>TINGGI</td>
            <td>LUAS</td>
        </tr>
    <?php
    $namaFile = "datatabung.dat";
    $myfile = fopen($namaFile, "r") or die("Tidak bisa buka file!");
    while(!feof($myfile))
    {
        $datatabung = fgets($myfile);
        $expl = explode(",", $datatabung);
        echo"<tr>";
        echo"<td name=\"n\">$expl[0]</td>";
        echo"<td name=\"d\">$expl[1]</td>";
        echo"<td name=\"t\">$expl[2]</td>";
        echo"<td><a href=\"hitungluas.php?n=$expl[0]&d=$expl[1]&t=$expl[2]\">View</a></td>";
        echo"</tr>";
    }
    fclose($myfile);
    ?>
    </table>
</body>
</html>