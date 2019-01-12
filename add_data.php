<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tambah Data</title>
  </head>
  <body>
    <form class="" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
      <table>
        <tr>
          <td>NIS</td>
          <td><input type = "text" name ="nis"/></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td><input type = "text" name ="nama" size= 40 /></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td><input type = "text" name ="alamat"/></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input type = "password" name ="password"/></td>
        </tr>
        <tr>
          <td></td>
          <td><input type = "submit" name ="Simpan"/></td>
          <td></td>
          <td><a href="logout.php">LOGOUT</a></td>
        </tr>
      </table>
    </form>
  </body>
</html>

<?php

require_once "./connect.php";
if (isset($_POST['nis']) && isset($_POST['nama']))
{
  $nis = $_POST['nis'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $password = $_POST['password'];


$sql = "INSERT INTO tb_siswa VALUES('".$nis."','".$nama."','".$alamat."','".$password."')";
$result = mysqli_query($connect, $sql);
if ($result)
{
  echo 'Data Berhasil Ditambahkan';
}
else
{
  echo 'Gagal menambahkan data <br>';
  echo mysqli_error($connect);
}
}
echo "<hr>";

require_once "./record.php"
 ?>
