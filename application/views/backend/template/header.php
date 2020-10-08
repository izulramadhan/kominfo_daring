<nav class="navbar navbar-expand-sm navbar-dark light-blue darken-3 pr-4 sticky-top">
        <a class="navbar-brand" href="<?= base_url() ?>4dm1nDashboard/home">Administrator</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>4dm1nDashboard/aturberita">Berita</a>
                </li>
                <li class="nav-item dropdown" id="master">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown">
                        Magang
                    </a>
                    <div class="dropdown-menu" id="dropdownMaster" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= base_url() ?>4dm1nDashboard/aturmagang">Manage Magang</a>
                        <a class="dropdown-item" href="<?= base_url() ?>4dm1nDashboard/pendaftar">Lihat Pendaftar</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>4dm1nDashboard/verifpendaftar">Verifikasi KTM</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>4dm1nDashboard/aturuser">Manage User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Logout</a>
                </li>
            </ul>

        </div>
    </nav>
