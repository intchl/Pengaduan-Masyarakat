<?php
include '../a/koneksi.php';
$id_petugas = $_POST['id_petugas'];
$nama_petugas = $_POST['nama_petugas'];
$username = $_POST['username'];
//sintaks di bawah jika ingin mengubah PW
$password = md5($_POST['password']);
$telp = $_POST['telp'];
$level = implode(",", $_POST['level']);
//PW TETAP
$password1 = $_POST['password'];

if ($password1=='') {
    mysqli_query($koneksi, "UPDATE petugas SET nama_petugas='$nama_petugas',username='$username',telp='$telp',level='$level' where id_petugas='$id_petugas' ");
    echo "<script>alert('Data Petugas Berhasil Diubah'); window.location.href = 'petugas.php'; </script>";
    //yg berwarna biru merupakan field sebelah kiri dari atas, penyimpan data dari variabel form.
}
else {
    mysqli_query($koneksi, "UPDATE petugas SET nama_petugas='$nama_petugas',username='$username', password ='$password',telp='$telp',level='$level' where id_petugas='$id_petugas' ");
    echo "<script>alert('Data Petugas Berhasil Diubah'); window.location.href = 'petugas.php'; </script>";
}
?>