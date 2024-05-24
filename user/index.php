<?php include'../layouts/header-user.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YAKIN - Layanan Pengaduan Tindak Kriminal</title>
    <link rel="stylesheet" href="../a/css/bootstrap.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="../a/fontawesome/css/all.css">
    <?php
        include '../a/koneksi.php';
        session_start();
        if($_SESSION['status'] != "user_login"){
            header("location:login.php?alert=belum_login");
        }
    ?>
    

</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-6 mt-lg-5 py-lg-5">
                <div class="d-flex align-items-center">
                <h2 class="text-dark text-uppercase" data-aos="fade-down">Selamat datang <br> <strong> <?php echo $_SESSION['nama'];?> </strong> <br> di Layanan Pengaduan Tindak Kriminal Polsek Rumbai</h2>
                </div>
                <div class="d-flex align-items-center">
                    <p data-aos="fade-down">Website ini dibuat untuk masyarakat menyampaikan tindakan kriminal yang terjadi di sekitar Rumbai.</p>
                </div>
                <div class="d-flex justify-content-start">
                <a href="buatLaporan.php" class="btn btn-danger shadow me-2" data-aos="fade-up">Buat Laporan</a>
                <a href="lihatLaporan.php" class="btn btn-outline-danger ms-2" data-aos="fade-up" data-aos-duration="300">Lihat Laporan</a>
                <a href="hasiltanggapan.php" class="btn btn-outline-danger ms-2" data-aos="fade-up" data-aos-duration="500">Tanggapan</a>
                </div>

            </div>
            <div class="col-lg-6 mt-lg-2">
                <div class="image d-none d-sm-block" data-aos="fade-left">
                <img src="../a/img/img7.svg" width="500" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>   
        AOS.init(); 
    </script>
</body>
</html>

<?php require '../layouts/footer-user.php'; ?>