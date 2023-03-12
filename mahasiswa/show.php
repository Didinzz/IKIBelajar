<?php 

require_once 'koneksi.php';


$id = $_GET ['id'];

$data = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id = $id ");
$mahasiswa = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- font -->
    <link rel="stylesheet" href="cssBS.css">
    <title>detil data</title>
</head>

<body>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    </head>

    <body>
        <?php include '../partial/nav.php' ?>

        <div class="container">
            <div class="row">
                <div class="col">
                    <h1><?= $mahasiswa['nama_mahasiswa']?></h1>
                    <P><?= $mahasiswa['NIM_mahasiswa']?></P>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>