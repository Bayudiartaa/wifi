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
                        <label for="nama">Nama Pelanggan</label>
                        <input type="text" name="nama" class="form-control <?= form_error('nama') ? 'is-invalid' : null; ?>" id="nama" value="<?=$this->input->post('nama') ?? $row->id;?>">
                        <small class="text-danger"><?= form_error('nama'); ?></small>
                     </div>
                    <div class="form-group">
                        <label for="telp">Nomor Telepon</label>
                        <input type="number" name="telp" class="form-control <?= form_error('telp') ? 'is-invalid' : null; ?>" id="telp" value="<?= $this->input->post('telp') ?? $row->no_telepon;?>">
                        <small class="text-danger"><?= form_error('telp'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="ktp">Nomor KTP</label>
                        <input type="number" name="ktp" class="form-control <?= form_error('ktp') ? 'is-invalid' : null; ?>"  id="ktp" value="<?= $this->input->post('ktp') ?? $row->no_ktp;?>">
                        <small class="text-danger"><?= form_error('ktp'); ?></small>
                    </div>

                    <div class="form-group">
                        <label>Alamat Pelanggan</label>
                        <textarea name="alamat" class="form-control <?= form_error('alamat') ? 'is-invalid' : null; ?>"  id="alamat" value="<?= $this->input->post('alamat') ?? $row->alamat;?>"id="alamat"></textarea>
                        <small class="text-danger"><?= form_error('alamat'); ?></small>
                    </div>

                    <div class="form-group">
                        <label for="tanggal">Tanggal Pemasangan</label>
                        <input type="date"  class="form-control <?= form_error('alamat') ? 'is-invalid' : null; ?>"  id="alamat" value="<?= $this->input->post('alamat') ?? $row->tanggal_pemasangan;?>" name="tanggal">
                    </div>
                    <div class="form-group">
                        <label for="tarif">Harga</label>
                        <input type="text" id="rupiah1" name="tarif" class="form-control <?= form_error('tarif') ? 'is-invalid' : null; ?>"  id="tarif" value="<?= $this->input->post('tarif') ?? $row->tarif;?>">
                        <small class="text-danger"><?= form_error('tarif'); ?></small>
                    </div>
                    <div class="form-group">
                        <label>Alamat Pemasangan</label>
                        <textarea name="alamat_pemasangan" class="form-control <?= form_error('alamat_pemasangan') ? 'is-invalid' : null; ?>"  id="alamat_pemasangan" value="<?= $this->input->post('alamat_pemasangan') ?? $row->alamat_pemasangan;?>"></textarea>
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