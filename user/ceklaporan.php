<?php
include '../a/koneksi.php';
$tgl = $_POST['tgl_pengaduan'];
$nik = $_POST['nik'];
$laporan= $_POST['isi_laporan'];
$tmpt = $_POST['tmpt_kejadian'];
$status = 'proses';



$video = $_FILES['video']['name'];
$ekstensi_allow_video = array('mp4');

$foto = $_FILES['foto']['name'];
$ekstensi_allow_foto = array(['jpg','png','jpeg']);

$folder='../file/';
$source_video= $_FILES['video']['tmp_name'];
$source_foto= $_FILES['foto']['tmp_name'];

$ekstensi_video = strtolower(end(explode('.',$_FILES['video']['name'])));
$ekstensi_ok_video= in_array($ekstensi_video, $ekstensi_allow_video, $folder.$video);

$ekstensi_foto = strtolower(end(explode('.',$_FILES['foto']['name'])));
$ekstensi_ok_foto= in_array($ekstensi_foto, $ekstensi_allow_foto, $folder.$video);

if(!($ekstensi_ok_video)) {
    header("location:buatLaporan.php?pesan=gagal");
}else{
    move_uploaded_file($source_video, $folder.$video);
    move_uploaded_file($source_foto, $folder.$foto);

    mysqli_query($koneksi, "INSERT INTO pengaduan values ('','$tgl','$nik','$laporan','$tmpt','$foto','$video','$status')");
    echo "<script>alert('Laporan Berhasil Ditambahkan'); window.location.href = 'lihatLaporan.php';</script>";
}
?>