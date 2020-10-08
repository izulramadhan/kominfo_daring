<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Magang DISKOMINFO - {Judul Halaman}</title>

  <? $this->load->view('magang/template/css') ?>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

  <? $this->load->view('magang/template/header') ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-4">
            <h1 class="h3 mb-0 text-gray-800">Status</h1>
          </div>

          <ul class="notificationBar">
            <li>
              <i class="fas fa-fw fa-user"></i>
              <div>Telah Terdaftar</div>
            </li>
            <li>
              <i class="fas fa-fw fa-clock"></i>
              <div>Diproses oleh Admin</div>
            </li>
            <li>
              <i class="fas fa-fw fa-clock"></i>
              <div>Menunggu Persetujuaan pimpinan/bidang</div>
            </li>
            <!--Jika Berhasil(True)-->
            <li>
              <i class="fas fa-fw fa-check"></i>
              <div>Lolos Seleksi Pendaftaran Magang</div>
            </li>
            <!--Jika Gagal(False)-->
            <li>
              <i class="fas fa-fw fa-times"></i>
              <div>Gagal Seleksi Pendaftaran Magang (coba lagi hari yang akan datang)</div>
            </li>
          </ul>




        </div>
        <!-- End of Content Wrapper -->

      </div>
      <!-- End of Page Wrapper -->

      <? $this->load->view('magang/template/js') ?>

</body>

</html>