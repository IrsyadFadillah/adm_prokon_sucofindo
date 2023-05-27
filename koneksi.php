<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "prokon";

    $koneksi  = mysqli_connect($host, $username, $password, $database);

    if(!$koneksi){
        echo "Koneksi Gagal";
    }
    function query($query)
    {
        // Koneksi database
        global $koneksi;
    
        $result = mysqli_query($koneksi, $query);
    
        // membuat varibale array
        $rows = [];
    
        // mengambil semua data dalam bentuk array
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
    
        return $rows;
    }
    //membuat fungsi tambah data
    function tambah($data)
    {
    global $koneksi;

    $id = ($data['id']);
    $nama= ($data['nama']);
    $nik = ($data['nik']);
	$usia = ($data['usia']);
    $agama = ($data['agama']);
    $gender = ($data['gender']);
    $pendidikan = ($data['pendidikan']);
    $jml_keluarga = ($data['jml_keluarga']);
    $alamat = ($data['alamat']);
    $kelurahan = ($data['kelurahan']);
    $kecamatan = ($data['kecamatan']);
    $kabupaten = ($data['kabupaten']);
    $provinsi = ($data['provinsi']);
    $latitude = ($data['latitude']);
    $longtitude = ($data['longtitude']);
    $komoditas = ($data['komoditas']);
    $kelompok = ($data['kelompok']);
    $biota = ($data['biota']);
    $jenis_usaha = ($data['jenis_usaha']);
    $status_kusuka = ($data['status_kusuka']);
    $status_pemilik = ($data['status_pemilik']);
    $luas_areal = ($data['luas_areal']);
    $media_pemeliharaan = ($data['media_pemeliharaan']);
    $kepadatan_pemeliharaan = ($data['kepadatan_pemeliharaan']);
    $teknologi = ($data['teknologi']);
    $produksi = ($data['produksi']);
    $distribusi = ($data['distribusi']);
    $harga_jual = ($data['harga_jual']);
    $jenis_pakan = ($data['jenis_pakan']);
    $jml_pakan = ($data['jml_pakan']);
    $sumber_suplai = ($data['sumber_suplai']);
    $harga_pakan = ($data['harga_pakan']);
    $sumber_benih = ($data['sumber_benih']);
    $jml_benih = ($data['jml_benih']);
    $harga_benih = ($data['harga_benih']);
    $jml_tk = ($data['jml_tk']);
    $modal = ($data['modal']);
    $sumber_modal = ($data['sumber_modal']);
    $sumber_kredit = ($data['sumber_kredit']);
    $ipal = ($data['ipal']);
    $tandon = ($data['tandon']);
    $greenbelt = ($data['greenbelt']);
    $jarak_pantai = ($data['jarak_pantai']);
    $sumber_air = ($data['sumber_air']);
    $status_izin = ($data['status_izin']);
    $status_nib = ($data['status_nib']);
    $skala_usaha = ($data['skala_usaha']);
    $asuransi = ($data['asuransi']);
    $bantuan = ($data['bantuan']);
    $penghargaan = ($data['penghargaan']);
    $dukungan_pemda = ($data['dukungan_pemda']);
    $dukungan_pusat = ($data['dukungan_pusat']);
    $nama_penyuluh = ($data['nama_penyuluh']);
    $sertifikat = ($data['sertifikat']);
    $foto = upload_file();
    $nama_petugas = ($data['nama_petugas']);
    $nik_petugas = ($data['nik_petugas']);
    $waktu_sensus = ($data['waktu_sensus']);
    $perubahan_terakhir = ($data['perubahan_terakhir']);
    $upt = ($data['upt']);
    $verif = ($data['verif']);

    $query = "INSERT INTO `sensus`(`id`, `nama`, `nik`, `usia`, `agama`, `gender`, `pendidikan`, `jml_keluarga`, `alamat`, `kelurahan`, `kecamatan`, `kabupaten`, `provinsi`, `latitude`, `longtitude`, `komoditas`, `kelompok`, `biota`, `jenis_usaha`, `status_kusuka`, `status_pemilik`, `luas_areal`, `media_pemeliharaan`, `kepadatan_pemeliharaan`, `teknologi`, `produksi`, `distribusi`, `harga_jual`, `jenis_pakan`, `jml_pakan`, `sumber_suplai`, `harga_pakan`, `sumber_benih`, `jml_benih`, `harga_benih`, `jml_tk`, `modal`, `sumber_modal`, `sumber_kredit`, `ipal`, `tandon`, `greenbelt`, `jarak_pantai`, `sumber_air`, `status_izin`, `status_nib`, `skala_usaha`, `asuransi`, `bantuan`, `penghargaan`, `dukungan_pemda`, `dukungan_pusat`, `nama_penyuluh`, `sertifikat`, `foto`, `nama_petugas`, `nik_petugas`, `waktu_sensus`, `perubahan_terakhir`, `upt`, `verif`) VALUES ('$id','$nama','$nik','$usia','$agama','$gender','$pendidikan','$jml_keluarga','$alamat','$kelurahan','$kecamatan','$kabupaten','$provinsi','$latitude','$longtitude','$komoditas','$kelompok','$biota','$jenis_usaha','$status_kusuka','$status_pemilik','$luas_areal','$media_pemeliharaan','$kepadatan_pemeliharaan','$teknologi','$produksi','$distribusi','$harga_jual','$jenis_pakan','$jml_pakan','$sumber_suplai','$harga_pakan','$sumber_benih','$jml_benih','$harga_benih','$jml_tk','$modal','$sumber_modal','$sumber_kredit','$ipal','$tandon','$greenbelt','$jarak_pantai','$sumber_air','$status_izin','$status_nib','$skala_usaha','$asuransi','$bantuan','$penghargaan','$dukungan_pemda','$dukungan_pusat','$nama_penyuluh','$sertifikat', '$foto','$nama_petugas','$nik_petugas','$waktu_sensus','$perubahan_terakhir','$upt','$verif')";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
    }

    function upload_file()
    {
        $namaFile = $_FILES['foto']['name'];
        $ukuranFile = $_FILES['foto']['size'];
        $error = $_FILES['foto']['error'];
        $tmpName = $_FILES['foto']['tmp_name'];

        $extensifileValid = ['jpg', 'jpeg', 'png'];
        $extensifile = explode('.', $namaFile);
        $extensifile = strtolower(end($extensifile));

        if (!in_array($extensifile, $extensifileValid)){
            echo "<script> alert('Format Tidak Valid');
            document.location.href = 'input1.php';
            </script>";
        die();
        }

        if ($ukuranFile > 2048000) {
            echo "<script> alert('Ukuran File Max 2 MB');
            document.location.href = 'input1.php';
            </script>";
        die();
        }

        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru.= $extensifile;

        move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
        return $namaFileBaru;
    }

 // Membuat fungsi hapus data
    function hapus($id)
    {
        global $koneksi;
    
        mysqli_query($koneksi, "DELETE FROM sensus WHERE id = $id");
        return mysqli_affected_rows($koneksi);
    }

    //membuat fungsi ubah data
    function update($data)
    {
        global $koneksi;

        if($_FILES['foto']['error'] === 4){
            $foto = $data['fotolama'];
        } else {
            $foto = upload_file();
        }
        
        $id = ($data['id']);
        $nama= ($data['nama']);
        $nik = ($data['nik']);
        $usia = ($data['usia']);
        $agama = ($data['agama']);
        $gender = ($data['gender']);
        $pendidikan = ($data['pendidikan']);
        $jml_keluarga = ($data['jml_keluarga']);
        $alamat = ($data['alamat']);
        $kelurahan = ($data['kelurahan']);
        $kecamatan = ($data['kecamatan']);
        $kabupaten = ($data['kabupaten']);
        $provinsi = ($data['provinsi']);
        $latitude = ($data['latitude']);
        $longtitude = ($data['longtitude']);
        $komoditas = ($data['komoditas']);
        $kelompok = ($data['kelompok']);
        $biota = ($data['biota']);
        $jenis_usaha = ($data['jenis_usaha']);
        $status_kusuka = ($data['status_kusuka']);
        $status_pemilik = ($data['status_pemilik']);
        $luas_areal = ($data['luas_areal']);
        $media_pemeliharaan = ($data['media_pemeliharaan']);
        $kepadatan_pemeliharaan = ($data['kepadatan_pemeliharaan']);
        $teknologi = ($data['teknologi']);
        $produksi = ($data['produksi']);
        $distribusi = ($data['distribusi']);
        $harga_jual = ($data['harga_jual']);
        $jenis_pakan = ($data['jenis_pakan']);
        $jml_pakan = ($data['jml_pakan']);
        $sumber_suplai = ($data['sumber_suplai']);
        $harga_pakan = ($data['harga_pakan']);
        $sumber_benih = ($data['sumber_benih']);
        $jml_benih = ($data['jml_benih']);
        $harga_benih = ($data['harga_benih']);
        $jml_tk = ($data['jml_tk']);
        $modal = ($data['modal']);
        $sumber_modal = ($data['sumber_modal']);
        $sumber_kredit = ($data['sumber_kredit']);
        $ipal = ($data['ipal']);
        $tandon = ($data['tandon']);
        $greenbelt = ($data['greenbelt']);
        $jarak_pantai = ($data['jarak_pantai']);
        $sumber_air = ($data['sumber_air']);
        $status_izin = ($data['status_izin']);
        $status_nib = ($data['status_nib']);
        $skala_usaha = ($data['skala_usaha']);
        $asuransi = ($data['asuransi']);
        $bantuan = ($data['bantuan']);
        $penghargaan = ($data['penghargaan']);
        $dukungan_pemda = ($data['dukungan_pemda']);
        $dukungan_pusat = ($data['dukungan_pusat']);
        $nama_penyuluh = ($data['nama_penyuluh']);
        $sertifikat = ($data['sertifikat']);     
        $nama_petugas = ($data['nama_petugas']);
        $nik_petugas = ($data['nik_petugas']);
        $waktu_sensus = ($data['waktu_sensus']);
        $perubahan_terakhir = ($data['perubahan_terakhir']);
        $upt = ($data['upt']);

        $sql = "UPDATE `sensus` SET nama='$nama',nik='$nik',usia='$usia',agama='$agama',gender='$gender',pendidikan='$pendidikan',jml_keluarga='$jml_keluarga',alamat='$alamat',kelurahan='$kelurahan',kecamatan='$kecamatan',kabupaten='$kabupaten',provinsi='$provinsi',latitude='$latitude',longtitude='$longtitude',komoditas='$komoditas',kelompok='$kelompok',biota='$biota',jenis_usaha='$jenis_usaha',status_kusuka='$status_kusuka',status_pemilik='$status_pemilik',luas_areal='$luas_areal',media_pemeliharaan='$media_pemeliharaan',kepadatan_pemeliharaan='$kepadatan_pemeliharaan',teknologi='$teknologi',produksi='$produksi',distribusi='$distribusi',harga_jual='$harga_jual',jenis_pakan='$jenis_pakan',jml_pakan='$jml_pakan',sumber_suplai='$sumber_suplai',harga_pakan='$harga_pakan' ,sumber_benih='$sumber_benih',jml_benih='$jml_benih',harga_benih='$harga_benih',jml_tk='$jml_tk',modal='$modal',sumber_modal='$sumber_modal',sumber_kredit='$sumber_kredit',ipal='$ipal',tandon='$tandon',greenbelt='$greenbelt',jarak_pantai='$jarak_pantai',sumber_air='$sumber_air',status_izin='$status_izin',status_nib='$status_nib',skala_usaha='$skala_usaha',asuransi='$asuransi',bantuan='$bantuan',penghargaan='$penghargaan',dukungan_pemda='$dukungan_pemda',dukungan_pusat='$dukungan_pusat',nama_penyuluh='$nama_penyuluh',sertifikat='$sertifikat',foto='$foto', nama_petugas='$nama_petugas',nik_petugas='$nik_petugas',waktu_sensus='$waktu_sensus',perubahan_terakhir='$perubahan_terakhir',upt='$upt' WHERE id = $id";
    
        mysqli_query($koneksi, $sql);
    
        return mysqli_affected_rows($koneksi);
    }

function updateData($table, $data, $condition)
{
  global $koneksi;

  $setValues = "";
  $setParams = array();
  foreach ($data as $key => $value) {
    $setValues .= "$key = ?, ";
    $setParams[] = $value;
  }
  $setValues = rtrim($setValues, ", ");

  $conditionValues = "";
  $conditionParams = array();
  foreach ($condition as $key => $value) {
    $conditionValues .= "$key = ? AND ";
    $conditionParams[] = $value;
  }
  $conditionValues = rtrim($conditionValues, " AND ");

  $stmt = $koneksi->prepare("UPDATE $table SET $setValues WHERE $conditionValues");

  if (!$stmt) {
    die("Error in preparing statement: " . $koneksi->error);
  }

  $types = str_repeat("s", count($setParams) + count($conditionParams));
  $values = array_merge($setParams, $conditionParams);

  if (!$stmt->bind_param($types, ...$values)) {
    die("Error in binding parameters: " . $stmt->error);
  }

  // Menjalankan query
  if ($stmt->execute()) {
    return true;
  } else {
    return false;
  }

  $stmt->close();
  $koneksi->close();
}


?>