<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
  <?php 
    include_once '../navbar.php'; 
  ?>

<div class="container">
   <div class="row mt-5">
        <div class="col-8 m-auto">
            <div class="card">
            <div class="card-header">
            <h3 class="float-start"> Form Data Produk</h3>
                
            </div>
    <div class="card-body">
    <form action="proses.php" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID Produk</label>
    <input type="text" name="id_produk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nama Produk</label>
    <input type="text" name="nama" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Harga</label>
    <input type="text" name="harga" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Kategori ID</label>
    <input type="text" name="kategori_id" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Foto</label>
                    <input type="file" accept="image/*" name="foto" class="form-control" id="exampleInputPassword1">
                </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
               
            </div>
        </div>
   </div>
</div>

    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/all.js"></script>

</body>
</html>