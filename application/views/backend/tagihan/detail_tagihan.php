<div class="row">
  <div class="col-12">
    <?=$this->session->flashdata('pesan');?>
      <div class="card">
       <div class="card-body">
            <table class="col-md-6">
                <tr style="font-size:200%;">
                    <th>Nama Pelanggan</th>
                    <th>:</th>
                    <td><?= $tampilRow->nama_pelanggan ?></td>
                </tr>

                <tr style="font-size:200%;">
                    <th>No Telepon</th>
                    <th>:</th>
                    <td><?= $tampilRow->no_tlp ?></td>
                </tr>

                <tr style="font-size:200%;">
                    <th>No Ktp</th>
                    <th>:</th>
                    <td><?= $tampilRow->no_ktp ?></td>
                </tr>

                <tr style="font-size:200%;">
                    <th>Alamat</th>
                    <th>:</th>
                    <td><?= $tampilRow->alamat_pelanggan ?></td>
                </tr>
                
            </table>
        </div>
    </div>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nomor Pemasangan</th>
                                <th>Tarif per bulan</th>
                                <th>Tagihan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                               foreach($tampilResult as $t){?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $t['nama_pelanggan'] ?></td>
                                    <td><?= $t['harga'] ?></td>
                                    <td><?= $t['bayar'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

