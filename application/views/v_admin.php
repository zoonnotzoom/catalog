<div class="col-lg-12">
    <div class="card card-dark card-outline">
        <div class="card-body">
            <h1 class="text-center">Welcome to Admin Page</h1>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-4">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3><?= $total_kategori ?></h3>

                            <p>Kategori</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-th-list"></i>
                        </div>
                        <a href="<?= base_url('kategori') ?>" class="small-box-footer">Pergi ke halaman kategori<i class="fas fa-arrow-circle-right ml-2"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-4">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3><?= $total_barang ?></h3>

                            <p>Barang</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-box-open"></i>
                        </div>
                        <a href="<?= base_url('barang/add') ?>" class="small-box-footer">Pergi ke halaman tambah barang<i class="fas fa-arrow-circle-right ml-2"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-4">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3 class="font-weight-normal">Gambar barang</h3>

                            <p>Untuk gambar tambahan produk</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-file-image"></i>
                        </div>
                        <a href="<?= base_url('gambarbarang') ?>" class="small-box-footer">pergi ke halaman gambar barang<i class="fas fa-arrow-circle-right ml-2"></i></a>
                    </div>
                </div>
            </div>
            <br>

            <a href="<?= base_url('auth/logout_user') ?>" class="btn btn-warning"><i class="fa fa-sign-out-alt ml-2"></i>Log Out</a>
        </div>
    </div>
</div>