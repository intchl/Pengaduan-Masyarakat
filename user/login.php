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

    <div class="container my-2">
        <div class="row d-flex justify-content-center d-flex align-content-center mx-3">
            <div class="card shadow col-lg-4 py-5 " style="background-color: maroon;">
                <img src="../a/img/logo.png" class="col-lg-4 img-fluid rounded mx-auto d-block" alt="">
                <h3 class="text-center my-4 text-white text-uppercase fw-semibold border-bottom pb-3" style="font-family: Arial, Helvetica, sans-serif;">masuk</h3>
                <!--FORM-->
                <form action="ceklogin.php" method="post"> 
                    <div class="form-group mb-5">
                        <label for="exampleInputEmail1" class="form-label text-white">Username</label>
                        <input type="text" class="form-control shadow" id="exampleInputEmail1" placeholder="Masukkan Username Anda"  name="username" aria-describedby="emailHelp" style="border-radius: 25px;" required>
                        <div id="emailHelp" class="form-text text-white">Pastikan Username Anda Benar!</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label text-white">Password</label>
                        <input type="password" id="exampleInputPassword1" class="form-control shadow" name="password" placeholder="Masukkan password anda"  style="border-radius: 25px;" required>
                        <div id="emailHelp" class="form-text text-white">Pastikan Password Anda Benar!</div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary rounded-pill mx-auto d-block col-8">Masuk</button>
                    <div class="text-center mt-2">
                        <a href="register.php" class="text-white" style="text-decoration: none;" style="font-family: Arial, Helvetica, sans-serif; color:whitesmoke">Belum Punya Akun?</a>
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