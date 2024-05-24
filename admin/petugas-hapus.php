<?php
include '../a/koneksi.php';
$id_petugas = $_GET['id'];

$data = mysqli_query($koneksi, "SELECT * FROM petugas WHERE id_petugas='$id_petugas'");
mysqli_query($koneksi, "DELETE FROM petugas WHERE id_petugas='$id_petugas'");
echo "<script>alert('Data Petugas Berhasil Dihapus'); window.location.href = 'petugas.php';</script>";

?>