<?php

require_once 'koneksi.php';


$id = $_GET ['id'];

mysqli_query($koneksi, "DELETE FROM mahasiswa Where id=$id");

header('Location: /mahasiswa');


?>