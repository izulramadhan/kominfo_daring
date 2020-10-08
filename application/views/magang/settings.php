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
            <h1 class="h3 mb-0 text-gray-800">Atur Akun</h1>
          </div>



          <form class="user">
            <div class="form-group">
              <div class="d-flex justify-content-center mb-5">
                <img id="blah" class="rounded-circle" style="cursor: pointer;" src="http://via.placeholder.com/150x150"
                  alt="your image" />
              </div>
              <div class="row">
                <div class="col">
                  <label>Username</label>
                  <input type="text" class="form-control" id="username" placeholder="{Username}">
                </div>
                <div class="col">
                  <div class="row">
                    <div class="col">
                      <label>No. KTM</label>
                      <input type="file" class="form-control-file" name="gambar">
                    </div>
                    <div class="col">
                      <br>
                      <a href="#"></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="form-group">
              <div class="row">
                <div class="col">
                  <label>E-mail</label>
                  <input type="text" class="form-control" id="Email" placeholder="{E-mail}">
                </div>
                <div class="col">
                  <label>Password</label>
                  <input type="password" class="form-control" id="email" placeholder="{Password}">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col">
                  <label>Nama Lengkap</label>
                  <input type="text" class="form-control" id="Email" placeholder="{Nama Lengkap}">
                </div>
              </div>
            </div>


            <input class="btn btn-danger" type="submit" value="Simpan" name="Simpan">


        </div>


        </form>


      </div>
      <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <? $this->load->view('magang/template/js') ?>


</body>

</html>