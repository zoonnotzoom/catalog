<style>
    .max-lines {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
</style>
<div class="container-fluid shadow">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel" data-aos="fade-in" data-aos-duration="3000">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?= base_url() ?>assets/slider/slider_1.png">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url() ?>assets/slider/slider_2.png">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url() ?>assets/slider/slider_3.png">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url() ?>assets/slider/slider_4.png">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="card card-solid">
        <div class="card-body pb-0">
            <div class="row">
                <div class="col-md">
                    <form action="<?= base_url('home'); ?>" method="post" data-aos="zoom-out" data-aos-duration="1000" data-aos-delay="500">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Cari Barang" name="keyword" autocomplete="off">
                            <div class="input-group-append">
                                <input class="btn btn-outline-secondary" type="submit" name="submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row d-flex align-items-stretch">
                <?php if (empty($barang)) : ?>
                    <tr>
                        <td>
                            <div class="alert alert-danger" role="alert">
                                barang tidak ditemukan
                            </div>
                        </td>
                    </tr>
                <?php endif; ?>
                <?php foreach ($barang as $key => $value) { ?>

                    <div class="col-12 col-md-3 d-center align-items-stretch">
                        <div class="card bg-white" data-aos="fade-in" data-aos-duration="2000" data-aos-delay="500">
                            <div class="card-header text-center border-bottom-0">
                                <h2 class="lead max-lines"><?= $value->nama_barang ?></h2>
                            </div>
                            <div class="card-body pt-1">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <img src="<?= base_url('assets/gambar/' . $value->gambar) ?>" class="img-thumb-card">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 text-center active">
                                        <h5>Kategori : <?= $value->nama_kategori ?></h5>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12 text-center">
                                        <h3>Rp <?= number_format($value->harga, 0) ?></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row text-center">
                                    <div class="col">
                                        <div class="btn btn-lg">
                                            <a href="<?= $value->shopee ?>" target="_blank"><img src="<?= base_url('assets/market/Shopee.png') ?>" width="25" height="25"></a>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div>
                                            <a href="<?= base_url('home/detail_barang/' . $value->id_barang) ?>" class="btn btn-lg font-weight-bold">
                                                Detail
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="btn btn-lg">
                                            <a href="<?= $value->tokopedia ?>" target="_blank"><img src="<?= base_url('assets/market/Tokopedia.png') ?>" width="25" height="25"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <?= $this->pagination->create_links(); ?>
        </div>
    </div>
</div>