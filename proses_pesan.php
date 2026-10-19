<?php

$nama = $_POST["nama"];
$kelas = $_POST["kelas"];
$pesan = $_POST["pesan"];

if ($nama != "" && $kelas != "" && $pesan != "") {

    header("Location: sukses.php");
    exit;

} else {

    echo "Semua kolom wajib diisi.";
    
}

?>
