<?php 
require_once 'koneksi.php';


var_dump($_POST);
$nama = $_POST['nama'];
$nim = $_POST['nim'];

mysqli_query($koneksi,"INSERT INTO mahasiswa (nama_mahasiswa,NIM_mahasiswa) VALUES ('$nama','$nim')");

header('Location: mahasiswa.php');