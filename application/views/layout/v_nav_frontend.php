<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-light navbar-white sticky-top">
    <div class="container">
        <a href="<?= base_url('home/index_default/') ?>" class="navbar-brand">
            <img src="<?= base_url() ?>assets/profile/brand.jpeg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-normal">CUANHO</span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="<?= base_url('home/index_default/') ?>" class="nav-link">Home</a>
                </li>
                <?php $kategori = $this->m_home->get_all_data_kategori(); ?>
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Kategori</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                        <?php foreach ($kategori as $key => $value) { ?>
                            <li><a href="<?= base_url('home/kategori/' . $value->id_kategori) ?>" class="dropdown-item"><?= $value->nama_kategori ?></a></li>
                        <?php } ?>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('custom') ?>" class="nav-link">Design Custom</a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('tentangkami') ?>" class="nav-link">Tentang Kami</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- /.navbar -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark justify-content-center"><?= $title ?></h1>
                </div><!-- /.col -->
                <!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->