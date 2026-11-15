<!-- Nama        : Fahreza Bintang Mahesa -->
<!-- NIM         : 312110220 -->
<!-- Kelas       : I253A -->
<!-- Mata Kuliah : Pemrograman Web -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan ke-5</title>
</head>
<body>
  <form method="GET" action="">
    <label for="kata">Kata kunci:</label>
    <input id="kata" name="kata" type="text">
    <button type="submit">Cari</button>
  </form>
<?php 
  if (isset($_GET["kata"])) {
  $kata = trim($_GET["kata"]);
  echo "Kata kunci: " . htmlspecialchars($kata, ENT_QUOTES, "UTF-8");
  }
?>
</body>
</html>