<?php
  $db = mysqli_connect("localhost","root","");
  $con = mysqli_select_db($db,'dbgenerasimadani');
  if($con){
    echo"Koneksi MYSQLi";
  }
 ?>
