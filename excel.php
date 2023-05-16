<?php
require 'koneksi.php';

$sensus = query("SELECT * FROM sensus ORDER BY id DESC");

// Membuat nama file
$filename = "Data Sensus Pembudidaya -" . date('Ymd') . ".xls";

// Kodingan untuk export ke excel
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Sensus Pembudidaya.xls");

?>
 <table class="table text-start align-middle table-bordered" border="1">
                            <tr class="table-border">
                                <th colspan="7" style="border-color: black;">DATA UMUM PEMBUDIDAYA</th>
                                <th colspan="7" style="border-color: black;">LOKASI USAHA</th>
                                <th colspan="3" style="border-color: black;">KOMODITAS</th>
                                <th colspan="7" style="border-color: black;">TEKNOLOGI</th>
                                <th colspan="3" style="border-color: black;">PRODUKSI & DISTRIBUSI</th>
                                <th colspan="4" style="border-color: black;">PAKAN</th>
                                <th colspan="3" style="border-color: black;">BENIH</th>
                                <th colspan="4" style="border-color: black;">MODAL & TENAGA KERJA</th>
                                <th colspan="5" style="border-color: black;">LINGKUNGAN</th>
                                <th colspan="3" style="border-color: black;">PERIZINAN</th>
                                <th colspan="7" style="border-color: black;">LAIN-LAIN</th>
                                <th colspan="4" style="border-color: black;">ENUMERATOR/PETUGAS SENSUS</th>
                                <th colspan="1"  style="border-color: black;">UPT</th>
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
                                <th scope="col" style="border-color: black;">LONGITUDE</th>
                                <th scope="col" style="border-color: black;">KOMODITAS</th>
                                <th scope="col" style="border-color: black;">KELOMPOK</th>
                                <th scope="col" style="border-color: black;">BIOTA</th>
                                <th scope="col" style="border-color: black;">JENIS USAHA</th>
                                <th scope="col" style="border-color: black;">STATUS KUSUKA</th>
                                <th scope="col" style="border-color: black;">STATUS KEPEMILIKAN</th>
                                <th scope="col" style="border-color: black;">LUAS AREAL(Ha)</th>
                                <th scope="col" style="border-color: black;">MEDIA PEMELIHARAAN</th>
                                <th scope="col" style="border-color: black;">KEPADATAN PEMELIHARAAN</th>
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
                                <th scope="col" style="border-color: black;">UPT</th>
                            </tr>
                            <?php
        $i = 1;
        foreach ($sensus as $row) :
            ?>
                            <tr>
                                <td><?php echo $row["nama"]; ?></td>
                                <td><?php echo $row["nik"]; ?></td>
                                <td><?php echo $row["usia"]; ?></td>
                                <td><?php echo $row["agama"]; ?></td>
                                <td><?php echo $row["gender"]; ?></td>
                                <td><?php echo $row["pendidikan"]; ?></td>
                                <td><?php echo $row["jml_keluarga"]; ?></td>
                                <td><?php echo $row["alamat"]; ?></td>
                                <td><?php echo $row["kelurahan"]; ?></td>
                                <td><?php echo $row["kecamatan"]; ?></td>
                                <td><?php echo $row["kabupaten"]; ?></td>
                                <td><?php echo $row["provinsi"]; ?></td>
                                <td><?php echo $row["latitude"]; ?></td>
                                <td><?php echo $row["longtitude"]; ?></td>
                                <td><?php echo $row["komoditas"]; ?></td>
                                <td><?php echo $row["kelompok"]; ?></td>
                                <td><?php echo $row["biota"]; ?></td>
                                <td><?php echo $row["jenis_usaha"]; ?></td>
                                <td><?php echo $row["status_kusuka"]; ?></td>
                                <td><?php echo $row["status_pemilik"]; ?></td>
                                <td><?php echo $row["luas_areal"]; ?></td>
                                <td><?php echo $row["media_pemeliharaan"]; ?></td>
                                <td><?php echo $row["kepadatan_pemeliharaan"]; ?></td>
                                <td><?php echo $row["teknologi"]; ?></td>
                                <td><?php echo $row["produksi"]; ?></td>
                                <td><?php echo $row["distribusi"]; ?></td>
                                <td><?php echo $row["harga_jual"]; ?></td>
                                <td><?php echo $row["jenis_pakan"]; ?></td>
                                <td><?php echo $row["jml_pakan"]; ?></td>
                                <td><?php echo $row["sumber_suplai"]; ?></td>
                                <td><?php echo $row["harga_pakan"]; ?></td>
                                <td><?php echo $row["sumber_benih"]; ?></td>
                                <td><?php echo $row["jml_benih"]; ?></td>
                                <td><?php echo $row["harga_benih"]; ?></td>
                                <td><?php echo $row["jml_tk"]; ?></td>
                                <td><?php echo $row["modal"]; ?></td>
                                <td><?php echo $row["sumber_modal"]; ?></td>
                                <td><?php echo $row["sumber_kredit"]; ?></td>
                                <td><?php echo $row["ipal"]; ?></td>
                                <td><?php echo $row["tandon"]; ?></td>
                                <td><?php echo $row["greenbelt"]; ?></td>
                                <td><?php echo $row["jarak_pantai"]; ?></td>
                                <td><?php echo $row["sumber_air"]; ?></td>
                                <td><?php echo $row["status_izin"]; ?></td>
                                <td><?php echo $row["status_nib"]; ?></td>
                                <td><?php echo $row["skala_usaha"]; ?></td>
                                <td><?php echo $row["asuransi"]; ?></td>
                                <td><?php echo $row["bantuan"]; ?></td>
                                <td><?php echo $row["penghargaan"]; ?></td>
                                <td><?php echo $row["dukungan_pemda"]; ?></td>
                                <td><?php echo $row["dukungan_pusat"]; ?></td>
                                <td><?php echo $row["nama_penyuluh"]; ?></td>
                                <td><?php echo $row["sertifikat"]; ?></td>
                                <td><?php echo $row["nama_petugas"]; ?></td>
                                <td><?php echo $row["nik_petugas"]; ?></td>
                                <td><?php echo $row["waktu_sensus"]; ?></td>
                                <td><?php echo $row["perubahan_terakhir"]; ?></td>
                                <td><?php echo $row["upt"]; ?></td>
                            </tr>
                            <?php
              $i++;
            endforeach; 
          ?>
                    </table>