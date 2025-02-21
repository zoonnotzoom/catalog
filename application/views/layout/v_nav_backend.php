<!-- Main Sidebar Container -->
<aside class="main-sidebar bg-light sidebar-light-warning elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('admin') ?>" class="brand-link">
        <img src="<?= base_url() ?>assets/profile/brand.jpeg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-bold text-warning">Halaman Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?= base_url('admin') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'admin') {
                                                                            echo "active";
                                                                        } ?>">
                        <i class="nav-icon fas fa-columns"></i>
                        <p class="font-weight-normal text-dark">
                            Dashboard Admin
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('kategori') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'kategori') {
                                                                                echo "active";
                                                                            } ?>">
                        <i class="nav-icon fas fa-th-list"></i>
                        <p class="font-weight-normal text-dark">
                            Kategori
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('barang') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'barang') {
                                                                            echo "active";
                                                                        } ?>">
                        <i class="nav-icon fas fa-box-open"></i>
                        <p class="font-weight-normal text-dark">
                            Barang
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('gambarbarang') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'gambarbarang') {
                                                                                    echo "active";
                                                                                } ?>">
                        <i class="nav-icon fas fa-file-image"></i>
                        <p class="font-weight-normal text-dark">
                            Gambar Barang
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('auth/logout_user') ?>" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p class="font-weight-normal text-dark">
                            Log Out
                        </p>
                    </a>
                </li>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?= $title ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Admin</a></li>
                        <li class="breadcrumb-item active"><?= $title ?></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">