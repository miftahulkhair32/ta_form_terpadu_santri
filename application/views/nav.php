<ul class="nav nav-list">
    <li class="active">
        <a href="<?= base_url('index.php/home') ?>">
            <i class="menu-icon fa fa-tachometer"></i>
            <span class="menu-text"> Home </span>
        </a>

        <b class="arrow"></b>
    </li>

    <?php if($this->session->userdata('status')=='menejemen') : ?>
        <li class="">
            <a href="<?= base_url('index.php/laporan'); ?>">
                <i class="menu-icon fa fa-book red"></i>
                Laporan Utama
            </a>
            <b class="arrow"></b>
        </li>

        <li class="">
            <a href="<?= base_url('index.php/pelanggaran/cek') ?>">
                <i class="menu-icon fa fa-book red"></i>
                Pelanggaran
            </a>

            <b class="arrow"></b>
        </li>

        <li class="">
            <a href="<?= base_url('index.php/partisipasi/cek') ?>">
                <i class="menu-icon fa fa-book red"></i>
                Partisipasi
            </a>

            <b class="arrow"></b>
        </li>

        <li class="">
            <a href="<?= base_url('index.php/pencapaian/cek') ?>">
                <i class="menu-icon fa fa-book red"></i>
                Pencapaian
            </a>

            <b class="arrow"></b>
        </li>

        <li class="">
            <a href="<?= base_url('index.php/artikel/cek') ?>">
                <i class="menu-icon fa fa-book red"></i>
                Artikel
            </a>

            <b class="arrow"></b>
        </li>

        <li class="">
            <a href="<?= base_url('index.php/hapalan/cek') ?>">
                <i class="menu-icon fa fa-book red"></i>
                Tahfizh
            </a>

            <b class="arrow"></b>
        </li>

        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-inbox"></i>
                Observasi
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="<?= base_url('index.php/observasi') ?>">
                        <i class="menu-icon fa fa-pencil green"></i>
                        Input Observasi
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="<?= base_url('index.php/observasi/cek') ?>">
                        <i class="menu-icon fa fa-book orange"></i>
                        Laporan Observasi
                    </a>

                    <b class="arrow"></b>
                </li>
            </ul>
        </li>
    
    <li>
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-users"></i>
            <span class="menu-text"> User </span>
            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li>
                <a href="<?= base_url('index.php/user/daftar') ?>">
                    <i class="menu-icon fa fa-user"></i>
                    Tambah User
                </a>

                <b class="arrow"></b>

            </li>

            <li>
                <a href="<?= base_url('index.php/user/cek_daftar') ?>">
                    <i class="menu-icon fa fa-list-alt"></i>
                    Daftar User
                </a>

                <b class="arrow"></b>
                
            </li>
        </ul>
    </li>
    <?php endif; ?>

    <?php if($this->session->userdata('status') != 'menejemen') : ?>
        <li class="">
            <a href="<?= base_url('index.php/partisipasi') ?>">
                <i class="menu-icon fa fa-pencil orange"></i>
                Partisipasi Program
            </a>

            <b class="arrow"></b>
        </li>

        <li class="">
            <a href="<?= base_url('index.php/pencapaian') ?>">
                <i class="menu-icon fa fa-pencil orange"></i>
                Pencapaian Target
            </a>

            <b class="arrow"></b>
        </li>

        <li class="">
            <a href="<?= base_url('index.php/hapalan'); ?>">
                <i class="menu-icon fa fa-pencil orange"></i>
                Tahfizh
            </a>

            <b class="arrow"></b>
        </li>

        <li class="">
            <a href="<?= base_url('index.php/pelanggaran') ?>">
                <i class="menu-icon fa fa-pencil orange"></i>
                Pelanggaran
            </a>

            <b class="arrow"></b>
        </li>

        <li class="">
            <a href="<?= base_url('index.php/artikel') ?>">
                <i class="menu-icon fa fa-pencil orange"></i>
                Artikel
            </a>

            <b class="arrow"></b>
        </li>
    <?php endif; ?>

    <li>
        <a href="<?= base_url('index.php/user/profil') ?>">
            <i class="menu-icon fa fa-user"></i>
            <span class="menu-text"> Profil </span>
        </a>

        <b class="arrow"></b>
    </li>
</ul><!-- /.nav-list -->