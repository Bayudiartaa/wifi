<script src="<?php echo base_url(); ?>assets/js/ajax.js"></script>

<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold">Pemasangan</h6>
            </div>
            <div class="card-body">
               <div class="mb-4">
                    <a class="btn btn-warning" href="<?=base_url('pemasangan');?>"><i class="fa fa-undo"></i> Kembali</a>
                </div>
                    <div class="form-group">
                    </div>
                    <div class="row">
                     <div class="col-md-6">
                    <div class="form-group">
                        <label for="nama">Nama Pelanggan</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="<?=$row->id;?>">
                        <small class="text-danger"><?= form_error('nama'); ?></small>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label for="telp">Nomor Telepon</label>
                        <input type="number" name="telp" class="form-control" id="telp">
                        <small class="text-danger"><?= form_error('telp'); ?></small>
                    </div>
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="ktp">Nomor KTP</label>
                        <input type="number" name="ktp" class="form-control" id="ktp">
                        <small class="text-danger"><?= form_error('ktp'); ?></small>
                    </div>

                    <div class="form-group">
                        <label>Alamat Pelanggan</label>
                        <textarea name="alamat" class="form-control" rows="10" id="alamat"></textarea>
                        <small class="text-danger"><?= form_error('alamat'); ?></small>
                    </div>

                    <div class="form-group">
                        <label for="tanggal">Tanggal Pemasangan</label>
                        <input type="date"  class="form-control" name="tanggal" required>
                    </div>
                    <div class="form-group">
                        <label for="tarif">Harga</label>
                        <input type="text" id="rupiah1" name="tarif" class="form-control" required>
                        <small class="text-danger"><?= form_error('tarif'); ?></small>
                    </div>
                    <div class="form-group">
                        <label>Alamat Pemasangan</label>
                        <textarea name="alamat_pemasangan" class="form-control" rows="10" required></textarea>
                        <?= form_error('alamat_pemasangan', '<span class="error invalid-feedback">', '</span>'); ?>
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