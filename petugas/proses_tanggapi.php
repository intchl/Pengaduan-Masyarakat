<?php
include '../a/koneksi.php';
$id_pengaduan = $_POST['id_pengaduan'];
$tgl_tanggapan = $_POST['tgl_tanggapan'];
$tanggapan = $_POST['tanggapan'];
$id_petugas = $_POST['id_petugas'];

$id_pengaduan = $_POST['id_pengaduan'];
$status = implode(",", $_POST['status']);


mysqli_query($koneksi, "INSERT INTO tanggapan values ('', '$id_pengaduan','$tgl_tanggapan','$tanggapan','$id_petugas')");

mysqli_query($koneksi, "UPDATE pengaduan SET status='$status' where id_pengaduan='$id_pengaduan' ");
    echo "<script>alert('Laporan Berhasil Ditanggapi'); window.location.href = 'tanggapan.php'; </script>";