<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

// pagination
// konfigurasi
$jumlah_data_perHalaman = 3;
$jumlah_data = count(query("SELECT * FROM mahasiswa"));
$jumlah_halaman = ceil($jumlah_data / $jumlah_data_perHalaman);

// if (isset($_GET["halaman"])) {
//     $halaman_aktif = $_GET["halaman"];
// } else {
//     $halaman_aktif = 1;
// }

$halaman_aktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awal_data = $jumlah_data_perHalaman * $halaman_aktif - $jumlah_data_perHalaman;

$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awal_data, $jumlah_data_perHalaman");

// tombol cari ditekan
if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>

    <a href="logout.php" style="color: red;">Logout</a>
    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">Add Data</a>
    <br><br>

    <form action="" method="POST">
        <input type="text" name="keyword" placeholder="search..." autocomplete="off">
        <button type="submit" name="cari">Cari</button>
    </form>
    <br><br>

    <!-- navigasi -->

    <?php if ($halaman_aktif > 1) : ?>
        <a href="?halaman=<?= $halaman_aktif - 1; ?>">prev</a>
    <?php endif; ?>

    <?php for ($i = 1; $i <= $jumlah_halaman; $i++) : ?>
        <?php if ($i == $halaman_aktif) : ?>
            <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color: red;"><?= $i ?></a>
        <?php else : ?>
            <a href="?halaman=<?= $i; ?>"><?= $i ?></a>
        <?php endif; ?>
    <?php endfor; ?>

    <?php if ($halaman_aktif < $jumlah_halaman) : ?>
        <a href="?halaman=<?= $halaman_aktif + 1; ?>">next</a>
    <?php endif; ?>

    <br> <br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="edit.php?id=<?= $row["id"]; ?>">Edit</a> |
                    <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin hapus?');">Delete</a>
                </td>
                <td><img src=img/<?= $row["gambar"]; ?> width="80"></td>
                <td><?= $row["nim"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>

</html>