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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.10.0/jspdf.umd.min.js"></script>
    <title>DashGas</title>
    <script>
        // Fungsi untuk membuka video di jendela baru dengan tinggi dan lebar yang disesuaikan
        function openVideoWindow(videoSrc, width, height) {
          var params = "width=" + width + ",height=" + height;
          var newWindow = window.open("", "_blank", params);
        
          newWindow.document.write('<video src="' + videoSrc + '" controls autoplay></video>');
          newWindow.document.close();
        }
        // Fungsi untuk membuka foto di jendela baru dengan tinggi dan lebar yang disesuaikan
        function openImageWindow(imageSrc, width, height) {
        var params = "width=" + width + ",height=" + height;
        var newWindow = window.open("", "_blank", params);
        
        newWindow.document.write('<img src="' + imageSrc + '">');
        newWindow.document.close();
        }
        
        document.addEventListener("DOMContentLoaded", function() {
            var buttons_foto = document.querySelectorAll(".btnOpenImage");
            buttons_foto.forEach(function(button) {
                button.addEventListener("click", function() {
                var imageSrc = this.getAttribute("data-image-src");
                var width = 800; // Lebar jendela foto yang diinginkan
                var height = 600; // Tinggi jendela foto yang diinginkan
            
                // Memanggil fungsi untuk membuka foto di jendela baru saat tombol diklik
                openImageWindow(imageSrc, width, height);
                });
            });
          var buttons = document.querySelectorAll(".btnOpenVideo");
          buttons.forEach(function(button) {
            button.addEventListener("click", function() {
              var videoSrc = this.getAttribute("data-video-src");
              var width = 800; // Lebar jendela video yang diinginkan
              var height = 600; // Tinggi jendela video yang diinginkan
        
              // Memanggil fungsi untuk membuka video di jendela baru saat tombol diklik
              openVideoWindow(videoSrc, width, height);
            });
          });
        });
    </script>
  </head>

<body>
        

  <div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-white" id="sidebar-wrapper">
        <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom" data-aos="fade-right">
          <i class="fa-solid fa-people-line fa-xl" style="color: #610000"></i> DashGas</div>

        <div class="list-group list-group-flush">
          <a href="index.php" class="list-group-item list-group-item-action bg-transparent second-text fw-semibold border-bottom" data-aos="fade-right">
            <i class="fas fa-gauge me-2" ></i>Dashboard</a>

          
          <div class="fw-bold text-uppercase ps-4 pt-2 text-secondary" style="font-size: smaller" data-aos="fade-right">Fiture</div>

          <a href="laporan.php" class="list-group-item list-group-item-action bg-transparent second-text active" data-aos="fade-right">
            <i class="fas fa-table-list me-2" href="laporan.php"></i>Laporan Masyarakat</a>

          <a href="laporan_baru.php" class="list-group-item list-group-item-action bg-transparent second-text fw-semibold" data-aos="fade-right">
            <i class="fas fa-check-double me-2"></i>Laporan Baru</a>

          <a href="tanggapan.php" class="list-group-item list-group-item-action bg-transparent second-text fw-semibold" data-aos="fade-right">
            <i class="fas fa-pen-to-square me-2"></i>Tanggapan</a>
          
          <a href="user.php" class="list-group-item list-group-item-action bg-transparent second-text fw-semibold" data-aos="fade-right">
            <i class="fas fa-users me-2"></i>Data User</a>

          <a href="../logout.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold" data-aos="fade-right">
            <i class="fas fa-power-off me-2"></i>Logout</a>
        </div>
      </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <nav class="navbar navbar-expand-lg navbar-light py-3 px-4 shadow d-flex justify-content-between" style="background-color: maroon;">
        <div class="d-flex align-items-center">
          <i class="fas fa-align-left text-white fs-4 me-3" id="menu-toggle" data-aos="fade-down"></i>
          <h2 class="fs-2 m-0 text-white" data-aos="fade-down">Laporan Masyarakat</h2>
        </div>
      </nav>

      <!-- CONTENT-->
      <div class="container-fluid px-4 d-none d-sm-block" data-aos="zoom-in-up">
        <div class="row mt-4">
          <div class="col-6 d-flex justify-content-start">
            <h3 class="text-center text-uppercase fw-bold">Daftar Laporan</h3>
          </div>
          <div class="col-6 d-flex justify-content-end">
            <form class="d-flex justify-content-end align-items-end" method="GET" action="laporan.php">
              <input class="form-control me-1" type="search" name="nik" placeholder="Masukkan NIK" aria-label="Search">
              <button class="btn btn-success" type="submit">
                <i class="fa-solid fa-magnifying-glass"></i>
              </button>
            </form>
          </div>
        </div>
        <hr>
      </div>

      <!-- RESPONSIVE -->
      <div class="container-fluid px-4 d-block d-sm-none" data-aos="zoom-in-up">
        <div class="row mt-4">
          <div class="col-12">
            <h3 class="text-center text-uppercase fw-bold">Daftar Laporan</h3>
          </div>
        </div>
        <hr>
        <div class="row d-flex justify-content-end pb-2 d-block d-sm-none">
          <form class="col-6 d-flex justify-content-center" method="GET" action="laporan.php">
            <input class="form-control me-1" type="search" name="nik" placeholder="Masukkan NIK" aria-label="Search">
            <button class="btn btn-success" type="submit">
              <i class="fa-solid fa-magnifying-glass"></i>
            </button>
          </form>
        </div>
      </div>
      <!-- END OF RESPONSIVE -->

      <div class="row px-lg-5 mt-2" data-aos="zoom-in">
        <div class="table-responsive">
          <table class="table table-bordered shadow-sm text-center">
            <thead>
              <tr style="background-color: maroon;">
                <th scope="col" style="color: whitesmoke;">No</th>
                <th scope="col" style="color: whitesmoke;">Tanggal</th>
                <th scope="col" style="color: whitesmoke;">NIK</th>
                <th scope="col" style="color: whitesmoke;">Laporan</th>
                <th scope="col" style="color: whitesmoke;">Tempat Kejadian</th>
                <th scope="col" style="color: whitesmoke;">Foto</th>
                <th scope="col" style="color: whitesmoke;">Video</th>
                <th scope="col" style="color: whitesmoke;">Status</th>
                <th scope="col" style="color: whitesmoke;">Cetak</th>
              </tr>
            </thead>
            <tbody>
              <?php
                include '../a/koneksi.php';
                $no = 1;

                // Pengecekan apakah NIK dikirimkan melalui parameter URL
                if (isset($_GET['nik'])) {
                  $nik = $_GET['nik'];

                  // Query SQL dengan kondisi pencarian berdasarkan NIK
                  $data = mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE status = 'selesai' AND nik LIKE '%$nik%'");
                } else {
                  // Query SQL tanpa kondisi pencarian
                  $data = mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE status = 'selesai'");
                }

                while ($c = mysqli_fetch_array($data)) {
                ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $c['tgl_pengaduan'] ?></td>
                  <td><?php echo $c['nik'] ?></td>
                  <td><?php echo $c['isi_laporan'] ?></td>
                  <td><?php echo $c['tmpt_kejadian'] ?></td>
                  <td>
                    <a data-image-src="http://localhost/yakin/file/<?php echo $c['foto'] ?>" class="btn btn-outline-danger form-control col-sm-9 btnOpenImage"><i class="fa-regular fa-eye"></i></a>
                  </td>
                  <td>
                    <a data-video-src="http://localhost/yakin/file/<?php echo $c['video'] ?>" class="btn btn-outline-danger form-control col-sm-9 btnOpenVideo"><i class="fa-regular fa-eye"></i></i></a>
                  </td>
                  <td><?php echo $c['status'] ?></td>
                  <td>
                    <a href="../petugas/detail.php?nik=<?php echo $c['nik']; ?>"class="btn btn-outline-danger"><i class="fa-solid fa-print"></i></a>
                  </td>
                </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
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

    toggleButton.onclick = function() {
      el.classList.toggle("toggled");
    };
  </script>
  <script src="../a/jsPDF/dist/jspdf.umd.min.js"></script>
    <script>
        function printPDF() {
            const pdf = new jsPDF();
            const htmlElement = document.getElementById('content');

            pdf.html(htmlElement, {
                callback: function () {
                    pdf.save('output.pdf');
                }
            });
        }
    </script>
</body>
</html>
