<?php
// Pengulangan pada array
// for / foreach
$angka = [3, 1, 21, 12, 3, 1, 12, 3, 112];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: lime;
            text-align: center;
            line-height: 50px;
            margin: 4px;
            float: left;
            transition: 1s;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>
    <?php for ($i = 0; $i < count($angka); $i++) : ?>
        <div class="kotak"><?= $angka[$i]; ?></div>
    <?php endfor; ?>

    <div class="clear"></div>

    <?php foreach ($angka as $a) : ?>
        <div class="kotak"><?= $a ?></div>
    <?php endforeach; ?>
</body>

</html>