<?php

require_once 'koneksi.php';

$id = $_GET['id'];

$edit = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id = $id");

$update = mysqli_fetch_assoc($edit);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- font -->
    <link rel="stylesheet" href="cssBS.css">
    <title>edit data</title>
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
                    <h1>Halaman Edit</h1>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <form action="update.php" method="post">

                    <!-- input nama -->
                    <input type="hidden" name="id" value="<?=$update ['id']?>">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name ="nama" placeholder="Nama " value="<?= $update["nama_mahasiswa"]?>">
                        </div>

                        <!-- input NIM -->
                        <div class="mb-3">
                            <label for="nim" class="form-label">NIM</label>
                            <input type="text" class="form-control" id="nim" name = "nim" placeholder="Nim" value="<?= $update['NIM_mahasiswa']?>">
                        </div>

                        <!-- input kehadiran -->
                        <div class="mb-3">
                            <label for="nama" class="form-label">Kehadiran</label>
                            <input type="text" class="form-control" id="nama" name ="absen" placeholder="absen " value="<?= $update['Absen']?>">
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>