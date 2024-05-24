<?php
include '../a/koneksi.php';


// logic backend


// mengambil angka pengaduan dari database
$pengaduan = mysqli_query($koneksi, "SELECT * FROM pengaduan ORDER BY id_pengaduan  DESC LIMIT 1");

// mengambil angka tanggapan dari database
$tanggapan = mysqli_query($koneksi, "SELECT * FROM tanggapan ORDER BY id_tanggapan DESC LIMIT 1");

// mengambil angka akun masyarakat dari database
$masyarakat = mysqli_query($koneksi, "SELECT * FROM masyarakat ORDER BY nik  DESC LIMIT 1");

// query untuk menjalankan looping generate
$query = "SELECT * FROM (( tanggapan INNER JOIN pengaduan ON tanggapan.id_pengaduan = pengaduan.id_pengaduan )
                          INNER JOIN petugas ON tanggapan.id_petugas = petugas.id_petugas )";

$result = mysqli_query($koneksi, $query);

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
    <title>DashMin</title>
  </head>

  <body>
    <div class="d-flex" id="wrapper" >
      <!-- Sidebar -->
      <div class="bg-white" id="sidebar-wrapper">
        <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom" data-aos="fade-right">
          <i class="fa-solid fa-user-tie fa-xl" style="color: #610000"></i> DashMin</div>

        <div class="list-group list-group-flush">
          <a href="index.php" class="list-group-item list-group-item-action bg-transparent second-text active border-bottom" data-aos="fade-right">
            <i class="fas fa-gauge me-2" ></i>Dashboard</a>

          <div class="fw-bold text-uppercase ps-4 pt-2 text-secondary" style="font-size: smaller" data-aos="fade-right">Fiture</div>

          <a href="laporan.php" class="list-group-item list-group-item-action bg-transparent second-text fw-semibold" data-aos="fade-right">
            <i class="fas fa-table-list me-2" href="laporan.php"></i>Laporan Masyarakat</a>

          <a href="terverifikasi.php" class="list-group-item list-group-item-action bg-transparent second-text fw-semibold" data-aos="fade-right">
            <i class="fas fa-check-double me-2"></i>Laporan Selesai</a>

          <a href="tanggapan.php" class="list-group-item list-group-item-action bg-transparent second-text fw-semibold" data-aos="fade-right">
            <i class="fas fa-pen-to-square me-2"></i>Tanggapan</a>

          <a href="petugas.php" class="list-group-item list-group-item-action bg-transparent second-text fw-semibold" data-aos="fade-right">
            <i class="fa-solid fa-people-line me-2"></i>Data Petugas</a>

          <a href="../logout.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold" data-aos="fade-right">
            <i class="fas fa-power-off me-2"></i>Logout</a>
        </div>
      </div>
      <!-- /#sidebar-wrapper -->

      <!-- Page Content -->
      <div id="page-content-wrapper" >
        <nav class="navbar navbar-expand-lg navbar-light py-3 px-4 shadow" style="background-color: maroon;">
          <div class="d-flex align-items-center">
            <i class="fas fa-align-left text-white fs-4 me-3" id="menu-toggle" data-aos="fade-down"></i>
            <h2 class="fs-2 m-0 text-white" data-aos="fade-down">Dashboard</h2>
          </div>

          <button 
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" ></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent" data-aos="fade-down">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle text-white fw-bold"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <i class="fas fa-user me-2 text-white"></i>John Doe
                </a>
              </li>
            </ul>
          </div>
        </nav>
        <!--CONTENT-->
        <div class="container mt-2" style="margin-top: -35px ;">
          <?php while ($row = mysqli_fetch_assoc($pengaduan)) : ?>
          <div class="row mb-3 mt-4" data-aos="fade-up">
            <div class="col-lg-4 mb-2 border-bottom-info" >
                <div class="card shadow-lg h-100 py-2 "> <!--ATUR GARIS-->
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                    <div class="col ms-3">
                        <div class="h4 py-1 fw-bold text-info d-flex justify-content-between"><?= $row['id_pengaduan']; ?> Pengaduan <i class="fa-solid fa-comment fa-xl d-flex align-items-center" style="color: #a4adbc;"></i></div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <?php endwhile; ?>

            <?php while ($row = mysqli_fetch_assoc($tanggapan)) : ?>
            <div class="col-md-4 mb-2">
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
            <div class="col-md-4 mb-2">
                <div class="card border-left-warning border-bottom-warning shadow-lg h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                    <div class="col ms-3">
                        <div class="h4 py-1 fw-bold text-warning d-flex justify-content-between">5 Akun masyarakat <i class="fas fa-users fa-xl d-flex align-items-center" style="color: #a4adbc;"></i></div>
                    </div>
                    
                    </div>
                </div>
                </div>
            </div>
            <?php endwhile ?>
          </div>
        </div>
        <!--END OF CONTENT-->
      </div>
      <!-- /#page-content-wrapper -->
    </div>
    <script src="../a/js/bootstrap.bundle.min.js"></script>
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
