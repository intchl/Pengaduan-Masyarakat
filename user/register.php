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

    <div class="container my-2 ">
        <div class="row d-flex justify-content-center d-flex align-content-center mx-3">
            <div class="card shadow col-lg-4 py-4" data-aos="zoom-in" style="background-color: maroon;">
                <img src="../a/img/logo.png" class="col-lg-4 img-fluid rounded mx-auto d-block" alt="">
                <h3 class="text-center my-4 text-white text-uppercase fw-semibold border-bottom pb-3" style="font-family: Arial, Helvetica, sans-serif;">registrasi</h3>
                <!--FORM-->
                <form action="cekregis.php" method="post"> 
                    <div class="form-group">
                        <input type="number" class="form-control py-2 mb-3 shadow-sm" placeholder="NIK" style="border-radius: 25px;" name="nik" required> 
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control py-2 mb-3 shadow-sm" placeholder="Nama" style="border-radius: 25px;" name="nama" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control py-2 mb-3 shadow-sm" placeholder="Username" style="border-radius: 25px;" name="username" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control py-2 mb-3 shadow-sm" placeholder="Password" style="border-radius: 25px;" name="password" required>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control py-2 mb-4 shadow-sm" placeholder="No telepon" style="border-radius: 25px;" name="telp" required>
                    </div>
                    <div class="mb-2 text-center">
                        <a href="login.php" class="text-white" style="text-decoration: none;">Sudah Punya Akun?</a>
                    </div>
                    <div class="button">
                        <button class="btn btn-danger shadow-sm py-2 col-12" name="submit" style="border-radius: 25px;">Registrasi</button>
                    </div>
                </form>
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