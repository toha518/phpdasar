<?php

// Pengulangan

// for
for ($i = 0; $i < 5; $i++) {
    echo "Toha <br>";
}

echo "<br>";

// while
$i = 0;
while ($i < 5) {
    echo "Toha <br>";
    $i++;
}

echo "<br>";

// do.. while
$i = 0;
do {
    echo "Toha <br>";
    $i++;
} while ($i < 5);

echo "<br>";

// foreach : pengulangan khusus array

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
    <table border="1" cellpadding="10" cellspacing="0">
        <?php
        for ($i = 1; $i <= 3; $i++) : ?>
            <tr>
                <?php for ($j = 1; $j <= 5; $j++) : ?>
                    <td><?= "$i, $j"; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>

</html>