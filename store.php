<?php 
require_once 'koneksi.php';


var_dump($_POST);
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$absen = $_POST['absen'];

mysqli_query($koneksi,"INSERT INTO mahasiswa (nama_mahasiswa,NIM_mahasiswa,absen) VALUES ('$nama','$nim','$absen')");

header('Location: mahasiswa.php');