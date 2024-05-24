<?php
include '../a/koneksi.php';
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$user = $_POST['username'];
$pass = md5 ($_POST['password']);
$telp = $_POST['telp'];
$level = 'masyarakat';

mysqli_query($koneksi, "INSERT INTO masyarakat values ('$nik','$nama','$user','$pass','$telp','$level')");
echo "<script>alert('Data Berhasil Ditambahkan'); window.location.href = 'login.php';</script>";
?>
