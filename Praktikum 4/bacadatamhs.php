<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemrograman Web</title>
</head>
<body>
    <center><h2>Data Mahasiswa</h2></center>
    <?php
    $namaFile = "datamhs.dat";
    $jmldata = count(file($namaFile));
    echo "<p style=\"margin-left: 1rem;\">Jumlah Data: $jmldata</p>";
    ?>
    <center><table border="1" style="width:100%;border-collapse:collapse">
        <tr>
            <td>No</td>
            <td>NIM</td>
            <td>Nama Mhs</td>
            <td>Tanggal Lahir</td>
            <td>Tempat Lahir</td>
            <td>Usia (Thn)</td>
        </tr>
    <?php
    $myfile = fopen($namaFile, "r") or die("Tidak bisa buka file!");
    $tglskrg = date('Y-m-d');
    $tgl1 = explode("-", $tglskrg);
    $bulan1 = $tgl1[1];
    $hari1 = $tgl1[2];
    $tahun1 = $tgl1[0];
    $no = 1;
    while(!feof($myfile))
    {
        $datamhs = fgets($myfile);
        $expl = explode("|", $datamhs);
        $tgl2 = explode("-", $expl[2]);
        $bulan2 = $tgl2[1];
        $hari2 = $tgl2[2];
        $tahun2 = $tgl2[0];

        $jd1 = gregoriantojd($bulan1, $hari1, $tahun1);
        $jd2 = gregoriantojd($bulan2, $hari2, $tahun2);

        $selisih = $jd1 - $jd2;
        $usia = (int)($selisih/365);
        echo"<tr>";
        echo"<td>$no</td>";
        echo"<td>$expl[0]</td>";
        echo"<td>$expl[1]</td>";
        echo"<td>$expl[2]</td>";
        echo"<td>$expl[3]</td>";
        echo"<td>$usia tahun</td>";
        echo"</tr>";
        $no++;
    }
    fclose($myfile);
    ?>
    </table></center>
    
</body>
</html>