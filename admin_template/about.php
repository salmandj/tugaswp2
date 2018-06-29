<?php

require_once "core/init.php";
require_once "view/header.php";

$tentang = tampil_admin();
while ($row = mysqli_fetch_assoc($tentang)) {
  $nama_user   = $row['user'];
  $email_user  = $row['email'];
  $gambar_user = $row['gambar'];
}
 ?>
<!DOCTYPE html>

<html lang="en">

<head>
    <link type="text/css" rel="stylesheet" href="view/style.css">

</head>    

<body background="image/background.jpeg">
    <div class="container" style="margin-top: 50px">
      <div class="row">
        <div class="col-md-3 ">    
          <div class="panel panel-warning">
            <div class="text-center">
              <h3>Tentang Admin</h3>
            </div>
            <div class="panel-heading">
              <div class="text-center">
                <img src="image/<?= $gambar_user; ?>" class="img_circle">
              </div>
            </div>
            <div class="panel-body">
               <div class="text-center">
                 <h2><?= $nama_user; ?></h2>
              </div>
              <div class="text-center" style="color:blue;">
                <h4><u><em><?= $email_user; ?></em></u></h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-9 ">
          <div class="panel panel-primary -">  
            <div class="panel-body" >
              <div class="text-center">
                <h3>VISI</h3>
                <h4>
                  Menjadi partner terkemuka yang concern dan terdepan dalam menjual produk CCTV dan jasa pemasangan CCTV sebagai solusi terkini, ter-integrasi, sinergis, profesional dan berkelanjutan sehingga memuaskan konsumen<br><br>
                </h4>
                <h3>MISI</h3>
                <h4>
                  Mengembangkan produk CCTV & jasa pasang CCTV yang kompetitif<br>
                  Mengedepankan profesionalisme dan teamwork dalam menghasilkan layanan yang berkualitas<br>
                  Memberikan layanan yang terbaik kepada konsumen<br>
                  Mengembangkan kerjasama dan kemitraan usaha yang saling menguntungkan<br>
                  Mengembangkan inovasi teknologi terbaik dan terkini dalam setiap produk & jasa<br>
                  Meningkatkan kualitas dan nilai tambah bagi konsumen Mendapatkan keuntungan dan kemitraan usaha yang sinergi dan berkelanjutan<br>
                </h4>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

<br>
<br>
<br>

</body>
</html>
 <?php
 require_once "view/footer.php";

  ?>
