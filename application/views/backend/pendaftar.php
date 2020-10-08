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
                    <th class="w-25">Nama</th>
                    <th class="w-25">CV</th>
                    <th scope="w-25">Proposal</th>
                    <th scope="col">Surat Pengantar Universitas</th>
                    <th scope="col">Surat Permohonan Magang</th>
                    <th scope="col">Surat Sedia Mengikuti Magang</th>
                    <th scope="col">Surat Membuat Laporan</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>1</td>
                    <td>Gambar</td>
                    <td>Nama</td>
                    <td><a href='#'><i class='fas fa-eye' style='color: black;'></i></a>
                        <a href='#'><i class='fas fa-file-download' style='color: black;'></i></a>
                        </a></td>
                    <td><a href='#'><i class='fas fa-eye' style='color: black;'></i></a>
                        <a href='#'><i class='fas fa-file-download' style='color: black;'></i></a>
                        </a></td>
                    <td><a href='#'><i class='fas fa-eye' style='color: black;'></i></a>
                        <a href='#'><i class='fas fa-file-download' style='color: black;'> </i></a>
                    </td>
                    <td><a href='#'><i class='fas fa-eye' style='color: black;'></i></a>
                        <a href='#'><i class='fas fa-file-download' style='color: black;'></i></a>
                        </a></td>
                    <td><a href='#'><i class='fas fa-eye' style='color: black;'></i></a>
                        <a href='#'><i class='fas fa-file-download' style='color: black;'></i></a>
                        </a></td>
                    <td><a href='#'><i class='fas fa-eye' style='color: black;'></i></a>
                        <a href='#'><i class='fas fa-file-download' style='color: black;'></i></a>
                        </a></td>
                </tr>

            </tbody>
        </table>


    </div>


    <? $this->load->view('backend/template/js') ?>
    
</body>

</html>