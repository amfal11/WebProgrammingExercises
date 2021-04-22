<?php
// Membaca input
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$tgllhr = $_POST['tgllhr'];
$tmptlhr = $_POST['tmptlhr'];

// Membuka file datamhs.dat
$namaFile = "../Praktikum 4/datamhs.dat"; // data menggunakan file praktikum 4
$myfile = fopen($namaFile, "a") or die("Tidak bisa buka file!");

// Menambahkan data
fwrite($myfile, "\n".$nim."|".$nama."|".$tgllhr."|".$tmptlhr);

// Menutup file
fclose($myfile);