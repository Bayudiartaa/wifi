<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold">Tambah Deposit</h6>
            </div>
            <div class="card-body">
            <div class="mb-4">
                <a class="btn btn-warning" href="<?=base_url('deposit');?>"><i class="fa fa-undo"></i> Kembali</a>
            </div>
            <form class="form-horizontal" action="<?=base_url('deposit/add');?>" method="post">
                <div class="form-group">
                    <label for="pelanggan">Nama Pelanggan</label>
                    <select name="pelanggan" id="pelanggan" class="form-control select2">
                        <option value=""> -Pilih- </option>
                        <?php foreach ($pelanggan as $cus => $data): ?>
                            <option value="<?=$data->id;?>"><?=$data->nama_pelanggan;?></option>
                        <?php endforeach;?>
                    </select>    
                    <?=form_error('pelanggan', '<span class="error invalid-feedback">', '</span>');?>
                </div>
                <div class="form-group">
                    <label for="telp">Jumlah Deposit</label>
                    <input type="text" id="rupiah1" name="jumlah" class="form-control  <?=form_error('jumlah') ? 'is-invalid' : null;?>" name="jumlah" id="jumlah" value="<?=$this->form_validation->set_value('jumlah');?>">
                    <?=form_error('jumlah', '<span class="error invalid-feedback">', '</span>');?>
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

