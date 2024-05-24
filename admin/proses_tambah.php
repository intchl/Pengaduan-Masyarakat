<?php
include '../a/koneksi.php';
$nama_petugas = $_POST['nama_petugas'];
$username = $_POST['username'];
$password = md5 ($_POST['password']);
$telp = $_POST['telp'];
$level = $_POST['level'];

mysqli_query($koneksi, "INSERT INTO petugas values ('', '$nama_petugas','$username','$password','$telp','$level')");
echo "<script>alert('Data Petugas Berhasil Ditambahkan'); window.location.href = 'petugas.php';</script>";
?>