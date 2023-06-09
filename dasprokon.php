<?php
session_start();

require 'koneksi.php';

if($_SESSION["username"] == "")
  {
      echo"<script>alert('Anda Harus Login Terlebih Dahulu')</script>";
      header("location: login.php");
  }

$sensus = query("SELECT * FROM sensus");

if (isset($_POST['update'])) {
    if (update($_POST) > 0) {
        echo "<script>
                alert('Data sensus berhasil diupdate!');
                document.location.href = 'dasprokon.php';
            </script>";
    } else {
       
        echo "<script>
                alert('Data sensus gagal diupdate!');
            </script>";
    }
    exit;
}

// if (isset($_POST['verif'])) {
//     if (verif($_POST) > 0) {
//         echo "<script>
//                 <h3>Teverifikasi</3>;
//             </script>";
//     } else {
       
//         echo "<script>
//                  <h3>Tidak Teverifikasi</3>;
//             </script>";
//     }
// }

if(isset($_GET['verifyid'])){
    $idToUpdate = $_GET['verifyid'];

    $data = array(
        "verif" => 1,
    );

    $condition = array(
        "id" => $idToUpdate
    );

    updateData("sensus", $data, $condition);

    header("location: dasprokon.php");
    exit;
}

if(isset($_GET['unverifyid'])){
    $idToUpdate = $_GET['unverifyid'];

    $data = array(
        "verif" => 0,
    );

    $condition = array(
        "id" => $idToUpdate
    );

    updateData("sensus", $data, $condition);

    header("location: dasprokon.php");
    exit;
}

$query = "SELECT COUNT(*) as total FROM sensus";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);
$total = $row['total'];

$query2 = "SELECT COUNT(*) as totalverif FROM sensus WHERE verif = 1";
$result = mysqli_query($koneksi, $query2);
$row = mysqli_fetch_assoc($result);
$totalverif = $row['totalverif'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Admin Sucofindo</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
		$(document).ready(function(){
			$("#myInput").on("keyup", function() {
				var value = $(this).val().toLowerCase();
				$("#myTable tr").filter(function() {
					$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
				});
			});
		});
	</script>

    <style>
        .table-container {
          max-height: 600px; /* Set the maximum height for vertical scrolling */
       
        }
        .table-container thead th {
          position: sticky; /* Set the table header to stick to the top */
          top: 0;
          background-color: #f8f9fa; /* Set the background color of the sticky header */
        }
        .table-border {
          text-align: center; 
          border-color: black;  
          background-color: #dcd6d6;
        }
        .scroll {
            height: 300px;
            overflow: scroll;
        }
      </style>
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                
                <div class="navbar-nav w-100">
                    <a href="dasprokon.php" class="navbar-brand mx-5 mb-3">
                        <img src="img/Logo_sucofindo.png" width="90" height="50" class="d-inline-block align-text-top align-items-center">
                    </a>
                    <a href="dasprokon.php" class="nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="input1.php" class="nav-link"><i class="fa fa-laptop me-2"></i>Input Data</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0" style="height:60px;">
                <a href="dasprokon.php" class="navbar-brand d-flex d-lg-none me-4">
                    <img src="img/Logo_sucofindo.png" width="90" height="50" class="d-inline-block align-text-top align-items-center">
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <span class="d-none d-lg-inline-flex">ADMIN</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-6">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <div class="ms-5">
                                <h2 style="color:cornflowerblue" >WELCOME BACK ADMIN</h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-5">
                                <p class="mb-2">Total Data</p>
                                <h6 class="mb-0">
                                <?php
                                echo $total;
                                ?>
                                </h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-certificate fa-3x text-primary"></i>
                            <div class="ms-5">
                                <p class="mb-2">Terverifikasi</p>
                                <h6 class="mb-0">
                                    <?=$totalverif?>
                                </h6>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- Sale & Revenue End -->


            

            <!-- Recent Sales Start -->
            <div class="table-container">
            <div class="container-fluid pt-4 px-4" >
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <H4 class="mb-0" >DATA SENSUS PEMBUDIDAYA</H4>
                    <input type="text" id="myInput" placeholder="Cari...">
                    <a href="excel.php" class="btn btn-success"><i class="lni lni-download"></i> Ekspor Data</a>
                    </div>
                    <div class="table-responsive scroll">
                        <table class="table text-start align-middle table-bordered table-hover mb-0" id="example">
                                <tr class="text-dark table-border" >
                                    <th rowspan="3"  style="border-color: grey;">No</th>
                                </tr>
                                <tr class="text-dark table-border">
                                    <th colspan="8" style="border-color: grey;">DATA UMUM PEMBUDIDAYA</th>
                                    <th colspan="8" style="border-color: grey;">LOKASI USAHA</th>
                                    <th colspan="4" style="border-color: grey;">KOMODITAS</th>
                                    <th colspan="8" style="border-color: grey;">TEKNOLOGI</th>
                                    <th colspan="4" style="border-color: grey;">PRODUKSI & DISTRIBUSI</th>
                                    <th colspan="5" style="border-color: grey;">PAKAN</th>
                                    <th colspan="4" style="border-color: grey;">BENIH</th>
                                    <th colspan="5" style="border-color: grey;">MODAL & TENAGA KERJA</th>
                                    <th colspan="6" style="border-color: grey;">LINGKUNGAN</th>
                                    <th colspan="4" style="border-color: grey;">PERIZINAN</th>
                                    <th colspan="8" style="border-color: grey;">LAIN-LAIN</th>
                                    <th colspan="6" style="border-color: grey;">ENUMERATOR/PETUGAS SENSUS</th>
                                    <th colspan="2"  style="border-color: grey;">UPT</th>
                                    <th rowspan="2" style="border-color: grey;">STATUS</th>
                                </tr>
                                <tr class="table-border">
                                    <th scope="col" style="border-color: grey;" class="text-dark">NAMA</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">NIK</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">USIA</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">AGAMA</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">GENDER</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">PENDIDIKAN</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">JUMLAH ANGGOTA</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">AKSI</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">ALAMAT</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">PROVINSI</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">KABUPATEN/KOTA</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">KECAMATAN</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">KELURAHAN/DESA</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">LATITUDE</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">LONGITUDE</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">AKSI</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">KOMODITAS</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">KELOMPOK</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">BIOTA</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">AKSI</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">JENIS USAHA</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">STATUS KUSUKA</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">STATUS KEPEMILIKAN</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">LUAS AREAL(Ha)</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">MEDIA PEMELIHARAAN</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">KEPADATAN PEMELIHARAAN</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">TEKNOLOGI</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">AKSI</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">PRODUKSI (ton/Ha/tahun)</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">DISTRIBUSI</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">HARGA JUAL(Rp)</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">AKSI</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">JENIS PAKAN</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">JUMLAH PAKAN(Kg)</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">SUMBER SUPLAI</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">HARGA PAKAN(Rp)</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">AKSI</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">SUMBER BENIH</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">JUMLAH BENIH(ekor/kg)</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">HARGA BENIH(Rp)</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">AKSI</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">JUMLAH TK</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">MODAL(OMZET-Rp)</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">SUMBER MODAL</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">SUMBER KREDIT</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">AKSI</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">IPAL</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">TANDON</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">GREENBELT</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">JARAK KE BIBIR PANTAI(m)</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">SUMBER AIR</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">AKSI</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">STATUS IZIN</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">STATUS NIB</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">SKALA USAHA</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">AKSI</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">ASURANSI</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">BANTUAN</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">PENGHARGAAN</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">DUKUNGAN PEMDA</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">DUKUNGAN PUSAT</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">NAMA PENYULUH</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">SERTIFIKAT</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">AKSI</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">FOTO PETUGAS</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">NAMA PETUGAS</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">NIK</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">WAKTU SENSUS</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">PERUBAHAN TERKAHIR</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">AKSI</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">UPT</th>
                                    <th scope="col" style="border-color: grey;" class="text-dark">AKSI</th>
                                </tr>
                                <?php
            $i = 1;
            foreach ($sensus as $row) :
                ?>
                <tbody id="myTable">
                                <tr style="border-color: grey;">
                                    <td class="text-dark" ><?php echo $i; ?></td>
                                    <td class="text-dark" ><?php echo $row["nama"]; ?></td>
                                    <td class="text-dark" ><?php echo $row["nik"]; ?></td>
                                    <td class="text-dark" ><?php echo $row["usia"]; ?></td>
                                    <td class="text-dark" ><?php echo $row["agama"]; ?></td>
                                    <td class="text-dark" ><?php echo $row["gender"]; ?></td>
                                    <td class="text-dark" ><?php echo $row["pendidikan"]; ?></td>
                                    <td class="text-dark" ><?php echo $row["jml_keluarga"]; ?></td>
                                    <td><a data-bs-toggle="modal" data-bs-target="#popup1<?= $row['id']; ?>" class="btn btn-warning btn-sm" style="font-weight: 300px;"><i class="bi bi-pencil-fill"></i></a><br></td>
                                    <td class="text-dark" ><?php echo $row["alamat"]; ?></td>
                                    <td class="text-dark" ><?php echo $row["provinsi"]; ?></td>
                                    <td class="text-dark" ><?php echo $row["kabupaten"]; ?></td>
                                    <td class="text-dark" ><?php echo $row["kecamatan"]; ?></td>
                                    <td class="text-dark" ><?php echo $row["kelurahan"]; ?></td>
                                    <td class="text-dark" ><?php echo $row["latitude"]; ?></td>
                                    <td class="text-dark" ><?php echo $row["longtitude"]; ?></td>
                                    <td><a  data-bs-toggle="modal" data-bs-target="#popup2<?= $row['id']; ?>" class="btn btn-warning btn-sm" style="font-weight: 300px;"><i class="bi bi-pencil-fill"></i></a><br></td>
                                    <td class="text-dark" ><?php echo $row["komoditas"]; ?></td>
                                    <td class="text-dark" ><?php echo $row["kelompok"]; ?></td>
                                    <td class="text-dark" ><?php echo $row["biota"]; ?></td>
                                    <td><a  data-bs-toggle="modal" data-bs-target="#popup3<?= $row['id']; ?>" class="btn btn-warning btn-sm" style="font-weight: 300px;"><i class="bi bi-pencil-fill"></i></a><br></td>
                                    <td class="text-dark" ><?php echo $row["jenis_usaha"]; ?></td>
                                    <td class="text-dark" ><?php echo $row["status_kusuka"]; ?></td>
                                    <td class="text-dark" ><?php echo $row["status_pemilik"]; ?></td>
                                    <td class="text-dark" ><?php echo $row["luas_areal"]; ?></td>
                                    <td class="text-dark" ><?php echo $row["media_pemeliharaan"]; ?></td>
                                    <td class="text-dark" ><?php echo $row["kepadatan_pemeliharaan"]; ?></td>
                                    <td class="text-dark" ><?php echo $row["teknologi"]; ?></td>
                                    <td><a data-bs-toggle="modal" data-bs-target="#popup4<?= $row['id']; ?>" class="btn btn-warning btn-sm" style="font-weight: 300px;"><i class="bi bi-pencil-fill"></i></a><br></td>
                                    <td class="text-dark" ><?php echo $row["produksi"]; ?></td>
                                    <td class="text-dark" ><?php echo $row["distribusi"]; ?></td>
                                    <td class="text-dark" ><?php echo $row["harga_jual"]; ?></td>
                                    <td><a  data-bs-toggle="modal" data-bs-target="#popup5<?= $row['id']; ?>" class="btn btn-warning btn-sm" style="font-weight: 300px;"><i class="bi bi-pencil-fill"></i></a><br></td>
                                    <td class="text-dark" ><?php echo $row["jenis_pakan"]; ?></td>
                                    <td class="text-dark" ><?php echo $row["jml_pakan"]; ?></td>
                                    <td class="text-dark" ><?php echo $row["sumber_suplai"]; ?></td>
                                    <td class="text-dark" ><?php echo $row["harga_pakan"]; ?></td>
                                    <td><a  data-bs-toggle="modal" data-bs-target="#popup6<?= $row['id']; ?>" class="btn btn-warning btn-sm" style="font-weight: 300px;"><i class="bi bi-pencil-fill"></i></a><br></td>
                                    <td class="text-dark" ><?php echo $row["sumber_benih"]; ?></td>
                                    <td class="text-dark" ><?php echo $row["jml_benih"]; ?></td>
                                    <td class="text-dark" ><?php echo $row["harga_benih"]; ?></td>
                                    <td><a data-bs-toggle="modal" data-bs-target="#popup7<?= $row['id']; ?>" class="btn btn-warning btn-sm" style="font-weight: 300px;"><i class="bi bi-pencil-fill"></i></a><br></td>
                                    <td class="text-dark" ><?php echo $row["jml_tk"]; ?></td>
                                    <td class="text-dark" ><?php echo $row["modal"]; ?></td>
                                    <td class="text-dark" ><?php echo $row["sumber_modal"]; ?></td>
                                    <td class="text-dark" ><?php echo $row["sumber_kredit"]; ?></td>
                                    <td><a data-bs-toggle="modal" data-bs-target="#popup8<?= $row['id']; ?>" class="btn btn-warning btn-sm" style="font-weight: 300px;"><i class="bi bi-pencil-fill"></i></a><br></td>
                                    <td class="text-dark" ><?php echo $row["ipal"]; ?></td>
                                    <td class="text-dark" ><?php echo $row["tandon"]; ?></td>
                                    <td class="text-dark" ><?php echo $row["greenbelt"]; ?></td>
                                    <td class="text-dark" ><?php echo $row["jarak_pantai"]; ?></td>
                                    <td class="text-dark" ><?php echo $row["sumber_air"]; ?></td>
                                    <td><a data-bs-toggle="modal" data-bs-target="#popup9<?= $row['id']; ?>" class="btn btn-warning btn-sm" style="font-weight: 300px;"><i class="bi bi-pencil-fill"></i></a><br></td>
                                    <td class="text-dark" ><?php echo $row["status_izin"]; ?></td>
                                    <td class="text-dark" ><?php echo $row["status_nib"]; ?></td>
                                    <td class="text-dark" ><?php echo $row["skala_usaha"]; ?></td>
                                    <td><a  data-bs-toggle="modal" data-bs-target="#popup10<?= $row['id']; ?>" class="btn btn-warning btn-sm" style="font-weight: 300px;"><i class="bi bi-pencil-fill"></i></a><br></td>
                                    <td class="text-dark" ><?php echo $row["asuransi"]; ?></td>
                                    <td class="text-dark" ><?php echo $row["bantuan"]; ?></td>
                                    <td class="text-dark" ><?php echo $row["penghargaan"]; ?></td>
                                    <td class="text-dark" ><?php echo $row["dukungan_pemda"]; ?></td>
                                    <td class="text-dark" ><?php echo $row["dukungan_pusat"]; ?></td>
                                    <td class="text-dark" ><?php echo $row["nama_penyuluh"]; ?></td>
                                    <td class="text-dark" ><?php echo $row["sertifikat"]; ?></td>
                                    <td><a data-bs-toggle="modal" data-bs-target="#popup11<?= $row['id']; ?>" class="btn btn-warning btn-sm" style="font-weight: 300px;"><i class="bi bi-pencil-fill"></i></a><br></td>
                                    <td><img src="img/<?php echo $row["foto"]; ?>" width="80px" alt=""></td>
                                    <td class="text-dark" ><?php echo $row["nama_petugas"]; ?></td>
                                    <td class="text-dark" ><?php echo $row["nik_petugas"]; ?></td>
                                    <td class="text-dark" ><?php echo $row["waktu_sensus"]; ?></td>
                                    <td class="text-dark" ><?php echo $row["perubahan_terakhir"]; ?></td>
                                    <td><a data-bs-toggle="modal" data-bs-target="#popup12<?= $row['id']; ?>" class="btn btn-warning btn-sm" style="font-weight: 300px;"><i class="bi bi-pencil-fill"></i></a><br></td>
                                    <td class="text-dark" ><?php echo $row["upt"]; ?></td>
                                    <td><a data-bs-toggle="modal" data-bs-target="#popup13<?= $row['id']; ?>" class="btn btn-warning btn-sm" style="font-weight: 300px;"><i class="bi bi-pencil-fill"></i></a><br></td>
                                    <td>
                                        <div class="d-flex" style="gap:30px; justify-content: between;">
                                            <?php if($row['verif'] == 0) : ?>
                                            <a class="btn btn-danger btn-sm" style="font-weight: 300px;" name="verif" href="?verifyid=<?=$row['id']?>" value="terima" onclick="return confirm('Apakah Yakin Verifikasi Data Sensus Ini?')"><i class="bi bi-x"></i></a>
                                            <?php else : ?>
                                                <a class="btn btn-success btn-sm" style="font-weight: 300px;" name="verif" href="?unverifyid=<?=$row['id']?>" value="terima" onclick="return confirm('Apakah Yakin Unverifikasi Data Sensus Ini?')"><i class="bi bi-check"></i></a>
                                            <?php endif ?>
                                            <a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm" style="font-weight: 300px; display:inline;" name="hapus" onclick="return confirm('Apakah Yakin Hapus Data Sensus Ini?')"><i class="bi bi-trash-fill"></i></a>
                                        </div>    
                                </td>
                                </tr>
                                </tbody>
                                <?php
                $i++;
                endforeach; 
            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
            <!-- Recent Sales End -->



        <!-- Content End -->
        <?php $i = 1; foreach ($sensus as $row) : ?>
        <div class="modal fade" id="popup1<?= $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Data Umum Pembudidaya</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?=$row['id']?>">
                        <div class="mb-3">
                            <label for="nama" class="col-form-label">Nama:</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $row['nama'];?>">
                        </div>
                        <div class="mb-3">
                            <label for="nik" class="col-form-label">NIK:</label>
                            <input type="text" class="form-control" id="nik" name="nik" value="<?= $row['nik'];?>">
                        </div>
                        <div class="mb-3">
                            <label for="usia" class="col-form-label">Usia:</label>
                            <input type="text" class="form-control" id="usia" name="usia" value="<?= $row['usia'];?>">
                        </div>
                        <div class="mb-3">
                            <label for="agama" class="col-form-label">Agama:</label>
                            <select class="form-select mb-3" aria-label="Default select example "id="agama" name="agama">
                                <?php $agama = $row['agama']; ?>
                                <option value="" <?= $agama == '' ? 'selected' : null ?> disabled selected hidden>Pilih Agama</option>
                                <option value="Islam" <?= $agama == 'Islam' ? 'selected' : null ?>>Islam</option>
                                <option value="Kristen" <?= $agama == 'Kristen' ? 'selected' : null ?>>Kristen</option>
                                <option value="Hindu <?= $agama == 'Hindu' ? 'selected' : null ?>">Hindu</option>
                                <option value="Budha" <?= $agama == 'Budha' ? 'selected' : null ?>>Budha</option>
                                <option value="Konghuchu" <?= $agama == 'Konghucu' ? 'selected' : null ?>>Konghuchu</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="gender" class="col-form-label">Jenis Kelamin:</label>
                            <div class="col-sm-10">
                            <?php $gender = $row['gender']; ?>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="laki-laki" name="gender" value="Laki-laki" <?= $gender == 'Laki-laki' ? 'checked' : null ?>>
                                    <label class="form-check-label" for="laki-laki">
                                        Laki-laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="perempuan" name="gender" value="Perempuan" <?= $gender == 'Perempuan' ? 'checked' : null ?>>
                                    <label class="form-check-label" for="perempuan">
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="pendidikan" class="col-form-label">Pendidikan:</label>
                            <select class="form-select mb-3" aria-label="Default select example" id="pendidikan" name="pendidikan">
                            <?php $pendidikan = $row['pendidikan']; ?>
                                <option value="" <?= $pendidikan == '' ? 'selected' : null ?> disabled selected hidden>Pilih Pendidikan</option>
                                <option value="-" <?= $pendidikan == '-' ? 'selected' : null ?>>-</option>
                                <option value="SD" <?= $pendidikan == 'SD' ? 'selected' : null ?>>SD</option>
                                <option value="SMP" <?= $pendidikan == 'SMP' ? 'selected' : null ?>>SMP</option>
                                <option value="SMA/SMK" <?= $pendidikan == 'SMA/SMK' ? 'selected' : null ?>>SMA/SMK</option>
                                <option value="D3" <?= $pendidikan == 'D3' ? 'selected' : null ?>>D3</option>
                                <option value="S1" <?= $pendidikan == 'S1' ? 'selected' : null ?>>S1</option>
                                <option value="S2" <?= $pendidikan == 'S2' ? 'selected' : null ?>>S2</option>
                                <option value="S3" <?= $pendidikan == 'S3' ? 'selected' : null ?>>S3</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="jml_keluarga" class="col-form-label">Jumlah Anggota Keluarga:</label>
                            <input type="text" class="form-control"  id="jml_keluarga" name="jml_keluarga" value="<?= $row['jml_keluarga'];?>">
                        </div>
                        <div class="modal-footer">
                            <button href="dasprokon.php" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                            <button name="update" class="btn btn-primary" onclick="return confirm('Apakah Yakin Ubah Data Umum Ini?')"></i> Simpan</button>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="id" value="<?=$row['id']?>">
                <div class="row g-4">
            <div class="modal fade" id="popup2<?= $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Lokasi Usaha</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <div class="mb-3">
                            <label for="alamat" class="col-form-label">Alamat:</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $row['alamat'];?>">
                        </div>
                        <div class="mb-3">
                            <label for="provinsi" class="col-form-label">Provinsi:</label>
                            <select class="form-select mb-3" aria-label="Default select example" id="provinsi" name="provinsi" >
                                <option value="" disabled selected hidden><?= $row['provinsi'];?></option>
                                
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="kabupaten" class="col-form-label">Kabupaten/ Kota:</label>
                            <input type="text" class="form-control"  id="kabupaten" name="kabupaten" value="<?= $row['kabupaten'];?>">
                        </div>
                        <div class="mb-3">
                            <label for="kecamatan" class="col-form-label">Kecamatan:</label>
                            <input type="text" class="form-control"  id="kecamatan" name="kecamatan" value="<?= $row['kecamatan'];?>">
                        </div>
                        <div class="mb-3">
                            <label for="kelurahan" class="col-form-label">Kelurahan/ Desa:</label>
                            <input type="text" class="form-control"  id="kelurahan" name="kelurahan" value="<?= $row['kelurahan'];?>">
                        </div>
                        
                        <div class="mb-3">
                            <label for="latitude" class="col-form-label">Latitude:</label>
                            <input type="text" class="form-control"  id="latitude" name="latitude" value="<?= $row['latitude'];?>">
                        </div>
                        <div class="mb-3">
                            <label for="longtitude" class="col-form-label">Longitude:</label>
                            <input type="text" class="form-control"  id="longtitude" name="longtitude" value="<?= $row['longtitude'];?>" >
                        </div>
                        <div class="modal-footer">
                            <button href="dasprokon.php" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                            <button name="update" class="btn btn-primary" onclick="return confirm('Apakah Yakin Ubah Data Lokasi Ini?')"></i> Simpan</button>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>   
                 
            </div>   
            <div class="row g-4">
                <div class="modal fade" id="popup3<?= $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Komoditas</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="komoditas" class="col-form-label">Komoditas:</label>
                                <input type="text" class="form-control"  id="komoditas" name="komoditas" value="<?= $row['komoditas'];?>">
                            </div>
                            <div class="mb-3">
                                <label for="kelompok" class="col-form-label">Kelompok:</label>
                                <input type="text" class="form-control"  id="kelompok" name="kelompok" value="<?= $row['kelompok'];?>">
                            </div>
                            <div class="mb-3">
                                <label for="biota" class="col-form-label">Biota:</label>
                                <select class="form-select mb-3" aria-label="Default select example"id="biota" name="biota" >
                                <?php $biota = $row['biota']; ?>
                                    <option value="" <?= $biota == '' ? 'selected' : null ?> disabled selected hidden>Pilih Biota</option>
                                    <option value="Air Tawar" <?= $biota == 'Air Tawar' ? 'selected' : null ?>>Air Tawar</option>
                                    <option value="Air Payau" <?= $biota == 'Air Payau' ? 'selected' : null ?>>Air Payau</option>
                                    <option value="Air Laut" <?= $biota == 'Air Laut' ? 'selected' : null ?>>Air Laut</option>
                                </select>
                            </div>
                            <div class="modal-footer">
                            <button href="dasprokon.php" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                            <button name="update" class="btn btn-primary" onclick="return confirm('Apakah Yakin Ubah Data Komoditas Ini?')"></i> Simpan</button>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>    
            </div>
            <div class="row g-4">
                <div class="modal fade" id="popup4<?= $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Teknologi</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="jenis_usaha" class="col-form-label">Jenis Usaha:</label>
                                <input type="text" class="form-control" id="jenis_usaha" name="jenis_usaha" value="<?= $row['jenis_usaha'];?>">
                            </div>
                            <div class="mb-3">
                                <label for="status_kusuka" class="col-form-label">Status Kusuka:</label>
                                <select class="form-select mb-3" aria-label="Default select example"id="status_kusuka" name="status_kusuka" >
                                    <?php $status_kusuka = $row['status_kusuka']; ?>
                                    <option value="" <?= $status_kusuka == '' ? 'selected' : null ?> disabled selected hidden>Status Kusuka</option>
                                    <option value="-" <?= $status_kusuka == '-' ? 'selected' : null ?>>-</option>
                                    <option value="Terdaftar" <?= $status_kusuka == 'Terdaftar' ? 'selected' : null ?>>Terdaftar</option>
                                    <option value="Tidak Terdaftar" <?= $status_kusuka == 'Tidak Terdaftar' ? 'selected' : null ?>>Tidak Terdaftar</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="status_pemilik" class="col-form-label">Status Kepemilikan:</label>
                                <input type="text" class="form-control" id="status_pemilik" name="status_pemilik" value="<?= $row['status_pemilik'];?>">
                            </div><div class="mb-3">
                                <label for="luas_areal" class="col-form-label">Luas Areal (Ha):</label>
                                <input type="text" class="form-control" id="luas_areal" name="luas_areal" value="<?= $row['luas_areal'];?>">
                            </div>
                            <div class="mb-3">
                                <label for="media_pemeliharaan" class="col-form-label">Media Pemeliharaan:</label>
                                <input type="text" class="form-control" id="media_pemeliharaan" name="media_pemeliharaan" value="<?= $row['media_pemeliharaan'];?>">
                            </div>
                            <div class="mb-3">
                                <label for="kepadatan_pemeliharaan" class="col-form-label">Kepadatan Pemeliharaan:</label>
                                <input type="text" class="form-control" id="kepadatan_pemeliharaan" name="kepadatan_pemeliharaan" value="<?= $row['kepadatan_pemeliharaan'];?>"> 
                            </div>
                            <div class="mb-3">
                                <label for="teknologi" class="col-form-label">Teknologi:</label>
                                <select class="form-select mb-3" aria-label="Default select example" id="teknologi" name="teknologi">
                                <?php $teknologi = $row['teknologi']; ?>
                                    <option value="" <?= $teknologi == '' ? 'selected' : null ?> disabled selected hidden>Jenis Teknologi</option>
                                    <option value="-" <?= $teknologi == '-' ? 'selected' : null ?>>-</option>
                                    <option value="Tradisional" <?= $teknologi == 'Tradisional' ? 'selected' : null ?>>Tradisional</option>
                                    <option value="Semi Intensif"<?= $teknologi == 'Semi Intensif' ? 'selected' : null ?>>Semi Intensif</option>
                                    <option value="Intensif" <?= $teknologi == 'Intensif' ? 'selected' : null ?>>Intensif</option>
                                    <option value="Bioflok" <?= $teknologi == 'Bioflok' ? 'selected' : null ?>>Bioflok</option>
                                </select>
                            </div>
                            <div class="modal-footer">
                            <button href="dasprokon.php" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                            <button name="update" class="btn btn-primary" onclick="return confirm('Apakah Yakin Ubah Data Teknologi Ini?')"></i> Simpan</button>
                        </div>

                        </div>
                        </div>
                    </div>
                </div>    
            </div>
            <div class="row g-4">
                <div class="modal fade" id="popup5<?= $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Produksi & Distribusi</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="produksi" class="col-form-label">Produksi (ton/Ha/tahun):</label>
                                <input type="text" class="form-control" id="produksi" name="produksi" value="<?= $row['produksi'];?>">
                            </div>
                            <div class="mb-3">
                                <label for="distribusi" class="col-form-label">Distribusi:</label>
                                <input type="text" class="form-control" id="distribusi" name="distribusi" value="<?= $row['distribusi'];?>">
                            </div>
                            <div class="mb-3">
                                <label for="harga_jual" class="col-form-label">Harga Jual:</label>
                                <input type="text" class="form-control" id="harga_jual" name="harga_jual" value="<?= $row['harga_jual'];?>">
                            </div>
                            <div class="modal-footer">
                            <button href="dasprokon.php" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                            <button name="update" class="btn btn-primary" onclick="return confirm('Apakah Yakin Ubah Data Produksi Ini?')"></i> Simpan</button>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>    
            </div>
            <div class="row g-4">
                <div class="modal fade" id="popup6<?= $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Pakan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="jenis_pakan" class="col-form-label">Jenis Pakan:</label>
                                <select class="form-select mb-3" aria-label="Default select example" id="jenis_pakan" name="jenis_pakan">
                                <?php $jenis_pakan = $row['jenis_pakan']; ?>
                                    <option value="" <?= $jenis_pakan == '' ? 'selected' : null ?> disabled selected hidden>Jenis Pakan</option>
                                    <option value="-" <?= $jenis_pakan == '-' ? 'selected' : null ?>>-</option>
                                    <option value="Komersil Apung" <?= $jenis_pakan == 'Komersil Apung' ? 'selected' : null ?>>Komersil Apung</option>
                                    <option value="Komersil Tenggelam" <?= $jenis_pakan == 'Komersil Tenggelam' ? 'selected' : null ?>>Komersil Tenggelam</option>
                                    <option value="Mandiri Apung" <?= $jenis_pakan == 'Mandiri Apung' ? 'selected' : null ?>>Mandiri Apung</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="jml_pakan" class="col-form-label">Jumlah Pakan (kg):</label>
                                <input type="text" class="form-control" id="jml_pakan" name="jml_pakan" value="<?= $row['jml_pakan'];?>" >
                            </div>
                            <div class="mb-3">
                                <label for="sumber_suplai" class="col-form-label">Sumber Suplai:</label>
                                <input type="text" class="form-control" id="sumber_suplai" name="sumber_suplai" value="<?= $row['sumber_suplai'];?>" >
                            </div>
                            <div class="mb-3">
                                <label for="harga_pakan" class="col-form-label">Harga Pakan (Rp):</label>
                                <input type="text" class="form-control" id="harga_pakan" name="harga_pakan" value="<?= $row['harga_pakan'];?>" >
                            </div>

                            <div class="modal-footer">
                            <button href="dasprokon.php" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                            <button type="submit" name="update" class="btn btn-primary" onclick="return confirm('Apakah Yakin Ubah Data Pakan Ini?')"></i> Simpan</button>
                        </div>
                
                        </div>
                        </div>
                    </div>
                </div>    
            </div>
            <div class="row g-4">
                <div class="modal fade" id="popup7<?= $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Benih</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="sumber_benih" class="col-form-label">Sumber Benih:</label>
                                <input type="text" class="form-control" id="sumber_benih" name="sumber_benih" value="<?= $row['sumber_benih'];?>">
                            </div>
                            <div class="mb-3">
                                <label for="jml_benih" class="col-form-label">Jumlah benih (ekor)(kg):</label>
                                <input type="text" class="form-control" id="jml_benih" name="jml_benih" value="<?= $row['jml_benih'];?>" >
                            </div>
                            <div class="mb-3">
                                <label for="harga_benih" class="col-form-label">Harga Benih (Rp):</label>
                                <input type="text" class="form-control" id="harga_benih" name="harga_benih" value="<?= $row['harga_benih'];?>" >
                            </div>
                            <div class="modal-footer">
                            <button href="dasprokon.php" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                            <button name="update" class="btn btn-primary" onclick="return confirm('Apakah Yakin Ubah Data Benih Ini?')"></i> Simpan</button>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>    
            </div>
            <div class="row g-4">
                <div class="modal fade" id="popup8<?= $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal & Tenaga Kerja</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="jml_tk" class="col-form-label">Jumlah TK:</label>
                                <input type="text" class="form-control" id="jml_tk" name="jml_tk" value="<?= $row['jml_tk'];?>" >
                            </div>
                            <div class="mb-3">
                                <label for="modal" class="col-form-label">Modal (Omzet - Rp):</label>
                                <input type="text" class="form-control" id="modal" name="modal" value="<?= $row['modal'];?>" >
                            </div>
                            <div class="mb-3">
                                <label for="sumber_modal" class="col-form-label">Sumber Modal:</label>
                                <select class="form-select mb-3" aria-label="Default select example" id="sumber_modal" name="sumber_modal" >
                                <?php $sumber_modal = $row['sumber_modal']; ?>
                                    <option value="" <?= $sumber_modal == '' ? 'selected' : null ?> disabled selected hidden>Sumber Modal</option>
                                    <option value="-" <?= $sumber_modal == '-' ? 'selected' : null ?>>-</option>
                                    <option value="Sendiri" <?= $sumber_modal == 'Sendiri' ? 'selected' : null ?>>Sendiri</option>
                                    <option value="Kredit" <?= $sumber_modal == '-Kredit' ? 'selected' : null ?>>Kredit</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="sumber_kredit" class="col-form-label">Sumber Kredit:</label>
                                <select class="form-select mb-3" aria-label="Default select example" id="sumber_kredit" name="sumber_kredit">
                                <?php $sumber_kredit = $row['sumber_kredit']; ?>
                                    <option value="" <?= $sumber_kredit == '' ? 'selected' : null ?> disabled selected hidden>Sumber Kredit</option>
                                    <option value="-" <?= $sumber_kredit == '-' ? 'selected' : null ?>>-</option>
                                    <option value="Kerabat" <?= $sumber_kredit == 'Kerabat' ? 'selected' : null ?>>Kerabat</option>
                                    <option value="Lain-lain" <?= $sumber_kredit == 'Lain-lain' ? 'selected' : null ?>>Lain-lain</option>
                                </select>
                            </div>
                            <div class="modal-footer">
                            <button href="dasprokon.php" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                            <button name="update" class="btn btn-primary" onclick="return confirm('Apakah Yakin Ubah Data Modal Ini?')"></i> Simpan</button>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>    
            </div>
            <div class="row g-4">
                <div class="modal fade" id="popup9<?= $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Lingkungan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="ipal" class="col-form-label">IPAL</label>
                                <select class="form-select mb-3" aria-label="Default select example" id="ipal" name="ipal"  >
                                <?php $ipal = $row['ipal']; ?>
                                    <option value="" <?= $ipal == '' ? 'selected' : null ?> disabled selected hidden>IPAL</option>
                                    <option value="-" <?= $ipal == '-' ? 'selected' : null ?>>-</option>
                                    <option value="Ada" <?= $ipal == 'Ada' ? 'selected' : null ?>>Ada</option>
                                    <option value="Tidak" <?= $ipal == 'Tidak' ? 'selected' : null ?>>Tidak</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="tandon" class="col-form-label">Tandon:</label>
                                <select class="form-select mb-3" aria-label="Default select example" id="tandon" name="tandon" >
                                <?php $tandon = $row['tandon']; ?>
                                    <option value="" <?= $tandon == '' ? 'selected' : null ?> disabled selected hidden>Tandon</option>
                                    <option value="-" <?= $tandon == '-' ? 'selected' : null ?>>-</option>
                                    <option value="Ada" <?= $tandon == 'Ada' ? 'selected' : null ?>>Ada</option>
                                    <option value="Tidak" <?= $tandon == 'Tidak' ? 'selected' : null ?>>Tidak</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="greenbelt" class="col-form-label">Greenbelt:</label>
                                <select class="form-select mb-3" aria-label="Default select example" id="greenbelt" name="greenbelt" >
                                <?php $greenbelt = $row['greenbelt']; ?>
                                    <option value="" <?= $greenbelt == '' ? 'selected' : null ?> disabled selected hidden>Greenbelt</option>
                                    <option value="-" <?= $greenbelt == '-' ? 'selected' : null ?>>-</option>
                                    <option value="Ada" <?= $greenbelt == 'Ada' ? 'selected' : null ?>>Ada</option>
                                    <option value="Tidak" <?= $greenbelt == 'Tidak' ? 'selected' : null ?>>Tidak</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="jarak_pantai" class="col-form-label">Jarak ke Bibir Pantai (m):</label>
                                <input type="text" class="form-control" id="jarak_pantai" name="jarak_pantai" value="<?= $row['jarak_pantai'];?>" >
                            </div>
                            <div class="mb-3">
                                <label for="sumber_air" class="col-form-label">Sumber Air:</label>
                                <select class="form-select mb-3" aria-label="Default select example"id="sumber_air" name="sumber_air"  >
                                <?php $sumber_air = $row['sumber_air']; ?>
                                    <option value="" <?= $sumber_air == '' ? 'selected' : null ?> disabled selected hidden>Sumber Air</option>
                                    <option value="-" <?= $sumber_air == '-' ? 'selected' : null ?>>-</option>
                                    <option value="Mata Air" <?= $sumber_air == 'Mata Air' ? 'selected' : null ?>>Mata Air</option>
                                    <option value="Air tanah" <?= $sumber_air == 'Air Tanah' ? 'selected' : null ?>>Air tanah</option>
                                    <option value="Sumbur bor" <?= $sumber_air == 'Sumbur bor' ? 'selected' : null ?>>Sumbur bor</option>
                                    <option value="Sungai" <?= $sumber_air == 'Sungai' ? 'selected' : null ?>>Sungai</option>
                                    <option value="Laut" <?= $sumber_air == 'Laut' ? 'selected' : null ?>>Laut</option>
                                    <option value="Danau" <?= $sumber_air == 'Danau' ? 'selected' : null ?>>Danau</option>
                                    <option value="Campuran" <?= $sumber_air == 'Campuran' ? 'selected' : null ?>>Campuran</option>
                                </select>
                            </div>
                            <div class="modal-footer">
                            <button href="dasprokon.php" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                            <button name="update" class="btn btn-primary" onclick="return confirm('Apakah Yakin Ubah Data Lingkungan Ini?')"></i> Simpan</button>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>    
            </div>
            <div class="row g-4">
                <div class="modal fade" id="popup10<?= $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Perizinan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="status_izin" class="col-form-label">Status Izin</label>
                                <select class="form-select mb-3" aria-label="Default select example" id="status_izin" name="status_izin" >
                                <?php $status_izin = $row['status_izin']; ?>
                                    <option value="" <?= $status_izin == '' ? 'selected' : null ?> disabled selected hidden>Status Izin</option>
                                    <option value="-" <?= $status_izin == '-' ? 'selected' : null ?>>-</option>
                                    <option value="Sudah Berizin" <?= $status_izin == 'Sudah Berizin' ? 'selected' : null ?>>Sudah Berizin</option>
                                    <option value="Tidak Berizin" <?= $status_izin == 'Tidak Berizin' ? 'selected' : null ?>>Tidak Berizin</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="status_nib" class="col-form-label">Status NIB:</label>
                                <select class="form-select mb-3" aria-label="Default select example" id="status_nib" name="status_nib" >
                                <?php $status_nib = $row['status_nib']; ?>
                                    <option value="" <?= $status_nib == '' ? 'selected' : null ?> disabled selected hidden>Status NIB</option>
                                    <option value="-" <?= $status_nib == '-' ? 'selected' : null ?>>-</option>
                                    <option value="Ada" <?= $status_nib == 'Ada' ? 'selected' : null ?>>Ada</option>
                                    <option value="Tidak" <?= $status_nib == 'Tidak' ? 'selected' : null ?>>Tidak</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="skala_usaha" class="col-form-label">Skala Usaha:</label>
                                <select class="form-select mb-3" aria-label="Default select example" id="skala_usaha" name="skala_usaha">
                                <?php $skala_usaha = $row['skala_usaha']; ?>
                                    <option value="" <?= $skala_usaha == '' ? 'selected' : null ?> disabled selected hidden>Skala Usaha</option>
                                    <option value="-" <?= $skala_usaha == '-' ? 'selected' : null ?>>-</option>
                                    <option value="Mikro" <?= $skala_usaha == 'Mikro' ? 'selected' : null ?>>Mikro</option>
                                    <option value="Kecil" <?= $skala_usaha == 'Kecil' ? 'selected' : null ?>>Kecil</option>
                                    <option value="Menengah" <?= $skala_usaha == 'Menengah' ? 'selected' : null ?>>Menengah</option>
                                </select>
                            </div>
                            <div class="modal-footer">
                            <button href="dasprokon.php" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                            <button name="update" class="btn btn-primary" onclick="return confirm('Apakah Yakin Ubah Data Perizinan Ini?')"></i> Simpan</button>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>    
            </div>
            <div class="row g-4">
                <div class="modal fade" id="popup11<?= $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Lain-lain</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="asuransi" class="col-form-label">Asuransi</label>
                                <select class="form-select mb-3" aria-label="Default select example" id="asuransi" name="asuransi" >
                                <?php $asuransi = $row['asuransi']; ?>
                                    <option value="" <?= $asuransi == '' ? 'selected' : null ?>  disabled selected hidden>Asuransi</option>
                                    <option value="-" <?= $asuransi == '-' ? 'selected' : null ?>>-</option>
                                    <option value="Sudah" <?= $asuransi == 'Sudah' ? 'selected' : null ?>>Sudah</option>
                                    <option value="Belum" <?= $asuransi == 'Belum' ? 'selected' : null ?>>Belum</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="bantuan" class="col-form-label">Bantuan</label>
                                <select class="form-select mb-3" aria-label="Default select example" id="bantuan" name="bantuan"  >
                                <?php $bantuan = $row['bantuan']; ?>
                                    <option value="" <?= $bantuan == '' ? 'selected' : null ?> disabled selected hidden>Bantuan</option>
                                    <option value="-" <?= $bantuan == '-' ? 'selected' : null ?>>-</option>
                                    <option value="KKP" <?= $bantuan == 'KKP' ? 'selected' : null ?>>KKP</option>
                                    <option value="Tidak Ada" <?= $bantuan == 'Tidak Ada' ? 'selected' : null ?>>Tidak Ada</option>
                                    <option value="Lain-lain" <?= $bantuan == 'Lain-lain' ? 'selected' : null ?>>Lain-lain</option>
                                </select>
                            </div><div class="mb-3">
                                <label for="penghargaan" class="col-form-label">Penghargaan</label>
                                <select class="form-select mb-3" aria-label="Default select example" id="penghargaan" name="penghargaan">
                                <?php $penghargaan = $row['penghargaan']; ?>
                                    <option value="" <?= $penghargaan == '' ? 'selected' : null ?> disabled selected hidden>Penghargaan</option>
                                    <option value="-" <?= $penghargaan == '-' ? 'selected' : null ?>>-</option>
                                    <option value="Ada" <?= $penghargaan == 'Ada' ? 'selected' : null ?>>Ada</option>
                                    <option value="Tidak" <?= $penghargaan == 'Tidak' ? 'selected' : null ?>>Tidak</option>
                                </select>
                            </div><div class="mb-3">
                                <label for="dukungan_pemda" class="col-form-label">Dukungan Pemda</label>
                                <select class="form-select mb-3" aria-label="Default select example" id="dukungan_pemda" name="dukungan_pemda"  >
                                <?php $dukungan_pemda = $row['dukungan_pemda']; ?>
                                    <option value="" <?= $dukungan_pemda == '' ? 'selected' : null ?> disabled selected hidden>Dukungan Pemda</option>
                                    <option value="-" <?= $dukungan_pemda == '-' ? 'selected' : null ?>>-</option>
                                    <option value="Penyuluhan" <?= $dukungan_pemda == 'Penyuluhan' ? 'selected' : null ?>>Penyuluh</option>
                                    <option value="Bimtek" <?= $dukungan_pemda == 'Bimtek' ? 'selected' : null ?>>Bimtek</option>
                                    <option value="Tidak Ada" <?= $dukungan_pemda == 'Tidak Ada' ? 'selected' : null ?>>Tidak Ada</option>
                                </select>
                            </div><div class="mb-3">
                                <label for="dukungan_pusat" class="col-form-label">Dukungan Pusat</label>
                                <select class="form-select mb-3" aria-label="Default select example" id="dukungan_pusat" name="dukungan_pusat">
                                <?php $dukungan_pusat = $row['dukungan_pusat']; ?>
                                    <option value="" <?= $dukungan_pusat == '' ? 'selected' : null ?> disabled selected hidden>Dukungan Pusat</option>
                                    <option value="-" <?= $dukungan_pusat == '-' ? 'selected' : null ?>>-</option>
                                    <option value="Ada <?= $dukungan_pusat == 'Ada' ? 'selected' : null ?>">Ada</option>
                                    <option value="Tidak" <?= $dukungan_pusat == 'Tidak' ? 'selected' : null ?>>Tidak</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="nama_penyuluh" class="col-form-label">Nama Penyuluh:</label>
                                <input type="text" class="form-control" id="nama_penyuluh" name="nama_penyuluh" value="<?= $row['nama_penyuluh'];?>" >
                            </div>
                            <div class="mb-3">
                                <label for="sertifikat" class="col-form-label">Sertifikat:</label>
                                <input type="text" class="form-control" id="sertifikat" name="sertifikat" value="<?= $row['sertifikat'];?>" >
                            </div>
                            <div class="modal-footer">
                            <button href="dasprokon.php" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                            <button name="update" class="btn btn-primary" onclick="return confirm('Apakah Yakin Ubah Data Lain-lain Ini?')"></i> Simpan</button>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>    
            </div>
            <div class="row g-4">
                <div class="modal fade" id="popup12<?= $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Enumerator / Petugas Sensus</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <div class="mb-3">
                                <label for="foto" class="col-form-label">Foto Petugas</label>
                                <br>
                                <img style="width:150px;" src="img/<?=$row['foto']?>" alt="">
                                <br>
                            <small>Abaikan Jika tidak ingin merubah foto</small> 
                                <input type="hidden" name="fotolama" value="<?=$row['foto']?>">
                                <input type="file" class="form-control" id="myFileInput" name="foto">
                            </div>
                            <div class="mb-3">
                                <label for="nama_petugas" class="col-form-label">Nama Petugas</label>
                                <input type="text" class="form-control" id="nama_petugas" name="nama_petugas" value="<?= $row['nama_petugas'];?>" >
                            </div>
                            <div class="mb-3">
                                <label for="nik_petugas" class="col-form-label">NIK:</label>
                                <input type="text" class="form-control" id="nik_petugas" name="nik_petugas" value="<?= $row['nik_petugas'];?>" >
                            </div>
                            <div class="mb-3">
                                <label for="waktu_sensus" class="col-form-label">Waktu Sensus:</label>
                                <input type="datetime-local" class="form-control" id="waktu_sensus" name="waktu_sensus" value="<?= $row['waktu_sensus'];?>">
                                
                            </div>
                            <div class="mb-3">
                                <label for="perubahan_terakhir" class="col-form-label">Perubahan Terakhir:</label>
                                <input type="datetime-local" class="form-control" id="perubahan_terakhir" name="perubahan_terakhir" value="<?= $row['perubahan_terakhir'];?>" >
                                
                            </div>
                            <div class="modal-footer">
                            <button href="dasprokon.php" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                            <button name="update" class="btn btn-primary" onclick="return confirm('Apakah Yakin Ubah Data Petugas Ini?')"></i> Simpan</button>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>    
            </div>
            <div class="row g-4">
                <div class="modal fade" id="popup13<?= $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">UPT</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="upt" name="upt" value="<?= $row['upt']; ?>">
                            </div>
                    
                            <div class="modal-footer">
                            <button href="dasprokon.php" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                            <button name="update" class="btn btn-primary" onclick="return confirm('Apakah Yakin Ubah Data UPT Ini?')"></i> Simpan</button>
                        </div>
                        </div>
                        </div>
                        </div>
                    </div>
                </div> 
    </div>
    </form>
    <?php
            $i++;
                endforeach; 
            ?>  
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script>
        fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/provinces.json`)
            .then((response) => response.json())
            .then((provinces) => {
                var data = provinces;
                var tampung = `<option>Pilih Provinsi</option>`;
                data.forEach((element) => {
                    tampung += `<option data-prov="${element.id}" value="${element.name}">${element.name}</option>`;
                });
                document.getElementById("provinsi").innerHTML = tampung;
            });
    </script>
    <script>
        const selectProvinsi = document.getElementById('provinsi');
        const selectKota = document.getElementById('kabupaten');
        const selectKecamatan = document.getElementById('kecamatan');
        const selectKelurahan = document.getElementById('kelurahan');

        selectProvinsi.addEventListener('change', (e) => {
            var provinsi = e.target.options[e.target.selectedIndex].dataset.prov;
            fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/regencies/${provinsi}.json`)
                .then((response) => response.json())
                .then((regencies) => { 
                    var data = regencies;
                    var tampung = `<option>Pilih Kabupaten/ Kota</option>`;
                    document.getElementById('kabupaten').innerHTML = '<option>Pilih Kabupaten/ Kota</option>';
                    document.getElementById('kecamatan').innerHTML = '<option>Pilih Kecamatan</option>';
                    document.getElementById('kelurahan').innerHTML = '<option>Pilih Kelurahan</option>';
                    data.forEach((element) => {
                        tampung += `<option data-prov="${element.id}" value="${element.name}">${element.name}</option>`;
                    });
                    document.getElementById("kabupaten").innerHTML = tampung;
                });
        });

        selectKota.addEventListener('change', (e) => {
            var kota = e.target.options[e.target.selectedIndex].dataset.prov;
            fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/districts/${kota}.json`)
                .then((response) => response.json())
                .then((districts) => {
                    var data = districts;
                    var tampung = `<option>Pilih Kecamatan</option>`;
                    document.getElementById('kecamatan').innerHTML = '<option>Pilih Kecamatan</option>';
                    document.getElementById('kelurahan').innerHTML = '<option>Pilih Kelurahan</option>';
                    data.forEach((element) => {
                        tampung += `<option data-prov="${element.id}" value="${element.name}">${element.name}</option>`;
                    });
                    document.getElementById("kecamatan").innerHTML = tampung;
                });
        });
        selectKecamatan.addEventListener('change', (e) => {
            var kecamatan = e.target.options[e.target.selectedIndex].dataset.prov;
            fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/villages/${kecamatan}.json`)
                .then((response) => response.json())
                .then((villages) => {
                    var data = villages;
                    var tampung = `<option>Pilih Kelurahan</option>`;
                    document.getElementById('kelurahan').innerHTML = '<option>Pilih Kelurahan</option>';
                    data.forEach((element) => {
                        tampung += `<option data-prov="${element.id}" value="${element.name}">${element.name}</option>`;
                    });
                    document.getElementById("kelurahan").innerHTML = tampung;
                });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="js/table.js"></script>
    
</body>


</html>