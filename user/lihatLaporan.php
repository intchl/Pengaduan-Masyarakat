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
</head>
<body>

    <div class="container mt-3">
        <!--JUDUL-->
        <div class="row" data-aos="fade-up">
            <div class="col-lg-12 d-flex justify-content-between">
                <h3 class="text-danger fw-bolder">Daftar Laporan</h3>
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
                                <th scope="col" style="color: whitesmoke;">NIK</th>
                                <th scope="col" style="color: whitesmoke;">Isi Laporan</th>
                                <th scope="col" style="color: whitesmoke;">Foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include '../a/koneksi.php';
                                $no = 1;
                                $data = mysqli_query($koneksi, "SELECT * FROM pengaduan");
                                while ($c = mysqli_fetch_array($data)){
                                    ?>
                                <tr>
                                <td>
                                    <?php echo $no++ ?>
                                </td>
                                <td><?php echo $c['tgl_pengaduan'] ?></td>
                                <td><?php echo $c['nik'] ?></td>
                                <td><?php echo $c['isi_laporan'] ?></td>
                                <td><?php echo $c['foto'] ?></td>
                                </tr>
                                <?php
                                }
                                ?>
                        </tbody>
                    </table>
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