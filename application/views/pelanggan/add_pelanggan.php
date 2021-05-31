<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold">Tambah Pelanggan</h6>
            </div>
            <div class="card-body">
            <div class="mb-4">
                <a class="btn btn-warning" href="<?=base_url('pelanggan');?>"><i class="fa fa-undo"></i> Kembali</a>
            </div>
            <form class="form-horizontal" action="<?=base_url('pelanggan/add');?>" method="post">
                <div class="form-group">
                    <label for="nama">Nama Pelanggan</label>
                    <input type="text" id="nama" name="nama" class="form-control <?=form_error('nama') ? 'is-invalid' : null;?>" name="nama" id="nama" value="<?=$this->form_validation->set_value('nama');?>">
                    <?=form_error('nama', '<span class="error invalid-feedback">', '</span>');?>
                </div>
                <div class="form-group">
                    <label for="telp">No Telepon</label>
                    <input type="number" id="telp" name="telp" class="form-control  <?=form_error('telp') ? 'is-invalid' : null;?>" name="telp" id="telp" value="<?=$this->form_validation->set_value('telp');?>">
                    <?=form_error('telp', '<span class="error invalid-feedback">', '</span>');?>
                </div>
                <div class="form-group">
                    <label for="ktp">No Ktp</label>
                    <input type="number" id="ktp" name="ktp" class="form-control  <?=form_error('ktp') ? 'is-invalid' : null;?>" name="ktp" id="ktp" value="<?=$this->form_validation->set_value('ktp');?>">
                    <?=form_error('ktp', '<span class="error invalid-feedback">', '</span>');?>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea id="alamat" name="alamat" class="form-control <?=form_error('alamat') ? 'is-invalid' : null;?>" name="alamat" id="alamat"><?=$this->form_validation->set_value('alamat');?></textarea>
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
