<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?= $title; ?></title>

  <!-- Bootstrap core CSS -->
  <link href="<?= base_url('assets/'); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url('assets/'); ?>https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='<?= base_url('assets/'); ?>https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='<?= base_url('assets/'); ?>https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='<?= base_url('assets/'); ?>https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="<?= base_url('assets/'); ?>css/agency.min.css" rel="stylesheet">

<!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="<?= base_url(); ?>"><img class="bg-light rounded-circle p-2" src="<?= base_url('assets/img/') ?>logo.png" width="45px" height="45px"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger text-white" href="<?= base_url(); ?>">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Galeri</a>
            <div class="dropdown-menu bg-dark">
              <a class="dropdown-item text-white" href="<?= base_url('Galeri'); ?>">Galeri Foto</a>
              <a class="dropdown-item text-white" href="<?= base_url('Galeri/galeri_harga'); ?>">Galeri Harga</a>
              <a class="dropdown-item text-white" href="<?= base_url('Galeri/galeri_video'); ?>">Galeri Video</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white js-scroll-trigger" href="<?= base_url('About'); ?>">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white js-scroll-trigger" href="<?= base_url('Contact'); ?>">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white js-scroll-trigger" href="<?= base_url('Home'); ?>">Form</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

</head>

<body id="page-top">