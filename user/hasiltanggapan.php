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
    <link rel="stylesheet" href="../a/fontawesome/css/all.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <?php
        include '../a/koneksi.php';
        session_start();
        if($_SESSION['status'] != "user_login"){
            header("location:login.php?alert=belum_login");
        }
        $nik = $_SESSION['nik'];
    ?>
    <script>
        // Fungsi untuk membuka video di jendela baru dengan tinggi dan lebar yang disesuaikan
        function openVideoWindow(videoSrc, width, height) {
          var params = "width=" + width + ",height=" + height;
          var newWindow = window.open("", "_blank", params);
        
          newWindow.document.write('<video src="' + videoSrc + '" controls autoplay></video>');
          newWindow.document.close();
        }
        // Fungsi untuk membuka foto di jendela baru dengan tinggi dan lebar yang disesuaikan
        function openImageWindow(imageSrc, width, height) {
        var params = "width=" + width + ",height=" + height;
        var newWindow = window.open("", "_blank", params);
        
        newWindow.document.write('<img src="' + imageSrc + '">');
        newWindow.document.close();
        }
        
        document.addEventListener("DOMContentLoaded", function() {
            var buttons_foto = document.querySelectorAll(".btnOpenImage");
            buttons_foto.forEach(function(button) {
                button.addEventListener("click", function() {
                var imageSrc = this.getAttribute("data-image-src");
                var width = 800; // Lebar jendela foto yang diinginkan
                var height = 600; // Tinggi jendela foto yang diinginkan
            
                // Memanggil fungsi untuk membuka foto di jendela baru saat tombol diklik
                openImageWindow(imageSrc, width, height);
                });
            });
          var buttons = document.querySelectorAll(".btnOpenVideo");
          buttons.forEach(function(button) {
            button.addEventListener("click", function() {
              var videoSrc = this.getAttribute("data-video-src");
              var width = 800; // Lebar jendela video yang diinginkan
              var height = 600; // Tinggi jendela video yang diinginkan
        
              // Memanggil fungsi untuk membuka video di jendela baru saat tombol diklik
              openVideoWindow(videoSrc, width, height);
            });
          });
        });
    </script>
</head>
<body>

    <div class="container mt-3">
        <!--JUDUL-->
        <div class="row" data-aos="fade-up">
            <div class="col-lg-12 d-flex justify-content-between">
                <h3 class="text-danger fw-bolder">Daftar Tanggapan</h3>
                <div class="">
                    <a href="buatLaporan.php" class="btn btn-danger btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fa-solid fa-plus" style="color: #ffffff;"></i>
                    </span>
                    <span class="text"> Buat Laporan</span>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        <!--END OF JUDUL-->

        <!--TABLE-->
        <div class="container-fluid">
            <div class="row px-lg-5 mt-2" data-aos="zoom-in">
                <div class="table-responsive">
                    <table class="table table-bordered shadow-sm text-center" style="border-color:maroon" >
                        <thead>
                            <tr style="background-color: maroon;" >
                                <th scope="col" style="color: whitesmoke;">No</th>
                                <th scope="col" style="color: whitesmoke;">Tanggal</th>
                                <th scope="col" style="color: whitesmoke;">Isi Laporan</th>
                                <th scope="col" style="color: whitesmoke;">Tempat Kejadian</th>
                                <th scope="col" style="color: whitesmoke;">Foto</th>
                                <th scope="col" style="color: whitesmoke;">Video</th>
                                <th scope="col" style="color: whitesmoke;">Tanggapan</th>
                                <th scope="col" style="color: whitesmoke;">Nama Petugas</th>
                                <th scope="col" style="color: whitesmoke;">Cetak Laporan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include '../a/koneksi.php';
                                
                                $no = 1;
                                $data = mysqli_query($koneksi, "SELECT * FROM ( ( tanggapan INNER JOIN pengaduan ON tanggapan.id_pengaduan = pengaduan.id_pengaduan )
                                INNER JOIN petugas ON tanggapan.nama_petugas = petugas.nama_petugas ) WHERE pengaduan.nik ='$nik'");
                                while ($c = mysqli_fetch_array($data)){
                                    ?>
                                <tr>
                                <td>
                                    <?php echo $no++ ?>
                                </td>
                                <td><?php echo $c['tgl_pengaduan'] ?></td>
                                <td><?php echo $c['isi_laporan'] ?></td>
                                <td><?php echo $c['tmpt_kejadian'] ?></td>
                                <td>
                                    <a data-image-src="http://localhost/yakin/file/<?php echo $c['foto'] ?>" class="btn btn-outline-danger form-control col-sm-9 btnOpenImage"><i class="fa-regular fa-eye"></i></a>
                                </td>
                                <td>
                                    <a data-video-src="http://localhost/yakin/file/<?php echo $c['video'] ?>" class="btn btn-outline-danger form-control col-sm-9 btnOpenVideo"><i class="fa-regular fa-eye"></i></i></a>
                                </td>
                                <td><?php echo $c['tanggapan'] ?></td>
                                <td><?php echo $c['nama_petugas'] ?></td>
                                <td>
                                    <a href="../petugas/detail.php?nik=<?php echo $c['nik']; ?>"class="btn btn-outline-danger"><i class="fa-solid fa-print"></i></a>
                                </td>
                                </tr>
                                <?php
                                }
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col d-flex justify-content-center">
                    <a href="lihatLaporan.php" class="btn btn-danger btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fa-solid fa-eye"></i>
                        </span>
                        <span class="text"> Lihat Laporan</span>
                    </a>
                </div>
            </div>
        </div>
        <!--END OF TABLE-->
    </div>

    <br>
    <br>



    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>   
        AOS.init(); 
    </script>
</body>
</html>
<?php include'../layouts/footer-user.php';