<?php
require 'data.php';

$nim = $_GET['nim'];

$detail = null;

foreach ($mahasiswa as $data) {
    if ($data['nim'] == $nim) {
        $detail = $data;
        break;
    }
}
?>

<h2>Detail Mahasiswa</h2>

<?php if ($detail !== null): ?>
    <p>NIM: <?= $detail['nim'] ?></p>
    <p>Nama: <?= $detail['nama'] ?></p>
    <p>Jurusan: <?= $detail['jurusan'] ?></p>
    <p>Nilai: <?= $detail['nilai'] ?></p>
    <p>Grade: <?= $detail['grade'] ?></p>
    <p>Status: <?= $detail['status'] ?></p>
<?php else: ?>
    <p>Data mahasiswa tidak ditemukan.</p>
<?php endif; ?>

<a href="index.php">Kembali</a>