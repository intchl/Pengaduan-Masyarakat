<?php

require '../public/app.php';

// Logic Backend

if (isset($_POST['submit'])) {

    if (regisUser($_POST) > 0)
    header("location: sukses.php");
}

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

    <div class="container py-5 ">
        <div class="row d-flex align-items-center d-flex justify-content-center my-4">
            <div class="col-lg-4 card shadow" style="background-color: rgba(28,200,138,255);" data-aos="zoom-in">
                <div class="card-body border-bottom-primary">
                    <h4 class="text-center text-white">Registrasi Sukses!</h4>
                    <hr>
                    <img src="../a/img/sukses.svg" width="250" alt="" data-aos="zoom-in" data-aos-duration="700" class="ms-4 py-5">
                    <div class="button mt-3">
                        <a href="login.php" class="btn btn-primary text-light shadow">OK!</a>
                    </div>
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