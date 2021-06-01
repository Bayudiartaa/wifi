<div class="row">
  <div class="col-12">
    <?=$this->session->flashdata('pesan');?>
        <div class="card">
            <div class="card-header">
                    <a href="<?= base_url('pemasangan/add_pemasangan') ?>" class="btn btn-success" ><i class="fa fa-user-plus"></i>Tambah</a>
            </div>
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
                            <?php $no = 1;
                            foreach ($pemasangan->result() as $pema => $data): ?>
                                <tr>
                                    <td><?= $no++ ?>.</td>
                                    <td><?= $data->nama_pelanggan ?></td>
                                    <td><?= $data->alamat_pemasangan?></td>
                                    <td><?= $data->tarif?></td>
                                    <td><?= date('d-M-Y', strtotime($data->created_at)); ?></td>
                                    <td>
                                    <a class="btn btn-outline-success btn-sm" href="<?=base_url('pemasangan/edit/');?><?=$data->id;?>"><i class="fa fa-edit"></i></a>
                                    </td>    
                                </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>