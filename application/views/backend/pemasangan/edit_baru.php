<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold">Pemasangan Baru</h6>
            </div>

            <div class="card-body">
                <?php foreach($tampil as $t){ ?>
                    <form action="<?=base_url('update_pemasangan_baru');?>" method="post">
                        <div class="form-group">
                            <label for="nama_pelanggan">Nama Pelanggan</label>
                            <input type="hidden" name="id_pemasangan" class="form-control" value="<?= $t['id_pemasangan'] ?>">
                            <input type="text" name="nama_pelanggan" class="form-control" value="<?= $t['nama_pelanggan'] ?>" required>
                            <small class="text-danger"><?= form_error('nama_pelanggan'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="nama_pelanggan">Tanggal Pemasangan</label>
                            <input type="date" name="tgl_pemasangan" class="form-control" value="<?= $t['tgl_pemasangan'] ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="no_tlp">Nomor Telepon</label>
                            <input type="number" name="no_tlp" class="form-control" value="<?= $t['no_tlp'] ?>" required>
                            <small class="text-danger"><?= form_error('no_tlp'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="no_ktp">Nomor KTP</label>
                            <input type="number" name="no_ktp" class="form-control" value="<?= $t['no_ktp'] ?>" required>
                            <small class="text-danger"><?= form_error('no_ktp'); ?></small>
                        </div>

                        <div class="form-group">
                            <label>Alamat Pelanggan</label>
                            <textarea name="alamat_pelanggan" class="form-control" rows="10" required><?= $t['alamat_pelanggan'] ?></textarea>
                            <small class="text-danger"><?= form_error('alamat_pelanggan'); ?></small>
                        </div>
                        <div class="form-group">
                                <label for="harga">Harga</label>
                                <input type="text" id="rupiah1" name="harga" class="form-control" value="<?= $t['harga'] ?>" required>
                                <small class="text-danger"><?= form_error('harga'); ?></small>
                        </div>
                        <div class="form-group">
                            <label>Alamat Pemasangan</label>
                            <textarea name="alamat_pemasangan" class="form-control" rows="10" required><?= $t['alamat_pemasangan'] ?></textarea>
                            <?=form_error('alamat_pemasangan', '<span class="error invalid-feedback">', '</span>');?>
                        </div>

                        <div class="form-group text-right">
                            <button type="reset" class="btn btn-danger">Reset</button>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
