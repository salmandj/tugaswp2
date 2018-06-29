<?php

require_once "core/init.php";
require_once "view/header.php";

session_start();
if($_SESSION['status'] !="login"){
	header("location:loginadmin.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <h1><center>Menawarkan Sistem Keamanan Terbaik di Seluruh Indonesia</center></h1>
</head>
<hr>

<div class="container" style="margin-top: 50px">
      <div class="row">
        <div class="col-md-4">    
          <div class="panel-primary">
            <div class="text-center">
              <img src="image/logo.png" height="300" width="300">
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="panel-primary">  
            <div class="panel-body" >
              <div class="text-justify">
                <b>PT. Salaman </b>
                adalah perusahaan di bidang penyedia Barang & Jasa Peralatan Sistem Keamanan yang berdomisili di Bandung Jawa Barat,  berdiri sejak tanggal 09 Februari tahun 2018.
                <br><br>
                Kami menyediakan berbagai macam peralatan sistem keamanan (Security System) diantaranya : CCTV, Access Control, dan Alarm System,. dan kami memberikan pelayanan seperti Instalasi, Integrasi, Maintenance.
                <br><br>
                Dengan tim berpengalaman untuk membantu solusi inovatif yang bisa memenuhi kebutuhan sistem keamanan mulai dari Perumahan, Perkantoran, Perbankan, Perhotelan, serta industri kecil sampai industri skala besar dan sebagainya.
                <br><br>
                Kami pun didukung oleh tim After Sales Service yang siap setiap saat melayani kebutuhan dan Troubleshooting customer kami.
                <br><br>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>


</html>
<br>
<br>
<br>
<br>
<br>
<?php
require_once "view/footer.php";

 ?>

