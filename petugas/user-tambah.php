<?php include_once '../a/koneksi.php' ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../a/css/bootstrap.min.css">
    <link rel="stylesheet" href="../a/fontawesome/css/all.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css" />
    <title>DashGas</title>
    <?php
        include '../a/koneksi.php';
        session_start();
        if($_SESSION['status'] != "petugas_login"){
            header("location:../login.php?alert=belum_login");
        }
    ?>
  </head>

  <body>
    <div class="d-flex" id="wrapper">
      <!-- Sidebar -->
      <div class="bg-white" id="sidebar-wrapper">
        <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom" data-aos="fade-right">
            <i class="fa-solid fa-people-line fa-xl" style="color: #610000"></i> DashGas</div>

        <div class="list-group list-group-flush">
            <a href="index.php" class="list-group-item list-group-item-action bg-transparent second-text active border-bottom" data-aos="fade-right">
            <i class="fas fa-gauge me-2" ></i>Dashboard</a>

        
            <div class="fw-bold text-uppercase ps-4 pt-2 text-secondary" style="font-size: smaller" data-aos="fade-right">Fiture</div>

                <a href="laporan.php" class="list-group-item list-group-item-action bg-transparent second-text fw-semibold" data-aos="fade-right">
                <i class="fas fa-table-list me-2" href="laporan.php"></i>Laporan Masyarakat</a>

                <a href="laporan_baru.php" class="list-group-item list-group-item-action bg-transparent second-text fw-semibold" data-aos="fade-right">
                <i class="fas fa-check-double me-2"></i>Laporan Baru</a>

                <a href="tanggapan.php" class="list-group-item list-group-item-action bg-transparent second-text fw-semibold" data-aos="fade-right">
                <i class="fas fa-pen-to-square me-2"></i>Tanggapan</a>
            
                <a href="user.php" class="list-group-item list-group-item-action bg-transparent second-text active border-bottom" data-aos="fade-right">
                <i class="fas fa-users me-2"></i>Data User</a>

                <a href="../logout.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold" data-aos="fade-right">
                <i class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
      <!-- /#sidebar-wrapper -->

      <!-- Page Content -->
      <div id="page-content-wrapper" >
        <nav class="navbar navbar-expand-lg navbar-light py-3 px-4 shadow" style="background-color: maroon;">
          <div class="col-6 d-flex align-items-center">
            <i class="fas fa-align-left text-white fs-4 me-3" id="menu-toggle" data-aos="fade-down"></i>
            <h2 class="fs-2 m-0 text-white" data-aos="fade-down">Tambah User</h2>
          </div>
          <div class="col-6 d-flex justify-content-end align-items-center">
            <i class="fa-solid fa-user text-white fa-sm me-2" data-aos="fade-down"></i>
            <h6 class=" text-white text-uppercase" data-aos="fade-down"><?php echo $_SESSION['nama'];?></h6>
          </div>
        </nav>

        <!-- CONTENT-->
        <div class="container-fluid d-flex justify-content-center" data-aos="zoom-in-up">
          <div class="row mt-5 d-flex justify-content-around ">
            <div class="col-6 d-none d-sm-block">
              <div class="image">
                <img src="../a/img/img12.svg" width="90%" alt="">
              </div>
            </div>
            <div class="col-5 d-none d-sm-block">
              <div class="card bg-transparent border-0" style="width:100%;">
                <div class="card-body">
                  <h4 class="card-title d-flex justify-content-center fw-bold text-uppercase" style="color: maroon;">Tambah User</h4>
                  <hr>
                  <form action="proses_tambah.php" method="POST">
                    <div class="form-group">
                      <input type="text" class="form-control py-2 shadow mb-3 border border-danger" placeholder="NIK" style="border-radius: 25px;" name="nik" required>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control py-2 shadow mb-3 border border-danger" placeholder="Nama Lengkap Sesuai KTP" style="border-radius: 25px;" name="nama" required>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control py-2 shadow mb-3 border border-danger" placeholder="Username" style="border-radius: 25px;" name="username" required>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control py-2 shadow mb-3 border border-danger" placeholder="Password" style="border-radius: 25px;" name="password" required>
                    </div>
                    <div class="form-group">
                      <input type="number" class="form-control py-2 shadow mb-3 border border-danger" placeholder="No telepon" style="border-radius: 25px;" name="telp" required>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control py-2 shadow mb-3 border border-danger" placeholder="Alamat" style="border-radius: 25px;" name="alamat" required>
                    </div>
                    <div class="button d-flex justify-content-center">
                      <button class="btn btn-danger shadow py-2 mt-3 col-6" name="submit" style="border-radius: 25px;">Registrasi</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--RESPONSIVE-->
        <div class="container-fluid  d-block d-sm-none" data-aos="zoom-in-up">
          <div class="row d-flex justify-content-center">
            <div class="col-10 d-flex justify-content-center">
              <div class="card bg-transparent border-0" style="width:100%;">
                  <div class="card-body">
                    <h4 class="card-title d-flex justify-content-center fw-bold text-uppercase" style="color: maroon;">Tambah Petugas</h4>
                    <hr>
                    <form action="proses_tambah.php" method="POST">
                      <div class="form-group">
                        <input type="text" class="form-control py-2 shadow mb-3 border border-danger" placeholder="NIK" style="border-radius: 25px;" name="nik" required>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control py-2 shadow mb-3 border border-danger" placeholder="Nama Lengkap Sesuai KTP" style="border-radius: 25px;" name="nama" required>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control py-2 shadow mb-3 border border-danger" placeholder="Username" style="border-radius: 25px;" name="username" required>
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control py-2 shadow mb-3 border border-danger" placeholder="Password" style="border-radius: 25px;" name="password" required>
                      </div>
                      <div class="form-group">
                        <input type="number" class="form-control py-2 shadow mb-3 border border-danger" placeholder="No telepon" style="border-radius: 25px;" name="telp" required>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control py-2 shadow mb-3 border border-danger" placeholder="Alamat" style="border-radius: 25px;" name="alamat" required>
                      </div>
                      <div class="button d-flex justify-content-center">
                        <button class="btn btn-danger shadow py-2 mt-3 col-6" name="submit" style="border-radius: 25px;">Registrasi</button>
                      </div>
                  </form>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <!-- END CONTENT-->
      </div>
      <!-- /#page-content-wrapper -->
    </div>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>   
        AOS.init(); 
    </script>
    <script>
      var el = document.getElementById("wrapper");
      var toggleButton = document.getElementById("menu-toggle");

      toggleButton.onclick = function () {
        el.classList.toggle("toggled");
      };
    </script>
  </body>
</html>
