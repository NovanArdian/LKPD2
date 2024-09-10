<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $bilangan = 90;

    $rentang = range(1,30);

    echo "<h2>hasil pembagian $bilangan oleh bagian dari 1-30:</h2>";

    foreach($rentang as $angka) {
        if ($bilangan % $angka == 0) {

            $hasil = $bilangan / $angka;
            echo "<li>$bilangan : $angka = $hasil</li>";
        }
    }

    echo "</ul>";
    ?>
</body>
</html>