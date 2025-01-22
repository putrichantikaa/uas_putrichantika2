
<?php
#1. koneksikan file ini
include("../koneksi.php");

#2.  mengambil value dari form
$nama_produk =$_POST["nama_produk"];
$harga =$_POST["harga"];
$kategori_id =$_POST["kategori_id"];
$nama_katagori =$_POST["nama_kategori"];

$nama_foto = $_FILES['foto']['name'];
$tmp_foto = $_FILES['foto']['tmp_name'];

#3. menulis query
$simpan = "INSERT INTO produks (nama_produk,harga,kategori_id,nama_kategori) VALUES('$nama_produk','$harga','$kategori_id','$nama_katagori)";

#4. jalankan query
$proses = mysqli_query($koneksi, $simpan);

#4.1. Proses Upload File
$upload_foto = move_uploaded_file($tmp_foto,"foto/$nama_foto");

#5. mengalihkan halaman
// header("location:index.php");
?>
<script>
    document.location="index.php";
</script>