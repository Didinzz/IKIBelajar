<?php

require_once 'koneksi.php';

$data = mysqli_query($koneksi, 'SELECT * FROM mahasiswa');


?>
<html>

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
                <h1>Daftar Mahasiswa</h1>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <a href="/mahasiswa/create.php" class="btn btn-primary">Tambah data mahasiswa</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Nim</th>
                            <th scope="col">Absen</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        while ($mahasiswa = mysqli_fetch_assoc($data)) : ?>
                            <tr>
                                <th scope="row"><?php echo $no ?></th>
                                <td> <?php echo $mahasiswa['nama_mahasiswa'] ?></td>
                                <td><?php echo $mahasiswa['NIM_mahasiswa'] ?></td>
                                <td><?php echo $mahasiswa['Absen'] ?> </td>
                                <td>
                                    <a href="/mahasiswa/show.php?id=<?= $mahasiswa['id'] ?>" class="btn btn-sm btn-info">Detail</a href="s">
                                    <button class="btn btn-sm btn-warning">Edit</button>
                                    <a href="/mahasiswa/delete.php?id=<?= $mahasiswa['id'] ?>" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php
                            $no++;
                        endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, aspernatur.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Understood</button>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>