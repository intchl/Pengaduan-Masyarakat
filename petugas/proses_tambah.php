<?php
include '../a/koneksi.php';
$id = $_POST['id'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = md5 ($_POST['password']);
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];
$level = 'masyarakat';

mysqli_query($koneksi, "INSERT INTO masyarakat values ('','$nik','$nama','$username','$password','$telp','$alamat','$level')");
echo "<script>alert('Data Masyarakat Berhasil Ditambahkan'); window.location.href = 'user.php';</script>";
?>