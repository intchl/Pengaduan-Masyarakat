<?php
include '../a/koneksi.php';
$id = $_POST['id'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$username = $_POST['username'];
//sintaks di bawah jika ingin mengubah PW
$password = md5($_POST['password']);
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];
$level ='masyarakat';
//PW TETAP
$password1 = $_POST['password'];

if ($password1=='') {
    mysqli_query($koneksi, "UPDATE masyarakat SET nik='$nik',nama='$nama',username='$username',telp='$telp',level='$level' where id='$id' ");
    echo "<script>alert('Data Masyarakat Berhasil Diubah'); window.location.href = 'user.php'; </script>";
    //yg berwarna biru merupakan field sebelah kiri dari atas, penyimpan data dari variabel form.
}
else {
    mysqli_query($koneksi, "UPDATE masyarakat SET nik='$nik',nama='$nama',username='$username', password ='$password',telp='$telp',level='$level' where id='$id' ");
    echo "<script>alert('Data Masyarakat Berhasil Diubah'); window.location.href = 'user.php'; </script>";
}
?>