<?php

require_once "core/init.php";

$nip = $_GET['nip'];


if (isset($nip)) {
  $detail = tampilkan_per_nip($nip);
  while ($row = mysqli_fetch_assoc($detail)) {
    $nip_detail         = $row['nip'];
    $nama_detail        = $row['nama'];
    $departemen_detail  = $row['departemen'];
    $sex_detail         = $row['sex'];
    $alamat_detail      = $row['alamat'];
    $notelp_detail      = $row['no_telp'];
    $status_detail      = $row['status'];
    $gambar_detail      = $row['gambar'];
  }
}
function rupiah($nilai, $pecahan = 0) {
    return number_format($nilai, $pecahan, ',', '.');
}
 ?>

<center><h1>DETAIL PROFIL KARYAWAN</h1></center> 
     
<hr>
 <div class="container"> 
   <div class="row">
    <div class="panel-primary">
      
      <div class="col-md-4">
        <div class="text-center">
          <br>
          <img width = "200px" height = "300px" src="image/<?= $gambar_detail; ?>">
        </div>
      </div>
     </div>
     <br>
     <div class="panel-primary">
       <div class="col-md-8">
        <table class="table table-striped" style="font-size:18px">
             <tr>
               <th>NIP</th>
               <td>:</td>
               <td><?= $nip_detail; ?></td>
             </tr>
             <tr>
               <th>Nama</th>
               <td>:</td>
               <td><?= $nama_detail; ?></td>
             </tr>
             <tr>
               <th>Divisi</th>
               <td>:</td>
               <td><?= $departemen_detail; ?></td>
             </tr>
             <tr>
               <th>Jenis Kelamin</th>
               <td>:</td>
               <td><?= $sex_detail; ?></td>
             </tr>
             <tr>
               <th>Alamat</th>
               <td>:</td>
               <td><?= $alamat_detail; ?></td>
             </tr>
             <tr>
               <th>No Telepon</th>
               <td>:</td>
               <td><?= $notelp_detail; ?></td>
             </tr>
             <tr>
               <th>Status</th>
               <td>:</td>
               <td><?= $status_detail; ?></td>
             </tr>
        </table>
       </div>
     </div>
     <br>
   </div>
 </div>

 <?php
 require_once "view/footer.php";

  ?>
