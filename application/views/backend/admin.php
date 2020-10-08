<html>

<head>
    <title>Admin Dashboard</title>
    <!-- Font Awesome -->

    <? $this->load->view('backend/template/css') ?>

</head>

<body>

<? $this->load->view('backend/template/header') ?>


    <div class="container-fluid pt-5">
        <div class="col-md-11 offset-md-2 mt-5">
            <div class="card bg-light w-75">
                <div class="card-header">
                    <h3>Welcome, admin</h3>
                </div>
                <div class="card-body">
                    <p class="card-text">Selamat Datang di halaman Dasboard</p>
                </div>
            </div>
        </div>
    </div>


    <? $this->load->view('backend/template/js') ?>

</body>

</html>