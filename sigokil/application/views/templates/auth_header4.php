<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <style type="text/css">
    .masthead4 {
      background-image: url("../assets/img/bg.jpg");
      background-position: center center;
      background-size: cover;
    }
  </style>

  <title><?= $title; ?></title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

  <link href="<?= base_url('assets_menu/'); ?>addons/bootstrap-4/jquery.smartmenus.bootstrap-4.css" rel="stylesheet">

<!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?= base_url(); ?>"><img width="40px" height="40px" src="<?= base_url('assets/pu.png'); ?>"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">

          <!-- Left nav -->
          <ul class="nav navbar-nav mr-auto">
            <li class="nav-item mr-4">
              <a class="nav-link" href="<?= base_url(); ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item mr-4"><a class="nav-link" href="<?= base_url('auth/irigasi2019'); ?>">Progress Pengerjaan 2019</a>
            </li>
            <li class="nav-item mr-4"><a class="nav-link" href="<?= base_url('auth/irigasi2020'); ?>">Rencana Pekerjaan Irigasi 2020</a>
            </li>
            <li class="nav-item dropdown mr-4"><a class="nav-link dropdown-toggle" href="#">Peta Daerah Irigasi</a>
              <ul class="dropdown-menu">
                <li class="dropdown"><a class="dropdown-item mt-2 dropdown-toggle" href="#">Manfaat</a>
                  <ul class="dropdown-menu">
                    <?php foreach ($datamanfaat as $datamanfaat): ?>
                      <li>
                        <a class="dropdown-item mt-2" href="<?= base_url('assets/img/manfaat/') . $datamanfaat->file_manfaat ?>"><?= $datamanfaat->deskripsi_manfaat ?></a>
                      </li>
                    <?php endforeach ?>
                    
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item mt-2 dropdown-toggle" href="#">Jaringan</a>
                  <ul class="dropdown-menu">
                    <?php foreach ($datajaringan as $datajaringan): ?>
                      <li>
                        <a class="dropdown-item mt-2" href="<?= base_url('assets/img/jaringan/') . $datajaringan->file_jaringan ?>"><?= $datajaringan->deskripsi_jaringan ?></a>
                      </li>
                    <?php endforeach ?>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item mt-2 dropdown-toggle" href="#">Perluasan</a>
                  <ul class="dropdown-menu">
                    <?php foreach ($dataperluasan as $dataperluasan): ?>            
                      <li>
                        <a class="dropdown-item mt-2" href="<?= base_url('assets/img/perluasan/') . $dataperluasan->file_perluasan ?>"><?= $dataperluasan->deskripsi_perluasan ?></a>
                      </li>
                    <?php endforeach ?>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>

</head>

<body class="masthead4">