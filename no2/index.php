<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $hariini = date('l');
    $totalpembelian = 130000;
    $diskon = 0; //Variabel ini akan digunakan untuk menampung jumlah diskon.

    if ($hariini == 'tuesday') {
        $diskon += 5;
    }

    if ($totalpembelian > 100000) {
        $diskon += 7;
    }

    $totalDiskon = $totalpembelian * $diskon / 100;

    $totalBayar = $totalpembelian - $totalDiskon;

    echo "hari ini hari : $hariini\n";
    echo "<br/>";
    echo "Total Pembelanjaann: Rp" . number_format($totalpembelian, 0, ',', '.') . "\n";
    echo "<br/>";
    echo "Diskon: $diskon%\n";
    echo "<br/>";
    echo "Total Diskon: Rp" . number_format($totalDiskon, 0, ',', '.') . "\n";
    echo "<br/>";
    echo "Total yang harus dibayar: Rp" . number_format($totalBayar, 0, ',', '.') . "\n";
    ?>
</body>

</html>