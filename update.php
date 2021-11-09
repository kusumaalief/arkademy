<?php
   include_once("config.php");

   if(isset($_POST['update'])){
      $id = $_POST["id"];

      $nama = $_POST["nama"];
         $keterangan = $_POST["keterangan"];
         $harga = $_POST["harga"];
         $jumlah = $_POST["jumlah"];

      $update = mysqli_query($mysqli,"UPDATE produk SET nama_produk='$nama', keterangan='$keterangan', harga='$harga', jumlah='$jumlah' WHERE id='$id'");
      if($update){
         header("Location: index.php");
      }
   };


   if(isset($_GET["id"])) {
      $id = $_GET["id"];
      $result = mysqli_query($mysqli,"SELECT * FROM produk WHERE id='$id'");
   };

   $userData = mysqli_fetch_array($result);
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
   <form action="update.php" method="post">
      Nama: <input type="text" name="nama" id="nama" value="<?php echo $userData["nama_produk"]?>"/></br>
      Keterangan: <input type="text" name="keterangan" id="keterangan" value="<?php echo $userData["keterangan"]?>"/></br>
      Harga: <input type="text" name="harga" id="harga" value="<?php echo $userData["harga"]?>"/></br>
      Jumlah: <input type="text" name="jumlah" id="jumlah" value="<?php echo $userData["jumlah"]?>"/></br>
         <input type="hidden" name="id" value="<?php echo $userData["id"]?>"/>
      <button type="submit" name="update" value="update">Update</button>
      <button type="button">Back</button>
   </form>
</body>
</html>