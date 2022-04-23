<?php
// array
// variabel yang dapat memiliki banyak nilai
// nilai dalam array disebut element
// element dalam array boleh memiliki tipe data yang berbeda
// array merupakan pasangan key-value, key adalah index value adalah element

$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu", "Minggu"];

// menampilkan array
var_dump($hari);

echo "<br>";

print_r($hari);

echo "<br>";

// for ($i = 0; $i < 7; $i++) {
//     echo $hari[$i], ", ";
// }

// menambahkan elemen baru pada array
$hari[] = "Senin lagi";

// for ($i = 0; $i < 8; $i++) {
//     echo $hari[$i], ", ";
// }

var_dump($hari);
