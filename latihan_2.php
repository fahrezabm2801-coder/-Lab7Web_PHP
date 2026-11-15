<!-- Nama        : Fahreza Bintang Mahesa -->
<!-- NIM         : 312110220 -->
<!-- Kelas       : I253A -->
<!-- Mata Kuliah : Pemrograman Web -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan ke-2</title>
</head>
<body>
   <?php
      $nama = "Fahreza Bintang Mahesa";
      $tugas = 90;
      $uts = 85;
      $uas = 95;
      $nilaiAkhir = ($tugas * 0.30) + ($uts * 0.30) + ($uas * 0.40);
      if ($nilaiAkhir >= 85) {
      $predikat = "A";
      } elseif ($nilaiAkhir >= 75) {
      $predikat = "B";
      } elseif ($nilaiAkhir >= 60) {
      $predikat = "C";
      } else {
      $predikat = "D";
      }
      echo "Nama: " . htmlspecialchars($nama) . "<br>";
      echo "Nilai akhir: " . number_format($nilaiAkhir, 2) . "<br>";
      echo "Predikat: " . $predikat;
    ?>
</body>
</html>