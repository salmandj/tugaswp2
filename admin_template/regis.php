<?php

require_once "core/init.php";
require_once "view/header_admin.php";

$error = '';

$carikode = mysqli_query($link, "SELECT max(id) FROM admin") or die (mysqli_error());

$datakode = mysqli_fetch_array($carikode);

if ($datakode) {
  $nilaikode = 0;
  $kode = (int) $nilaikode;
  $kode = $kode + 1; }
else{
  $kode = 1; }


if (isset($_POST['submit'])) {
  $id          = $_POST['id'];
  $user        = $_POST['user'];
  $pass        = $_POST['pass'];
  $email       = $_POST['email'];
  $nama_gambar = $_FILES['gambar']['name'];
	$file_gambar = $_FILES['gambar']['tmp_name'];
	$directory	 = "image/$nama_gambar";
	move_uploaded_file($file_gambar, $directory);

  if (tambah_akun($id, $user, $pass, $email, $nama_gambar)) {
    header('Location: loginadmin.php');
  }else {
    $error = 'Ada Masalah Saat Menambahkan Data';
  }
}
 ?>

 <div class="container" style="margin-top:100px; margin-bottom:50px;">
   <div class="row">
     <div class="col-md-6 col-md-offset-3">
       <div class="panel panel-success">
         <div class="panel-heading" style="background-color: #FF6600; color:white;">
           <h3 class="text-center">Daftar Admin</h3>
         </div>
         <div class="panel-body">
           <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="id">ID</label> <br>
              <input type="text" class="form-control" name="id" size="37" readonly value="<?= $kode; ?>"> <br> <br>
             	<label for="user">USER</label> <br>
             	<input type="text" class="form-control" name="user" size="37" value=""> <br> <br>
             	<label for="pass">PASSWORD</label> <br>
             	<input type="password" class="form-control" name="pass" size="37" value=""> <br> <br>
             	<label for="email">E-MAIL</label> <br>
             	<input type="text" class="form-control" name="email" size="37" value=""> <br> <br>
             	<label for="exampleInputFile">Foto Profil</label> <br>
             	<input name="gambar" class="form-control-file" type="file" id="exampleInputFile"> <br> <br>
              <div id="error"><?= $error  ?></div>
              <div class="text-center">
                <input type="submit" class="btn btn-default" name="submit" value="Submit">
              </div>
            </div>
           </form>
         </div>
       </div>
     </div>
   </div>
 </div>