<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/print.css" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/print.css" type="text/css" media="print">
    <title>Klinik Bidan Nyimas</title>
  </head>
  <body onload="print()">
    <div class="cetak">
    <?php foreach ($pasien as $pas) { ?>
    <div class="card mb-3 " style="max-width: 540px;">
      <div class="card-title"
      ><h5 align="center" style="font-size:18px;">KARTU PASIEN</h5>
      <p align="center" style="font-size:12px;">KLINIK BIDAN NYIMAS</p>
      <h3 align="center" style="font-size:12px;">Jl.Poksai, Beringin Raya, Kec. Kemiling, Bandar Lampung</h3></div>
      <div class="row no-gutters">
        <div class="col-md-8">
          <div class="card-body">
            <p class="card-text" style="font-size:12px;">Nama&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;  : <?= $pas['nama_user'];  ?></p>
            <p class="card-text" style="font-size:12px;">Umur&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: <?= $pas['umur']; ?></p>
            <p class="card-text" style="font-size:12px;">Alamat&emsp;&emsp; : <?= $pas['alamat'];  ?></p>
            <p class="card-text" style="font-size:12px;">No.Hp&emsp;&emsp;&emsp;&emsp;&ensp; : <?= $pas['no_telp'];  ?></p>
          </div>
        </div>
        <div class="col-md-2">
          <img src="<?php echo base_url(); ?>assets/images/Logo_Bidan_Nyimas-3.jpg">
        </div>
      </div>
    </div>
  <?php } ?>
  </div>
  </body>
</html>
