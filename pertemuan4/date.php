<?php
// DATE & TIME

// date
// untuk menampilkan tanggal dengan format tertentu
echo date("l, d-F-Y");

echo "<br><br>";

// time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970
echo time();

echo "<br><br>";

// 100 hari dari sekarang
echo date("l, d-F-Y", time() + 60 * 60 * 24 * 100);

echo "<br><br>";

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
echo date("l", mktime(0, 0, 0, 8, 3, 2001));

echo "<br><br>";

// strtotime
echo date("l", strtotime("3 aug 2001"));
