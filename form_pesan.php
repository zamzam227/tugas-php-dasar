<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pesan Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h2>Form Pesan Mahasiswa</h2>

        <form action="sukses.php" method="POST">

            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" required>
            </div>

            <div class="form-group">
                <label for="kelas">Kelas</label>
                <input type="text" id="kelas" name="kelas" required>
            </div>

            <div class="form-group">
                <label for="pesan">Kesan dan Pesan</label>
                <textarea id="pesan" name="pesan" required></textarea>
            </div>

            <button type="submit">Kirim</button>
            <a href="index.php" class="btn-kembali">Kembali</a>

        </form>
    </div>

</body>
</html>
