<!-- Nama        : Fahreza Bintang Mahesa -->
<!-- NIM         : 312110220 -->
<!-- Kelas       : I253A -->
<!-- Mata Kuliah : Pemrograman Web -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan k-3</title>
</head>
<body>
    <?php
      $mahasiswa = ["Reza", "Bintang", "Bondan", "Ramadan","Putri", "Tiara", "Budi", "Ronaldo",];
      echo "<h3>Daftar Mahasiswa</h3><ol>";
      foreach ($mahasiswa as $nama) {
      echo "<li>" . htmlspecialchars($nama) . "</li>";
      }
      echo "</ol>";
    ?>
</body>
</html>