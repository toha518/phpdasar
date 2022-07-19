<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

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
    <style>
        .loader {
            width: 30px;
            position: absolute;
            top: 141px;
            left: 165px;
            z-index: -1;
            display: none;
        }
    </style>

    <script src="js/jquery-3.6.0.min.js"></script>
</head>

<body>

    <a href="logout.php" style="color: red;">Logout</a>
    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">Add Data</a>
    <br><br>

    <form action="" method="POST">
        <input type="text" name="keyword" placeholder="search..." autocomplete="off" id="keyword">
        <button type="submit" name="cari" id="tombol-cari">Cari</button>

        <img src="img/loader.gif" class="loader">
    </form>

    <br><br>

    <div id="container">
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
    </div>

    <script src="js/script.js"></script>
</body>

</html>