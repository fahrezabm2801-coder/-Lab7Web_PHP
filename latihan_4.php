<!-- Nama        : Fahreza Bintang Mahesa -->
<!-- NIM         : 312110220 -->
<!-- Kelas       : I253A -->
<!-- Mata Kuliah : Pemrograman Web -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>latihan ke-4</title>
</head>
<body>
      <?php
        function hitungDiskon($harga, $persen) {
        $potongan = $harga * ($persen / 100);
        return $harga - $potongan;
        }
        $hargaAkhir = hitungDiskon(150000, 10);
        echo "Harga setelah diskon: Rp" . number_format($hargaAkhir, 0, ",", ".");

        // Function luas persegi panjang
        function hitungLuas($panjang, $lebar) {
            $luas = $panjang * $lebar;
            return $luas;
        }
        $hasilLuas = hitungLuas(10, 5);
        echo "<h3>Menghitung Luas Persegi Panjang</h3>";
        echo "Luas: " . $hasilLuas . " cm²";
    ?>
</body>
</html>