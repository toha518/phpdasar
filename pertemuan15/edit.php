<?php
require 'functions.php';

// ambil data di url
$id = $_GET["id"];

// querry data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id=$id")[0];

// cek apakah tombol submit sudah ditekan
if (isset($_POST["submit"])) {

    // cek apakah data berhasil diupdate
    if (edit($_POST) > 0) {
        echo "
        <script>
        alert('data berhasil diupdate!');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('data gagal diupdate!');
        document.location.href = 'index.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>

<body>
    <h1>Edit Data Mahasiswa</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">
        <ul>
            <li>
                <label for="nim">NIM : </label>
                <input type="text" name="nim" id="nim" required value="<?= $mhs["nim"]; ?>">
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email" required value="<?= $mhs["email"]; ?>">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"]; ?>">
            </li>
            <li>
                <label for="gambar">Gambar : </label> <br>
                <img src="img/<?= $mhs['gambar']; ?>" alt="" width="40"> <br>
                <input type="file" name="gambar" id="gambar">
            </li>
        </ul>
        <button type="submit" name="submit">Update Data</button>
    </form>
</body>

</html>