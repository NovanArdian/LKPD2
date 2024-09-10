<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>selamat ulang tahun</title>
</head>
<body>
    <?php
    function cekKarakter($kalimat){
        $kar = ['!', '*', '$',];
        $sim = []; //untuk menyimpan simbol-simbol yang ditemukan dalam kalimat. 
        foreach($kar as $simbol){
            if (strpos($kalimat, $simbol) !== false){ // digunakan untuk mencari posisi pertama kemunculan $simbol dalam string $kalimat.
                $sim[]= $simbol; //Jika simbol ditemukan di dalam kalimat, simbol tersebut ditambahkan ke array $sim.
            } //
        }
        if(!empty($sim)){  //kondisi untuk mengecek sim berisi elemen atau tidak
            echo "Teks : $kalimat <br>";
            echo "Karakter yang terdapat pada kalimat: " . implode (', ', $sim); //Fungsi implode() digunakan untuk menggabungkan elemen-elemen dalam array $sim menjadi satu string, dipisahkan oleh koma.
        }else{
            echo "$kalimat <br>";
            echo "Tidak terdapat simbol pada kalimat";
        }
    }
    $kalimat = "Selamat bara tahun Ulang 78!";
    cekKarakter($kalimat);
    ?>
</body>
</html>