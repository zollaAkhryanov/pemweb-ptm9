<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Kalkulator</title>
</head>
<body>
    <h2>Hasil Perhitungan</h2>
    
    <?php
    // Mengambil nilai dari form
    $angka1 = $_POST['angka1'];  // Variabel untuk menyimpan angka pertama
    $angka2 = $_POST['angka2'];  // Variabel untuk menyimpan angka kedua
    $operasi = $_POST['operasi']; // Variabel untuk menyimpan jenis operasi
    
    $hasil = 0; // Variabel untuk menyimpan hasil perhitungan
    
    // Logika if-else untuk menentukan operasi yang dipilih
    if ($operasi == 'tambah') {
        $hasil = $angka1 + $angka2; // Operator penjumlahan
        $simbol = '+';
    } elseif ($operasi == 'kurang') {
        $hasil = $angka1 - $angka2; // Operator pengurangan
        $simbol = '-';
    } elseif ($operasi == 'kali') {
        $hasil = $angka1 * $angka2; // Operator perkalian
        $simbol = '×';
    } elseif ($operasi == 'bagi') {
        if ($angka2 != 0) {
            $hasil = $angka1 / $angka2; // Operator pembagian
            $simbol = '÷';
        } else {
            $hasil = "Tidak bisa dibagi dengan nol";
            $simbol = '÷';
        }
    }
    ?>
    
    <!-- Menampilkan hasil perhitungan -->
    <p>Hasil dari <?php echo $angka1 . ' ' . $simbol . ' ' . $angka2; ?> adalah: <strong><?php echo $hasil; ?></strong></p>
    
    <a href="kalkulator.html">Kembali ke Kalkulator</a>
</body>
</html>