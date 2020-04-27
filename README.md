# Mudahnya Migrasi php5 ke php7
Untuk penjelasannya silahkan ke link video ini [RudiEdukasi](https://www.youtube.com/watch?v=GYCvakl-BP0)
macam-macam koneksi database MySql di php
## php5
```php
<?php
  $host =mysql_connect('localhost','root','');
  $con = mysql_select_db($host,'nama_database');
  if($con){
    echo"Koneksi mysql";
  }
 ?>
 ```
## php7
 ### versi prosedural
 ```php
<?php
  $con=mysqli_connect("localhost","root","");
  //$con = mysqli_select_db($db,"nama_database");
  if($con){
    echo"koneksi mysqli";
  }
 ?>
 ```
### versi OOP(Object Oriented Programming)
```php
 <?php
  $db=new mysqli("localhost","root","","nama_database");
  if($db){
    echo"koneksi new mysqli";
  }
 ?>
 ```
# Koneksi PDO(Php Data Object)
Digunakan PHP untuk “berkomunikasi” dengan database server bisa MySql, SQL Server dll.
```php
<?php
try {
  $host = new PDO('mysql:host=localhost;dbname=nama_database', "root", "");
}
catch (PDOException $e) {
  echo "Koneksi bermasalah: " . $e->getMessage() . "<br/>";
  die();
}
echo "Koneksi berhasil";
?>
```
