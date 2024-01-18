<!DOCTYPE html>
<html>
  <head>
    <title><?= $settings['judul_halaman'] ?> | <?= $title; ?></title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <!-- Bootstrap 5.3 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="<?= base_url() ?>assets/asset/css/style.css" type="text/css" media="all" />
    <!--[if lte IE 6
      ]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all"
    /><![endif]-->
    <script type="text/javascript" src="<?= base_url() ?>assets/asset/js/jquery-1.2.3.pack.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/asset/js/jquery.jcarousel.pack.js"></script>
    <script type="text/javascript">
      jQuery(document).ready(function () {
        jQuery("#mycarousel").jcarousel({
          scroll: 1,
          animation: "slow",
          wrap: "both",
        });
      });
    </script>
    <!-- Animate on scroll -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  </head>
  <body>
    <!-- Header -->
    <div id="header">
      <div class="shell">
        <div class="cl">&nbsp;</div>
        <!-- Logo -->
        <div id="logo-cnt">
          <h1 id="logo"><?= $settings['judul_halaman'] ?></h1>
          <h2 id="slogan"><?= $settings['text_sambutan'] ?></h2>
        </div>
        <!-- End Logo -->