<?php
include '../a/koneksi.php';
$id = $_POST['id'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$user = $_POST['username'];
$pass = md5 ($_POST['password']);
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];
$level = 'masyarakat';

mysqli_query($koneksi, "INSERT INTO masyarakat values ('','$nik','$nama','$user','$pass','$telp','$alamat','$level')");
echo "<script>alert('Data Berhasil Ditambahkan'); window.location.href = 'login.php';</script>";
?>
