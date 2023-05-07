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

    <style>
        .table-container {
          max-height: 500px; /* Set the maximum height for vertical scrolling */
          overflow-y: scroll; /* Enable vertical scrolling */
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
      </style>
</head>

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
            <a href="dasprokon.php" class="navbar-brand mx-4 mb-3">
                <h3 class="text-primary"></i>SUCOFINDO</h3>
            </a>
            <div class="d-flex align-items-center ms-4 mb-4">
                <div class="position-relative">
                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                    <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                </div>
                <div class="ms-3">
                    <h6 class="mb-0">ADMIN</h6>
                </div>
            </div>
            <div class="navbar-nav w-100">
                <a href="index.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="input1.php" class="nav-link dropdown-toggle"><i class="fa fa-laptop me-2"></i>Input Data</a>
            </div>
        </nav>
    </div>
    <!-- Sidebar End -->


    <!-- Content Start -->
    <div class="content">
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
            <a href="dasprokon.php" class="navbar-brand d-flex d-lg-none me-4">
                <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
            </a>
            <a href="#" class="sidebar-toggler flex-shrink-0">
                <i class="fa fa-bars"></i>
            </a>
            <form class="d-none d-md-flex ms-4">
                <input class="form-control border-0" type="search" placeholder="Search">
            </form>
            <div class="navbar-nav align-items-center ms-auto">
                <div class="nav-item dropdown">
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <span class="d-none d-lg-inline-flex">ADMIN</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                        <a href="#" class="dropdown-item">Log Out</a>
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
                            <h2 style="color:cornflowerblue" >WELLCOME BACK ADMIN</h2>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-chart-bar fa-3x text-primary"></i>
                        <div class="ms-5">
                            <p class="mb-2">Total Data</p>
                            <h6 class="mb-0">1234</h6>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Sale & Revenue End -->


        

        <!-- Recent Sales Start -->
        <div class="table-container">
        <div class="container-fluid pt-4 px-4">
            <div class="bg-light text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <H4 class="mb-0" >DATA SENSUS PEMBUDIDAYA</H4>
                </div>
                <div class="table-responsive">
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <tr class="text-dark table-border">
                                <th rowspan="3"  style="border-color: black;">No</th>
                            </tr>
                            <tr class="table-border">
                                <th colspan="7" style="border-color: black;">DATA UMUM PEMBUDIDAYA</th>
                                <th colspan="7" style="border-color: black;">LOKASI USAHA</th>
                                <th colspan="3" style="border-color: black;">KOMODITAS</th>
                                <th colspan="6" style="border-color: black;">TEKNOLOGI</th>
                                <th colspan="3" style="border-color: black;">PRODUKSI & DISTRIBUSI</th>
                                <th colspan="4" style="border-color: black;">PAKAN</th>
                                <th colspan="3" style="border-color: black;">BENIH</th>
                                <th colspan="4" style="border-color: black;">MODAL & TENAGA KERJA</th>
                                <th colspan="5" style="border-color: black;">LINGKUNGAN</th>
                                <th colspan="3" style="border-color: black;">PERIZINAN</th>
                                <th colspan="7" style="border-color: black;">PERIZINAN</th>
                                <th colspan="4" style="border-color: black;">ENUMERATOR/PETUGAS SENSUS</th>
                                    <th rowspan="2"  style="border-color: black;">UPT</th>
                            </tr>
                            <tr class="table-border">
                                <th scope="col" style="border-color: black;">NAMA</th>
                                <th scope="col" style="border-color: black;">NIK</th>
                                <th scope="col" style="border-color: black;">USIA</th>
                                <th scope="col" style="border-color: black;">AGAMA</th>
                                <th scope="col" style="border-color: black;">GENDER</th>
                                <th scope="col" style="border-color: black;">PENDIDIKAN</th>
                                <th scope="col" style="border-color: black;">JUMLAH ANGGOTA</th>
                                <th scope="col" style="border-color: black;">ALAMAT</th>
                                <th scope="col" style="border-color: black;">KELURAHAN/DESA</th>
                                <th scope="col" style="border-color: black;">KECAMATAN</th>
                                <th scope="col" style="border-color: black;">KABUPATEN/KOTA</th>
                                <th scope="col" style="border-color: black;">PROVINSI</th>
                                <th scope="col" style="border-color: black;">LATITUDE</th>
                                <th scope="col" style="border-color: black;">LONGITUD</th>
                                <th scope="col" style="border-color: black;">KOMODITAS</th>
                                <th scope="col" style="border-color: black;">KELOMPOK</th>
                                <th scope="col" style="border-color: black;">BIOTA</th>
                                <th scope="col" style="border-color: black;">JENIS USAHA</th>
                                <th scope="col" style="border-color: black;">STATUS KUSUKA</th>
                                <th scope="col" style="border-color: black;">STATUS KEPEMILIKAN</th>
                                <th scope="col" style="border-color: black;">LUAS AREAL(Ha)</th>
                                <th scope="col" style="border-color: black;">MEDIA PEMELIHARAAN</th>
                                <th scope="col" style="border-color: black;">TEKNOLOGI</th>
                                <th scope="col" style="border-color: black;">PRODUKSI (ton/Ha/tahun)</th>
                                <th scope="col" style="border-color: black;">DISTRIBUSI</th>
                                <th scope="col" style="border-color: black;">HARGA JUAL(Rp)</th>
                                <th scope="col" style="border-color: black;">JENIS PAKAN</th>
                                <th scope="col" style="border-color: black;">JUMLAH PAKAN(Kg)</th>
                                <th scope="col" style="border-color: black;">SUMBER SUPLAI</th>
                                <th scope="col" style="border-color: black;">HARGA PAKAN(Rp)</th>
                                <th scope="col" style="border-color: black;">SIMBER BENIH</th>
                                <th scope="col" style="border-color: black;">JUMLAH BENIH(ekor/kg)</th>
                                <th scope="col" style="border-color: black;">HARGA BENIH(Rp)</th>
                                <th scope="col" style="border-color: black;">JUMLAH TK</th>
                                <th scope="col" style="border-color: black;">MODAL(OMZET-Rp)</th>
                                <th scope="col" style="border-color: black;">SUMBER MODAL</th>
                                <th scope="col" style="border-color: black;">SUMBER KREDIT</th>
                                <th scope="col" style="border-color: black;">IPAL</th>
                                <th scope="col" style="border-color: black;">TANDON</th>
                                <th scope="col" style="border-color: black;">GREENBELT</th>
                                <th scope="col" style="border-color: black;">JARAK KE BIBIR PANTAI(m)</th>
                                <th scope="col" style="border-color: black;">SUMBER AIR</th>
                                <th scope="col" style="border-color: black;">STATUS IZIN</th>
                                <th scope="col" style="border-color: black;">STATUS NIB</th>
                                <th scope="col" style="border-color: black;">SKALA USAHA</th>
                                <th scope="col" style="border-color: black;">ASURANSI</th>
                                <th scope="col" style="border-color: black;">BANTUAN</th>
                                <th scope="col" style="border-color: black;">PENGHARGAAN</th>
                                <th scope="col" style="border-color: black;">DUKUNGAN PEMDA</th>
                                <th scope="col" style="border-color: black;">DUKUNGAN PUSAT</th>
                                <th scope="col" style="border-color: black;">NAMA PENYULUH</th>
                                <th scope="col" style="border-color: black;">SERTIFIKAT</th>
                                <th scope="col" style="border-color: black;">NAMA PETUGAS</th>
                                <th scope="col" style="border-color: black;">NIK</th>
                                <th scope="col" style="border-color: black;">WAKTU SENSUS</th>
                                <th scope="col" style="border-color: black;">PERUBAHAN TERKAHIR</th>
                            </tr>
            
                            <tr>
                                <td>1</td>
                                <td>01 Jan 2045</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                                <td>INV-0123</td>
                            </tr>
                            

                    </table>
                </div>
            </div>
        </div>
    </div>
        <!-- Recent Sales End -->


    <!-- Content End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- JavaScript Libraries -->
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
</body>


</html>