<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function hitungKarakter($text)
    {
        $panjangKalimat = strlen($text); //menentukan panjang string

        if ($panjangKalimat > 50) {
            $text = substr($text, 0, 50) . ".................."; //untuk nge cut sama kapan berhentinya
        }

        return $text;
    }

    $text = "Kita di wajibkan makan setiap hari sebanyak 3x maksimal dan istirahat cukup agar tubuh kita tetap segar dan tidak di perbolehkan untuk bergadang karna mengakibatkan penyakit otak,
    ";
    $hasil = hitungKarakter($text);
    echo $hasil;
    ?>
</body>

</html>