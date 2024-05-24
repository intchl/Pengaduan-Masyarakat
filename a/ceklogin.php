<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$user = $_POST['username']; //sebelah kanan sesuai dgn field database
$pass = md5($_POST['password']); //md5 agar password tidak terbaca

// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from petugas where username='$user' and password='$pass'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['level']=="admin"){

		// buat session login dan username

		$_SESSION['user'] = $data['username']; //sebelah kiri dari variabel yg dibikin, kanan dari field database
		$_SESSION['nama'] = $data['nama_petugas'];
		$_SESSION['pass'] = $data['password'];
        $_SESSION['status'] = "admin_login"; //untuk memanggil field tampil di index
		// alihkan ke halaman dashboard admin
		echo "<script>alert('Selamat Datang!');document.location='../admin/index.php'</script>";

	// cek jika user login sebagai siswa
	}else if($data['level']=="petugas"){
		// buat session login dan username
        $_SESSION['username'] = $data['username'];
        $_SESSION['nama'] = $data['nama_petugas'];
		$_SESSION['pass'] = $data['password'];
        $_SESSION['status'] = "petugas_login";
		// alihkan ke halaman dashboard pegawai
		echo "<script>alert('Selamat Datang!');document.location='../petugas/index.php'</script>";
	}else{

		// alihkan ke halaman login kembali
		echo "<script>alert('Gagal Login!');document.location='../login'</script>";
	}	
}else{
	echo "<script>alert('Gagal Login!');document.location='../login.php'</script>";
}

?>