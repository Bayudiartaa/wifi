<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold">Edit Deposit</h6>
            </div>
            <div class="card-body">
            <div class="mb-4">
                <a class="btn btn-warning" href="<?=base_url('deposit');?>"><i class="fa fa-undo"></i> Kembali</a>
            </div>
            <form class="form-horizontal" action="" method="post">
                <div class="form-group">
                    <label for="pelanggan">Nama Pelanggan</label>
                    <select name="pelanggan" id="pelanggan" class="form-control select2">
                        <option value=""> -Pilih- </option>
                        <?php foreach ($pelanggan as $cus => $data): ?>
                            <option value="<?=$data->id;?>" <?=$data->id == $row->id_pelanggan ? 'selected' : null;?>><?=$data->nama_pelanggan;?></option>
                        <?php endforeach;?>
                    </select>    
                    <?=form_error('pelanggan', '<span class="error invalid-feedback">', '</span>');?>
                </div>
                <div class="form-group">
                    <label for="jumlah">Jumlah Deposit</label>
                    <input type="text"  name="jumlah" id="rupiah1" class="form-control  <?=form_error('jumlah') ? 'is-invalid' : null;?>" name="jumlah" id="jumlah"  value="<?= $this->input->post('jumlah') ?? $row->jumlah_deposit;?> ">
                    <?= form_error('jumlah', '<small class="text-danger pl-3 ">', '</small>') ?>
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