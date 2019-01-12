<?php
session_start();
include "connect.php";

$nis = $_POST['nis'];
$password = $_POST['password'];

if ($nis == "" || $password == "")
{
  header("location: form-login.php");
}
else
{
  $query = "SELECT * FROM tb_siswa WHERE nis = '$nis' AND password = '$password'";
  $result = mysqli_query($connect, $query);

  $num = mysqli_num_rows($result);

  if($num == 1)
  {
    echo "<script>
    alert('login Berhasil')
    </script>";
    echo "<h1><a href='add_data.php'>Tambah Data</a></h1>";
    echo "<h1><a href='logout.php'>Logout</a></h1>";

    $_SESSION['tb_siswa'] = $nis;
  }
  else
  {
    echo "<script>
    alert('login Gagal')
    </script>";
    include 'form-login.php';
  }
}


?>
