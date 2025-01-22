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
      <th scope="col">#</th>
      <th scope="col">ID Kategori</th>
      <th scope="col">Nama Kategori</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    #1. koneksikan file ini
    include("../koneksi.php");

    #2. menulis query
    $tampil = "SELECT * FROM kategoris";

    #3. jalankan query
    $proses = mysqli_query($koneksi,$tampil);

    #$4. looping data dari database
    $nomor = 1;
    foreach($proses as $data){
    ?>
    <tr>
      <th scope="row"><?= $nomor++ ?></th>
      <td><?= $data['id_kategori'] ?></td>
      <td><?= $data['nama_kategori'] ?></td>
      <td>
        <a class="btn btn-info btn-sm" href="edit.php?id=<?=$data['id_kategori']?>"><i class="fa-solid fa-pen-to-square"></i></a>

        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapus<?=$data['id_kategori']?>">
        <i class="fa-solid fa-trash"></i>
        </button>

        <!-- Modal -->
<div class="modal fade" id="hapus<?=$data['id_kategori']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      Yakin data <b><?=$data['nama_kategori']?></b> ingin dihapus?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <a href="hapus.php?xyz=<?=$data['id_kategori']?>" class="btn btn-danger">Hapus</a>
      </div>
    </div>
  </div>
</div>
        </td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>
            </div>
        </div>
   </div>
</div>

    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/all.js"></script>

</body>
</html>