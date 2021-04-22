<?php
// Variabel
$n = $_GET['n'];
$d = $_GET['d'];
$t = $_GET['t'];

// Perhitungan
$r = $d / 2;
$hasil = (float) 2 * 3.14 * $r * ($r + $t);

// Menampilkan hasil
echo "<h2>Luas Tabung $n dengan diameter $d dan tinggi $t adalah: $hasil </h2>";

?>