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
    function hitungDenda($tglHarusKembali, $tglKembali)
    {
        $tgl1 = explode("-", $tglHarusKembali);
        $bulan1 = $tgl1[1];
        $hari1 = $tgl1[2];
        $tahun1 = $tgl1[0];

        $tgl2 = explode("-", $tglKembali);
        $bulan2 = $tgl2[1];
        $hari2 = $tgl2[2];
        $tahun2 = $tgl2[0];

        $jd1 = gregoriantojd($bulan1, $hari1, $tahun1);
        $jd2 = gregoriantojd($bulan2, $hari2, $tahun2);

        $selisih = $jd2 - $jd1;

        $denda = $selisih * 3000;

        return $denda;
    }

    echo "Besarnya denda adalah: Rp.".hitungDenda("2021-05-01", "2021-05-11");
    ?>
</body>
</html>