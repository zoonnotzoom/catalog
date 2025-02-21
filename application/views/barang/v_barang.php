<style>
    .max-lines {
        overflow: auto;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        /* number of lines to show */
        line-clamp: 3;
        -webkit-box-orient: vertical;
    }
</style>
<div class="col-md-12">
    <div class="card card-dark">
        <div class="card-header">
            <h3 class="card-title">Barang</h3>
            <div class="card-tools">
                <a href="<?= base_url('barang/add') ?>" type="button" class="btn-warning btn-sm"><i class="fas fa-plus">Add</i></a>
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <?php
        if ($this->session->flashdata('pesan')) {
            echo '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i>sukses!</h5>';
            echo $this->session->flashdata('pesan');
            echo '</div>';
        }
        ?>
        <div class="card-body">
            <table class="table table-bordered" id="example1">
                <thead class="text-center">
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>harga</th>
                    <th>deskripsi</th>
                    <th>shopee</th>
                    <th>tokopedia</th>
                    <th>gambar</th>
                    <th>Action</th>
                </thead>
                <tbody class="text-center">
                    <?php $no = 1;
                    foreach ($barang as $key => $value) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value->nama_barang ?></td>
                            <td><?= $value->nama_kategori ?></td>
                            <td>Rp. <?= number_format($value->harga, 0) ?></td>
                            <td class="max-lines"><?= $value->deskripsi ?></td>
                            <td>
                                <a href="<?= $value->shopee ?>" target="_blank" class="btn btn-dark">Shopee</a>
                            </td>
                            <td>
                                <a href="<?= $value->tokopedia ?>" target="_blank" class="btn btn-dark">Tokopedia</a>
                            </td>
                            <td><img src="<?= base_url('assets/gambar/' . $value->gambar)  ?>" alt="" width="100px"></td>
                            <td>
                                <a href="<?= base_url('barang/edit/' . $value->id_barang) ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                <button class="btn btn-danger" data-toggle="modal" data-target="#delete<?= $value->id_barang ?>"><i class=" fa fa-trash"></i></button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

<!-- /.modal delete -->
<?php foreach ($barang as $key => $value) { ?>
    <div class="modal fade" id="delete<?= $value->id_barang ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete <?= $value->nama_barang ?> ?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h1>Yakin akan menghapus ini ?</h1>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <a href="<?= base_url('barang/delete/' . $value->id_barang) ?>" class="btn btn-danger">Delete</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php } ?>