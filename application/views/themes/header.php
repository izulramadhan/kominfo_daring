<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url()?>assets/images/logo/putih.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Magang Daring | Dinas Komunikasi dan Informatika - Provinsi Jateng</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="<?php echo base_url()?>"><h2>Diskominfo <em>Garing</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="<?php if($this->uri->segment(1)==""){echo("nav-item active");}?>">
                    <a class="nav-link" href="<?php echo base_url()?>">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="<?php if($this->uri->segment(2)=="tentang"){echo("nav-item active");}?>"><a class="nav-link" href="<?php echo base_url()?>page/tentang">Profil</a></li>

                <li class="<?php if($this->uri->segment(2)=="egov"){echo("nav-item dropdown active");}else if($this->uri->segment(2)=="keamanan"){echo("nav-item dropdown active");}else if($this->uri->segment(2)=="sekretariat"){echo("nav-item dropdown active");}else if($this->uri->segment(2)=="tik"){echo("nav-item dropdown active");}else if($this->uri->segment(2)=="statistik"){echo("nav-item dropdown active");}else if($this->uri->segment(2)=="ikp"){echo("nav-item dropdown active");} else{echo("nav-item dropdown");}?>">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Info Bidang</a>
                    
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="<?php echo base_url()?>page/egov">Bidang E-Government</a>
                      <a class="dropdown-item" href="<?php echo base_url()?>page/keamanan">Bidang Persandian dan Keamanan Informasi</a>
                      <a class="dropdown-item" href="<?php echo base_url()?>page/sekretariat">Bidang Sekretariat</a>
                      <a class="dropdown-item" href="<?php echo base_url()?>page/tik">Bidang Teknologi Informasi dan Komunikasi</a>
                      <a class="dropdown-item" href="<?php echo base_url()?>page/statistik">Bidang Statistik</a>
                      <a class="dropdown-item" href="<?php echo base_url()?>page/ikp">Bidang Informasi dan Komunikasi Publik</a>
                    </div>
                </li>
                 <li class="<?php if($this->uri->segment(2)=="program"){echo("nav-item dropdown active");}else if($this->uri->segment(2)=="panduan"){echo("nav-item dropdown active");} else{echo("nav-item dropdown");}?>">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Informasi Magang</a>
                    
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="<?php echo base_url()?>page/program">Program Magang</a>
                      <a class="dropdown-item" href="<?php echo base_url()?>page/panduan">Panduan Lengkap</a>
                    </div>
                </li>
                <li class="<?php if($this->uri->segment(2)=="kontak"){echo("nav-item active");}?>"><a class="nav-link" href="<?php echo base_url()?>page/kontak">Kontak</a></li>
                <li class="nav-item"><a href="<?php echo base_url()?>page/login" class="filled-button">Daftar Sekarang</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>