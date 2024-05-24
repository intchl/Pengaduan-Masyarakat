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
    <div class="container">
        <div class="row mt-lg-5">
            <div class="col-lg-6 mt-lg-5 py-lg-5">
                <div class="d-flex align-items-center">
                <h2 class=" fw-bolder text-uppercase text-danger" data-aos="fade-down">Buat laporan tindakan kriminal yang anda ketahui dan terjadi di sekitar Rumbai disini</h2>
                </div>
                <div class="d-flex align-items-center">
                <p data-aos="fade-down">Sebelum mengisi form, pastikan anda sudah memiliki foto sebagi barang bukti tindak kriminal yang terjadi</p>
                </div>

            </div>
            <div class="col-lg-6 mt-lg-2">
                <div class="image d-none d-sm-block" data-aos="fade-left">
                <img src="../a/img/img8.svg" width="500" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <!--FORM PENGADUAN-->
    <div class="container mt-3">
        <div class="row d-flex justify-content-center">
            <div class="card" style="width: 50rem; background-color: rgb(255,242,242);"  data-aos="fade-down">
                <div class="card-body ">

                    <h4 class="card-title text-danger" style="text-align: center;">FORMULIR PENGADUAN TINDAK KRIMINAL POLSEK RUMBAI</h4>
                    <hr>
                    <form action="ceklaporan.php" method="POST">
                        <div class="form-row mb-3">
                        <div class="col">
                            <label for="tanggal" class="text-lg">Tanggal</label>
                            <input type="date" class="form-control mb-2" id="tanggal" name="tgl_pengaduan" style="border-radius: 15px;" required>

                            <label for="nik" class="text-lg">NIK</label>
                            <input type="number" class="form-control mb-2" id="nik" name="nik" style="border-radius: 15px;" required>
                            <p class="text-body-secondary" style="font-size:smaller;">Pastikan NIK anda benar!</p>

                            <label for=" foto" class="text-lg">Foto</label>
                            <input type="file" class="form-control-file" id="foto" name="foto" required>
                        </div>
                        <div class="col mt-3">
                            <label for="isi">Isi laporan</label>
                            <textarea class="form-control" id="isi" rows="5" name="isi_laporan" style="border-radius: 15px;" required></textarea>

                            <div class="form-check">
                            <input type="hidden" name="status" value="proses">
                            </div>

                            <div class="button mx-3 pt-1 d-flex justify-content-center">
                            <button class="btn btn-outline-danger" name="submit" type="submit">Submit</button>
                            <a href="lihatLaporan.php" class="btn btn-outline-danger ms-2" data-aos-duration="500">Lihat Laporan</a>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--END OF FORM PENGADUAN-->

    <!--FOOTER-->
    <div class="container-fluid py-3 mt-4" style="background-color: maroon;">
        <h6 class="text-center text-white">Layanan Pengaduan Tindak Kriminal Polsek Rumbai</h6>
    </div>
    <!--END OF FOOTER-->

    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>   
        AOS.init(); 
    </script>
</body>
</html>