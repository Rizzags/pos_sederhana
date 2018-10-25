<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/jquery.dataTables.min.css">
    <link href="<?=base_url('asset/bootstrap-sweetalert/sweetalert.css')?>" rel="stylesheet" type="text/css" />
    <title>Point Of Sale</title>
  </head>
    <style type="text/css">
      #isi {
        margin-top: 20px;
      }
    </style>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
     <section class="container">  
        <a class="navbar-brand" href="#">POIN OF SALE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Halaman Utama</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Data Master
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="<?php echo base_url();?>kategori">Kategori</a>
                <a class="dropdown-item" href="<?php echo base_url();?>barang">Barang</a>
                <a class="dropdown-item" href="<?php echo base_url();?>operator">Operator</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Transaksi</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Laporan
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Laporan Harian</a>
                <a class="dropdown-item" href="#">Laporan Bulanan</a>
                <a class="dropdown-item" href="#">Laporan Tahunan</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Riza Agustin
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Ubah Pasword</a>
                <a class="dropdown-item" href="#">Keluar</a>
              </div>
            </li>
          </ul>
        </div>
      </section>
    </nav>

    <!-- Akhir Navbar -->
    <section class="container" id="isi">
     <input type="hidden" id="weburi" name="weburi" value="<?php echo base_url() ?>">
      <?php echo $contents;  ?>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url()?>asset/jquery-3.3.1.js"></script>
    <!-- <script src="<?php echo base_url()?>asset/jquery-3.3.1.slim.min.js"></script> -->
    <script src="<?=base_url('asset/bootstrap-sweetalert/sweetalert.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url()?>asset/popper.min.js"></script>
    <script src="<?php echo base_url()?>asset/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>asset/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()?>asset/web/kategori.js"></script>
  </body>
  <script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    } );
    $(document).ready(function() {
      $('#example3').DataTable( {
        "order": [[ 3, "desc" ]]
      } );
    } );

  </script>
  <script type="text/javascript">

</script>
</html>