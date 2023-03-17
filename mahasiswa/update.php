<?php 
require_once 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$absen = $_POST['absen'];

mysqli_query($koneksi, "UPDATE mahasiswa SET nama_mahasiswa = '$nama', NIM_mahasiswa = '$nim', Absen = '$absen' WHERE id = $id");

header("location:/mahasiswa");