<?php
// Variabel Scope

$x = 10;

function tampilx()
{
    global $x;
    echo $x;
}

tampilx();
echo "<br><br>";

// SUPERGLOBALS
// variabel global milik PHP
// merupakan Array Associative
// print_r($_SERVER);
// echo "<br><br>";

$mahasiswa = [
    [
        "nama" => "Syahrul Toha",
        "nim" => "221910696",
        "jurusan" => "Komputasi Statistik",
        "email" => "syahrultoha08@gmail.com",
        "gambar" => "minato.jpg"
    ],
    [
        "nama" => "Syahrul Tohi",
        "nim" => "221910690",
        "jurusan" => "Komputasi Statistik",
        "email" => "syahrultohi08@gmail.com",
        "gambar" => "tobi.jpg"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <body>
        <h1>Daftar Mahasiswa</h1>
        <ul>
            <?php foreach ($mahasiswa as $mhs) : ?>
                <li>
                    <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nim=<?= $mhs["nim"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&email=<?= $mhs["email"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
                </li>
            <?php endforeach; ?>
            <ul>
    </body>
</body>

</html>