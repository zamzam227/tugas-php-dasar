<?php
require 'data.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Daftar Mahasiswa</h2>

<a href="form_pesan.php" class="btn-form">
    Form Pesan
</a>

<table border="1" cellpadding="8">
    <br>
    <br>

    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>Nilai</th>
        <th>Grade</th>
        <th>Status</th>
        <th>Detail</th>
    </tr>

    <?php $no = 1; ?>

    <?php foreach ($mahasiswa as $data): ?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?= $data["nim"] ?></td>
        <td><?= $data["nama"] ?></td>
        <td><?= $data["jurusan"] ?></td>
        <td><?= $data["nilai"] ?></td>
        <td><?= $data["grade"] ?></td>

        <td class="<?= $data['status'] === 'Lulus' ? 'lulus' : 'tidak-lulus' ?>">
            <?= $data["status"] ?>
        </td>

        <td>
            <a href="detail.php?nim=<?= $data['nim'] ?>">
                Lihat Detail
            </a>
        </td>
    </tr>

    <?php $no++; ?>
    <?php endforeach; ?>

</table>

</body>
</html>
