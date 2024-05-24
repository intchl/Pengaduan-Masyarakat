
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YAKIN - Layanan Pengaduan Tindak Kriminal</title>
    <link rel="stylesheet" href="a/css/bootstrap.min.css">
    <link rel="stylesheet" href="a/fontawesome/css/all.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css" />

</head>
<body>
    <div class="container">
        <div class="row d-flex justify-content-center d-flex align-content-center mt-5">
            <div class="card col-lg-8 col-sm-6 shadow mt-5" style=" background-color: rgb(255, 224, 227);" data-aos="fade-down">
                <div class="card-body">
                <h3 class="text-center text-danger text-uppercase fw-semibold" style="font-family: Arial, Helvetica, sans-serif;">Masuk</h3>
                <hr class="bg-dark">
                <div class="row d-flex flex-row-reverse justify-content-center d-flex align-content-center">
                    <div class="col-lg-6 col-sm-6 pb-3 ps-5 d-flex align-content-center">
                    <div class="image">
                        <img src="a/img/img9.svg" width="100%" alt="">
                    </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                    <form action="a/ceklogin.php" method="post">
                        <div class="form-group mb-4">
                            <label for="exampleInputEmail1" style="font-family: Arial, Helvetica, sans-serif; color:grey;">Username</label>
                            <input type="text" class="form-control shadow" style="border: none;" id="exampleInputEmail1" placeholder="Masukkan Username kamu" name="username">
                        </div>
                        <div class="form-group mb-4">
                            <label for="exampleInputPassword1" style="font-family: Arial, Helvetica, sans-serif; color:grey;">Password</label>
                            <input type="password" class="form-control shadow" style="border: none;" id="exampleInputPassword1" placeholder="Masukkan Password" name="password">
                        </div>
                        <div class="d-flex justify-content-evenly">
                            <button type="submit" name="submit" class="btn btn-primary shadow-lg rounded-pill col-12" style="font-family: Arial, Helvetica, sans-serif;">Masuk</button>
                        </div>
                    </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>


    <script src="a/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>   
        AOS.init(); 
    </script>
</body>
</html>