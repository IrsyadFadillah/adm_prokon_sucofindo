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
                <a href="dasprokon.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"></i>SUCOFINDO</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/hehe.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">ADMIN</h6>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="dasprokon.php" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                        <a href="input1.php" class="nav-link dropdown-toggle active"><i class="fa fa-laptop me-2"></i>Input Data</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
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
                            <img class="rounded-circle me-lg-2" src="img/hehe.jpg" alt="" style="width: 40px; height: 40px;">
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
                <div class="bg-light rounded h-100 p-4">
                    <div class="border rounded p-4 pb-0 mb-4">
                        <figure class="text-center">
                            <blockquote class="blockquote">
                                <p><b>Input Data Sensus Pembudidaya</p>
                            </blockquote>
                        </figure>
                    </div>
                </div>
        </div>
        <div class="container-fluid pt-4 px-4">               
            <div class="row g-4">
                
                    <div class="col-sm-6 col-xl-3" type="button" data-bs-toggle="modal" data-bs-target="#popup1" >
                    <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        
                        <div class="ms-3">
                            <p class="mb-2"><b>Data Umum</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3" type="button" data-bs-toggle="modal" data-bs-target="#popup2" >
                    <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        
                        <div class="ms-3">
                            <p class="mb-2"><b>Komoditas</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3" type="button" data-bs-toggle="modal" data-bs-target="#popup3" >
                    <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        
                        <div class="ms-3">
                            <p class="mb-2"><b>Teknologi</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3" type="button" data-bs-toggle="modal" data-bs-target="#popup4" >
                    <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        
                        <div class="ms-3">
                            <p class="mb-2"><b>Produksi & Distribusi</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-sm-6 col-xl-3" type="button" data-bs-toggle="modal" data-bs-target="#popup5" >
                    <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        
                        <div class="ms-3">
                            <p class="mb-2"><b>Pakan</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3" type="button" data-bs-toggle="modal" data-bs-target="#popup6" >
                    <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        
                        <div class="ms-3">
                            <p class="mb-2"><b>Benih</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3" type="button" data-bs-toggle="modal" data-bs-target="#popup7" >
                    <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        
                        <div class="ms-3">
                            <p class="mb-2"><b>Modal & Tenaga Kerja</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3" type="button" data-bs-toggle="modal" data-bs-target="#popup8" >
                    <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        
                        <div class="ms-3">
                            <p class="mb-2"><b>Lingkungan</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-sm-6 col-xl-3" type="button" data-bs-toggle="modal" data-bs-target="#popup9" >
                    <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        
                        <div class="ms-3">
                            <p class="mb-2"><b>Perizinan</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3" type="button" data-bs-toggle="modal" data-bs-target="#popup10" >
                    <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        
                        <div class="ms-3">
                            <p class="mb-2"><b>Lain-lain</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3" type="button" data-bs-toggle="modal" data-bs-target="#popup11" >
                    <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        
                        <div class="ms-3">
                            <p class="mb-2"><b>Petugas Sensus</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3" type="button" data-bs-toggle="modal" data-bs-target="#popup12" >
                    <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        
                        <div class="ms-3">
                            <p class="mb-2 "><b>UPT</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Sale & Revenue End -->
        
        <!-- Footer Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="bg-light rounded-top p-4">
                <div class="row">
                    <div class="col-12 col-sm-6 text-center text-sm-start">
                        &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                    </div>
                    <div class="col-12 col-sm-6 text-center text-sm-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                    </br>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        <div class="modal fade" id="popup1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Data Umum Pembudidaya</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Nama:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">NIK:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Usia:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-3">

                        <label for="recipient-name" class="col-form-label">Agama:</label>
                        <select class="form-select mb-3" aria-label="Default select example" >
                            <option value="" disabled selected hidden>Pilih Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Konghuchu">Konghuchu</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Gender:</label>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios"
                                    id="gridRadios1" value="option1" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Laki-laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios"
                                    id="gridRadios2" value="option2">
                                <label class="form-check-label" for="gridRadios2">
                                    Perempuan
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Pendidikan:</label>
                        <select class="form-select mb-3" aria-label="Default select example" >
                            <option value="" disabled selected hidden>Pilih Pendidikan</option>
                            <option value="-">-</option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA/SMK">SMA/SMK</option>
                            <option value="D3">D3</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Jumlah Anggota Keluarga:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Alamat:</label>
                        <textarea class="form-control" id="message-text"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Kelurahan/ Desa:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Kecamatan:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Kabupaten/ Kota:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Provinsi:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Latitude:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Longitude:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>
                </div>
            </div>

        </div>
        <div class="row g-4">
            <div class="modal fade" id="popup2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Komoditas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Komoditas:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Kelompok:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Biota:</label>
                            <select class="form-select mb-3" aria-label="Default select example" >
                                <option value="" disabled selected hidden>Pilih Biota</option>
                                <option value="Air Tawar">Air Tawar</option>
                                <option value="Air Payau">Air Payau</option>
                                <option value="Air Laut">Air Laut</option>
                            </select>
                        </div>
                        
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send message</button>
                    </div>
                    </div>
                </div>
            </div>    
        </div>
        <div class="row g-4">
            <div class="modal fade" id="popup3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Teknologi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Jenis Usaha:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Status Kusuka:</label>
                            <select class="form-select mb-3" aria-label="Default select example" >
                                <option value="" disabled selected hidden>Status Kusuka</option>
                                <option value="-">-</option>
                                <option value="Terdaftar">Terdaftar</option>
                                <option value="Tidak Terdaftar">Tidak Terdaftar</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Status Kepemilikan:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div><div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Luas Areal (Ha):</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Media Pemeliharaan:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Kepadatan Pemeliharaan:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Teknologi:</label>
                            <select class="form-select mb-3" aria-label="Default select example" >
                                <option value="" disabled selected hidden>Jenis Teknologi</option>
                                <option value="-">-</option>
                                <option value="Tradisional">Tradisional</option>
                                <option value="Semi Intensif">Semi Intensif</option>
                                <option value="Intensif">Intensif</option>
                                <option value="Bioflok">Bioflok</option>
                            </select>
                        </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send message</button>
                    </div>
                    </div>
                </div>
            </div>    
        </div>
        <div class="row g-4">
            <div class="modal fade" id="popup4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Produksi & Distribusi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Produksi (ton/Ha/tahun):</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Distribusi:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Harga Jual:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send message</button>
                    </div>
                    </div>
                </div>
            </div>    
        </div>
        <div class="row g-4">
            <div class="modal fade" id="popup5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Pakan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Jenis Pakan:</label>
                            <select class="form-select mb-3" aria-label="Default select example" >
                                <option value="" disabled selected hidden>Jenis Pakan</option>
                                <option value="-">-</option>
                                <option value="Komersil Apung">Komersil Apung</option>
                                <option value="Komersil Tenggelam">Komersil Tenggelam</option>
                                <option value="Mandiri Apung">Mandiri Apung</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Jumlah Pakan (kg):</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Sumber Suplai:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Harga Pakan (Rp):</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send message</button>
                    </div>
                    </div>
                </div>
            </div>    
        </div>
        <div class="row g-4">
            <div class="modal fade" id="popup6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Benih</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Sumber Benih:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Jumlah benih (ekor)(kg):</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Harga Benih (Rp):</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send message</button>
                    </div>
                    </div>
                </div>
            </div>    
        </div>
        <div class="row g-4">
            <div class="modal fade" id="popup7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal & Tenaga Kerja</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Jumlah TK:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Modal (Omzet - Rp):</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Sumber Modal:</label>
                            <select class="form-select mb-3" aria-label="Default select example" >
                                <option value="" disabled selected hidden>Sumber Modal</option>
                                <option value="-">-</option>
                                <option value="Sendiri">Sendiri</option>
                                <option value="Kredit">Kredit</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Sumber Kredit:</label>
                            <select class="form-select mb-3" aria-label="Default select example" >
                                <option value="" disabled selected hidden>Sumber Kredit</option>
                                <option value="-">-</option>
                                <option value="Sendiri">Kerabat</option>
                                <option value="Kredit">Lain-lain</option>
                            </select>
                        </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send message</button>
                    </div>
                    </div>
                </div>
            </div>    
        </div>
        <div class="row g-4">
            <div class="modal fade" id="popup8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Lingkungan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">IPAL</label>
                            <select class="form-select mb-3" aria-label="Default select example" >
                                <option value="" disabled selected hidden>IPALl</option>
                                <option value="-">-</option>
                                <option value="Ada">Ada</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Tandon:</label>
                            <select class="form-select mb-3" aria-label="Default select example" >
                                <option value="" disabled selected hidden>Tandon</option>
                                <option value="-">-</option>
                                <option value="Ada">Ada</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Greenbelt:</label>
                            <select class="form-select mb-3" aria-label="Default select example" >
                                <option value="" disabled selected hidden>Greenbelt</option>
                                <option value="-">-</option>
                                <option value="-">-</option>
                                <option value="Ada">Ada</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Jarak ke Bibir Pantai (m):</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Sumber Air:</label>
                            <select class="form-select mb-3" aria-label="Default select example" >
                                <option value="" disabled selected hidden>Sumber Air</option>
                                <option value="-">-</option>
                                <option value="Mata Air">Mata Air</option>
                                <option value="Air tanah">Air tanah</option>
                                <option value="Sumbur bor">Sumbur bor</option>
                                <option value="Sungai">Sungai</option>
                                <option value="Laut">Laut</option>
                                <option value="Danau">Danau</option>
                                <option value="Campuran">Campuran</option>
                            </select>
                        </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send message</button>
                    </div>
                    </div>
                </div>
            </div>    
        </div>
        <div class="row g-4">
            <div class="modal fade" id="popup9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Perizinan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Status Izin</label>
                            <select class="form-select mb-3" aria-label="Default select example" >
                                <option value="" disabled selected hidden>Status Izin</option>
                                <option value="-">-</option>
                                <option value="Sudah Berizin">Sudah Berizin</option>
                                <option value="Tidak Berizin">Tidak Berizin</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Status NIB:</label>
                            <select class="form-select mb-3" aria-label="Default select example" >
                                <option value="" disabled selected hidden>Status NIB</option>
                                <option value="-">-</option>
                                <option value="Ada">Ada</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Skala Usaha:</label>
                            <select class="form-select mb-3" aria-label="Default select example" >
                                <option value="" disabled selected hidden>Skala Usaha</option>
                                <option value="-">-</option>
                                <option value="Mikro">Mikro</option>
                                <option value="Kecil">Kecil</option>
                                <option value="Menengah">Menengah</option>
                            </select>
                        </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send message</button>
                    </div>
                    </div>
                </div>
            </div>    
        </div>
        <div class="row g-4">
            <div class="modal fade" id="popup10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Perizinan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Asuransi</label>
                            <select class="form-select mb-3" aria-label="Default select example" >
                                <option value="" disabled selected hidden>Asuransi</option>
                                <option value="-">-</option>
                                <option value="Sudah">Sudah</option>
                                <option value="Belum">Belum</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Bantuan</label>
                            <select class="form-select mb-3" aria-label="Default select example" >
                                <option value="" disabled selected hidden>Bantuan</option>
                                <option value="-">-</option>
                                <option value="Ada">KKP</option>
                                <option value="Tidak Ada">Tidak Ada</option>
                                <option value="Lain-lain">Lain-lain</option>
                            </select>
                        </div><div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Penghargaan</label>
                            <select class="form-select mb-3" aria-label="Default select example" >
                                <option value="" disabled selected hidden>Penghargaan</option>
                                <option value="-">-</option>
                                <option value="Ada">Ada</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </div><div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Dukungan Pemda</label>
                            <select class="form-select mb-3" aria-label="Default select example" >
                                <option value="" disabled selected hidden>Dukungan Pemda</option>
                                <option value="-">-</option>
                                <option value="Penyuluhan">Penyuluh</option>
                                <option value="Bimtek">Bimtek</option>
                                <option value="Tidak Ada">Tidak Ada</option>
                            </select>
                        </div><div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Dukungan Pusat</label>
                            <select class="form-select mb-3" aria-label="Default select example" >
                                <option value="" disabled selected hidden>Dukungan Pusat</option>
                                <option value="-">-</option>
                                <option value="Ada">Ada</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nama Penyuluh:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Sertifikat:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send message</button>
                    </div>
                    </div>
                </div>
            </div>    
        </div>
        <div class="row g-4">
            <div class="modal fade" id="popup11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Enumerator / Petugas Sensus</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nama Petugas</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">NIK:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Waktu Sensus:</label>
                            <input type="date" class="form-control" id="recipient-name">
                            <input type="time" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Perubahan Terakhir:</label>
                            <input type="date" class="form-control" id="recipient-name">
                            <input type="time" class="form-control" id="recipient-name">
                        </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send message</button>
                    </div>
                    </div>
                </div>
            </div>    
        </div>
        <div class="row g-4">
            <div class="modal fade" id="popup12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">UPT</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send message</button>
                    </div>
                    </div>
                </div>
            </div>    
        </div>
        <!-- Content End -->
        

        <!-- Back to Top -->
        
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