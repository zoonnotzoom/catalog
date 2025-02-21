<div class="col-md-12">
    <div class="card card-dark">
        <div class="card-header">
            <h3 class="card-title">Gambar Barang</h3>
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
                    <th>Cover</th>
                    <th>Jumlah Gambar</th>
                    <th>Action</th>
                </thead>
                <tbody class="text-center">
                    <?php $no = 1;
                    foreach ($gambarbarang as $key => $value) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value->nama_barang ?></td>
                            <td><img src="<?= base_url('assets/gambar/' . $value->gambar) ?>" width="100px"></td>
                            <td><span class="badge bg-warning">
                                    <h4><?= $value->total_gambar ?></h4>
                                </span></td>
                            <td>
                                <a href="<?= base_url('gambarbarang/add/' . $value->id_barang) ?>" class="btn btn-warning btn-sm"><i class="fas fa-plus"></i>Tambah Gambar</a>
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