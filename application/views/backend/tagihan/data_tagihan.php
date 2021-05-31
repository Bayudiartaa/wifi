<div class="row">
  <div class="col-12">
    <?=$this->session->flashdata('pesan');?>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pelanggan</th>
                                <th>Alamat Pemasangan</th>
                                <th>Tarif</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  $no = 1;
                               foreach($tampil as $t){?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $t['nama_pelanggan'] ?></td>
                                    <td><?= $t['alamat_pemasangan'] ?></td>
                                    <td><?= $t['harga'] ?></td>
                                    <td><?= date('d-M-Y', strtotime($t['tgl_pemasangan'])) ?></td>
                                    <td>
                                        <a href="<?= base_url('detail_tagihan/'. $t['id_pemasangan']); ?>" class="btn btn-outline-success btn-sm"><i class="fa fa-eye"></i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

