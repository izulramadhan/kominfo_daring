<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Magang DISKOMINFO - {Judul Halaman}</title>

  <!-- Custom fonts for this template-->
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
            <h1 class="h3 mb-0 text-gray-800">Daftar Magang</h1>
          </div>


          <form action="<?= base_url() ?>addproduct/product/tbh" method="post" enctype="multipart/form-data">
            <table class="table w-50">
              <tbody>
                <tr>
                  <th scope="row">Curriculum Vitae</th>
                  <td><input type="file" class="form-control-file" name="gambar"></td>
                </tr>
                <tr>
                  <th scope="row">Proposal</th>
                  <td><input type="file" class="form-control-file" name="gambar"></td>
                </tr>
                <tr>
                  <th scope="row">Surat Pengantar Universitas</th>
                  <td><input type="file" class="form-control-file" name="gambar"></td>
                </tr>
                <tr>
                  <th scope="row">Surat Permohonan Magang</th>
                  <td><input type="file" class="form-control-file" name="gambar"></td>
                </tr>
                <tr>
                  <th scope="row">Surat Sedia Mengikuti Magang</th>
                  <td><input type="file" class="form-control-file" name="gambar"></td>
                </tr>
                <tr>
                  <th scope="row">Surat Sedia Membuat Laporan</th>
                  <td><input type="file" class="form-control-file" name="gambar"></td>
                </tr>
                <tr>
                  <td><input class="btn btn-danger" type="submit" value="Simpan" name="Simpan"></td>
                </tr>
              </tbody>
          </form>




        </div>
        <!-- End of Content Wrapper -->

      </div>
      <!-- End of Page Wrapper -->
      <? $this->load->view('magang/template/js') ?>


</body>

</html>