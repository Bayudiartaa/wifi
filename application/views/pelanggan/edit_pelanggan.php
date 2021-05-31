<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold">Edit Pelanggan</h6>
            </div>
            <div class="card-body">
            <div class="mb-4">
                <a class="btn btn-warning" href="<?=base_url('pelanggan');?>"><i class="fa fa-undo"></i> Kembali</a>
            </div>
            <form class="form-horizontal" action="" method="post">
                <div class="form-group">
                    <label for="nama">Nama Pelanggan</label>
                    <input type="hidden" name="id" value="<?=$row->id;?>">
                    <input type="text" class="form-control <?=form_error('nama') ? 'is-invalid' : null;?>" name="nama" id="nama" value="<?=$this->input->post('nama') ?? $row->nama_pelanggan;?>">
                    <?=form_error('pelanggan', '<span class="error invalid-feedback">', '</span>');?>
                </div>
                <div class="form-group">
                    <label for="telp">No Telepon</label>
                    <input type="number" id="telp" name="telp" class="form-control  <?=form_error('telp') ? 'is-invalid' : null;?>" name="telp" id="telp" value="<?= $this->input->post('telp') ?? $row->no_telepon;?>">
                    <?= form_error('telp', '<small class="text-danger pl-3 ">', '</small>') ?>
                </div>
                <div class="form-group">
                    <label for="ktp">No Ktp</label>
                    <input type="number" id="ktp" name="ktp" class="form-control  <?=form_error('ktp') ? 'is-invalid' : null;?>" name="ktp" id="ktp" value="<?=$this->input->post('ktp') ?? $row->no_ktp;?>">
                    <?= form_error('ktp', '<small class="text-danger pl-3 ">', '</small>') ?>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                        <input type="text" class="form-control <?=form_error('alamat') ? 'is-invalid' : null;?>" name="alamat" id="alamat" value="<?=$this->input->post('alamat') ?? $row->alamat;?>">
                        <?=form_error('alamat', '<span class="error invalid-feedback">', '</span>');?>
                </div>
                <div class="form-group text-right">
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>