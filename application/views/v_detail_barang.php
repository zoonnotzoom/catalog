<!-- Default box -->
<div class="card card-solid">
    <div class="card-body">
        <div class="row">
            <div class="col-12 col-sm-6">
                <h1 class="d-inline-block d-sm-none"><?= $barang->nama_barang ?></h1>
                <div class="col-12">
                    <img src="<?= base_url('assets/gambar/' . $barang->gambar) ?>" class="product-image" alt="Product Image">
                </div>
                <div class="col-12 product-image-thumbs">
                    <div class="product-image-thumb active"><img src="<?= base_url('assets/gambar/' . $barang->gambar) ?>" alt="Product Image"></div>
                    <?php foreach ($gambar as $key => $value) { ?>
                        <div class="product-image-thumb"><img src="<?= base_url('assets/gambarbarang/' . $value->gambar) ?>" alt="Product Image"></div>
                    <?php } ?>

                </div>
            </div>
            <div class="col-12 col-sm-6">
                <h1><?= $barang->nama_barang ?></h1>
                <p><?= $barang->deskripsi ?></p>

                <hr>

                <div class="py-2 px-3 mt-4">
                    <h2 class="mb-0">
                        Rp. <?= number_format($barang->harga, 0) ?>
                    </h2>
                </div>

                <hr>

                <div class="mt-4 text-center">
                    <h4>
                        Pesan sekarang melalui :
                    </h4>
                    <div class="btn btn-lg btn-flat">
                        <a href="<?= $barang->shopee ?>" target="_blank"><img src="<?= base_url('assets/market/Shopee.png') ?>" width="50" height="50"></a>
                    </div>

                    <div class="btn btn-lg btn-flat">
                        <a href="<?= $barang->tokopedia ?>" target="_blank"><img src="<?= base_url('assets/market/Tokopedia.png') ?>" width="50" height="50"></a>
                    </div>

                    <div class="btn btn-lg btn-flat">
                        <a href="https://wa.me/6285591786051?text=Halo, apakah masih ada <?= $barang->nama_barang ?>%20ini?" target="_blank"><img src="<?= base_url('assets/market/Whatsapp.png') ?>" width="50" height="50"></a>
                    </div>
                </div>
                <div class="mt-5">
                    <?php $url = isset($_SERVER['HTTP_REFERER']) ? htmlspecialchars($_SERVER['HTTP_REFERER']) : ''; ?>
                    <?php echo anchor($url, '<div class="btn btn-sm btn-outline-danger">Kembali</div>') ?>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 text-center" data-aos="fade-in" data-aos-duration="2500">
                <h1 class="font-weight-bold">Size Chart</h1>
            </div>
            <nav class="w-100">
                <div class="nav nav-tabs" id="product-tab" role="tablist">
                    <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Size Chart Kaos</a>
                    <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Size Chart Jaket</a>
                </div>
            </nav>
            <!---tab sizechart -->
            <div class="tab-content p-3" id="nav-tabContent">
                <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">
                    <div class="row text-center">
                        <div class="col-6" data-aos="fade-in" data-aos-duration="2500">
                            <img src="<?= base_url('assets/sizechart/sizechartkaosdewasa.png') ?>" width="100%">
                        </div>
                        <div class="col-6" data-aos="fade-in" data-aos-duration="2500">
                            <img src="<?= base_url('assets/sizechart/sizechartoversizedewasa.png') ?>" width="100%">
                        </div>
                        <div class="col-12 mt-4" data-aos="fade-in" data-aos-duration="2500">
                            <img src="<?= base_url('assets/sizechart/sizechartkaosanak2.png') ?>" width="50%">
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab">
                    <div class="row">
                        <div class="col-12">
                            <img src="<?= base_url('assets/sizechart/sizecharthoodie.png') ?>" width="100%">
                        </div>
                    </div>
                </div>
            </div>
            <!---tab sizechart end -->
        </div>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url() ?>template/dist/js/demo.js"></script>