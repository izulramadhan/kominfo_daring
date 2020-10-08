<html>

<head>
    <title>Admin Dashboard</title>
    <!-- Font Awesome -->
    <? $this->load->view('backend/template/css') ?>

</head>

<body>

<? $this->load->view('backend/template/header') ?>

    <div class="container mt-5">
        <a href="#" class="btn btn-sm light-blue darken-3" style="color:white;">Tambah Berita</a>

        <table class="table mt-3">
            <thead class="thead-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kategori</th>
                    <th class="w-25" scope="col">Judul</th>
                    <th class="w-25" scope="col">Gambar</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>1</td>
                    <td>Kategori</td>
                    <td>Judul</td>
                    <td>Gambar</td>
                    <td><a href='#'><i class='fas fa-edit' style='color: green;'></i>
                        </a>&nbsp<a href='#'><i class='far fa-times-circle' style='color: red;'></i>
                        </a></td>
                </tr>

            </tbody>
        </table>


    </div>


    <? $this->load->view('backend/template/js') ?>

</body>

</html>