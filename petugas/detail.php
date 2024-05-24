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
    
    <link rel="stylesheet" href="styles.css" />
        
    <style>
        table tr td {
            font-size: 13px;
        }
        table tr .text {
            text-align: right;
            font-size: 13px;
        }
        .hr-thick {
            border-top: 2px solid black;
            border-color: black;
        }
        .garis{
            border-bottom: 5px solid black; padding: 2px;
        }
    </style>
    <title>Cetak Laporan</title>
</head>
<body>
    <?php
        $nik = $_GET['nik'];

        $sql_masyarakat = "SELECT * FROM masyarakat WHERE nik = '$nik'";
        $result_masyarakat = mysqli_query($koneksi, $sql_masyarakat);
        $data_masyarakat = mysqli_fetch_array($result_masyarakat);

        if (!$result_masyarakat) {
            die('Query Error: ' . mysqli_error($koneksi));
        }

        $sql_pengaduan = "SELECT * FROM pengaduan WHERE nik = '$nik'";
        $result_pengaduan = mysqli_query($koneksi, $sql_pengaduan);
        $data_pengaduan = mysqli_fetch_array($result_pengaduan);

        if (!$result_pengaduan) {
            die('Query Error: ' . mysqli_error($koneksi));
        }
    ?>
    <center>
        <table width='625' style="border-bottom: 5px solid black; padding: 2px;">
            <tr>
                <td><img src="../a/img/logo.png" width="90" height="90" alt=""></td>
                <td>
                    <center>
                        <font size="4">KEPOLISIAN REPUBLIK INDONESIA</font><br>
                        <font size="5"><strong>KEPOLISIAN SEKTOR RUMBAI</strong></font><br>
                        <font size="2">Jl. Sekolah, Meranti Pandak, Kec. Rumbai, Kota Pekanbaru, Riau 28266</font>
                    </center>
                </td>
            </tr>
        </table>
        <br>
        <table width="475" style="border-bottom: 2px solid black; padding: 2px;">
            <center>
                <tr>
                    <img src="../a/img/lambang.png" width="50" height="50" alt="">
                </tr>
                <tr>
                    <td class="text-center fw-bold fs-5">SURAT TANDA PENERIMAAN LAPORAN</td>
                </tr>
            </center>
        </table>
        <br>
        <table width='625'>
            <tr>
                <td>
                    <font size="3" style="text-align: justify;">Yang bertanda tangan dibawah ini menerangkan bahwa pada <?php echo $data_pengaduan['tgl_pengaduan']; ?>, telah melapor melalui
                    Website Layanan Tindak Kriminal Polsek Rumbai yang mengaku bernama:</font>
                </td>
            </tr>
        </table>
        <br>
        <table width='625'>
            <tr>
                <td class="fs-6">Nama</td>
                <td class="fs-6" width='500'>: <?php echo $data_masyarakat['nama']; ?></td>
            </tr>
            <tr>
                <td class="fs-6">NIK</td>
                <td class="fs-6" width='500'>: <?php echo $data_masyarakat['nik']; ?></td>
            </tr>
            <tr>
                <td class="fs-6">No Telepon</td>
                <td class="fs-6" width='500'>: <?php echo $data_masyarakat['telp']; ?></td>
            </tr>
            <tr>
                <td class="fs-6">Alamat</td>
                <td class="fs-6" width='500'>: <?php echo $data_masyarakat['alamat']; ?></td>
            </tr>
            <tr>
                <td class="fs-6">Tempat Kejadian</td>
                <td class="fs-6" width='500'>: <?php echo $data_pengaduan['tmpt_kejadian']; ?></td>
            </tr>
        </table>
        <br>
        <table style="border-bottom: 2px solid black; padding: 2px;">
            <tr>
                <td class="fs-6">URAIAN SINGKAT KEJADIAN</td>
            </tr>
        </table>
        <br>
        <table width='625'>
            <tr>
                <td class="fs-6" style="text-align: justify;">
                <?php echo $data_pengaduan['isi_laporan']; ?>
                </td>
            </tr>
        </table>
        <br>
        <table width='625'>
            <tr>
                <td class="fs-6">Demikian Surat Tanda Penerimaan Laporan ini dibuat untuk dapat dipergunakan dengan seperlunya</td>
            </tr>
        </table>
        <br>
        <br>
        <br>
        <table width='625'>
            <tr class="d-flex justify-content-between">
                <td>
                    <table width='300'>
                        <tr>
                            <td class="d-flex justify-content-center fs-6">Pelapor</td>
                        </tr>
                        
                    </table>
                </td>
                <td>
                    <table width='300'>
                        <tr>
                            <td class="d-flex justify-content-center fs-6">Mengetahui</td>
                        </tr>
                        <tr>
                            <td class="d-flex justify-content-center fs-6">a.n KEPALA KEPOLISIAN SEKTOR RUMBAI</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <br>
        <br>
        <br>
        <br>
        <br>
        <table width='625'>
            <tr class="d-flex justify-content-between">
                <td>
                    <table width='300'>
                        <tr>
                            <td class="d-flex justify-content-center"></td>
                        </tr>
                        <tr>
                            <td class="d-flex justify-content-center fs-6"><?php echo $data_masyarakat['nama']; ?></td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table width='300'>
                        <tr>
                            <td class="d-flex justify-content-center fs-6">Dr. PRIA BUDI, S.I.K., M.H.</td>
                        </tr>
                        <tr>
                            <td class="d-flex justify-content-center fs-6">NIP 2183746596094</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </center>

    <script src="../js/bootstrap.bundle.min.js"></script>
        <script>
            window.onload = function() {
            window.print();
            };

        </script>
</body>
</html> 
