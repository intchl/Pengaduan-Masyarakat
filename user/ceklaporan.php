<?php
include '../a/koneksi.php';
$tgl = $_POST['tgl_pengaduan'];
$nik = $_POST['nik'];
$foto = $_POST['foto'];
$laporan= $_POST['isi_laporan'];
$status = 'proses';

mysqli_query($koneksi, "INSERT INTO pengaduan values ('','$tgl','$nik','$foto','$laporan','$status')");
echo "<script>alert('Laporan Berhasil Ditambahkan'); window.location.href = 'lihatLaporan.php';</script>";
?>