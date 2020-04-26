<?php
try {
  $con = new PDO('mysql:host=localhost;dbname=dbgenerasimadani','root','');
} catch (PDOException $e) {
  echo "Koneksi bermasalah :".$e->getMessage();
}
echo"Berhasil terkoneksi";

 ?>
