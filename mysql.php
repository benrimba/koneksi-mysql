<?php
  $db = mysql_connect("localhost","root","");
  $con = mysql_select_db($db,'dbgenerasimadani');
  if($con){
    echo"Koneksi MYSQL";
  }
 ?>
