<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kategori</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
  <?php 
    include_once '../navbar.php'; 
  ?>

<div class="container">
   <div class="row mt-5">
        <div class="col-12 m-auto">
            <div class="card">
            <div class="card-header">
                <h3 class="float-start">Data Kategori</h3>
                <span class="float-end"><a class="btn btn-primary" href="form.php"><i class="fa-solid fa-square-plus"></i> Tambah Data </a></span>
            </div>
                <div class="card-body">
                <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Produk</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Gambar Produk</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include("../koneksi.php");

                                $tampil = "SELECT *, produks.kategori_id as nama_katagori
                                FROM produks
                                INNER JOIN kategoris ON produks.kategori_id=kategoris.id_kategori";

                                $proses = mysqli_query($koneksi, $tampil);

                                $nomor = 1;
                                foreach ($proses as $data) {
                                ?>

                                    <tr>
                                        <th scope="row"> <?= $nomor++ ?> </th>
                                        <td> <?= $data['nama_produk'] ?> </td>
                                        <td> <?= $data['harga'] ?> </td>
                                        <td> <?= $data['nama_kategori'] ?> </td>
                                        <td> <?= $data['gambar_produk'] ?> </td>
                                        <td>
                                            <!-- TOMBOL DETAIL -->
                                            <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#detail<?= $data['nama_produk'] ?>">
                                                <i class="fa-solid fa-eye"></i>
                                            </button>

                                            <!-- MODAL DETAIL-->
                                            <div class="modal fade" id="detail<?= $data['nama_produk'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Data <?= $data['nama_produk'] ?> </h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <img width="200" src="foto/<?= $data['gambar_produk'] ?>" alt="">
                                                            <table class="table">
                                                                <tr>
                                                                    <td scope="col">Nama Produk</td>
                                                                    <th scope="col">: <?= $data['nama_produk'] ?></th>
                                                                </tr>
                                                                <tr>
                                                                    <td scope="col">Harga</td>
                                                                    <th scope="col">: <?= $data['harga'] ?></th>
                                                                </tr>
                                                                <tr>
                                                                    <td scope="col">Kategori</td>
                                                                    <th scope="col">: <?= $data['nama_kategori'] ?></th>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- TOMBOL EDIT -->
                                            <a class="btn btn-info btn-sm" href="edit.php?id=<?= $data['id_produk'] ?>"> <i class="fa-solid fa-pen-to-square"></i> </a>

                                            <!-- TOMBOL HAPUS -->
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapus<?= $data['nama_produk'] ?>">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>

                                            <!-- MODAL HAPUS -->
                                            <div class="modal fade" id="hapus<?= $data['nama_produk'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">PERINGATAN !!!</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Yakin Ingin Menghapus Data? <b><?= $data['nama_produk'] ?> ?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                            <a href="hapus.php?xyz=<?= $data['nama_produk'] ?>" class="btn btn-danger">Hapus</a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>

                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/all.js"></script>
</body>

</html>