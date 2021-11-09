<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Arkademy</title>
</head>

<style>
   body {
      text-align: center;
   }

   table {
      width: 520px;
      margin: 0px auto;
      border: 2px solid gray;
      padding: .5rem;
      margin-top: 1rem;
   }

   td {
      padding: .5rem;
   }
</style>
<body>
   <?php
      include_once("config.php");
      $result = mysqli_query($mysqli,"SELECT * FROM produk");
   ?>
   <h1>Arkademy</h1>
   <a href="insert.php">Tambah Buku</a>
   <table>
      <tr>
         <th>No</th>
         <th>Nama produk</th>
         <th>Keterangan</th>
         <th>Harga</th>
         <th>Jumlah</th>
         <th>Action</th>
      </tr>
      <?php
         $i=1;
         while($data = mysqli_fetch_array($result)){

            echo "<tr>";
            echo "<td>".$i."</td>";
            echo "<td>".$data['nama_produk']."</td>";
            echo "<td>".$data['keterangan']."</td>";
            echo "<td>".$data['harga']."</td>";
            echo "<td>".$data['jumlah']."</td>";
            echo '<td> <a href= "update.php?id='.$data['id'].'"'.">Update</a><br>".'<a href="delete.php?id='.$data['id'].'"'.">Delete</a>"."</td>";
            echo "</tr>";
            $i++;
         }
      ?>
   </table>
</body>
</html>