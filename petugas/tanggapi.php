<?php 
    include_once '../a/koneksi.php';
?>
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
          <a href="index.php" class="list-group-item list-group-item-action bg-transparent second-text  border-bottom fw-semibold" data-aos="fade-right">
            <i class="fas fa-gauge me-2" ></i>Dashboard</a>

          
          <div class="fw-bold text-uppercase ps-4 pt-2 text-secondary" style="font-size: smaller" data-aos="fade-right">Fiture</div>

          <a href="laporan.php" class="list-group-item list-group-item-action bg-transparent second-text fw-semibold" data-aos="fade-right">
            <i class="fas fa-table-list me-2" href="laporan.php"></i>Laporan Masyarakat</a>

          <a href="laporan_baru.php" class="list-group-item list-group-item-action bg-transparent second-text fw-semibold" data-aos="fade-right">
            <i class="fas fa-check-double me-2"></i>Laporan Baru</a>

          <a href="tanggapan.php" class="list-group-item list-group-item-action bg-transparent second-text  active" data-aos="fade-right">
            <i class="fas fa-pen-to-square me-2"></i>Tanggapan</a>
          
          <a href="user.php" class="list-group-item list-group-item-action bg-transparent second-text fw-semibold" data-aos="fade-right">
            <i class="fas fa-users me-2"></i>Data User</a>

          <a href="../logout.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold" data-aos="fade-right">
            <i class="fas fa-power-off me-2"></i>Logout</a>
        </div>
      </div>
      <!-- /#sidebar-wrapper -->

      <!-- Page Content -->
      <?php
        $id = $_GET['id'];
        $data = mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE id_pengaduan='$id'");

        while($d = mysqli_fetch_array($data)){
      ?>
      <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light py-3 px-4 shadow d-flex justify-content-between" style="background-color: maroon;">
          <div class="d-flex align-items-center">
            <i class="fas fa-align-left text-white fs-4 me-3" id="menu-toggle" data-aos="fade-down"></i>
            <h2 class="fs-2 m-0 text-white" data-aos="fade-down">Tanggapan</h2>
          </div>
          <div class="col-6 d-flex justify-content-end align-items-center">
            <i class="fa-solid fa-user text-white fa-sm me-2" data-aos="fade-down"></i>
            <h6 class=" text-white text-uppercase" data-aos="fade-down"><?php echo $_SESSION['nama'];?></h6>
          </div>
        </nav>

        <!-- CONTENT-->
        <div class="container-fluid mt-4" data-aos="zoom-in-up">
          <div class="row px-lg-5 mt-2 d-flex justify-content-center">
            <div class="col-lg-10 col-sm-6 ">
              <div class="card shadow" >
                <div class="card-body">
                  <div class="row">
                    <div class="col-6 d-none d-sm-block ">
                      <div class="image ">
                          <img src="../a/img/img10.svg" width="100%" alt="">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <form action="proses_tanggapi.php" method="POST">
                        <div class="row">
                        <input type="hidden" class="form-control" name="id_pengaduan" required="" value="<?php echo $d['id_pengaduan']; ?>">
                          <div class="form-group mb-3 mt-2 col-6">
                            <label for="exampleInputEmail1" style="font-family: Arial, Helvetica, sans-serif; color:grey;">NIK Pengadu</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" name="nik" value="<?php echo $d['nik']; ?>" readonly>
                          </div>
                          <div class="form-group mb-3 mt-2 col-6">
                            <label for="exampleInputEmail2" style="font-family: Arial, Helvetica, sans-serif; color:grey;">Tanggal Tanggapan</label>
                            <input type="date" class="form-control" id="exampleInputEmail2" name="tgl_tanggapan" placeholder="" required >
                          </div>
                        </div>
                        <div class="form-group mb-3">
                          <label for="exampleInputEmail1" style="font-family: Arial, Helvetica, sans-serif; color:grey;">Isi Laporan</label>
                          <input type="text" class="form-control"  id="exampleInputEmail1" name="isi_laporan" value="<?php echo $d['isi_laporan']; ?>" readonly>
                        </div>
                        <div class="form-group mb-3">
                          <label for="exampleInputEmail1" style="font-family: Arial, Helvetica, sans-serif; color:grey;">Tempat Kejadian</label>
                          <input type="text" class="form-control"  id="exampleInputEmail1" name="isi_laporan" value="<?php echo $d['tmpt_kejadian']; ?>" readonly>
                        </div>
                        <div class="form-group mb-3">
                          <label for="exampleInputPassword1" style="font-family: Arial, Helvetica, sans-serif; color:grey;">Tanggapan</label>
                          <textarea type="text" class="form-control" id="exampleInputPassword2" name="tanggapan" required></textarea>
                        </div>
                        <div class="form-group mb-3">
                          <label for="exampleInputEmail1" style="font-family: Arial, Helvetica, sans-serif; color:grey;">Petugas</label>
                          <input type="text" class="form-control"  id="exampleInputEmail1" name="nama_petugas" value="<?php echo $_SESSION['nama'];?>" readonly>
                        </div>
                        <div class="d-flex justify-content-evenly">
                          <button type="submit" name="submit" class="btn btn-primary shadow-lg rounded-pill col-12" style="font-family: Arial, Helvetica, sans-serif;">OK!</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END CONTENT-->
      </div>
      <?php
        }
        ?>
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
