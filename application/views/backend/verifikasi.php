<html>

<head>
    <title>Admin Dashboard</title>
    <!-- Font Awesome -->
    <? $this->load->view('backend/template/css') ?>
</head>

<body>

<? $this->load->view('backend/template/header') ?>

    <div class="container mt-5">

        <table class="table mt-3">
            <thead class="thead-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Gambar</th>
                    <th class="w-25" scope="col">Nama</th>
                    <th class="w-25" scope="col">No. KTM</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>1</td>
                    <td>Kategori</td>
                    <td>Judul</td>
                    <td>Gambar</td>
                    <td><a href='#'><i class='fas fa-user-check' style='color: black;'></i>
                        </a></td>
                </tr>

            </tbody>
        </table>


    </div>


    <? $this->load->view('backend/template/js') ?>

</body>

</html>