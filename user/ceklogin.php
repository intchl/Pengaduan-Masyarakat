<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include '../a/koneksi.php';

// menangkap data yang dikirim dari form login
$user = $_POST['username']; //sebelah kanan sesuai dgn field database
$pass = md5($_POST['password']); //md5 agar password tidak terbaca

// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from masyarakat where username='$user' and password='$pass'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['level']=="masyarakat"){

		// buat session login dan username
		
		$_SESSION['nik'] = $data['nik'];
		$_SESSION['nama'] = $data['nama'];
		$_SESSION['user'] = $data['username']; //sebelah kiri dari variabel yg dibikin, kanan dari field database
		$_SESSION['pass'] = $data['password'];
		$_SESSION['telp'] = $data['telp'];
		$_SESSION['alamat'] = $data['alamat'];
        $_SESSION['status'] = "user_login"; //untuk memanggil field tampil di index
		// alihkan ke halaman dashboard admin
		echo "<script>alert('Selamat Datang!');document.location='index.php'</script>";
	}else{

		// alihkan ke halaman login kembali
		echo "<script>alert('Gagal Login!');document.location='login'</script>";
	}	
}else{
	echo "<script>alert('Gagal Login!');document.location='login.php'</script>";
}

?>