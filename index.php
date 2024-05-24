<?php include'layouts/header1.php';
include 'a/koneksi.php';



// logic backend


// mengambil angka pengaduan dari database
$pengaduan = mysqli_query($koneksi, "SELECT * FROM pengaduan ORDER BY id_pengaduan  DESC LIMIT 1");

// mengambil angka tanggapan dari database
$tanggapan = mysqli_query($koneksi, "SELECT * FROM tanggapan ORDER BY id_tanggapan DESC LIMIT 1");

// mengambil angka akun masyarakat dari database
$masyarakat = mysqli_query($koneksi, "SELECT * FROM masyarakat ORDER BY id DESC LIMIT 1");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YAKIN - Layanan Pengaduan Tindak Kriminal</title>
    <link rel="stylesheet" href="a/css/bootstrap.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="a/fontawesome/css/all.css">
    <style>
        .desc{
            font-family:Arial, Helvetica, sans-serif;
            text-align: justify;
        }
    </style>
    

</head>
<body>
    <!--HEADER-->
    <div class="container-fluid pb-5" style="background-color:maroon" >
        <div class="row d-flex justify-content-center" data-aos="zoom-in">
            <div class="col-10 col-lg-6 col-md-6 text-white text-center py-5">
                <br>
                <h1>Yakin Polsek Rumbai</h1>
                <p>Yakin adalah Layanan Pengaduan Tindak Kriminal yang dimiliki oleh Polsek Rumbai. Situs resmi Polsek Rumbai ini dibuat untuk mengatasi keresahan masyarakat ketika ingin melapor ke pihak yang berwenang.
                    Segera laporkan tindak kriminal di sekitar anda!
                </p>
                <a href="user/login.php" class="btn btn-outline-light">Buat laporan sekarang!</a>
                <br>
                <br>
            </div>
        </div>
        
    </div>
    <!--END 0F HEADER-->

    <!--CARD-->
    <div class="container" style="margin-top: -35px ;">
        <div class="row mb-3 ">
            <?php while ($row = mysqli_fetch_assoc($pengaduan)) : ?>
            <div class="col-lg-4 mb-2 border-bottom-info" data-aos="fade-up" data-aos-duration="500">
                <div class="card shadow-lg h-100 py-2"> <!--ATUR GARIS-->
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                    <div class="col ms-3">
                        <div class="h4 py-1 fw-bold text-info d-flex justify-content-between"><?= $row['id_pengaduan']; ?> Pengaduan <i class="fa-solid fa-comment fa-xl d-flex align-items-center" style="color: #a4adbc;"></i></div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <?php endwhile;?>
            
            <?php while ($row = mysqli_fetch_assoc($tanggapan)) : ?>
            <div class="col-md-4 mb-2" data-aos="fade-up" data-aos-duration="700">
                <div class="card border-left-success border-bottom-success shadow-lg h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                    <div class="col ms-3">
                        <div class="h4 py-1 fw-bold text-success d-flex justify-content-between"><?= $row['id_tanggapan']; ?> Tanggapan <i class="fa-solid fa-comments fa-xl d-flex align-items-center" style="color: #a4adbc;"></i></div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <?php endwhile; ?>
            
            <?php while ($row = mysqli_fetch_assoc($masyarakat)) : ?>
            <div class="col-lg-4 mb-2 border-bottom-info" data-aos="fade-up" data-aos-duration="500">
                <div class="card shadow-lg h-100 py-2"> <!--ATUR GARIS-->
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                    <div class="col ms-3">
                        <div class="h4 py-1 fw-bold text-danger d-flex justify-content-between"><?= $row['id']; ?> Akun Masyarakat<i class="fa-solid fa-users-line fa-xl d-flex align-items-center" style="color: #a4adbc;"></i></div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
    <!--END 0F CARD-->

    <div class="container-fluid d-flex justify-content-between mt-4 d-none d-sm-block" style="background-color: maroon;">
        <div class="container">
            <div class="row  d-flex align-items-center">
                <div class="col-6 py-5 d-flex justify-content-center">
                    <div class="img" data-aos="fade-right">
                        <img src="a/img/kapolres.jpg" width="350px" alt="">
                    </div>
                </div>
                <div class="col-6"  data-aos="fade-left">
                    <h4 class="desc text-white text-center fw-bold">Dr. PRIA BUDI, S.I.K., M.H.</h4>
                    <h4 class="desc text-white text-center fw-bold">Kapolres Pekanbaru</h4>
                </div>
            </div>
        </div>
    </div>
    <!--FOR PHONE-->
    <div class="container-fluid d-flex justify-content-between mt-4 d-block d-sm-none" style="background-color: maroon;">
        <div class="container">
            <div class="row  d-flex align-items-center">
                <div class="col-12 pt-5 pb-3 d-flex justify-content-center">
                    <div class="img" data-aos="fade-right">
                        <img src="a/img/kapolres.jpg" width="300px" alt="">
                    </div>
                </div>
                <div class="col-12 pb-3"  data-aos="fade-left">
                    <h4 class="desc text-white text-center">Dr. PRIA BUDI, S.I.K., M.H.</h4>
                    <h4 class="desc text-white text-center">Kapolres Pekanbaru</h4>
                </div>
            </div>
        </div>
    </div>
    <!--END FOR PHONE-->

    <!--CONTAINER-->
    <div class="container d-flex justify-content-between d-none d-sm-block">
        <div class="row  d-flex align-items-center">
            <div class="col-6 " data-aos="fade-right">
                <h4 class="desc text-body-secondary ">Buat laporan, aduan tindak kriminal di website Layanan Pengaduan Tindak Kriminal ini dan jangan menyebarkan berita hoax!</h4>
            </div>
            <div class="col-6 ">
                <div class="img" data-aos="fade-left">
                    <img src="a/img/img2.svg" width="450" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container d-flex justify-content-between mt-4 d-none d-sm-block">
        <div class="row  d-flex align-items-center">
            <div class="col-6">
                <div class="img" data-aos="fade-right">
                    <img src="a/img/img4.svg" width="450" alt="">
                </div>
            </div>
            <div class="col-6"  data-aos="fade-left">
                <h4 class="desc text-body-secondary">Jangan lupa mengirimkan foto anda saat menyampaikan laporan, aduan ataupun keluh kesah anda di web ini.</h4>
            </div>
        </div>
    </div>

    <div class="container d-flex justify-content-between mt-4 d-none d-sm-block">
        <div class="row  d-flex align-items-center">
            <div class="col-6" data-aos="fade-right">
                <h4 class="desc text-body-secondary ">Setelah menyapaikan laporan, aduan atau keluh kesah anda dapat menunggu tanggapan dengan santai.</h4>
            </div>
            <div class="col-6">
                <div class="img" data-aos="fade-left">
                    <img src="a/img/img3.svg" width="450" alt="">
                </div>
            </div>
        </div>
    </div>
    <!--FOR PHONE-->
    <div class="container d-block d-sm-none">
        <div class="row d-flex justify-content-center mt-3">
            <div class="col-10">
                <div class="img" data-aos="fade-left">
                    <img src="a/img/img2.svg" width="300" alt="">
                </div>
            </div>
            <div class="col-10" data-aos="fade-right">
                <h4 class="desc text-body-secondary ">Buat laporan, aduan tindak kriminal di website Layanan Pengaduan Tindak Kriminal ini dan jangan menyebarkan berita hoax!</h4>
            </div>
        </div>
    </div>

    <div class="container d-block d-sm-none">
        <div class="row d-flex justify-content-center mt-3">
            <div class="col-10">
                <div class="img" data-aos="fade-right">
                    <img src="a/img/img4.svg" width="300" alt="">
                </div>
            </div>
            <div class="col-10"  data-aos="fade-left">
                <h4 class="desc text-body-secondary">Jangan lupa mengirimkan foto anda saat menyampaikan laporan, aduan ataupun keluh kesah anda di web ini.</h4>
            </div>
        </div>
    </div>

    <div class="container d-block d-sm-none">
        <div class="row d-flex justify-content-center my-3">
            <div class="col-10">
                <div class="img" data-aos="fade-left">
                    <img src="a/img/img3.svg" width="300" alt="">
                </div>
            </div>
            <div class="col-10" data-aos="fade-right">
                <h4 class="desc text-body-secondary ">Setelah menyapaikan laporan, aduan atau keluh kesah anda dapat menunggu tanggapan dengan santai.</h4>
            </div>
        </div>
    </div>
    <!--END FOR PHONE-->
    <!--END 0F CONTAINER-->
            
    <!--INFO-->
    <div class="container-fluid" style="background-color: maroon;">
        <div class="row py-5" data-aos="zoom-in">
            <h1 class="mb-3 text-white text-center" style="font-family: Arial, Helvetica, sans-serif;">Info Aduan Masyarakat</h1>
            <div class="d-grid gap-2 d-md-flex justify-content-center">
                <a href="mailto:pengaduanYakin@gmail.com" class="btn btn-light me-md-2">Chat Admin</a>
                <a href="mailto:pengaduanYakin@gmail.com" class="btn btn-outline-light">Contact Developer</a>
            </div>
        </div>
    </div>
    <!--END OF INFO-->

    <!--START TESTIMONI CARD-->
    <div class="container py-5">
        <h2 class="text-center text-uppercase text-body-secondary fw-bolder" data-aos="zoom-in-up" style="font-family: Arial, Helvetica, sans-serif;">testimonial</h2>
        <hr>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-4 mb-2">
            <div class="card shadow-sm" data-aos="fade-up" data-aos-duration="500">
                <div class="card-body">
                <img src="img/tulis.svg" width="35" class="rounded-circle" alt="">
                <span>Asep Kurniawan</span> |
                <span>Pegawai Swasta</span>
                <hr>
                <div class="card-text text-justify">" Web ini sangat membantu."</div>
                </div>
            </div>
            </div>
            <div class="col-lg-4 mb-2">
            <div class="card shadow-sm" data-aos="fade-up" data-aos-duration="700">
                <div class="card-body">
                <img src="img/img-dashboard-user.svg" width="35" class="rounded-circle" alt="">
                <span>Tegar Sutrisno</span> |
                <span>Guru SMK</span>
                <hr>
                <div class="card-text text-justify">" Bagus sekali, sangat mudah digunakan."</div>
                </div>
            </div>
            </div>
            <div class="col-lg-4 mb-2">
            <div class="card shadow-sm" data-aos="fade-up" data-aos-duration="900">
                <div class="card-body">
                <img src="img/login.svg" width="35" class="rounded-circle" alt="">
                <span>Muhammad Ikhsan</span> |
                <span>Staff BUMN </span>
                <hr>
                <div class="card-text text-justify">" BRAVO POLSEK RUMBAI. "</div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!--END TESTIMONI CARD-->

    <!--FOOTER-->
    <div class="container-fluid py-3" style="background-color: maroon;">
        <h6 class="text-center text-white">Layanan Pengaduan Tindak Kriminal Polsek Rumbai</h6>
    </div>
    <!--END OF FOOTER-->
    <script src="a/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>   
        AOS.init(); 
    </script>
</body>
</html>