<?php
include"mysqli.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>INPUT DATA SISWA</h2>
  <form action="" method="POST">
    <div class="form-group">
      <label for="email">Nis:</label>
      <input type="text" class="form-control"  name="ns">
    </div>
    <div class="form-group">
      <label for="pwd">Nama:</label>
      <input type="text" class="form-control"  name="nm">
    </div>
    <div class="form-group">
      <label for="pwd">Alamat:</label>
      <input type="text" class="form-control"  name="almt">
    </div>
    <button type="submit" name="btn" class="btn btn-primary">Submit</button>
  </form>
</div>
<?php
if (isset($_POST['btn'])) {
  $sql = mysqli_query($con,"INSERT INTO tbsiswa VALUES ('$_POST[ns]','$_POST[nm]','$_POST[almt]')");
  if($sql){
    echo "Data Sudah berhasil masuk ke data siswa";
  }else{
    echo"Terjadi kesalahan";
  }
}
 ?>
 <div class="container">
  <h2>Data Siswa</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Nis</th>
        <th>Nama</th>
        <th>Alamat</th>
      </tr>
    </thead>
    <tbody>
<?php
    $sqlview = mysqli_query($con,"SELECT*FROM tbsiswa");
    while($view = mysqli_fetch_array($sqlview)){
 ?>
      <tr>
        <td><?=$view['nis']?></td>
        <td><?=$view['nama']?></td>
        <td><?=$view['alamat']?></td>
      </tr>
<?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>
