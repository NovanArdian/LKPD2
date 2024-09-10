<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$barang = [
   [
        'nama_barang' => 'Pastagigi',
        'harga_barang' => 180000,
        'jumlah_beli' => 1,
   ],
   [
        'nama_barang' => 'Sabun Mandi',
        'harga_barang' => 5000,
        'jumlah_beli' => 3,
   ],
   [
        'nama_barang' => 'Aloe Vera Sheet Mask',
        'harga_barang' => 15000,
        'jumlah_beli' => 4,
   ],
];

$totalHarga = 0;

echo "Daftar belanjaan:<br>";

foreach ($barang as $index => $item) {
    $totalItem = $item['harga_barang'] * $item['jumlah_beli'];
    $totalHarga += $totalItem;
    echo ($index + 1) . ". " . $item['nama_barang'] . " (" . $item['jumlah_beli'] . ") : Rp." . number_format($totalItem, 0, '', '.') . "<br>";
}

echo "<br>Total Harga Yang Harus Dibayar Adalah Rp." . number_format($totalHarga, 0, '', '.');
?>
</body>
</html>