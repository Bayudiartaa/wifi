<div class="row">
  <div class="col-12">
    <?=$this->session->flashdata('pesan');?>
        <div class="card">
            <div class="card-header">
                    <a href="<?= base_url('pelanggan/add') ?>" class="btn btn-success" ><i class="fa fa-user-plus"></i>Tambah</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <th>No</th>
                            <th>Nama Pelanggan</th>
                            <th>No Telepon</th>
                            <th>No Ktp</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($row->result() as $pelanggan): ?>
                                <tr>
                                    <td><?= $no++ ?>.</td>
                                    <td><?= $pelanggan->nama_pelanggan ?></td>
                                    <td><?= $pelanggan->no_telepon ?></td>
                                    <td><?= $pelanggan->no_ktp ?></td>
                                    <td><?= $pelanggan->alamat ?></td>
                                    <td>
                                    <a href="<?= base_url('detail_tagihan/')?>" class="btn btn-outline-success btn-sm"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-outline-success btn-sm" href="<?=base_url('pelanggan/edit/');?><?=$pelanggan->id;?>"><i class="fa fa-edit"></i></a>
                                    <form action="<?= base_url('pelanggan/delete') ?>" method="POST" class="d-inline">
                                            <input type="hidden" name="id" value="<?= $pelanggan->id; ?>">
                                            <button class="btn btn-outline-danger btn-sm tombol-hapus" type="submit">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                    </td>    
                                </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

