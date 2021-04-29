<?php
defined('BASEPATH') or exit('No direct script access allowed');
if ($this->session->userdata('level') == 'Penjaga') {
  $site = "penjaga/";
} else if ($this->session->userdata('level') == 'Admin') {
  $site = "admin/";
} else {
  $site = "welcome/";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" type="icon" href="<?php echo base_url('media/' . $instansi->logo); ?>">
  <title>Loket <?php echo $instansi->instansi; ?></title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">

  <!-- Add custom CSS here -->
  <link href="<?php echo base_url('assets/css/sb-admin.css'); ?>" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css'); ?>">
</head>

<body>

  <div id="wrapper">

    <!-- Sidebar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <img src="<?php echo base_url('media/' . $instansi->logo); ?>" width="42px" height="50px" class="img " onclick="window.location='<?php echo site_url($site); ?>'">
      </div>
      <a class="navbar-brand"><?php echo $instansi->instansi; ?></a>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav"><br>
          <?php $this->load->view($menu); ?>

        </ul>

        <ul class="nav navbar-nav navbar-right navbar-user">
          <li class="dropdown messages-dropdown">
            <p class="navbar-brand">
              Sistem Informasi Antrian <?php echo $instansi->instansi; ?>
            </p>
          </li>
          <li class="dropdown user-dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Hai, <?php echo $this->session->userdata('nama') ?></a>
          </li>
        </ul>

      </div><!-- /.navbar-collapse -->

    </nav>

    <div id="page-wrapper">

      <?php $this->load->view($content); ?>

    </div><!-- /#page-wrapper -->

  </div>

  <!-- /#wrapper -->


  <!-- JavaScript -->
  <script src="<?php echo base_url('assets/js/jquery-1.10.2.js'); ?>"></script>

  <script src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>

</body>
<footer class="footer">
  <div class="container">

    <p style="text-align:center;" class="text-muted">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copyright © <?php echo $instansi->instansi; ?> 2021</p>

  </div>
</footer>

</html>