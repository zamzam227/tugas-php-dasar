<?php
$nama = "";
$kelas = "";
$pesan = "";

if (isset($_POST["nama"])) {
    $nama = $_POST["nama"];
}

if (isset($_POST["kelas"])) {
    $kelas = $_POST["kelas"];
}

if (isset($_POST["pesan"])) {
    $pesan = $_POST["pesan"];
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Berhasil Dikirim</title>
</head>
<body>

    <h2>Pesan Berhasil Dikirim</h2>

    <p>Terima kasih, <?php echo $nama; ?>!</p>
    <p>Nama: <?php echo $nama; ?></p>
    <p>Kelas: <?php echo $kelas; ?></p>
    <p>Pesan / Kesan: <?php echo $pesan; ?></p>

    <a href="index.php">Kembali ke Daftar Mahasiswa</a>

</body>
</html>
