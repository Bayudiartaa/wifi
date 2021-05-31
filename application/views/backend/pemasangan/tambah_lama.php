<script src="<?php echo base_url(); ?>assets/js/ajax.js"></script>

<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold">Pemasangan Lama</h6>
            </div>

            <div class="card-body">
                <form action="<?= base_url('add_pemasangan_lama'); ?>" method="post" autocomplete="off">
                    <div class="form-group">
                        <label for="nama_pelanggan">Pilih Nama Pelanggan</label>
                        <select list="data_pelanggan" id="pilih" class="form-control" onchange="return autofill();" required>
                            <option value="">pilih</option>
                            <?php foreach ($pelanggan as $p) { ?>
                                <option value="<?= $p['id'] ?>"><?= $p['nama_pelanggan'] ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="no_tlp">Nama Pelanggan</label>
                        <input type="text" name="nama_pelanggan" class="form-control" id="nama_pelanggan1" readonly>
                        <small class="text-danger"><?= form_error('nama_pelanggan'); ?></small>
                    </div>

                    <div class="form-group">
                        <label for="no_tlp">Nomor Telepon</label>
                        <input type="number" name="no_tlp" class="form-control" id="no_telepon" readonly>
                        <small class="text-danger"><?= form_error('no_tlp'); ?></small>
                    </div>

                    <div class="form-group">
                        <label for="no_ktp">Nomor KTP</label>
                        <input type="number" name="no_ktp" class="form-control" id="no_ktp" readonly>
                        <small class="text-danger"><?= form_error('no_ktp'); ?></small>
                    </div>

                    <div class="form-group">
                        <label>Alamat Pelanggan</label>
                        <textarea name="alamat_pelanggan" class="form-control" rows="10" id="alamat" readonly></textarea>
                        <small class="text-danger"><?= form_error('alamat_pelanggan'); ?></small>
                    </div>

                    <div class="form-group">
                        <label for="nama_pelanggan">Tanggal Pemasangan</label>
                        <input type="date" name="tgl_pemasangan" class="form-control" name="tgl_pemasangan" required>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" id="rupiah1" name="harga" class="form-control" required>
                        <small class="text-danger"><?= form_error('harga'); ?></small>
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


<datalist id="data_pelanggan">
    <?php
    foreach ($pelanggan as $p) {
        echo '<option value="' . $p['id'] . '">' . $p['nama_pelanggan'] . '</option>';
    }
    ?>

</datalist>

<script>
    var selectPelanggan = $('#pilih-pelanggan');

    selectPelanggan.change(() => {
        if(selectPelanggan.val() == 0 ){
            $('#nama_pelanggan1').replaceWith(`

            `)
        }else{
            $('#nama_pelanggan1').replaceWith(`<input type='text' id="nama_pelanggan1" class="form-control">`)
        }
    })




    function autofill() {
        var pilih = document.getElementById('pilih').value;
        $.ajax({
            type: "post",
            url: "<?= base_url('autofill'); ?>",
            data: '&pilih=' + pilih,
            success: function(data) {
                var hasil = JSON.parse(data);
                $.each(hasil, function(key, val) {

                    // document.getElementById('nama_pelanggan').value = '<option value="">' + val.nama_pelanggan + '</option>';
                    document.getElementById('nama_pelanggan1').value = val.nama_pelanggan;
                    document.getElementById('no_telepon').value = val.no_telepon;
                    document.getElementById('no_ktp').value = val.no_ktp;
                    document.getElementById('alamat').value = val.alamat;

                });
            }
        });

    };
</script>