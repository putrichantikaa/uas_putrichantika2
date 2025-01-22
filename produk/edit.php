<?php
// 1. koneksi ke database
include("../koneksi.php");

// 2. ambil id yang akan disunting
$id = $_GET['id'];

// 3. mengambil semua record data berdasarkan id yang dipilih
$ambil = "SELECT * FROM produks WHERE id_produk='$id'";

// 4. menjalankan query 
$edit = mysqli_query($koneksi, $ambil);

// 5. memisahkan record data berdasarkan kolom/field
$data = mysqli_fetch_array($edit);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk </title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/all.css">
</head>

<body>
    <?php include_once('../navbar.php') ?>

    <div class="container">
        <div class="row mt-5">
            <div class="col-8 m-auto">
                <div class="card">
                    <div class="card-header bg-dark-subtle">
                        <h3 class="float-start"> Form Edit Data Produk </h3>
                    </div>
                    <div class="card-body">
                        <form action="update.php" method="POST">
                            <input type="hidden" name="id" value="<?= $data['id_produk'] ?>">
                            

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label"> Nama Produk </label>
                                <input type="text" value="<?= $data['nama_produk'] ?>" name="nama_produk" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label"> Harga </label>
                                <input type="text" value="<?= $data['harga'] ?>" name="harga" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label"> Kategori </label>
                                <select name="kategori_id" class="form-control" id="">
                                    <option value="">-Pilih Kategori-</option>
                                    <option <?php echo ($data['kategori_id'] == "Makanan") ? 'selected' : '' ?> value="Makanan">Makanan</option>
                                    <option <?php echo ($data['kategori_id'] == "Minuman") ? 'selected' : '' ?> value="Minuman">Minuman</option>
                                    <option <?php echo ($data['kategori_id'] == "Kosmetik") ? 'selected' : '' ?> value="Kosmetik">Kosmetik</option>
                                    <option <?php echo ($data['kategori_id'] == "Pakaian") ? 'selected' : '' ?> value="Pakaian">Pakaian</option>
                                    <option <?php echo ($data['kategori_id'] == "Aksesoris") ? 'selected' : '' ?> value="Aksesoris">Aksesoris</option>
                                    <option <?php echo ($data['kategori_id'] == "Mainan") ? 'selected' : '' ?> value="Mainan">Mainan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label"> Gambar Produk </label>
                                <input type="text" value="<?= $data['gambar_produk'] ?>" name="gambar_produk" class="form-control" id="exampleInputPassword1">
                            </div>
                            <button type="submit" class="btn btn-primary">update</button>
                        </form>
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