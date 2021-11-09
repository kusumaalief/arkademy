<?php
   include_once("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Arkademy</title>
   <style>

      input {
         margin: .5rem 0;
      }

      form {
         width: 520px;
         margin: 4rem 4rem;
      }
   </style>
</head>
<body>
   <form action="insert.php" method="post">
      Nama: <input type="text" name="nama" id="nama"><br>
      Keterangan: <input type="text" name="keterangan" id="keterangan"/><br>
      Harga: <input type="number" name="harga" id="harga"/><br>
      Jumlah: <input type="number" name="jumlah" id="jumlah"/><br>
      <button type="submit" name="insert" value="insert">Insert</button>
      <button type="button">Back</button>
   </form>
   <?php
      if(isset($_POST["insert"])){
         $nama = $_POST["nama"];
         $keterangan = $_POST["keterangan"];
         $harga = $_POST["harga"];
         $jumlah = $_POST["jumlah"];
   
         $query = "INSERT INTO produk(nama_produk,keterangan,harga,jumlah) VALUES('$nama','$keterangan','$harga','$jumlah') ";
         $insert = mysqli_query($mysqli,$query);
   
         if($insert) {
            echo 'Buku berhasil ditambahkan. <a href="index.php">Kembali</a>';
         }
      }
   ?>
</body>
</html>