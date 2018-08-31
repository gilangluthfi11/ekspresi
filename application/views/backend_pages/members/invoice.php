<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ekspresi Admin Panel</title>
  <link rel="shortcut icon" type="../image/png" href="<?php echo asset_url();?>backend/favicon.png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo asset_url();?>backend/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo asset_url();?>backend/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo asset_url();?>backend/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo asset_url();?>backend/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo asset_url();?>backend/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo asset_url();?>backend/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo asset_url();?>backend/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo asset_url();?>backend/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo asset_url();?>backend/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo asset_url();?>backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body onload="window.print();">
<div class="wrapper with-border">
  <!-- Main content -->
  <section class="invoice" style="width: 100%">
    <!-- title row -->
    <div class="row">
      <div class="page-header callout callout-info col-sm-12 text-center">
        <img src="<?php echo asset_url();?>backend/img/logo-alt.png" alt="Logo"><br>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-12 ">
        <b>Nomer Invoice : #007612</b><br>
        <b>Nomer Membership: 9683456</b><br>
        <b>Date: 2/10/2014</b>
        <hr>
        <h3>Hai <strong>John Doe</strong></h3><br>
        <p class="text-justify">Terima kasih sudah bergabung dengan Ekspresi Coworking Space. Kami harap anda dapat bekerja dengan nyaman dan tenang, serta dapat berkolaborasi dengan member yang lain di tempat kami.</p>
        <hr>
        <small>jumlah yang dibayarkan :</small>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-12 text-center">
        <h4><strong>Paket Daily Personal</strong></h4>
        <h1>Rp 35.000</h1>
      </div>
    </div>
    <!-- info row -->
    <div class="row invoice-info bg-gray text-center">
      <div class="col-sm-12">
        <address>
          <br>
          <strong>Ekspresi Coworking Space</strong><br>
          <small>Jalan Gandok-Tambakan no 777</small><br>
          <small>Sinduharjo, Ngaglik, Sleman, DIY</small><br>
          <small>Email: ekspresi.cowork@gmail.com</small><br>
          <small>ekspresicospace.com</small>
        </address>
      </div>
      <!-- /.col -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
</html>
