<?php
include '../a/koneksi.php';
$id = $_GET['id'];

$data = mysqli_query($koneksi, "SELECT * FROM masyarakat WHERE id='$id'");
mysqli_query($koneksi, "DELETE FROM masyarakat WHERE id='$id'");
echo "<script>alert('Data Masyarakat Berhasil Dihapus'); window.location.href = 'user.php';</script>";

?>