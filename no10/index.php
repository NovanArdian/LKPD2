<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Mendefinisikan fungsi untuk memeriksa jawaban pelajar
    function cek_jawaban($nama_pelajar, $jawaban_pelajar, $jawaban_benar)
    {
        // Inisialisasi penghitung untuk jawaban benar dan salah
        $benar = 0;
        $salah = 0;
        
        // Memastikan jumlah jawaban pelajar sama dengan jumlah jawaban benar
        $total_soal = count($jawaban_benar);

        //memeriksa apakah jawaban siswa ( $jawaban_pelajar[$i]) cocok dengan jawaban yang benar ( $jawaban_benar[$i]) untuk pertanyaan saat ini.
        for ($i = 0; $i < $total_soal; $i++) {
            if (isset($jawaban_pelajar[$i]) && $jawaban_pelajar[$i] == $jawaban_benar[$i]) {
                $benar++;
            } else {
                $salah++;
            }
        }

        // Menampilkan hasil pemeriksaan jawaban
        echo "Nama : $nama_pelajar <br>";
        echo "Jumlah Jawaban Benar : $benar <br>";
        echo "Jumlah Jawaban Salah : $salah";
    }

    // Jawaban yang benar untuk soal
    $jawaban_benar = ['A', 'D', 'C', 'C', 'B', 'A', 'E', 'B', 'A', 'E'];

    // Nama pelajar yang memeriksa jawabannya
    $nama_pelajar = 'Putra';

    // Jawaban yang diberikan oleh pelajar
    $jawaban_pelajar = ['A', 'D', 'C', 'C', 'B', 'B', 'E', 'B', 'A', 'V'];

    // Memanggil fungsi untuk memeriksa jawaban pelajar
    cek_jawaban($nama_pelajar, $jawaban_pelajar, $jawaban_benar);
    ?>
</body>

</html>
