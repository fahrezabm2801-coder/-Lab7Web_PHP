<!-- Nama        : Fahreza Bintang Mahesa -->
<!-- NIM         : 312110220 -->
<!-- Kelas       : I253A -->
<!-- Mata Kuliah : Pemrograman Web -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan ke-6</title>
</head>
<body>
  <form method="POST" action="">
    <label for="nama">Nama:</label>
    <input id="nama" name="nama" type="text" required>
    <label for="prodi">Program Studi:</label>
    <input id="prodi" name="prodi" type="text" required>
    <button type="submit" name="kirim">Kirim Data</button>
  </form>

<?php
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $nama = trim($_POST["nama"] ?? "");
  $prodi = trim($_POST["prodi"] ?? "");
  if ($nama === "" || $prodi === "") {
  echo "<p>Semua kolom wajib diisi.</p>";
  } else {
  echo "<h3>Data diterima</h3>";
  echo "Nama: " . htmlspecialchars($nama, ENT_QUOTES, "UTF-8") . "<br>";
  echo "Program Studi: " . htmlspecialchars($prodi, ENT_QUOTES, "UTF-8");
  }
  }
?>

</body>
</html>