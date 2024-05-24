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
  </head>

  <body>
    <div class="d-flex" id="wrapper" >
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

        <div class="container-fluid">
          <div class="row d-flex justify-content-center" data-aos="zoom-in">
            <div class="col-lg-8">
              <div class="card m-3 bg-transparent border-0">
                <div class="card-body">
                  <div class="image">
                    <img src="../a/img/img11.svg" width="100%" alt="">
                  </div>
                  <h2 class="text-center">Selamat Datang di</h2>
                  <h1 class="text-center fw-bolder" style="color: #610000"> DASHBOARD PETUGAS </h1>
                  <a href="laporan.php" class="btn d-flex justify-content-center" style="background-color: #610000;">
                    <span class="text-white">Lihat Laporan</span>
                </a>
                </div>
              </div>
                
            </div>
          </div>
        </div>
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
