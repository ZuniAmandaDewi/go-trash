<?php
require('./services/db_service.php');
$username = $_GET['username'];
try {
  $data = mysqli_query($conn, "select * from drivers where username='$username' limit 1");
  $data = mysqli_fetch_array($data);
  $driver_username = $data['username'];
  $firstname = $data['firstname'];
  $lastname = $data['lastname'];
  $email = $data['email'];
  $nohp = $data['nohp'];
} catch (\Throwable $th) {
  echo "<SCRIPT>alert('Driver gagal di dapatkan');window.location='./index.php'</SCRIPT>";
  return;
}
