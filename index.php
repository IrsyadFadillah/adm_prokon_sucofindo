<?php
session_start();

include ("koneksi.php");
$sensus = query("SELECT * FROM sensus");
$query = "select * from sensus";
$result = mysqli_query($koneksi, $query);

$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Data Sensus Pembudidaya-SUCOFINDO</title>
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
    <link href="libuser/animate/animate.min.css" rel="stylesheet">
    <link href="libuser/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="cssuser/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="cssuser/style.css" rel="stylesheet">
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
            height: 550px;
            overflow: scroll;
        }
    </style>
    
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0" id="home">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <img src="img/Logo_sucofindo.png">
                </a>
                <button class="navbar-toggler rounded-pill" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="#home" class="nav-item nav-link active">Home</a>
                        <a href="#table" class="nav-item nav-link">Table</a>
                        <a href="#about" class="nav-item nav-link">About</a>
                        <a href="#features" class="nav-item nav-link">Features</a>
                        
                        <a href="#contact" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="dasprokon.php" class="btn btn-light rounded-pill py-2 px-4 ms-3 d-none d-lg-block">ADMIN</a>
                </div>
            </nav>

            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/1.jpg" class="d-block w-100" alt="..." height="630" width="300">
                  </div>
                  <div class="carousel-item">
                    <img src="img/2.jpg" class="d-block w-100" alt="..." height="630" width="300">
                  </div>
                  <div class="carousel-item">
                    <img src="img/3.jpg" class="d-block w-100" alt="..." height="630" width="300">
                  </div>
                  <div class="carousel-item">
                    <img src="img/4.jpg" class="d-block w-100" alt="..." height="630" width="300">
                  </div>
                  
                  
                  <div class="container-xxl bg-primary hero-header">
                    <div class="container">
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-7 text-center text-lg-start">
                                <h1 class="text-white mb-4 animated slideInDown" style="text-emphasis: left;">Data Sensus Pembudidaya SUCOFINDO</h1>
                                <p class="text-white pb-3 animated slideInDown">Website Internal SUCOFINDO Tentang Pengelolaan Data Sensus Pembudidaya Di Lapangan Untuk Memudahkan Admin dan Mengefisienkan Data.</p>
                            </div>
                            <div class="col-lg-6 text-center text-lg-start">
                            </div>
                            
                        </div>
                    </div>
                </div>
                </div>
              </div>
        </div>
        <!-- Navbar & Hero End -->
        <div class="container-xxl py-6" id="table">
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
                                <th colspan="7" style="border-color: grey;">DATA UMUM PEMBUDIDAYA</th>
                                <th colspan="7" style="border-color: grey;">LOKASI USAHA</th>
                                <th colspan="3" style="border-color: grey;">KOMODITAS</th>
                                <th colspan="7" style="border-color: grey;">TEKNOLOGI</th>
                                <th colspan="3" style="border-color: grey;">PRODUKSI & DISTRIBUSI</th>
                                <th colspan="4" style="border-color: grey;">PAKAN</th>
                                <th colspan="3" style="border-color: grey;">BENIH</th>
                                <th colspan="4" style="border-color: grey;">MODAL & TENAGA KERJA</th>
                                <th colspan="5" style="border-color: grey;">LINGKUNGAN</th>
                                <th colspan="3" style="border-color: grey;">PERIZINAN</th>
                                <th colspan="7" style="border-color: grey;">LAIN-LAIN</th>
                                <th colspan="4" style="border-color: grey;">ENUMERATOR/PETUGAS SENSUS</th>
                                <th colspan="1"  style="border-color: grey;">UPT</th>
                            </tr>
                            <tr class="table-border">
                                <th scope="col" style="border-color: grey;" class="text-dark">NAMA</th>
                                <th scope="col" style="border-color: grey;" class="text-dark">NIK</th>
                                <th scope="col" style="border-color: grey;" class="text-dark">USIA</th>
                                <th scope="col" style="border-color: grey;" class="text-dark">AGAMA</th>
                                <th scope="col" style="border-color: grey;" class="text-dark">GENDER</th>
                                <th scope="col" style="border-color: grey;" class="text-dark">PENDIDIKAN</th>
                                <th scope="col" style="border-color: grey;" class="text-dark">JUMLAH ANGGOTA</th>
                                
                                <th scope="col" style="border-color: grey;" class="text-dark">ALAMAT</th>
                                <th scope="col" style="border-color: grey;" class="text-dark">KELURAHAN/DESA</th>
                                <th scope="col" style="border-color: grey;" class="text-dark">KECAMATAN</th>
                                <th scope="col" style="border-color: grey;" class="text-dark">KABUPATEN/KOTA</th>
                                <th scope="col" style="border-color: grey;" class="text-dark">PROVINSI</th>
                                <th scope="col" style="border-color: grey;" class="text-dark">LATITUDE</th>
                                <th scope="col" style="border-color: grey;" class="text-dark">LONGITUDE</th>
                                
                                <th scope="col" style="border-color: grey;" class="text-dark">KOMODITAS</th>
                                <th scope="col" style="border-color: grey;" class="text-dark">KELOMPOK</th>
                                <th scope="col" style="border-color: grey;" class="text-dark">BIOTA</th>
                                
                                <th scope="col" style="border-color: grey;" class="text-dark">JENIS USAHA</th>
                                <th scope="col" style="border-color: grey;" class="text-dark">STATUS KUSUKA</th>
                                <th scope="col" style="border-color: grey;" class="text-dark">STATUS KEPEMILIKAN</th>
                                <th scope="col" style="border-color: grey;" class="text-dark">LUAS AREAL(Ha)</th>
                                <th scope="col" style="border-color: grey;" class="text-dark">MEDIA PEMELIHARAAN</th>
                                <th scope="col" style="border-color: grey;" class="text-dark">KEPADATAN PEMELIHARAAN</th>
                                <th scope="col" style="border-color: grey;" class="text-dark">TEKNOLOGI</th>
                                
                                <th scope="col" style="border-color: grey;" class="text-dark">PRODUKSI (ton/Ha/tahun)</th>
                                <th scope="col" style="border-color: grey;" class="text-dark">DISTRIBUSI</th>
                                <th scope="col" style="border-color: grey;" class="text-dark">HARGA JUAL(Rp)</th>
                                
                                <th scope="col" style="border-color: grey;" class="text-dark">JENIS PAKAN</th>
                                <th scope="col" style="border-color: grey;" class="text-dark">JUMLAH PAKAN(Kg)</th>
                                <th scope="col" style="border-color: grey;" class="text-dark">SUMBER SUPLAI</th>
                                <th scope="col" style="border-color: grey;" class="text-dark">HARGA PAKAN(Rp)</th>
                                
                                <th scope="col" style="border-color: grey;" class="text-dark">SUMBER BENIH</th>
                                <th scope="col" style="border-color: grey;" class="text-dark">JUMLAH BENIH(ekor/kg)</th>
                                <th scope="col" style="border-color: grey;" class="text-dark">HARGA BENIH(Rp)</th>
                                
                                <th scope="col" style="border-color: grey;" class="text-dark">JUMLAH TK</th>
                                <th scope="col" style="border-color: grey;" class="text-dark">MODAL(OMZET-Rp)</th>
                                <th scope="col" style="border-color: grey;" class="text-dark">SUMBER MODAL</th>
                                <th scope="col" style="border-color: grey;" class="text-dark">SUMBER KREDIT</th>
                                
                                <th scope="col" style="border-color: grey;" class="text-dark">IPAL</th>
                                <th scope="col" style="border-color: grey;" class="text-dark">TANDON</th>
                                <th scope="col" style="border-color: grey;" class="text-dark">GREENBELT</th>
                                <th scope="col" style="border-color: grey;" class="text-dark">JARAK KE BIBIR PANTAI(m)</th>
                                <th scope="col" style="border-color: grey;" class="text-dark">SUMBER AIR</th>
                                
                                <th scope="col" style="border-color: grey;" class="text-dark">STATUS IZIN</th>
                                <th scope="col" style="border-color: grey;" class="text-dark">STATUS NIB</th>
                                <th scope="col" style="border-color: grey;" class="text-dark">SKALA USAHA</th>
                                
                                <th scope="col" style="border-color: grey;" class="text-dark">ASURANSI</th>
                                <th scope="col" style="border-color: grey;" class="text-dark">BANTUAN</th>
                                <th scope="col" style="border-color: grey;" class="text-dark">PENGHARGAAN</th>
                                <th scope="col" style="border-color: grey;" class="text-dark">DUKUNGAN PEMDA</th>
                                <th scope="col" style="border-color: grey;" class="text-dark">DUKUNGAN PUSAT</th>
                                <th scope="col" style="border-color: grey;" class="text-dark">NAMA PENYULUH</th>
                                <th scope="col" style="border-color: grey;" class="text-dark">SERTIFIKAT</th>
                                
                                <th scope="col" style="border-color: grey;" class="text-dark">NAMA PETUGAS</th>
                                <th scope="col" style="border-color: grey;" class="text-dark">NIK</th>
                                <th scope="col" style="border-color: grey;" class="text-dark">WAKTU SENSUS</th>
                                <th scope="col" style="border-color: grey;" class="text-dark">PERUBAHAN TERKAHIR</th>
                                
                                <th scope="col" style="border-color: grey;" class="text-dark">UPT</th>
                                
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
                                <td class="text-dark" ><?php echo $row["alamat"]; ?></td>
                                <td class="text-dark" ><?php echo $row["kelurahan"]; ?></td>
                                <td class="text-dark" ><?php echo $row["kecamatan"]; ?></td>
                                <td class="text-dark" ><?php echo $row["kabupaten"]; ?></td>
                                <td class="text-dark" ><?php echo $row["provinsi"]; ?></td>
                                <td class="text-dark" ><?php echo $row["latitude"]; ?></td>
                                <td class="text-dark" ><?php echo $row["longtitude"]; ?></td>
                                <td class="text-dark" ><?php echo $row["komoditas"]; ?></td>
                                <td class="text-dark" ><?php echo $row["kelompok"]; ?></td>
                                <td class="text-dark" ><?php echo $row["biota"]; ?></td>
                                <td class="text-dark" ><?php echo $row["jenis_usaha"]; ?></td>
                                <td class="text-dark" ><?php echo $row["status_kusuka"]; ?></td>
                                <td class="text-dark" ><?php echo $row["status_pemilik"]; ?></td>
                                <td class="text-dark" ><?php echo $row["luas_areal"]; ?></td>
                                <td class="text-dark" ><?php echo $row["media_pemeliharaan"]; ?></td>
                                <td class="text-dark" ><?php echo $row["kepadatan_pemeliharaan"]; ?></td>
                                <td class="text-dark" ><?php echo $row["teknologi"]; ?></td>
                                <td class="text-dark" ><?php echo $row["produksi"]; ?></td>
                                <td class="text-dark" ><?php echo $row["distribusi"]; ?></td>
                                <td class="text-dark" ><?php echo $row["harga_jual"]; ?></td>
                                <td class="text-dark" ><?php echo $row["jenis_pakan"]; ?></td>
                                <td class="text-dark" ><?php echo $row["jml_pakan"]; ?></td>
                                <td class="text-dark" ><?php echo $row["sumber_suplai"]; ?></td>
                                <td class="text-dark" ><?php echo $row["harga_pakan"]; ?></td>
                                <td class="text-dark" ><?php echo $row["sumber_benih"]; ?></td>
                                <td class="text-dark" ><?php echo $row["jml_benih"]; ?></td>
                                <td class="text-dark" ><?php echo $row["harga_benih"]; ?></td>
                                <td class="text-dark" ><?php echo $row["jml_tk"]; ?></td>
                                <td class="text-dark" ><?php echo $row["modal"]; ?></td>
                                <td class="text-dark" ><?php echo $row["sumber_modal"]; ?></td>
                                <td class="text-dark" ><?php echo $row["sumber_kredit"]; ?></td>
                                <td class="text-dark" ><?php echo $row["ipal"]; ?></td>
                                <td class="text-dark" ><?php echo $row["tandon"]; ?></td>
                                <td class="text-dark" ><?php echo $row["greenbelt"]; ?></td>
                                <td class="text-dark" ><?php echo $row["jarak_pantai"]; ?></td>
                                <td class="text-dark" ><?php echo $row["sumber_air"]; ?></td>
                                <td class="text-dark" ><?php echo $row["status_izin"]; ?></td>
                                <td class="text-dark" ><?php echo $row["status_nib"]; ?></td>
                                <td class="text-dark" ><?php echo $row["skala_usaha"]; ?></td>
                                <td class="text-dark" ><?php echo $row["asuransi"]; ?></td>
                                <td class="text-dark" ><?php echo $row["bantuan"]; ?></td>
                                <td class="text-dark" ><?php echo $row["penghargaan"]; ?></td>
                                <td class="text-dark" ><?php echo $row["dukungan_pemda"]; ?></td>
                                <td class="text-dark" ><?php echo $row["dukungan_pusat"]; ?></td>
                                <td class="text-dark" ><?php echo $row["nama_penyuluh"]; ?></td>
                                <td class="text-dark" ><?php echo $row["sertifikat"]; ?></td>
                                <td class="text-dark" ><?php echo $row["nama_petugas"]; ?></td>
                                <td class="text-dark" ><?php echo $row["nik_petugas"]; ?></td>
                                <td class="text-dark" ><?php echo $row["waktu_sensus"]; ?></td>
                                <td class="text-dark" ><?php echo $row["perubahan_terakhir"]; ?></td>
                                <td class="text-dark" ><?php echo $row["upt"]; ?></td>
                            </tr>
                            <?php
                                $i++;
                                endforeach; 
                            ?>
                        </tbody>
                            
                    </table>
                </div>
            </div>
        </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        


        <!-- About Start -->
        <div class="container-xxl py-6" id="about">
            <div class="container">
                <div class="row g-5 flex-column-reverse flex-lg-row">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="mb-4">Mempermudah dalam Pengelolaan Data</h1>
                        <p class="mb-4">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo eirmod magna dolore erat amet</p>
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="ms-4">
                                <h5>First Working Process</h5>
                                <p class="mb-0">Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo magna</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="ms-4">
                                <h5>24/7 Hours Support</h5>
                                <p class="mb-0">Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo magna</p>
                            </div>
                        </div>
                        <a href="" class="btn btn-primary py-sm-3 px-sm-5 rounded-pill mt-3">Read More</a>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid rounded wow zoomIn" data-wow-delay="0.5s" src="img/ssdashboard.jpg">
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Overview Start -->
        <div class="container-xxl bg-light my-6 py-5" id="features">
            <div class="container">
                <div class="row g-5 py-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <img class="img-fluid rounded" src="img/sslogin.jpg">
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="mb-0">01</h1>
                            <span class="bg-primary mx-2" style="width: 30px; height: 2px;"></span>
                            <h5 class="mb-0">Login</h5>
                        </div>
                        <p class="mb-4">Admin akan dihadapkan dengan halaman login sebelum masuk ke halaman dashboard</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Masukkan alamat E-mail yang sudah didaftarkan</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Masukkan Password</p>
                        <p class="mb-0"><i class="fa fa-check-circle text-primary me-3"></i>lalu Sign in untuk masuk ke halaman admin</p>
                    </div>
                </div>
                <div class="row g-5 py-5 align-items-center flex-column-reverse flex-lg-row">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="mb-0">02</h1>
                            <span class="bg-primary mx-2" style="width: 30px; height: 2px;"></span>
                            <h5 class="mb-0">Input Data</h5>
                        </div>
                        <p class="mb-4">Halaman Input Data</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Berisikan beberapa kolom yang harus diisi</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Pilih kolom yang akan diisi</p>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <img class="img-fluid rounded" src="img/ssinput.jpg">
                    </div>
                </div>
                <div class="row g-5 py-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <img class="img-fluid rounded" src="img/ssitek.jpg">
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="mb-0">03</h1>
                            <span class="bg-primary mx-2" style="width: 30px; height: 2px;"></span>
                            <h5 class="mb-0">Pop-up</h5>
                        </div>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Masukkan data sesuai perintah yang sudah ada</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Overview End -->


        
        

        <!-- Footer Start -->
        <footer class="container-fluid bg-dark text-body footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Address<span></span></p>
                        <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Quick Link<span></span></p>
                        <a class="btn btn-link" href="">About</a>
                        <a class="btn btn-link" href="">Contact</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="">Terms & Conditions</a>
                        <a class="btn btn-link" href="">Support</a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Community<span></span></p>
                        <a class="btn btn-link" href="">Career</a>
                        <a class="btn btn-link" href="">Leadership</a>
                        <a class="btn btn-link" href="">Strategy</a>
                        <a class="btn btn-link" href="">History</a>
                        <a class="btn btn-link" href="">Components</a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Newsletter<span></span></p>
                        <p>Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulpu</p>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Your Email" style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved. 
							
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="libuser/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <!-- <script src="lib/waypoints/waypoints.min.js"></script> -->
    <!-- <script src="lib/counterup/counterup.min.js"></script> -->
    <script src="libuser/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="jsuser/main.js"></script>
    <script src="js/table.js"></script>
</body>

</html>