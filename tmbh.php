<?php
include "koneksi.php";

if (isset($_POST["submit"])) {
   $prdk_nama = $_POST['prdk_nama'];
   $jmlah_brng = $_POST['jmlah_brng'];
  
   $sql = "INSERT INTO `barang`(`id`, `produk`, `jumlah`) VALUES (NULL,'$prdk_nama','$jmlah_brng')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: admin.php?msg=BARANG BARU SUDAH DIMASUKAN");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title>TAMBAH BARANG</title>
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-md">
    <a class="navbar-brand" href="#">YAHAHAHA HAYUK</a>
  </div>
</nav>

   <div class="container">
      <div class="text-center mb-4">
         <h3>TAMBAH BARANG KE PENYIMPANAN</h3>
         <p class="text-muted">isi data dibawah</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Produk:</label>
                  <input type="text" class="form-control" name="prdk_nama" placeholder="BARANG">
               </div>

               <div class="col">
                  <label class="form-label">Jumlah:</label>
                  <input type="text" class="form-control" name="jmlah_brng" placeholder="JUMLAH">
               </div>
            </div>

               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="index.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>