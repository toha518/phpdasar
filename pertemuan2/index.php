<?php
// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standar Output
// echo, print
// print_r -> print isi array
// var_dump -> melihat isi variabel

echo "Syahrul Toha";
print "Toha Saputra";
print_r("Toha");
var_dump("Syahrul");

//Variabel & Tipe Data
//Variabel
$nama = "Toha";

// Operator
// aritmatika
// + - * / %
$x = 5;
$y = 2;
echo $x % $y;

// penggabungan string/concat

$nama_depan = "Syahrul";
$nama_belakang = "Toha";

echo $nama_depan . " " . $nama_belakang;

// Assignmet
// =, +=. -=, *=, /=, %=, .=

$x .= 3;
echo $x;

// Perbandingan
// <, >, <=, >=, ==, !=
var_dump(1 < 9);

// Identitas
// ===, !==

// Logika
// &&, ||, !

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <br>
    <h1>Halo, selamat datang <?= $nama; ?></h1>
</head>

<body>

</body>

</html>