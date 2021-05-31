<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold">Tambah Pengguna</h6>
            </div>
            <div class="card-body">
            <div class="mb-4">
                <a class="btn btn-warning" href="<?=base_url('user');?>"><i class="fa fa-undo"></i> Kembali</a>
            </div>
            <form class="form-horizontal" action="<?=base_url('user/add');?>" method="post">
                <div class="form-group">
                    <label for="nama">Username</label>
                    <input type="text" class="form-control <?=form_error('nama') ? 'is-invalid' : null;?>" name="nama" id="nama" value="<?=$this->form_validation->set_value('nama');?>">
                    <?=form_error('nama', '<span class="error invalid-feedback">', '</span>');?>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control <?=form_error('password') ? 'is-invalid' : null;?>" name="password" id="password" autocomplete="off">
                    <?=form_error('password', '<span class="error invalid-feedback">', '</span>');?>
                </div>
                <div class="form-group">
                    <label for="password2">Konfirmasi Password</label>
                    <input type="password" class="form-control <?=form_error('password2') ? 'is-invalid' : null;?>" name="password2" id="password2" autocomplete="off">
                    <?=form_error('password2', '<span class="error invalid-feedback">', '</span>');?>
                </div>
                <div class="text-right">
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
               </form>
            </div>
        </div>
    </div>
</div>