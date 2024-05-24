<?php
include_once '../a/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<he>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../a/css/bootstrap.min.css">
    <link rel="stylesheet" href="../a/fontawesome/css/all.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
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
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light py-3 px-4 shadow d-flex justify-content-between"
                style="background-color: maroon;">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left text-white fs-4 me-3" id="menu-toggle" data-aos="fade-down"></i>
                    <h2 class="fs-2 m-0 text-white" data-aos="fade-down">Daftar User</h2>
                </div>
            </nav>

            <!-- CONTENT-->
            <div class="container-fluid px-4 d-none d-sm-block" data-aos="zoom-in-up">
                <div class="row mt-4 ">
                    <div class="col-6 d-flex justify-content-start">
                        <h3 class="text-center text-uppercase fw-bold">Daftar User</h3>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <form class="d-flex justify-content-end align-items-end" id="search-form">
                            <input class="form-control me-1" type="search" placeholder="Masukkan Nama" aria-label="Search"
                                id="search-input">
                            <button class="btn btn-success" type="submit">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <hr>
            </div>
            <div class="container-fluid px-4 d-none d-sm-block" data-aos="zoom-in-up">
                <div class="row mt-3 mb-3">
                    <div class="col-12  d-flex justify-content-end">
                        <a href="user-tambah.php" class="btn btn-outline-danger">
                            <i class="fa-solid fa-user-plus"></i></a>
                    </div>

                </div>
            </div>

            <!--RESPONSIVE-->
            <div class="container-fluid px-4 d-block d-sm-none" data-aos="zoom-in-up">
                <div class="row mt-4 ">
                    <div class="col-12 d-flex justify-content-center">
                        <h3 class="text-center text-uppercase fw-bold">Daftar User</h3>
                    </div>
                </div>
                <hr>
            </div>

            <div class="container-fluid px-4" data-aos="zoom-in-up">
                <div class="row d-flex justify-content-end pb-2 d-block d-sm-none">
                    <div class="col-6">
                        <a href="user-tambah.php" class="btn btn-outline-danger">
                            <i class="fa-solid fa-user-plus"></i> </a>
                    </div>
                    <form class="col-6  d-flex justify-content-center" id="search-form-responsive">
                        <input class="form-control me-1" type="search" placeholder="Masukkan Nama" aria-label="Search"
                            id="search-input-responsive">
                        <button class="btn btn-success" type="submit">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                </div>
                <!--END OF RESPONSIVE-->

                <div class="row px-lg-5 mt-2" data-aos="zoom-in">
                    <div class="table-responsive">
                        <table class="table table-bordered  shadow-sm text-center" style="border-color: maroon;">
                            <thead>
                                <tr style="background-color: maroon;">
                                    <th scope="col" style="color: whitesmoke;">No</th>
                                    <th scope="col" style="color: whitesmoke;">NIK</th>
                                    <th scope="col" style="color: whitesmoke;">Nama</th>
                                    <th scope="col" style="color: whitesmoke;">Username</th>
                                    <th scope="col" style="color: whitesmoke;">No.HP</th>
                                    <th scope="col" style="color: whitesmoke;">Alamat</th>
                                    <th scope="col" style="color: whitesmoke;">Level</th>
                                    <th scope="col" style="color: whitesmoke;">Action</th>
                                </tr>
                            </thead>
                            <tbody id="table-body">
                                <?php
                                include '../a/koneksi.php';
                                $no = 1;
                                $data = mysqli_query($koneksi, "SELECT * FROM masyarakat");
                                while ($c = mysqli_fetch_array($data)) {
                                ?>
                                    <tr>
                                        <td>
                                            <?php echo $no++ ?>
                                        </td>
                                        <td><?php echo $c['nik'] ?></td>
                                        <td><?php echo $c['nama'] ?></td>
                                        <td><?php echo $c['username'] ?></td>
                                        <td><?php echo $c['telp'] ?></td>
                                        <td><?php echo $c['alamat'] ?></td>
                                        <td><?php echo $c['level'] ?></td>
                                        <td><?php
                                            if ($c['id'] >= 1) {
                                        ?>
                                                <div class="btn-group">
                                                    <a href="user-edit.php?id=<?php echo $c['id']; ?>"
                                                        class="btn btn-outline-success">
                                                        <i class="fa-solid fa-pen-to-square"></i></a>
                                                </div>

                                                <div class="btn-group">
                                                    <a href="user-hapus.php?id=<?php echo $c['id']; ?>"
                                                        class="btn btn-outline-danger"
                                                        onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')">
                                                        <i class="fa-solid fa-trash-can"></i></a>
                                                </div>
                                        <?php
                                            }
                                        ?>
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

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };

        // Get the search form and input elements
        var searchForm = document.getElementById('search-form');
        var searchInput = document.getElementById('search-input');
        var searchFormResponsive = document.getElementById('search-form-responsive');
        var searchInputResponsive = document.getElementById('search-input-responsive');

        // Add event listener to search form (for desktop)
        searchForm.addEventListener('submit', function (event) {
            event.preventDefault(); // Prevent form submission
            var searchQuery = searchInput.value.toLowerCase(); // Get search query

            // Get table rows and loop through them
            var tableRows = document.querySelectorAll('#table-body tr');
            for (var i = 0; i < tableRows.length; i++) {
                var row = tableRows[i];
                var rowData = row.innerText.toLowerCase();

                // Check if the row data contains the search query
                if (rowData.includes(searchQuery)) {
                    row.style.display = ''; // Show the row
                } else {
                    row.style.display = 'none'; // Hide the row
                }
            }
        });

        // Add event listener to search form (for mobile)
        searchFormResponsive.addEventListener('submit', function (event) {
            event.preventDefault(); // Prevent form submission
            var searchQuery = searchInputResponsive.value.toLowerCase(); // Get search query

            // Get table rows and loop through them
            var tableRows = document.querySelectorAll('#table-body tr');
            for (var i = 0; i < tableRows.length; i++) {
                var row = tableRows[i];
                var rowData = row.innerText.toLowerCase();

                // Check if the row data contains the search query
                if (rowData.includes(searchQuery)) {
                    row.style.display = ''; // Show the row
                } else {
                    row.style.display = 'none'; // Hide the row
                }
            }
        });
    </script>
</body>

</html>
